<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Hotel
 * @desc 酒店总控制器
 */
class Controller_Mobile_Hotel extends Stourweb_Controller
{
    private $_typeid = 2;   //产品类型
    private $_cache_key = '';

    public function before()
    {
        parent::before();
        $this->_cache_key = Common::get_current_url();
        $html = Common::cache('get', $this->_cache_key);
        $genpage = intval(Arr::get($_GET, 'genpage'));
        if (!empty($html) && empty($genpage))
        {
            echo $html;
            exit;
        }
        $channelname = Model_Nav::get_channel_name_mobile($this->_typeid);
        $this->assign('typeid', $this->_typeid);
        $this->assign('channelname', $channelname);
    }

    /**
     * 酒店首页
     */
    public function action_index()
    {
        $seoinfo = Model_Nav::get_channel_seo_mobile($this->_typeid);
        $this->assign('seoinfo', $seoinfo);
        $this->display('../mobile/hotel/index','hotel_index');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    public function action_map()
    {
        $id = intval($_GET['id']);
        $info = DB::select()->from('hotel')->where('id', '=', $id)->execute()->current();
        $seoinfo = array('seotitle' => $info['title']);
        $this->assign('info', $info);
        $this->assign('seoinfo', $seoinfo);
        $this->display('../mobile/hotel/map');
    }

    public function action_mapnear()
    {
        $seoinfo = array('seotitle' => '附近酒店');
        $this->assign('seoinfo', $seoinfo);
        $this->display('../mobile/hotel/mapnear');
    }

    /*
     * 酒店搜索页(搜索初始页)
     */
    public function action_search()
    {
        $this->display('../mobile/hotel/search');
    }

    /*
     * 酒店搜索列表页
     * */
    public function action_list()
    {
        //参数处理
        $urlParam = $this->request->param('params');
        $destPy = 'all';
        $destId = $rankId = $priceId = $sortType = $keyword = $attrId = 0;
        $params = explode('-', str_replace('/', '-', $urlParam));
        $count = count($params);
        switch ($count)
        {
            //目的地
            case 1:
                list($destPy) = $params;
                break;
            //关键字、属性
            case 7:
                list($destPy, $rankId, $priceId, $sortType, $keyword, $attrId, $page) = $params;
                break;
        }
        $keyword = Arr::get($_GET, 'keyword');
        $page = $page < 1 ? 1 : intval($page);
        $destname = $destPy != 'all' ? ORM::factory('destinations')->where('pinyin', '=', $destPy)->find()->get('kindname') : '目的地';
        //获取seo信息
        $seo = Model_Hotel::search_seo_mobile($destPy, 2);
        $this->assign('seoinfo', $seo);
        $this->assign('destpy', Common::remove_xss($destPy));
        $this->assign('destname', $destname);
        $this->assign('rankid', Common::remove_xss($rankId));
        $this->assign('sorttype', Common::remove_xss($sortType));
        $this->assign('keyword', Common::remove_xss($keyword));
        $this->assign('attrid', Common::remove_xss($attrId));
        $this->assign('priceid', Common::remove_xss($priceId));
        $this->assign('page', $page);
        $this->display('../mobile/hotel/list','hotel_list');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    /*
     * 酒店详细页
     */
    public function action_show()
    {
        $aid = intval($this->request->param('aid'));
        //子站内容显示
        if (isset($_GET['webid']))
        {
            $GLOBALS['sys_webid'] = intval(Arr::get($_GET, 'webid'));
        }
        $info = DB::select()->from('hotel')->where('webid', '=', $GLOBALS['sys_webid'])->and_where('aid', '=', $aid)->execute()->current();
        //扩展字段信息
        $extend_info = DB::select()->from('hotel_extend_field')->where('productid', '=', $info['id'])->execute()->as_array();
        //点击率加一
        Product::update_click_rate($aid, $this->_typeid);
        $seoinfo = Product::seo($info);
        $info['piclist'] = Product::pic_list($info['piclist']);
        $info['price'] = Model_Hotel::get_minprice($info['id'], array('info',$info));
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->_typeid); //评论次数
        $info['satisfyscore'] = Model_Comment::get_score($info['id'], $this->_typeid, $info['satisfyscore'], $info['commentnum']);//满意度
        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->_typeid) + intval($info['bookcount']); //销售数量
        $info['hotelrank'] = ORM::factory('hotel_rank', $info['hotelrankid'])->get('hotelrank');
        $this->assign('seoinfo', $seoinfo);
        $this->assign('info', $info);
        $this->assign('extendinfo', $extend_info);
        $this->display('../mobile/hotel/show','hotel_show');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    /*
     * 酒店预订页
     * */
    public function action_book()
    {
        $userinfo = Common::session('member');
        //要求预订前必须登陆
        if (!empty($GLOBALS['cfg_login_order']) && empty($userinfo['mid']))
        {
            $this->request->redirect(Common::get_main_host() . '/phone/member/login?redirecturl=' . urlencode(Common::get_current_url()));
        }
        $productid = intval($this->params['id']);
        $info = DB::select()->from('hotel')->where('id', '=', $productid)->execute()->current();
        $info['price'] = Model_Hotel::get_minprice($info['id'], array('info'=>$info));
        $this->assign('info', $info);
        $this->assign('userinfo', $userinfo);
        $member = Common::session('member');
        if (!empty($member))
        {
            $this->assign('member', Model_Member::get_member_byid($member['mid']));
        }
        $this->display('../mobile/hotel/book');
    }

    /*
     * 创建订单
     * */
    public function action_create()
    {
        $refer_url = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : $this->cmsurl;
        //套餐id
        $suitid = intval(Arr::get($_POST, 'suitid'));
        //联系人
        $linkman = common::remove_xss(Arr::get($_POST, 'linkman'));
        //手机号
        $linktel = common::remove_xss(Arr::get($_POST, 'linktel'));
        $linkidcard = common::remove_xss(Arr::get($_POST, 'linkidcard'));
        //备注信息
        $remark = common::remove_xss(Arr::get($_POST, 'remark'));
        //产品id
        $id = intval(Arr::get($_POST, 'productid'));
        //入住时间
        $startdate = Arr::get($_POST, 'startdate');
        //离店时间
        $leavedate = Arr::get($_POST, 'leavedate');
        //预订房间数
        $dingnum = intval(Arr::get($_POST, 'dingnum'));
        //验证部分
        $validataion = Validation::factory($_POST);
        $validataion->rule('linktel', 'not_empty');
        $validataion->rule('linktel', 'phone');
        $validataion->rule('linkman', 'not_empty');
        if (!$validataion->check())
        {
            $error = $validataion->errors();
            $keys = array_keys($validataion->errors());
            Common::message(array('message' => __("error_{$keys[0]}_{$error[$keys[0]][0]}"), 'jumpUrl' => $refer_url));
        }
        $info = ORM::factory('hotel')->where('id', '=', $id)->find()->as_array();
        $suitArr = ORM::factory('hotel_room')->where('id', '=', $suitid)->find()->as_array();
        $suitArr['dingjin'] = Currency_Tool::price($suitArr['dingjin']);
        $suitPrice = Model_Hotel::suit_range_price($suitid, $startdate, $leavedate, $dingnum);
        if ($suitArr['paytype'] == '3')//这里补充一个当为二次确认时,修改订单为未处理状态.
        {
            $info['status'] = 0;
        }
        else
        {
            $info['status'] = 1;
        }
        $info['name'] = $info['title'] . "({$suitArr['roomname']})";
        $info['paytype'] = $suitArr['paytype'];
        $info['dingjin'] = doubleval($suitArr['dingjin']);
        $info['jifentprice'] = intval($suitArr['jifentprice']);
        $info['jifenbook'] = intval($suitArr['jifenbook']);
        $info['jifencomment'] = intval($suitArr['jifencomment']);
        $info['ourprice'] = doubleval($suitPrice);
        $info['childprice'] = 0;
        $info['usedate'] = $startdate;
        $info['departdate'] = $leavedate;
        $ordersn = Product::get_ordersn('02');
        $arr = array(
            'ordersn' => $ordersn,
            'webid' => 0,
            'typeid' => $this->_typeid,
            'productautoid' => $id,
            'productaid' => $info['aid'],
            'productname' => $info['name'],
            'litpic' => $info['litpic'],
            'price' => $info['ourprice'],
            'childprice' => $info['childprice'],
            'jifentprice' => $info['jifentprice'],
            'jifenbook' => $info['jifenbook'],
            'jifencomment' => $info['jifencomment'],
            'paytype' => $info['paytype'],
            'dingjin' => $info['dingjin'],
            'usedate' => $info['usedate'],
            'departdate' => $info['departdate'],
            'addtime' => time(),
            'memberid' => null,
            'dingnum' => $dingnum,
            'childnum' => 0,
            'oldprice' => 0,
            'oldnum' => 0,
            'linkman' => $linkman,
            'linktel' => $linktel,
            'linkidcard' => $linkidcard,
            'suitid' => $suitid,
            'remark' => $remark,
            'status' => $info['status'] ? $info['status'] : 0,
            'usejifen' => $_POST['usejifen'] != 0 ? 1 : 0 //积分抵现
        );


        /*--------------------------------------------------------------优惠券信息------------------------------------------------------------*/
        //优惠券判断
        $croleid = intval(Arr::get($_POST, 'couponid'));
        if($croleid)
        {
            $cid = DB::select('cid')->from('member_coupon')->where("id=$croleid")->execute()->current();
            $totalprice = Model_Coupon::get_order_totalprice($arr);
            $ischeck =  Model_Coupon::check_samount($croleid,$totalprice,1,$info['id']);
            if($ischeck['status']==1)
            {
                Model_Coupon::add_coupon_order($cid,$ordersn,$totalprice,$ischeck,$croleid); //添加订单优惠券信息
            }
            else
            {
                exit('coupon  verification failed!');//优惠券不满足条件
            }
        }
        /*-----------------------------------------------------------------优惠券信息--------------------------------------*/


        //添加订单
        if (St_Product::add_order($arr,'Model_Hotel',$arr))
        {
            $sql = "SELECT id FROM `sline_member_order` WHERE ordersn='$ordersn'";
            $ar = DB::query(1, $sql)->execute()->as_array();
            if ($info['status'] == 1)
            {
                $html = Common::payment_from(array('ordersn' => $ordersn));
                if ($html)
                {
                    echo $html;
                }
            }
            else
            {
                $url = Common::get_web_url($info['webid']) . '/pub/paystatus/?sign=13';
                $this->request->redirect($url);
            }
        }
    }

    /**
     * ajax请求 加载更多
     */
    public function action_ajax_hotel_more()
    {
        $urlParam = $this->request->param('params');
        $keyword = Arr::get($_GET, 'keyword') ? Arr::get($_GET, 'keyword') : '';
        $data = Model_Hotel::search_result_mobile($urlParam, $keyword);
        echo($data);
    }

    public function action_ajax_near_hotels()
    {
        $lat = floatval($_POST['lat']);
        $lng = floatval($_POST['lng']);
        $maxDistance = 3000;
        $sql = "select id,aid,webid,title,price,address,lng,lat,ROUND(6378.138*2*ASIN(SQRT(POW(SIN((" . $lat . "*PI()/180-lat*PI()/180)/2),2)+COS(" . $lat . "*PI()/180)*COS(lat*PI()/180)*POW(SIN((" . $lng . "*PI()/180-lng*PI()/180)/2),2))))  AS distance from sline_hotel where ROUND(6378.138*2*ASIN(SQRT(POW(SIN((" . $lat . "*PI()/180-lat*PI()/180)/2),2)+COS(" . $lat . "*PI()/180)*COS(lat*PI()/180)*POW(SIN((" . $lng . "*PI()/180-lng*PI()/180)/2),2))))<" . $maxDistance . " and  lat is not null and lng is not null order by distance asc";
        $list = DB::query(Database::SELECT, $sql)->execute()->as_array();
        foreach ($list as &$row)
        {
            $row['url'] = Common::get_web_url($row['webid']) . "/hotels/show_{$row['aid']}.html";
        }
        echo json_encode(array('status' => true, 'data' => $list));
    }

    /*
     * 获取房型进店和离店日期价格
     * */
    public function action_ajax_range_price()
    {
        $startdate = Arr::get($_GET, 'startdate');
        $enddate = Arr::get($_GET, 'leavedate');
        $suitid = intval(Arr::get($_GET, 'suitid'));
        $dingnum = intval(Arr::get($_GET, 'dingnum'));
        $price = Model_Hotel::suit_range_price($suitid, $startdate, $enddate, $dingnum);
        $price = $price * $dingnum;
        echo json_encode(array('price' => $price));
    }

    /**
     *
     * 获取套餐可预订的最小日期.
     *
     */
    public function action_ajax_mindate_book()
    {
        $suitid = Arr::get($_GET, 'suitid');
        $day = Model_Hotel::suit_mindate_book($suitid);
        echo json_encode(array(
            'startdate' => date('Y-m-d', $day),
            'enddate' => date('Y-m-d', strtotime("+1 day", $day))
        ));
    }

    /**
     *
     * 检测库存是否能够预订
     */
    public function action_ajax_check_storage()
    {
        $startdate = Arr::get($_POST, 'startdate');
        $enddate = Arr::get($_POST, 'enddate');
        $dingnum = intval(Arr::get($_POST, 'dingnum'));
        $suitid = intval(Arr::get($_POST, 'suitid'));
        $flag = Model_Hotel::check_suit_storage($suitid, $startdate, $enddate, $dingnum);
        echo json_encode(array('status' => $flag));
    }
}