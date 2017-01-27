<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pc_Car extends Stourweb_Controller
{
    /*
     * 租车总控制器
     * */

    private $_typeid = 3;
    private $_cache_key = '';


    public function debug_to_console() {

        echo("<script>console.log(\"\")</script>");

    }


    public function before()
    {
        echo("<script>console.log(\"后台before \")</script>");

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

        echo("<script>console.log(\" 接机index \")</script>");

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
        echo("<script>console.log(\"详细页:  \")</script>");

        if(Arr::get($_POST, 'bookBtn')=="预订") {
            echo("<script>console.log(\"bookBtn get:  \")</script>");
//            $test = Arr::get($_POST, 'test');
//            echo("<script>console.log(\"test get: ".$test." \")</script>");
            $orderBtn = Arr::get($_POST, 'orderBtn');
            echo("<script>console.log(\"orderBtn get: ".$orderBtn." \")</script>");
            $orderflightNum = Arr::get($_POST, 'orderflightNum');
            echo("<script>console.log(\"orderflightNum get: ".$orderflightNum." \")</script>");
            $orderairport = Arr::get($_POST, 'orderairport');
            echo("<script>console.log(\"orderairport get: ".$orderairport." \")</script>");
            $orderzhuanpin = Arr::get($_POST, 'orderzhuanpin');
            echo("<script>console.log(\"orderzhuanpin get: ".$orderzhuanpin." \")</script>");
            $orderaddr = Arr::get($_POST, 'orderaddr');
            echo("<script>console.log(\"orderaddr get: ".$orderaddr." \")</script>");
            $orderzipcode = Arr::get($_POST, 'orderzipcode');
            echo("<script>console.log(\"orderzipcode get: ".$orderzipcode." \")</script>");
            $orderdate = Arr::get($_POST, 'orderdate');
            echo("<script>console.log(\"orderdate get: ".$orderdate." \")</script>");
            $ordertime = Arr::get($_POST, 'ordertime');
            echo("<script>console.log(\"ordertime get: ".$ordertime." \")</script>");

        }

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

        //send order info
        $this->assign('orderBtn', $orderBtn);
        $this->assign('orderflightNum', $orderflightNum);
        $this->assign('orderairport', json_encode($orderairport));
        $this->assign('orderzhuanpin', $orderzhuanpin);
        $this->assign('orderaddr', json_encode($orderaddr));
        $this->assign('orderzipcode', $orderzipcode);
        $this->assign('orderdate', $orderdate);
        $this->assign('ordertime', $ordertime);
        $this->assign('aid', $id);




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
        echo("<script>console.log(\"报价日历:  \")</script>");

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

        echo("<script>console.log(\"列表页: ".Arr::get($_POST, 'jiejiBtn')."\")</script>");



        //get form data
        if(Arr::get($_POST, 'jiejiBtn')=="接机搜索"){
            echo("<script>console.log(\"接机取值\")</script>");
            $jiejiflightNum = Arr::get($_POST, 'jieji-flightNum');
            $jiejiairport = Arr::get($_POST, 'jieji-airport');
            $jiejizhuanpin = Arr::get($_POST, 'jieji-zhuanpin');
            $jiejiaddr = Arr::get($_POST, 'jieji-addr');
            $jiejizipcode = Arr::get($_POST, 'jieji-zipcode');
            $jiejidate = Arr::get($_POST, 'jieji-date');
            $jiejitime = Arr::get($_POST, 'jieji-time');
            $jiejizipcodebool = Arr::get($_POST, 'jieji-zipcode-bool');
            echo("<script>console.log(\"列表页 zip match: ".$jiejizipcodebool."\")</script>");
            echo("<script>console.log(\"列表页 airport: ".$jiejiairport."\")</script>");


        }else if(Arr::get($_POST, 'songjiBtn')=="送机搜索"){
            echo("<script>console.log(\"送机取值 \")</script>");
            $songjiflightNum = Arr::get($_POST, 'songji-flightNum');
            $songjiairport = Arr::get($_POST, 'songji-airport');
            $songjizhuanpin = Arr::get($_POST, 'songji-zhuanpin');
            $songjiaddr = Arr::get($_POST, 'songji-addr');
            $songjizipcode = Arr::get($_POST, 'songji-zipcode');
            $songjidate = Arr::get($_POST, 'songji-date');
            $songjitime = Arr::get($_POST, 'songji-time');
            $songjizipcodebool = Arr::get($_POST, 'songji-zipcode-bool');
            echo("<script>console.log(\"列表页 zip match: ".$songjizipcodebool."\")</script>");

        }


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


        //assgin form data
        if(Arr::get($_POST, 'jiejiBtn')=="接机搜索") {
            echo("<script>console.log(\"接机赋值 \")</script>");

            $this->assign('jiejiflightNum', json_encode($jiejiflightNum));
            $this->assign('jiejiairport', json_encode($jiejiairport));
            $this->assign('jiejizhuanpin', json_encode($jiejizhuanpin));
            $this->assign('jiejiaddr', json_encode($jiejiaddr));
            $this->assign('jiejizipcode', json_encode($jiejizipcode));
            $this->assign('jiejidate', json_encode($jiejidate));
            $this->assign('jiejitime', json_encode($jiejitime));
            $this->assign('jiejiBtn', json_encode("接机搜索"));

            $this->assign('songjiBtn', json_encode("非送机"));
            $this->assign('songjiflightNum', json_encode(" "));
            $this->assign('songjiairport', json_encode(" "));
            $this->assign('songjizhuanpin', json_encode(" "));
            $this->assign('songjiaddr', json_encode(" "));
            $this->assign('songjizipcode', json_encode(" "));
            $this->assign('songjidate', json_encode(" "));
            $this->assign('songjitime', json_encode(" "));

            $this->assign('zipcodeBool', json_encode($jiejizipcodebool));


            $this->assign('orderflightNum', json_encode($jiejiflightNum));
            $this->assign('orderairport', json_encode($jiejiairport));

//            $this->assign('orderzhuanpin', json_encode($jiejizhuanpin));
//            $this->assign('orderaddr', json_encode($jiejiaddr));

            $this->assign('orderzhuanpin', $jiejizhuanpin);
            $this->assign('orderaddr', json_encode($jiejiaddr));


            $this->assign('orderzipcode', json_encode($jiejizipcode));
            $this->assign('orderdate', json_encode($jiejidate));
            $this->assign('ordertime', json_encode($jiejitime));
            $this->assign('orderBtn', json_encode("接机搜索"));

        }else if(Arr::get($_POST, 'songjiBtn')=="送机搜索"){
            echo("<script>console.log(\"送机赋值 \")</script>");
            $this->assign('jiejiBtn', json_encode("非接机"));
            $this->assign('jiejiflightNum', json_encode(" "));
            $this->assign('jiejiairport', json_encode(" "));
            $this->assign('jiejizhuanpin', json_encode(" "));
            $this->assign('jiejiaddr', json_encode(" "));
            $this->assign('jiejizipcode', json_encode(" "));
            $this->assign('jiejidate', json_encode(" "));
            $this->assign('jiejitime', json_encode(" "));

            $this->assign('songjiBtn', json_encode("送机搜索"));
            $this->assign('songjiflightNum', json_encode($songjiflightNum));
            $this->assign('songjiairport', json_encode($songjiairport));
            $this->assign('songjizhuanpin', json_encode($songjizhuanpin));
            $this->assign('songjiaddr', json_encode($songjiaddr));
            $this->assign('songjizipcode', json_encode($songjizipcode));
            $this->assign('songjidate', json_encode($songjidate));
            $this->assign('songjitime', json_encode($songjitime));

            $this->assign('zipcodeBool', json_encode($songjizipcodebool));


            $this->assign('orderBtn', json_encode("送机搜索"));
            $this->assign('orderflightNum', json_encode($songjiflightNum));
            $this->assign('orderairport', json_encode($songjiairport));

//            $this->assign('orderzhuanpin', json_encode($songjizhuanpin));
//            $this->assign('orderaddr', json_encode($songjiaddr));

            $this->assign('orderzhuanpin', $songjizhuanpin);
            $this->assign('orderaddr', json_encode($songjiaddr));

            $this->assign('orderzipcode', json_encode($songjizipcode));
            $this->assign('orderdate', json_encode($songjidate));
            $this->assign('ordertime', json_encode($songjitime));

        }

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
        echo("<script>console.log(\"预定后台 \")</script>");

        //会员信息
        $userInfo = Product::get_login_user_info();
        //要求预订前必须登陆
        if (!empty($GLOBALS['cfg_login_order']) && empty($userInfo['mid']))
        {
            echo("<script>console.log(\"非会员问题 \")</script>");

            $this->request->redirect(Common::get_main_host() . '/member/login/?redirecturl=' . urlencode(Common::get_current_url()));
        }
        $productId = intval(Arr::get($_POST, 'productid'));
        $suitId = intval(Arr::get($_POST, 'suitid'));
        $useDate = Common::remove_xss(Arr::get($_POST, 'usedate'));

        //防止错误数据提交
        if (empty($suitId) || empty($productId))
        {
            $this->request->redirect($this->request->referrer());
        }
        
    	$orderzhuanpin = Arr::get($_POST, 'orderzhuanpin');  
        $pricePerCar = Arr::get($_POST, 'pricePerCar'); 
        $pricePerGuest = Arr::get($_POST, 'pricePerGuest'); 
        $pricePerDing = (strpos($orderzhuanpin,"拼") === true)?$pricePerGuest:$pricePerCar;
        if(!$pricePerCar && !$pricePerCar)
        	$pricePerDing = Arr::get($_POST, 'pricePerDing'); 
        $pricePerChild = Arr::get($_POST, 'pricePerChild');
        
        $juPai = Arr::get($_POST, 'check');
        $pricePai = ($juPai)?Arr::get($_POST, 'pricePai'):0;
        
        $orderDingNum = Arr::get($_POST, 'dingnum');  
        $orderServiceNum = Arr::get($_POST, 'childnum');
        
        $linkman = Arr::get($_POST, 'linkman');
        $linktel = Arr::get($_POST, 'linktel');
        $linkemail = Arr::get($_POST, 'linkemail');
        $remark = Arr::get($_POST, 'remark');
        
        $orderDate = Common::remove_xss(Arr::get($_POST, 'orderdate'));
        $orderflightNum = Arr::get($_POST, 'orderflightNum');
        $orderairport = Arr::get($_POST, 'orderairport');
        $orderaddr = Arr::get($_POST, 'orderaddr');
        $orderzipcode = Arr::get($_POST, 'orderzipcode');
        $ordertime = Arr::get($_POST, 'ordertime');
        $orderBtn = substr(Arr::get($_POST, 'orderBtn'),0,6);//接机搜索->接机;
        
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

        $this->assign('orderDingNum', $orderDingNum);
        $this->assign('orderServiceNum', $orderServiceNum);
        
        $this->assign('pricePerDing', $pricePerDing);
        $this->assign('pricePerChild', $pricePerChild);
        $this->assign('pricePai', $pricePai);
        
        $this->assign('orderDate', $orderDate);
        $this->assign('orderflightNum', $orderflightNum);
        $this->assign('orderairport', $orderairport);
        $this->assign('ordertime', $ordertime);
        $this->assign('orderzhuanpin', $orderzhuanpin);
        $this->assign('orderaddr', $orderaddr);
        $this->assign('orderzipcode', $orderzipcode);
        $this->assign('orderBtn', $orderBtn);
        
        $this->assign('userInfo', $userInfo);
        $this->assign('needjifen', $needjifen);
        $this->assign('frmcode', $code);
        $this->assign('remark', $remark);
        
        $this->display('car/book');
    }
    /*
     * 创建订单 - 检查是否已登陆
     * */
    public function action_createrev()
    {
    	echo("<script>console.log(\"后台下订单，之前检查是否已登陆 \")</script>");
    	
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
        $dingNum = intval(Arr::get($_POST, 'dingnum'));//数量///////////////////////////////////////
        $suitId = intval(Arr::get($_POST, 'suitid'));//套餐id
        $productId = intval(Arr::get($_POST, 'productid'));//产品id
        $useDate = Arr::get($_POST, 'startdate');//使用日期
        $departDate = Arr::get($_POST, 'leavedate');//还车日期
        $linkMan = Common::remove_xss(Arr::get($_POST, 'linkman'));//联系人姓名
        $linkTel = Common::remove_xss(Arr::get($_POST, 'linktel'));//联系人电话
        $linkEmail = Arr::get($_POST, 'linkemail');//联系人邮箱

        //additional
        $linkQQ = Common::remove_xss(Arr::get($_POST, 'linkman'));//联系人姓名
        	$pricePai = intval(Arr::get($_POST, 'pricePai'));
        	$pricePerDing = intval(Arr::get($_POST, 'pricePerDing'));
        	$pricePerChild = intval(Arr::get($_POST, 'pricePerChild'));

        $orderBtn = Arr::get($_POST, 'orderBtn');
        $orderairport = Arr::get($_POST, 'orderairport');
        $orderflightNum = Arr::get($_POST, 'orderflightNum');
        $orderzhuanpin = Arr::get($_POST, 'orderzhuanpin');
        $orderaddr = Arr::get($_POST, 'orderaddr');
        $orderzipcode = Arr::get($_POST, 'orderzipcode');
        $orderdate = Arr::get($_POST, 'orderdate');
        $ordertime = Arr::get($_POST, 'ordertime');
        $orderDingNum = Arr::get($_POST, 'orderDingNum');////////////////////////////////////////////
        $orderServiceNum = Arr::get($_POST, 'orderServiceNum');
        $orderTotalPrice = Arr::get($_POST, 'orderTotalPrice');
        
        $remark = Common::remove_xss(Arr::get($_POST, 'remark'));//订单备注
        $payType = intval(Arr::get($_POST, 'paytype'));//支付方式
        $useJifen = intval(Arr::get($_POST, 'usejifen'));//是否使用积分
	        
        //套餐信息
	    $suitInfo = Model_Car_Suit::suit_info($suitId);
	    //产品信息
	    $info = ORM::factory('car', $productId)->as_array();
        
	    $orderSummary = $linkMan.','.$linkTel.','.$orderBtn.','.$orderairport.','.$orderflightNum.','.$orderzhuanpin.','.$orderaddr.','.$orderzipcode.','.$orderdate.','.$ordertime.','.$orderCarNum.','.$orderServiceNum.','.$orderTotalPrice;
       	$linkTel = empty($linkTel) && !empty($userInfo)?$userInfo['mobile']:$linkTel;
        $linkEmail = empty($linkEmail) && !empty($userInfo)?$userInfo['email']:$linkEmail;
		    
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

	        
        //检查是否已登陆，并相应进行跳转
        if($memberId != 0) { // 用户已登陆，直接进入付款页面
        	//检测订单有效性
	        $check_result = Common::before_order_check(array('model' => 'car', 'productid' => $productId, 'suitid' => $suitId, 'day' => strtotime($useDate)));
	        if (!$check_result)
	        {
	            echo("<script>console.log(\"后台下订单2 \")</script>");
	
	            $this->request->redirect('/tips/order');
	        };
	        
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
	//            'remark' => $remark,
	            'remark' => $orderSummary,
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
	                $payurl = Common::get_main_host() . "/payment/?ordersn=" . $orderSn . "&price=" . (string)((float)$pricePai + (float)$pricePerDing*(float)$orderCarNum + (float)$pricePerChild*(float)$orderServiceNum);
	//                $payurl = "http//:www.usyilu.com" . "/payment/?ordersn=" . $orderSn;
	                $this->request->redirect($payurl);
	            }
	            else
	            {
	                $this->request->redirect("/member");
	            }
	
	
	        }
        }
        else { // 用户还未登陆，进入登陆页面
        	$croleid = intval(Arr::get($_POST, 'couponid'));
        	
        	$this->assign('productid', $productId);
	        $this->assign('suitid', $suitId);
	        $this->assign('startdate', $useDate);
	        $this->assign('webid', $webid);//网站id
        	$this->assign('dingnum', $dingNum);//数量
        	$this->assign('suitid', $suitId);//套餐id
        	$this->assign('productid', $productId);//产品id
        	$this->assign('startdate', $useDate);//使用日期
        	$this->assign('leavedate', $departDate);//还车日期
      		$this->assign('linkman', $linkMan);//联系人姓名
      		$this->assign('linktel', $linkTel);//联系人电话
        	$this->assign('linkemail', $linkEmail);
        	
	        $this->assign('frmcode', $code);
        	$this->assign('orderBtn', $orderBtn);
        	$this->assign('orderairport', $orderairport);
        	$this->assign('orderflightNum', $orderflightNum);
        	$this->assign('orderzhuanpin', $orderzhuanpin);
        	$this->assign('orderaddr', $orderaddr);
        	$this->assign('orderzipcode', $orderzipcode);
        	$this->assign('orderdate', $orderdate);
        	$this->assign('ordertime', $ordertime);
        	$this->assign('orderDingNum', $orderDingNum);
        	$this->assign('orderServiceNum', $orderServiceNum);
        	$this->assign('orderTotalPrice', $orderTotalPrice);
        	$this->assign('remark', $remark);
	        $this->assign('paytype', $payType);
        	$this->assign('usejifen', $useJifen);
        	$this->assign('dingNum', $dingNum);
        	
        	$this->assign('pricePai', $pricePai);
        	$this->assign('pricePerDing', $pricePerDing);
        	$this->assign('pricePerChild', $pricePerChild);
        	
        	$this->assign('couponid', $croleid);
        	
        	$this->display('car/login');
        }
    }
    
    
    
    
    /*
     * 创建订单 - 检查是否已登陆
     * */
    public function action_complete()
    {
    	$this->display('car/complete');
    }
    
    
    
    /*
     * 创建订单
     * */
    public function action_create()
    {
        echo("<script>console.log(\"后台下订单 \")</script>");


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

        $orderBtn = Arr::get($_POST, 'orderBtn');
        $orderairport = Arr::get($_POST, 'orderairport');
        $orderflightNum = Arr::get($_POST, 'orderflightNum');
        $orderzhuanpin = Arr::get($_POST, 'orderzhuanpin');
        $orderaddr = Arr::get($_POST, 'orderaddr');
        $orderzipcode = Arr::get($_POST, 'orderzipcode');
        $orderdate = Arr::get($_POST, 'orderdate');
        $ordertime = Arr::get($_POST, 'ordertime');
        $orderCarNum = Arr::get($_POST, 'orderCarNum');
        $orderServiceNum = Arr::get($_POST, 'orderServiceNum');
        $orderTotalPrice = Arr::get($_POST, 'orderTotalPrice');

        $orderSummary = $linkMan.','.$linkTel.','.$orderBtn.','.$orderairport.','.$orderflightNum.','.$orderzhuanpin.','.$orderaddr.','.$orderzipcode.','.$orderdate.','.$ordertime.','.$orderCarNum.','.$orderServiceNum.','.$orderTotalPrice;



        $linkTel = empty($linkTel) && !empty($userInfo)?$userInfo['mobile']:$linkTel;
        $linkEmail = empty($linkEmail) && !empty($userInfo)?$userInfo['email']:$linkEmail;

        $remark = Common::remove_xss(Arr::get($_POST, 'remark'));//订单备注
        $payType = intval(Arr::get($_POST, 'paytype'));//支付方式
        $useJifen = intval(Arr::get($_POST, 'usejifen'));//是否使用积分
        //检测订单有效性
        $check_result = Common::before_order_check(array('model' => 'car', 'productid' => $productId, 'suitid' => $suitId, 'day' => strtotime($useDate)));
        if (!$check_result)
        {
            echo("<script>console.log(\"后台下订单2 \")</script>");

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
//            'remark' => $remark,
            'remark' => $orderSummary,
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
        
        //登陆
        
        
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
        echo("<script>console.log(\"后台获取套餐价格 \")</script>");

        $productid = intval(Arr::get($_POST,'productid'));
        $suitid = intval(Arr::get($_POST,'suitid'));
        $day =   Common::remove_xss(Arr::get($_POST, 'day'));
        $suitPrice = Model_Car_Suit::suit_price($suitid, $day);
        echo $suitPrice['adultprice'];
    }
    //获取日期范围价格
    public  function action_ajax_range_price()
    {

        echo("<script>console.log(\"后台获取日期范围价格 \")</script>");

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
        echo("<script>console.log(\"后台查看库存 \")</script>");

        $startdate = Arr::get($_POST, 'startdate');
        $enddate = Arr::get($_POST, 'enddate');
        $dingnum = Arr::get($_POST, 'dingnum');
        $suitid = Arr::get($_POST, 'suitid');
        $flag = Model_Car::check_storage(0,$dingnum,$suitid,$startdate,$enddate);
        echo json_encode(array('status' => $flag));
    }


    /*
      * 删除缓存
      * */
//    public function action_ajax_clearcache()
//    {
//        Model_Config::clear_cache();
//        echo 'ok';
//    }

}