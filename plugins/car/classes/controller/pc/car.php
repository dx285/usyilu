<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pc_Car extends Stourweb_Controller
{
    /*
     * 租车总控制器
     * */

    private $_typeid = 3;
    private $_cache_key = '';
    public function before()
    {
        parent::before();
        //检查缓存
        $this->_cache_key = Common::get_current_url();
        $html = Common::cache('get', $this->_cache_key);
        $genpage = intval(Arr::get($_GET, 'genpage'));
        if (!empty($html) && empty($genpage))
        {
            echo $html;
            exit;
        }
        $channelname = Model_Nav::get_channel_name($this->_typeid);
        $this->assign('typeid', $this->_typeid);
        $this->assign('channelname', $channelname);
    }
    //首页
    public function action_index()
    {
        $seoinfo = Model_Nav::get_channel_seo($this->_typeid);
        $total = Model_Member_Order::get_sell_num(0, $this->_typeid);
        $this->assign('totalorder', $total);
        $this->assign('seoinfo', $seoinfo);
        $templet = Product::get_use_templet('car_index');
        $templet = $templet ? $templet : 'car/index';
        $this->display($templet);
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);

    }
    //详细页
    public function action_show()
    {
        $id = intval($this->request->param('aid'));

        $info = Model_Car::detail($id);
        if (!$info)
        {
            $this->request->redirect('error/404');
        }
        //seo
        $seoInfo = Product::seo($info);
        //产品图片
        $info['piclist'] = Product::pic_list($info['piclist']);
        //属性列表
        $info['attrlist'] = Model_Car::car_attr($info['attrid']);
        //最低价
        $info['price'] = Model_Car::get_minprice($info['id'],array('info'=>$info));

        //点评数
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->_typeid);
        //销售数量
        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->_typeid) + intval($info['bookcount']);
        //产品编号
        $info['series'] = St_Product::product_series($info['id'], '3');
        //产品图标
        $info['iconlist'] = Product::get_ico_list($info['iconlist']);

        $info['satisfyscore'] = St_Functions::get_satisfy($this->_typeid,$info['id'],$info['satisfyscore'],array('suffix'=>''));
        $info['carkindname'] = Model_Car_Kind::get_carkindname($info['carkindid']);

        //目的地上级
        if ($info['finaldestid'] > 0)
        {
            $predest = Product::get_predest($info['finaldestid']);
            $this->assign('predest', $predest);
        }


        //扩展字段信息
        $extend_info = DB::select('*')->from('car_extend_field')->where('productid','=',$info['id'])->execute()->current();

        $this->assign('seoinfo', $seoInfo);
        $this->assign('info', $info);

        $this->assign('extendinfo', $extend_info);
        $templet = Product::get_use_templet('car_show');
        $templet = $templet ? $templet : 'car/show';
        $this->display($templet);
        Product::update_click_rate($info['aid'], $this->_typeid);
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);

    }
    //报价日历
    public function action_dialog_calendar()
    {
        $suitid = intval(Arr::get($_POST, 'suitid'));
        $year = intval(Arr::get($_POST, 'year'));
        $month = intval(Arr::get($_POST, 'month'));
        $containdiv = Arr::get($_POST, 'containdiv');
        if (empty($year) && empty($month))
        {
            $time = strtotime(date('Y-m-d'));
            $data = DB::select()->from('car_suit_price')->where('suitid', '=', $suitid)->and_where('day', '>=', $time)->execute()->current();
            if (!empty($data))
            {
                $year = date('Y', $data['day']);
                $month = date('m', $data['day']);
            }
            else
            {
                $nowDate = new DateTime();
                $year = $nowDate->format('Y');
                $month = $nowDate->format('m');
            }
        }
        $out = '';
        $priceArr = Product::get_suit_price($year, $month, $suitid, $this->_typeid);
        $out .= Common::calender($year, $month, $priceArr, $suitid,$containdiv);
        echo $out;
    }
    //列表页
    public function action_list()
    {
        //参数值获取
        $destPy = $this->request->param('destpy');
        $carkindId = intval($this->request->param('carkindid'));
        $sortType = intval($this->request->param('sorttype'));
        $attrId = $this->request->param('attrid');
        $p = intval($this->request->param('p'));
        $p = $p ? $p : 1;
        $attrId = !empty($attrId) ? $attrId : 0;
        $destPy = $destPy ? $destPy : 'all';
        $pagesize = 12;
        $keyword = Common::remove_xss(Arr::get($_GET, 'keyword'));



        $route_array = array(
            'controller' => $this->request->controller(),
            'action' => $this->request->action(),
            'destpy' => $destPy,
            'carkindid' => $carkindId,
            'sorttype' => $sortType,
            'attrid' => $attrId,
        );
        //$start_time=microtime(true); //获取程序开始执行的时间

        $out = Model_Car::search_result($route_array, $keyword, $p, $pagesize);
        $pager = Pagination::factory(
            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),
                'view' => 'default/pagination/search',
                'total_items' => $out['total'],
                'items_per_page' => $pagesize,
                'first_page_in_url' => false,
            )
        );
        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);
        $destId = $destPy == 'all' ? 0 : DB::select('id')->from('destinations')->where('pinyin','=',$destPy)->execute()->get('id');
        $destId = $destId ? $destId : 0;
        //目的地信息
        $destInfo = array();
        $preDest = array();
        if ($destId)
        {

            $destInfo = Model_Car::get_dest_info($destId);
            if($p > 1)
            {
                $destInfo['seotitle'] = '第'.$p.'页_'.$destInfo['seotitle'];
            }
            $preDest = Product::get_predest($destId);
        }


        $extra_param = array(
            'current_page' => $p,
            'keyword' => $keyword
        );

        $chooseitem = Model_Car::get_selected_item($route_array);
        $searchTitle = Model_Car::gen_seotitle($route_array,$extra_param);


        $this->assign('destid', $destId);
        $this->assign('destinfo', $destInfo);
        $this->assign('predest', $preDest);
        $this->assign('list', $out['list']);
        $this->assign('chooseitem', $chooseitem);
        $this->assign('searchtitle', $searchTitle);
        $this->assign('param', $route_array);
        $this->assign('currentpage', $p);
        $this->assign('pageinfo', $pager);
        $templet = Product::get_use_templet('car_list');
        $templet = $templet ? $templet : 'car/list';
        $this->display($templet);

        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }
    //预订页面
    public function action_book()
    {
        //会员信息
        $userInfo = Product::get_login_user_info();
        //要求预订前必须登陆
        if (!empty($GLOBALS['cfg_login_order']) && empty($userInfo['mid']))
        {
            $this->request->redirect(Common::get_main_host() . '/member/login/?redirecturl=' . urlencode(Common::get_current_url()));
        }
        $productId = intval(Arr::get($_GET, 'productid'));
        $suitId = intval(Arr::get($_GET, 'suitid'));
        $useDate = Common::remove_xss(Arr::get($_GET, 'usedate'));

        //防止错误数据提交
        if (empty($suitId) || empty($productId))
        {
            $this->request->redirect($this->request->referrer());
        }
        //套餐信息
        $suitInfo = Model_Car_Suit::suit_info($suitId);
        //产品信息
        $info = ORM::factory('car', $productId)->as_array();
        //价格信息
        $suitPrice = Model_Car_Suit::suit_price($suitId, $useDate);

        //产品编号
        $info['series'] =St_Product::product_series($info['id'], 3);
        $info['usedate'] = $useDate;
        //frmcode
        $code = md5(time());
        Common::session('code', $code);
        //积分抵现所需积分
        $needjifen = $GLOBALS['cfg_exchange_jifen'] * $suitInfo['jifentprice']; //所需积分

        $this->assign('info', $info);
        $this->assign('suitInfo', $suitInfo);
        $this->assign('suitPrice', $suitPrice);


        $this->assign('userInfo', $userInfo);
        $this->assign('needjifen', $needjifen);
        $this->assign('frmcode', $code);
        $this->display('car/book');
    }
    /*
     * 创建订单
     * */
    public function action_create()
    {
        $frmCode = Arr::get($_POST, 'frmcode');
        $checkCode = strtolower(Arr::get($_POST, 'checkcode'));
        //验证码验证
        if (!Captcha::valid($checkCode) || empty($checkCode))
        {
            exit();
        }
        //安全校验码验证
//        $orgCode = Common::session('code');
//        if ($orgCode != $frmCode)
//        {
//            exit();
//        }

        //会员信息
        $userInfo = Product::get_login_user_info();
        $memberId = $userInfo ? $userInfo['mid'] : 0;//会员id
        $webid = intval(Arr::get($_POST, 'webid'));//网站id
        $dingNum = intval(Arr::get($_POST, 'dingnum'));//数量
        $suitId = intval(Arr::get($_POST, 'suitid'));//套餐id
        $productId = intval(Arr::get($_POST, 'productid'));//产品id
        $useDate = Arr::get($_POST, 'startdate');//使用日期
        $departDate = Arr::get($_POST, 'leavedate');//还车日期
        $linkMan = Common::remove_xss(Arr::get($_POST, 'linkman'));//联系人姓名
        $linkTel = Common::remove_xss(Arr::get($_POST, 'linktel'));//联系人电话
        $linkEmail = Arr::get($_POST, 'linkemail');//联系人邮箱

        //additional
        $linkQQ = Common::remove_xss(Arr::get($_POST, 'linkman'));//联系人姓名



        $linkTel = empty($linkTel) && !empty($userInfo)?$userInfo['mobile']:$linkTel;
        $linkEmail = empty($linkEmail) && !empty($userInfo)?$userInfo['email']:$linkEmail;

        $remark = Common::remove_xss(Arr::get($_POST, 'remark'));//订单备注
        $payType = intval(Arr::get($_POST, 'paytype'));//支付方式
        $useJifen = intval(Arr::get($_POST, 'usejifen'));//是否使用积分
        //检测订单有效性
        $check_result = Common::before_order_check(array('model' => 'car', 'productid' => $productId, 'suitid' => $suitId, 'day' => strtotime($useDate)));
        if (!$check_result)
        {
            $this->request->redirect('/tips/order');
        };
        //套餐信息
        $suitInfo = Model_Car_Suit::suit_info($suitId);
        //产品信息
        $info = ORM::factory('car', $productId)->as_array();
        $info['title']=$info['title'] . "({$suitInfo['suitname']})";
        $orderSn = Product::get_ordersn('03');
        //价格信息
        $suitPrice = Model_Car_Suit::suit_price($suitId, $useDate);
        //需要重新计算金额
        $total_price = Model_Car::suit_range_price($suitId, $useDate, $departDate, 1);
        //判断积分使用是否满足需求.
        $needJifen = 0;
        if ($useJifen)
        {
            $needJifen = $GLOBALS['cfg_exchange_jifen'] * $suitInfo['jifentprice']; //所需积分
            if (!$needJifen || $userInfo['jifen'] < $needJifen)
            {
                $useJifen = 0;
            }
        }
        //订单状态(全款支付,定金支付,二次确认)
        $status = $suitInfo['paytype'] != 3 ? 1 : 0;

        /*if(!Model_Car::check_storage(0,$dingNum,$suitId,$useDate,$departDate))
        {
            exit('storage is not enough!');
        }*/

        $arr = array(
            'ordersn' => $orderSn,
            'webid' => $webid,
            'typeid' => $this->_typeid,
            'productautoid' => $info['id'],
            'productaid' => $info['aid'],
            'productname' => $info['title'],
            'price' => $total_price,
            'usedate' => $useDate,
            'dingnum' => $dingNum,
            'departdate' => $departDate,
            'linkman' => $linkMan,
            'linktel' => $linkTel,
            'linkemail' => $linkEmail,
            'jifentprice' => $suitInfo['jifentprice'],
            'jifenbook' => $suitInfo['jifenbook'],
            'jifencomment' => $suitInfo['jifencomment'],
            'addtime' => time(),
            'memberid' => $memberId,
            'dingjin' => $suitInfo['dingjin'],
            'paytype' => $suitInfo['paytype'],
//            '1' => $suitInfo['paytype'],
            'suitid' => $suitId,
            'usejifen' => $useJifen,
            'needjifen' => $needJifen,
//            'status' => $status,
            'status' => 10,
//            0 => $status,
            'remark' => $remark,
            'isneedpiao' => 0,
            'linkqq' => $linkQQ

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
                Model_Coupon::add_coupon_order($cid,$orderSn,$totalprice,$ischeck,$croleid); //添加订单优惠券信息
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
            Common::session('_platform', 'pc');
            //这里作判断是跳转到订单查询页面
            if ($suitInfo['paytype'] != 3)
            {
                $payurl = Common::get_main_host() . "/payment/?ordersn=" . $orderSn;
//                $payurl = "http//:www.usyilu.com" . "/payment/?ordersn=" . $orderSn;
                $this->request->redirect($payurl);
            }
            else
            {
                $this->request->redirect("/member");
            }


        }




    }
    //首页按车型读取数据
    public function action_ajax_index_car()
    {
        $carkindid = intval(Arr::get($_GET, 'carkindid'));
        $pagesize = intval(Arr::get($_GET, 'pagesize'));
        $list = Model_Car::get_car_list(" and carkindid=$carkindid", 0, $pagesize);
        echo json_encode(array('list' => $list));
    }
    //获取套餐价格
    public function action_ajax_get_suit_price()
    {
        $productid = intval(Arr::get($_POST,'productid'));
        $suitid = intval(Arr::get($_POST,'suitid'));
        $day =   Common::remove_xss(Arr::get($_POST, 'day'));
        $suitPrice = Model_Car_Suit::suit_price($suitid, $day);
        echo $suitPrice['adultprice'];
    }
    //获取日期范围价格
    public  function action_ajax_range_price()
    {
        $startdate = Arr::get($_GET, 'startdate');
        $enddate = Arr::get($_GET, 'leavedate');
        $suitid = intval(Arr::get($_GET, 'suitid'));
        $dingnum = intval(Arr::get($_GET, 'dingnum'));
        $price = Model_Car::suit_range_price($suitid, $startdate, $enddate, $dingnum);
        echo json_encode(array('price' => $price));
    }
    /**
     *
     * 检测库存是否能够预订
     */
    public function action_ajax_check_storage()
    {
        $startdate = Arr::get($_POST, 'startdate');
        $enddate = Arr::get($_POST, 'enddate');
        $dingnum = Arr::get($_POST, 'dingnum');
        $suitid = Arr::get($_POST, 'suitid');
        $flag = Model_Car::check_storage(0,$dingnum,$suitid,$startdate,$enddate);
        echo json_encode(array('status' => $flag));
    }


}