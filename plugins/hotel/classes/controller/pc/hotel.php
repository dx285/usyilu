<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pc_Hotel extends Stourweb_Controller
{
    /*
     * 酒店总控制器
     * */

    private $_typeid = 2;
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
        $this->assign('seoinfo', $seoinfo);
        $templet = Product::get_use_templet('hotel_index');
        $templet = $templet ? $templet : 'hotel/index';
        $this->display($templet);
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    //详细页
    public function action_show()
    {

        $id =intval($this->request->param('aid'));
        //详情
        $info = Model_Hotel::detail($id);
        if (!$info)
        {
            $this->request->redirect('error/404');
        }
        //点击率加一
        Product::update_click_rate($info['aid'], $this->_typeid);
        //seo
        $seoInfo = Product::seo($info);
        //产品图片
        $info['piclist'] = Product::pic_list($info['piclist']);
        //属性列表
        $info['attrlist'] = Model_Hotel::hotel_attr($info['attrid']);
        //最低价
        $info['price'] = Model_Hotel::get_minprice($info['id'],array('info'=>$info));
        //点评数
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->_typeid);
        //销售数量
        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->_typeid) + intval($info['bookcount']);
        //产品编号
        $info['series'] = St_Product::product_series($info['id'], 2);
        //产品图标
        $info['iconlist'] = Product::get_ico_list($info['iconlist']);
        //星级
        $info['hotelrank'] = DB::select('hotelrank')->from('hotel_rank')->where('id','=',$info['hotelrankid'])->execute()->get('hotelrank');
        $info['satisfyscore']  =St_Functions::get_satisfy($this->_typeid,$info['id'],$info['satisfyscore'],array('suffix'=>''));

        //支付方式
        $paytypeArr = explode(',', $GLOBALS['cfg_pay_type']);
        //扩展字段信息
        $extend_info = ORM::factory('hotel_extend_field')
            ->where("productid=" . $info['id'])
            ->find()
            ->as_array();
        //目的地上级
        if ($info['finaldestid'] > 0)
        {
            $predest = Product::get_predest($info['finaldestid']);
            $this->assign('predest', $predest);
        }
        $this->assign('seoinfo', $seoInfo);
        $this->assign('info', $info);
        $this->assign('paytypeArr', $paytypeArr);
        $this->assign('extendinfo', $extend_info);

        $templet = Product::get_use_templet('hotel_show');
        $templet = $templet ? $templet : 'hotel/show';
        $this->display($templet);

        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    //列表页
    public function action_list()
    {
        //参数值获取
        $destPy = $this->request->param('destpy');
        $sign = $this->request->param('sign');
        $rankId = intval($this->request->param('rankid'));
        $priceId = intval($this->request->param('priceid'));
        $sortType = intval($this->request->param('sorttype'));
        $attrId = $this->request->param('attrid');
        $p = intval($this->request->param('p'));
        $attrId = !empty($attrId) ? $attrId : 0;
        $destPy = $destPy ? $destPy : 'all';
        $pagesize = 20;
        $keyword = Common::remove_xss(Arr::get($_GET, 'keyword'));
        $route_array = array(
            'controller' => $this->request->controller(),
            'action' => $this->request->action(),
            'destpy' => $destPy,
            'rankid' => $rankId,
            'priceid' => $priceId,
            'sorttype' => $sortType,
            'displaytype' => 0,
            'attrid' => $attrId,
            'starttime' => '',
            'endtime' => ''
        );
        //入店时间
        if (isset($_GET['starttime']) && !empty($_GET['starttime']))
        {
            $starttime = strtotime($_GET['starttime']);
            $route_array['starttime'] = $starttime ? $starttime : '';
        }
        //离店时间
        if (isset($_GET['endtime']) && !empty($_GET['endtime']))
        {
            $endtime = strtotime($_GET['endtime']);
            $route_array['endtime'] = $endtime ? $endtime : '';
        }
        //分页数
        if (isset($_GET['pagesize']) && !empty($_GET['pagesize']))
        {
            $pagesizeTemp = intval($_GET['pagesize']);
            if ($pagesizeTemp)
            {
                $pagesize = $pagesizeTemp;
            }
        }
        //$start_time=microtime(true); //获取程序开始执行的时间
        $out = Model_Hotel::search_result($route_array, $keyword, $p, $pagesize);
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
            //$destInfo = ORM::factory('destinations', $destId)->as_array();
            $destInfo = Model_Hotel::get_dest_info($destId);
            if($p > 1)
            {
                $destInfo['seotitle'] = '第'.$p.'页_'.$destInfo['seotitle'];
            }
            $preDest = Model_Destinations::get_prev_dest($destId);
        }
        //$end_time=microtime(true);

        //$total=$end_time-$start_time; //计算差值

        $seo_params= array(
            'destpy' => $destPy,
            'rankid' => $rankId,
            'priceid' => $priceId,
            'sorttype' => $sortType,
            'displaytype' => 0,
            'attrid' => $attrId,
            'starttime' => '',
            'endtime' => '',
            'p'=>$p,
            'keyword'=>$keyword
        );
        $chooseitem = Model_Hotel::get_selected_item($route_array);
        $searchTitle = Model_Hotel::gen_seotitle($seo_params);
        $this->assign('destid', $destId);
        $this->assign('destinfo', $destInfo);
        $this->assign('predest', $preDest);
        $this->assign('list', $out['list']);
        $this->assign('chooseitem', $chooseitem);
        $this->assign('searchtitle', $searchTitle);
        $this->assign('param', $route_array);
        $this->assign('currentpage', $p);
        $this->assign('pageinfo', $pager);

        $templet = Product::get_use_templet('hotel_list');
        $templet = $templet ? $templet : 'hotel/list';
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
        $productId = Arr::get($_GET, 'hotelid');
        $suitId = Arr::get($_GET, 'suitid');

        if (empty($productId) || empty($suitId))
        {
            $this->request->redirect($this->request->referrer());
        }

        $info = ORM::factory('hotel', $productId)->as_array();

        //套餐信息

        $suitInfo = Model_Hotel_Room::suit_info($suitId);
        //产品信息
        $info = ORM::factory('hotel', $productId)->as_array();
        //产品编号
        $info['series'] = St_Product::product_series($info['id'], 2);
        //frmcode
        $code = md5(time());
        Common::session('code', $code);
        //积分抵现所需积分
        $needjifen = $GLOBALS['cfg_exchange_jifen'] * $suitInfo['jifentprice']; //所需积分
        //最新日期

        $this->assign('info', $info);
        $this->assign('suitInfo', $suitInfo);


        $this->assign('userInfo', $userInfo);
        $this->assign('needjifen', $needjifen);
        $this->assign('frmcode', $code);
        $this->display('hotel/book');
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
        $orgCode = Common::session('code');
        if ($orgCode != $frmCode)
        {
            exit();
        }
        //会员信息
        $userInfo = Product::get_login_user_info();
        $memberId = $userInfo ? $userInfo['mid'] : 0;//会员id
        $webid = intval(Arr::get($_POST, 'webid'));//网站id
        $dingNum = intval(Arr::get($_POST, 'dingnum'));//房间数量
        $suitId = intval(Arr::get($_POST, 'suitid'));//套餐id
        $hotelId = intval(Arr::get($_POST, 'hotelid'));//酒店id
        $startDate = Arr::get($_POST, 'startdate');//入住日期
        $departDate = Arr::get($_POST, 'leavedate');//离店日期
        $linkMan = Arr::get($_POST, 'linkman');//联系人姓名
        $linkTel = Arr::get($_POST, 'linktel');//联系人电话
        $linkEmail = Arr::get($_POST, 'linkemail');//联系人邮箱
        $linkTel = empty($linkTel) && !empty($userInfo)?$userInfo['mobile']:$linkTel;
        $linkEmail = empty($linkEmail) && !empty($userInfo)?$userInfo['email']:$linkEmail;

        $remark = Arr::get($_POST, 'remark');//订单备注
        $payType = Arr::get($_POST, 'paytype');//支付方式
        $useJifen = intval(Arr::get($_POST, 'usejifen'));//是否使用积分
        //检测订单有效性
        $check_result = common::before_order_check(array('model' => 'hotel', 'productid' => $hotelId, 'suitid' => $suitId, 'day' => strtotime($startDate)));
        if (!$check_result)
        {
            $this->request->redirect('/tips/order');
        };
        //套餐信息
        $suitInfo = Model_Hotel_Room::suit_info($suitId);
        //产品信息
        $info = ORM::factory('hotel', $hotelId)->as_array();
        $orderSn = Product::get_ordersn('02');
        $priceArr = ORM::factory('hotel_room_price')->where("day=" . strtotime($startDate) . " and suitid=" . $suitId)->find()->as_array();
        //这里直接计算出房间总价
        //酒店需要重新计算金额
        $total_price = Model_Hotel::suit_range_price($suitId, $startDate, $departDate, $dingNum);

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

        /*if(!Model_Hotel::check_storage($hotelId,$dingNum,$suitId,$startDate,$departDate))
        {
            exit('storage is not enough!');
        }*/
        $arr = array(
            'ordersn' => $orderSn,
            'webid' => $webid,
            'typeid' => $this->_typeid,
            'productautoid' => $info['id'],
            'productaid' => $info['aid'],
            'productname' => $info['title']. "({$suitInfo['roomname']})",
            'price' => $total_price,

            'usedate' => $startDate,
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
            'suitid' => $suitId,
            'usejifen' => $useJifen,
            'needjifen' => $needJifen,
            'status' => $status,
            'remark' => $remark,
            'isneedpiao' => 0

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
        if (St_Product::add_order($arr,'Model_Hotel',$arr))
        {
            Common::session('_platform', 'pc');
            //这里作判断是跳转到订单查询页面
            if ($suitInfo['paytype'] != 3)
            {
                $payurl = Common::get_main_host() . "/payment/?ordersn=" . $orderSn;
                $this->request->redirect($payurl);
            }
            else
            {
                $this->request->redirect("/member");
            }
        }
    }


    //报价日历
    public function action_dialog_calendar()
    {
        $suitid = Arr::get($_POST, 'suitid');
        $year = Arr::get($_POST, 'year');
        $month = Arr::get($_POST, 'month');
        $containdiv = Arr::get($_POST, 'containdiv');
        if (empty($year) && empty($month))
        {
            $data = DB::select()->from('hotel_room_price')->where('suitid', '=', $suitid)->and_where('day', '>=', time())->execute()->current();
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
        $out .= Common::calender($year, $month, $priceArr, $suitid, $containdiv);
        echo $out;
    }

    //目的地
    public function action_ajax_dest()
    {
        $data = Arr::get($_GET, 'dataid');

        if ($data == 'hot')
        {
            $list = Model_Destinations::get_hot_dest($this->_typeid, 0, 15);
        }
        else
        {
            $list = Model_Destinations::get_dest_by_pinyin($data, $this->_typeid, 0, 15);
        }
        echo json_encode(array('list' => $list));

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
        if (empty($day))
        {
            echo json_encode(array(
                'startdate' => date('Y-m-d', time()),
                'enddate' => date('Y-m-d', strtotime("+1 day", time()))
            ));
            return;
        }
        echo json_encode(array(
            'startdate' => date('Y-m-d', $day),
            'enddate' => date('Y-m-d', strtotime("+1 day", $day))
        ));
    }

    /*
    * 获取房型进店和离店日期价格
    * */
    public function action_ajax_range_price()
    {
        $startdate = Arr::get($_GET, 'startdate');
        $enddate = Arr::get($_GET, 'leavedate');
        $suitid = Arr::get($_GET, 'suitid');
        $dingnum = Arr::get($_GET, 'dingnum');
        $price = Model_Hotel::suit_range_price($suitid, $startdate, $enddate, $dingnum);
        $price = $price * $dingnum;
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
        $flag = Model_Hotel::check_storage(0,$dingnum,$suitid,$startdate,$enddate);
        echo json_encode(array('status' => $flag));
    }

    /*
     * 验证验证码是否正确
     * */
    public function action_ajax_check_code()
    {
        $flag = 'false';
        $checkcode = strtolower(Arr::get($_POST, 'checkcode'));
        if (Captcha::valid($checkcode))
        {
            $flag = 'true';
        }
        echo $flag;
    }

    //根据目的地名获取拼音
    public function action_ajax_dest_py()
    {
        $destname = Arr::get($_POST, 'destname');
        $pinyin = 'all';
        $pinyin = DB::select('pinyin')->from('destinations')->where('kindname','=',$destname)->execute()->get('pinyin');
        echo $pinyin;
    }



}