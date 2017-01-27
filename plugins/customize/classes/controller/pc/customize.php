<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Pc_Customize extends Stourweb_Controller{
    /*
     * √Å√ü√Ö‚Ä∞‚à´‚à´√Ç√Ü√∂√Ç√†‚àÇ
     * */
    private $_typeid = 14;
    
    /*
     *  Send debug code to the Javascript console - Alex
     */
    
    public function debug_to_console($name, $data) {
    	if(is_array($data) || is_object($data)) {
    		echo("<script>console.log(\"PHP-> Var: ".$name." ; Val: ".json_encode($data)."\")</script>");
    	} else {
    		echo("<script>console.log(\"PHP-> Var: ".$name." ; Val: ".$data."\")</script>");
    	}
    }

    public function before()
    {
        parent::before();
        $channelname = Model_Nav::get_channel_name($this->_typeid);
        $this->assign('typeid', $this->_typeid);
        $this->assign('channelname', $channelname);

    }


    public function action_index()
    {
    	// Accept GET data
    	if( $_GET["submitted"]) {
    		$submitted = Arr::get($_GET, 'submitted');
	    	$this->assign('submitted', $submitted);
    	}
    	
    	// Accept POST data
    	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    		$submit = Arr::get($_POST, 'return');
    		$dest = Arr::get($_POST, 'dest');
	        $starttime = Arr::get($_POST, 'starttime');
	        $startplace = Arr::get($_POST, 'startplace');
	        $days = Arr::get($_POST, 'endtime');
	        $adultnum = Arr::get($_POST, 'adultnum');
	        $childnum = Arr::get($_POST, 'childnum');
	        $planerank = Arr::get($_POST, 'planerank');
	        $hotelrank = Arr::get($_POST, 'hotelrank');
	        $room = Arr::get($_POST, 'room');
	        $food = Arr::get($_POST, 'food');
	        $sex = Arr::get($_POST, 'sex');
	        $address = Arr::get($_POST, 'address');
	        $region = Arr::get($_POST, 'region');
	        $phone = Arr::get($_POST, 'phone');
	        $email = Arr::get($_POST, 'email');
	        $contacttime = Arr::get($_POST, 'contacttime');
	        $content = Arr::get($_POST, 'content');
	        $contactname = Arr::get($_POST, 'contactname');
	        
	        // Pass variables to view
	    	$this->assign('submit', $submit);
	    	$this->assign('dest', $dest);
	    	$this->assign('starttime', $starttime);
	    	$this->assign('startplace', $startplace);
	    	$this->assign('days', $days);
	    	$this->assign('adultnum', $adultnum);
	    	$this->assign('childnum', $childnum);
	    	$this->assign('planerank', $planerank);
	    	$this->assign('hotelrank', $hotelrank);
	    	$this->assign('room', $room);
	    	$this->assign('food', $food);
	    	$this->assign('sex', $sex);
	    	$this->assign('address', $address);
	    	$this->assign('region', $region);
	    	$this->assign('phone', $phone);
	    	$this->assign('email', $email);
	    	$this->assign('contacttime', $contacttime);
	    	$this->assign('content', $content);
	    	$this->assign('contactname', $contactname);
    	}
    	
       $seoinfo = Model_Nav::get_channel_seo($this->_typeid);
       $this->assign('seoinfo', $seoinfo);
        //frmcode
       $code = md5(time());
       Common::session('code',$code);
       $this->assign('frmcode',$code);
        $templet = Product::get_use_templet('customize_index');
        $templet = $templet ? $templet : 'customize/index';
        $this->display($templet);



    }

    public function action_ajax_save()
    {


        $addtime=time();
        
        $frmCode = Arr::get($_POST,'frmcode');
        //√Ç√Ü√¢√Ç√ñ¬Æ√ä‚Ä†¬∞√à‚Ñ¢√•√Å‚Ä†√Ö√à‚Ñ¢√•√ã√ò√Ö
        $orgCode = Common::session('code');
        if($orgCode!=$frmCode || empty($frmCode))
        {
            exit("code err: OrgCode: $orgCode ; FrmCode: $frmCode ;");
        }
        
        $dest = Arr::get($_POST, 'dest');
        $starttime = strtotime(Arr::get($_POST, 'starttime'));
        $startplace = Arr::get($_POST, 'startplace');
        $days = strtotime(Arr::get($_POST, 'endtime'));
        $adultnum = Arr::get($_POST, 'adultnum');
        $childnum = Arr::get($_POST, 'childnum');
        $planerank = Arr::get($_POST, 'planerank');
        $hotelrank = Arr::get($_POST, 'hotelrank');
        $room = Arr::get($_POST, 'room');

        $food = Arr::get($_POST, 'food');
        $sex = Arr::get($_POST, 'sex');
        $address = Arr::get($_POST, 'address');
        $region = Arr::get($_POST, 'region');
        $phone = Arr::get($_POST, 'phone');
        $email = Arr::get($_POST, 'email');

        $contacttime = Arr::get($_POST, 'contacttime');
        $content = Arr::get($_POST, 'content');
        $contactname = Arr::get($_POST, 'contactname');
        
        // Save data to database
        $sql="insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '$dest','$starttime','$startplace','$days','$adultnum','$childnum','$planerank','$hotelrank',
 '$room','$food','$sex','$address','$region.$phone','$email','$contacttime','$addtime','$content','$contactname')";
        $status = 0;
        $flag = DB::query(1,$sql)->execute();

        // Send emails to customers and administrators
		if($flag) {
			$status = 1;
			$mailto = $email;
			$title = "您的订单已确认";
			$mailContent = "订单已提交成功！- Content need to be discussed!"; 
			St_EmailService::PHPMailer_send_email($mailto, $contactname, $title, $mailContent);
			//St_EmailService::PHPMailer_send_email($mailtoAdmin, "GoGoGoUSAdmin", $titleAdmin, $contentAdmin);
			
		}
        
        /*
        if($flag)
        {
            $status = 1;

            //send sms and email
            $order_info = array();
            $order_info['typeid'] = "14";

            $order_info['dingnum'] = $adultnum;
            $order_info['price'] = 0;
            $order_info['childnum'] = $childnum;
            $order_info['childprice'] = 0;
            $order_info['oldnum'] = 0;
            $order_info['oldprice'] = 0;

            $order_info['productautoid'] = "";

            $order_info['linktel'] = $phone;
            $order_info['linkemail'] = $email;
            $order_info['linkman'] = $contactname;
            $order_info['productname'] = "√Å√ü√Ö‚Ä∞‚à´‚à´√Ç√Ü√∂√Ç√†‚àÇ";
            $order_info["ordersn"] = "";
            $order_info["eticketno"] = "";

            St_SMSService::send_product_order_msg(NoticeCommon::PRODUCT_ORDER_PROCESSING_MSGTAG, $order_info);
            St_EmailService::send_product_order_email(NoticeCommon::PRODUCT_ORDER_PROCESSING_MSGTAG, $order_info);
        }
        */
		
		echo json_encode(array('status'=>$status));

    }

    
    public function action_confirmation()
    {
    	$addtime=time();
        
	    $frmcode = Arr::get($_POST, 'frmcode');
	    $dest = Arr::get($_POST, 'dest');
        $starttime = Arr::get($_POST, 'starttime');
        $startplace = Arr::get($_POST, 'startplace');
        $days = Arr::get($_POST, 'endtime');
        $adultnum = Arr::get($_POST, 'adultnum');
        $childnum = Arr::get($_POST, 'childnum');
        $planerank = Arr::get($_POST, 'planerank');
        $hotelrank = Arr::get($_POST, 'hotelrank');
        $room = Arr::get($_POST, 'room');

        $food = Arr::get($_POST, 'food');
        $sex = Arr::get($_POST, 'sex');
        $address = Arr::get($_POST, 'address');
        $region = Arr::get($_POST, 'regionDropdown');
        $phone = Arr::get($_POST, 'phone');
        $email = Arr::get($_POST, 'email');

        $contacttime = Arr::get($_POST, 'contacttime');
        $content = Arr::get($_POST, 'content');
        $contactname = Arr::get($_POST, 'contactname');
        $login = 1;
        
    	//‰ºöÂëò‰ø°ÊÅØ
        $userInfo = Product::get_login_user_info();
        //Ë¶ÅÊ±ÇÈ¢ÑËÆ¢ÂâçÂøÖÈ°ªÁôªÈôÜ
        if (str_replace(' ', '', $userInfo['mid']).length == 0) {
            $login = 0;
        }
    	
        // Pass variables to view
    	$this->assign('frmcode', $frmcode);
    	$this->assign('login', $login);
    	$this->assign('dest', $dest);
    	$this->assign('starttime', $starttime);
    	$this->assign('startplace', $startplace);
    	$this->assign('days', $days);
    	$this->assign('adultnum', $adultnum);
    	$this->assign('childnum', empty($childnum)?0:$childnum);
    	$this->assign('planerank', $planerank);
    	$this->assign('hotelrank', $hotelrank);
    	$this->assign('room', $room);
    	$this->assign('food', $food);
    	$this->assign('sex', $sex);
    	$this->assign('address', $address);
    	$this->assign('region', $region);
    	$this->assign('phone', $phone);
    	$this->assign('email', $email);
    	$this->assign('contacttime', $contacttime);
    	$this->assign('content', $content);
    	$this->assign('contactname', $contactname);
    	
    	
    	// Load view
    	$template = 'customize/confirmation';
    	$this->display($template);
    }
    
}