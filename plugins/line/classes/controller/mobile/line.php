<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Line
 * 线路控制器
 */

class Controller_Mobile_Line extends Stourweb_Controller
{
    private $_typeid = 1;   //产品类型
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
     * 线路首页
     */
    public function action_index()
    {
        $seoinfo = Model_Nav::get_channel_seo_mobile($this->_typeid);
        $this->assign('seoinfo', $seoinfo);
        $this->display('../mobile/line/index','line_index');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    /**
     * 线路搜索页
     */
    public function action_list()
    {
        //参数处理
        $urlParam = $this->request->param('params');
        $destPy = 'all';
        $dayId = $priceId = $sortType = $keyword = $attrId = $startcityId = 0;
        $params = explode('-', str_replace('/', '-', $urlParam));
        $count = count($params);
        switch ($count)
        {
            //目的地
            case 1:
                list($destPy) = $params;
                break;
            //关键字、属性
            case 8:
                list($destPy, $dayId, $priceId, $sortType, $keyword, $startcityId, $attrId, $page) = $params;
                break;
        }

        $keyword = Arr::get($_GET, 'keyword');
        $keyword = Common::remove_xss($keyword);
        $page = $page < 1 ? 1 : $page;

        $destname = $destPy != 'all' ? DB::select('kindname')->from('destinations')->where('pinyin', '=', $destPy)->execute()->get('kindname') : '目的地';
        $destid = $destPy != 'all' ? DB::select('id')->from('destinations')->where('pinyin', '=', $destPy)->execute()->get('id') : 0;
        $startcityname = $startcityId != 0 ? DB::select('cityname')->from('startplace')->where('id', '=', $startcityId)->execute()->get('cityname') : '出发地';
        //出发地
        $startcitylist = self:: _get_startcity();
        $this->assign('startcitylist', $startcitylist);

        //获取seo信息
        $seo = Model_Line::search_seo_mobile($destPy);

        $this->assign('seoinfo', $seo);
        $this->assign('destpy', Common::remove_xss($destPy));
        $this->assign('destname', $destname);
        $this->assign('destid', $destid);
        $this->assign('dayid', intval($dayId));
        $this->assign('sorttype', intval($sortType));
        $this->assign('keyword', Common::remove_xss($keyword));
        $this->assign('attrid', Common::remove_xss($attrId));
        $this->assign('startcityid', intval($startcityId));
        $this->assign('startcityname', Common::remove_xss($startcityname));
        $this->assign('priceid', intval($priceId));
        $this->assign('page', $page);
        $this->display('../mobile/line/list','line_list');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    /**
     * 线路搜索页(搜索初始页)
     */
    public function action_search()
    {
        $this->display('../mobile/line/search');
    }

    /**
     * 线路预订
     */
    public function action_book()
    {
        $userinfo = Common::session('member');
        //要求预订前必须登陆
        if (!empty($GLOBALS['cfg_login_order']) && empty($userinfo['mid']))
        {
            $this->request->redirect(Common::get_main_host() . '/phone/member/login?redirecturl=' . urlencode(Common::get_current_url()));
        }
        $productid = $this->params['id'];
        $info = ORM::factory('line', $productid)->as_array();
        $info['price'] = Model_Line::get_minprice($info['id'], array('info' => $info));
        $this->assign('info', $info);
        $this->assign('userinfo', $userinfo);
        $member = Common::session('member');
        if (!empty($member))
        {
            $this->assign('member', Model_Member::get_member_byid($member['mid']));
        }
        $this->display('../mobile/line/book');
    }

    /**
     * 创建订单
     */
    public function action_create()
    {
        $refer_url = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : $this->cmsurl;
        //套餐id
        $suitid = Arr::get($_POST, 'suitid');
        //联系人
        $linkman = Arr::get($_POST, 'linkman');
        //手机号
        $linktel = Arr::get($_POST, 'linktel');
        $linkidcard = Arr::get($_POST, 'linkidcard');
        //备注信息
        $remark = Arr::get($_POST, 'remark');
        //产品id
        $id = Arr::get($_POST, 'productid');
        //出行时间
        $startdate = Arr::get($_POST, 'startdate');


        //成人数量
        $dingnum = Arr::get($_POST, 'dingnum');
        //小孩数量
        $childnum = Arr::get($_POST, 'childnum');
        //老人数量
        $oldnum = Arr::get($_POST, 'oldnum');


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

        $info = ORM::factory('line')->where("id=$id")->find()->as_array();
        $suitArr = ORM::factory('line_suit')
            ->where("id=:suitid")
            ->param(':suitid', $suitid)
            ->find()
            ->as_array();
        $suitArr['dingjin'] = Currency_Tool::price($suitArr['dingjin']);
        $priceArr = DB::select()->from('line_suit_price')->where('day', '=', strtotime($startdate))->and_where('suitid', '=', $suitid)->execute()->current();

        $priceArr['adultprice'] = Currency_Tool::price($priceArr['adultprice']);
        $priceArr['childprice'] = Currency_Tool::price($priceArr['childprice']);
        $priceArr['oldprice'] = Currency_Tool::price($priceArr['oldprice']);

        //库存判断
        $totalnum = $dingnum + $childnum + $oldnum;
        $storage = intval($priceArr['number']);
        if ($storage != -1 && $storage < $totalnum)
        {
            Common::message(array('message' => __("error_no_storage"), 'jumpUrl' => $refer_url));
            exit;
        }
        if ($suitArr['paytype'] == '3')//这里补充一个当为二次确认时,修改订单为未处理状态.
        {
            $info['status'] = 0;
        }
        else
        {
            $info['status'] = 1;
        }
        $info['name'] = $info['title'] . "({$suitArr['suitname']})";
        $info['paytype'] = $suitArr['paytype'];
        $info['dingjin'] = doubleval($suitArr['dingjin']);
        $info['jifentprice'] = intval($suitArr['jifentprice']);
        $info['jifenbook'] = intval($suitArr['jifenbook']);
        $info['jifencomment'] = intval($suitArr['jifencomment']);
        $info['ourprice'] = doubleval($priceArr['adultprice']);
        $info['childprice'] = doubleval($priceArr['childprice']);
        $info['oldprice'] = doubleval($priceArr['oldprice']);
        $info['usedate'] = $startdate;
        $ordersn = Product::get_ordersn('01');
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
            'childnum' => $childnum,
            'oldprice' => $info['oldprice'],
            'oldnum' => $oldnum,
            'linkman' => $linkman,
            'linktel' => $linktel,
            'linkidcard' => $linkidcard,
            'suitid' => $suitid,
            'remark' => $remark,
            'status' => $info['status'] ? $info['status'] : 0,
            'usejifen' => $_POST['usejifen'] != 0 ? 1 : 0, //积分抵现
            'roombalance' => $priceArr['roombalance'],
            'roombalancenum' => intval($_POST['roombalancenum']),
            'roombalance_paytype' => intval($_POST['roombalance_paytype'])
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
        if (St_Product::add_order($arr,'Model_Line',$arr))
        {
            $orderInfo = Model_Member_Order::get_order_by_ordersn($ordersn);
            Model_Member_Order::add_tourer($orderInfo['id'], $_POST);
            //如果是立即支付则执行支付操作,否则跳转到产品详情页面
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
     * 线路内容页
     */
    public function action_show()
    {
        $id = intval($this->request->param('aid'));
        //子站内容显示
        if (isset($_GET['webid']))
        {
            $GLOBALS['sys_webid'] = intval(Arr::get($_GET, 'webid'));
        }
        //线路详情
        $info = Model_Line::detail($id);
        //点击率加一
        Product::update_click_rate($id, $this->_typeid);
        //seo
        $seoInfo = Product::seo($info);
        //产品图片
        $info['piclist'] = Product::pic_list($info['piclist']);
        //属性列表
        $info['attrlist'] = Model_Line::line_attr($info['attrid']);
        //最低价
        $info['price'] = Model_Line::get_minprice($info['id'], array('info', $info));
        //出发城市
        $info['startcity'] = Model_Startplace::start_city($info['startcity']);
        //行程附件
        // $info['linedoc'] = unserialize($info['linedoc']);
        //点评数
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->_typeid);
        //满意度
        $info['satisfyscore'] = St_Functions::get_satisfy($this->_typeid,$info['id'],$info['satisfyscore']);
        //销售数量
        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->_typeid) + intval($info['bookcount']);
        //产品编号
        $info['lineseries'] = St_Product::product_series($info['id'], 1);
        $this->assign('seoinfo', $seoInfo);
        $this->assign('info', $info);
        $this->display('../mobile/line/show','line_show');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }


    /**
     * 获取套餐人群
     */
    public function action_ajax_suit_people()
    {
        $out = array();
        $suitid = intval(Arr::get($_GET, 'suitid'));
        $row = ORM::factory('line_suit', $suitid)->as_array();
        $group_arr = explode(',', $row['propgroup']);

        //获取最接近当前日期的报价
        $day = time();
        $ar = Model_Line_Suit_Price::get_price_byday($suitid, $day);
        if ($ar)
        {

            $out['useday'] = date('Y-m-d', $ar[0]['day']);//当前使用日期.
            $out['storage'] = $ar[0]['number'];//库存

        }


        if (in_array(1, $group_arr))
        {
            $out['haschild'] = 1;
            $out['childprice'] = $ar[0]['childprice'] ? $ar[0]['childprice'] : 0;
        }
        if (in_array(2, $group_arr))
        {
            $out['hasadult'] = 1;
            $out['adultprice'] = $ar[0]['adultprice'] ? $ar[0]['adultprice'] : 0;
        }
        if (in_array(3, $group_arr))
        {
            $out['hasold'] = 1;
            $out['oldprice'] = $ar[0]['oldprice'] ? $ar[0]['oldprice'] : 0;
        }
        echo json_encode($out);
    }

    /**
     * 按天获取报价与库存.
     */
    public static function action_ajax_price_day()
    {
        $useday = strtotime(Arr::get($_GET, 'useday'));
        $suitid = intval(Arr::get($_GET, 'suitid'));
        $ar = Model_Line_Suit_Price::get_price_byday($suitid, $useday);
        echo json_encode($ar[0]);
    }

    /**
     * ajax请求 加载更多
     */
    public function action_ajax_line_more()
    {
        $urlParam = $this->request->param('params');
        $keyword = Arr::get($_GET, 'keyword') ? Arr::get($_GET, 'keyword') : '';
        $keyword = Common::remove_xss($keyword);
        $data = Model_Line::search_result_mobile($urlParam, $keyword);
        echo($data);
    }

    /**
     * 获取下级出发地
     */
    private function _get_startcity()
    {

        //获取下级出发地
        $result = DB::select('id', 'cityname')->from('startplace')->where('pid', '!=', 0)->and_where('isopen', '=', 1)->order_by(displayorder)->execute()->as_array();
        return $result;
    }

}