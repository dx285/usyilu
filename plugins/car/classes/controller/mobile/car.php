<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Car
 * 租车控制器
 */
class Controller_Mobile_Car extends Stourweb_Controller
{
    private $_typeid = 3;   //产品类型
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
     * 租车首页
     */
    public function action_index()
    {
        $seoinfo = Model_Nav::get_channel_seo_mobile($this->_typeid);
        $this->assign('seoinfo', $seoinfo);
        $this->display('../mobile/car/index','car_index');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    /**
     * 租车搜索页(搜索初始页)
     */
    public function action_search()
    {
        $this->display('../mobile/car/search');
    }

    /**
     * 租车列表
     */
    public function action_list()
    {
        $uri = $this->request->param('params');
        $uriArr = $this->_explode_url($uri);
        $destname = $uriArr['destPy'] != 'all' ? DB::select('kindname')->from('destinations')->where('pinyin','=',$uriArr['destPy'])->execute()->get('kindname') : '目的地';
        //获取seo信息
        $seo = Model_Car::search_seo_mobile($uriArr['destPy']);
        $this->assign('seoinfo', $seo);
        $this->assign('destname', $destname);
        $this->assign('destpy', $uriArr['destPy']);
        $this->assign('attrid', $uriArr['attrid']);
        $this->assign('kindid', intval($uriArr['kindid']));
        $this->assign('sorttype', intval($uriArr['sorttype']));
        $this->assign('keyword', $uriArr['keyword']);
        $this->assign('page', intval($uriArr['page']));
        $this->display('../mobile/car/list','car_list');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    /**
     * ajax请求 加载更多
     */
    public function action_ajax_car_more()
    {
        $uri = $this->request->param('params');
        $uriArr = $this->_explode_url($uri);
        $data = Model_Car::search_result_mobile($uriArr);
        echo($data);
    }

    /**
     * 分隔URL参数
     * @return mixed
     */
    private function _explode_url($uri)
    {
        $params = explode('-', str_replace('/', '-', Common::remove_xss($uri)));
        $data['kindid'] = $data['sorttype'] = $data['attrid'] = 0;
        $count = count($params);
        if ($count == 0)
        {
            exit;
        }
        switch ($count)
        {
            case 1:
                $data['status'] = $data['attrId'] = 0;
                list($data['destPy']) = $params;
                break;
            //关键字、属性
            case 4:
                list($data['destPy'], $data['kindid'], $data['sorttype'], $data['attrid']) = $params;
                break;
            //关键字、属性
            case 5:
                list($data['destPy'], $data['kindid'], $data['sorttype'], $data['attrid'], $data['page']) = $params;
                break;
        }
        //分页
        $data['page'] = empty($data['page']) ? 1 : $data['page'];
        //关键字
        $data['keyword'] = empty($_GET['keyword']) ? '' : $_GET['keyword'];
        return $data;
    }

    /**
     * 租车详情页
     */
    public function action_show()
    {
        $aid = intval($this->request->param('aid'));
        //子站内容显示
        if (isset($_GET['webid']))
        {
            $GLOBALS['sys_webid'] = intval(Arr::get($_GET, 'webid'));
        }

        $info = DB::select()->from('car')->where('webid','=',$GLOBALS['sys_webid'])->and_where('aid','=',$aid)->execute()->current();
        //扩展字段信息
        $extend_info = DB::select()->from('car_extend_field')->where('productid','=',$info['id'])->execute()->current();


        //点击率加一
        Product::update_click_rate($aid, $this->_typeid);

        $seoinfo = Product::seo($info);
        $info['piclist'] = Product::pic_list($info['piclist']);
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->_typeid); //评论次数
        $info['satisfyscore'] = St_Functions::get_satisfy($this->_typeid,$info['id'],$info['satisfyscore'],array('suffix'=>''));//Model_Comment::get_score($info['id'], $this->_typeid, $info['satisfyscore'], $info['commentnum']);//满意度
        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->_typeid) + intval($info['bookcount']); //销售数量
        $info['carkindname'] = Model_Car_Kind::get_carkindname($info['carkindid']);
        $info['attrlist'] = Model_Car_attr::get_attr_list($info['attrid']);
        $info['price'] = Model_Car::get_minprice($info['aid'], array('info'=>$info));
        $this->assign('seoinfo', $seoinfo);
        $this->assign('info', $info);
        $this->assign('extendinfo', $extend_info);
        $this->display('../mobile/car/show','car_show');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    /**
     * 租车预订页
     */
    public function action_book()
    {

        echo("<script>console.log(\"手机预定后台 \")</script>");

        $userinfo = Common::session('member');
        //要求预订前必须登陆
        if (!empty($GLOBALS['cfg_login_order']) && empty($userinfo['mid']))
        {
            $this->request->redirect(Common::get_main_host().'/phone/member/login?redirecturl=' . urlencode(Common::get_current_url()));
        }
        $productid = intval($this->params['id']);
        //$info = ORM::factory('car', $productid)->as_array();
        $info = DB::select()->from('car')->where('id','=',$productid)->execute()->current();
        $info['price'] = Model_Car::get_minprice($info['aid'], array('info'=>$info));
        $this->assign('info', $info);
        $this->assign('userinfo', $userinfo);
        $member = Common::session('member');
        if (!empty($member))
        {
            $this->assign('member', Model_Member::get_member_byid($member['mid']));
        }
        $this->display('../mobile/car/book');
    }

    /**
     * 获取租车开始和结束日期价格
     */
    public function action_ajax_range_price()
    {
        $startdate = Arr::get($_GET, 'startdate');
        $enddate = Arr::get($_GET, 'leavedate');
        $suitid = intval(Arr::get($_GET, 'suitid'));
        $dingnum = intval(Arr::get($_GET, 'dingnum'));
        $price = Model_Car::suit_range_price($suitid, $startdate, $enddate, $dingnum);
        echo json_encode(array('price' => $price));
    }

    /**
     * 获取套餐可预订的最小日期.
     */
    public function action_ajax_mindate_book()
    {
        $suitid = intval(Arr::get($_GET, 'suitid'));
        $day = Model_Car::suit_mindate_book($suitid);

        echo json_encode(array(
            'startdate' => date('Y-m-d', $day),
            'enddate' => date('Y-m-d', strtotime("+1 day", $day))
        ));
    }

    /**
     * 创建订单
     */
    public function action_create()
    {
        $refer_url = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : $this->cmsurl;
        //套餐id
        $suitid = intval(Arr::get($_POST, 'suitid'));
        //联系人
        $linkman = Arr::get($_POST, 'linkman');
        //手机号
        $linktel = Arr::get($_POST, 'linktel');
        $linkidcard = Arr::get($_POST, 'linkidcard');
        //备注信息
        $remark = Arr::get($_POST, 'remark');
        //产品id
        $id = intval(Arr::get($_POST, 'productid'));
        //开始时间
        $startdate = Arr::get($_POST, 'startdate');
        //结束时间
        $leavedate = Arr::get($_POST, 'leavedate');
        //数量
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


        $info = DB::select()->from('car')->where('id','=',$id)->execute()->current();
        $suitArr = DB::select()->from('car_suit')->where('id','=',$suitid)->execute()->current();
        $suitArr['dingjin'] = Currency_Tool::price($suitArr['dingjin']);
        $priceArr = DB::select()->from('car_suit_price')->where('day','=',strtotime($startdate))->and_where('suitid','=',$suitid)->execute()->current();
        $priceArr['adultprice'] = Currency_Tool::price($priceArr['adultprice']);
        //检测库存
        $totalnum = $dingnum;
        $storage = intval($priceArr['number']);
        if ($storage != -1 && $storage < $totalnum)
        {
            Common::message(array('message' => __("error_no_storage"), 'jumpUrl' => $refer_url));
            exit;
        }
        //这里补充一个当为二次确认时,修改订单为未处理状态.
        if ($suitArr['paytype'] == '3')
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
				
		//使用天数计算
        $date1 = new DateTime($startdate);
        $date2 = new DateTime($leavedate);
        $interval = date_diff($date1, $date2);
        $days = $interval->format('%a');

        $priceArr['adultprice'] = $priceArr['adultprice'] * (intval($days) + 1);

        $info['ourprice'] = doubleval($priceArr['adultprice']);
        $info['childprice'] = 0;
        $info['usedate'] = $startdate;
        $info['departdate'] = $leavedate;
        $ordersn = Product::get_ordersn('03');
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
        if (St_Product::add_order($arr, 'Model_Car',$arr))
        {
           // $orderInfo = Model_Member_Order::get_order_by_ordersn($ordersn);//var_dump($orderInfo);
            if ($info['status'] == 1)
            {
                Common::session('_platform', 'mobile');
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
}