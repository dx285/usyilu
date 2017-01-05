<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Pc_Customize extends Stourweb_Controller{
    /*
     * 私人定制
     * */
    private $_typeid = 14;

    public function before()
    {
        parent::before();
        $channelname = Model_Nav::get_channel_name($this->_typeid);
        $this->assign('typeid', $this->_typeid);
        $this->assign('channelname', $channelname);

    }


    public function action_index()
    {
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
        //安全校验码验证
        $orgCode = Common::session('code');
        if($orgCode!=$frmCode || empty($frmCode))
        {
            exit('code err');
        }
        $dest = Common::remove_xss(Arr::get($_POST,'dest'));
        $starttime = strtotime(Common::remove_xss(Arr::get($_POST,'starttime')));
        $startplace = Common::remove_xss(Arr::get($_POST,'startplace'));
        $days = strtotime(Common::remove_xss(Arr::get($_POST,'days')));
        $adultnum = Common::remove_xss(Arr::get($_POST,'adultnum'));
        $childnum = Common::remove_xss(Arr::get($_POST,'childnum'));
        $planerank = Common::remove_xss(Arr::get($_POST,'planerank'));
        $hotelrank = Common::remove_xss(Arr::get($_POST,'hotelrank'));
        $room = Common::remove_xss(Arr::get($_POST,'room'));

        $food = Common::remove_xss(Arr::get($_POST,'food'));
        $sex = Common::remove_xss(Arr::get($_POST,'sex'));
        $address = Common::remove_xss(Arr::get($_POST,'address'));
        $phone = Common::remove_xss(Arr::get($_POST,'phone'));
        $email = Common::remove_xss(Arr::get($_POST,'email'));

        $contacttime = Common::remove_xss(Arr::get($_POST,'contacttime'));
        $content = Common::remove_xss(Arr::get($_POST,'content'));
        $contactname = Common::remove_xss(Arr::get($_POST,'contactname'));

        $sql="insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '$dest','$starttime','$startplace','$days','$adultnum','$childnum','$planerank','$hotelrank',
 '$room','$food','$sex','$address','$phone','$email','$contacttime','$addtime','$content','$contactname')";
        $status = 0;
        $flag = DB::query(1,$sql)->execute();

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
            $order_info['productname'] = "私人定制";
            $order_info["ordersn"] = "";
            $order_info["eticketno"] = "";

            St_SMSService::send_product_order_msg(NoticeCommon::PRODUCT_ORDER_PROCESSING_MSGTAG, $order_info);
            St_EmailService::send_product_order_email(NoticeCommon::PRODUCT_ORDER_PROCESSING_MSGTAG, $order_info);
        }
        echo json_encode(array('status'=>$status));

    }

}