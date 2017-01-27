<?php defined('SYSPATH') or die('No direct script access.');
require_once TOOLS_COMMON . 'sms/noticecommon.php';
// PHPMailer tools
require_once TOOLS_COMMON . '/email/PHPMailer/PHPMailerAutoload.php';

/**
 * 邮件发送公共类.
 * User: Administrator
 * Date: 16-6-17
 * Time: 下午4:49
 */
class EmailService
{
	/*
	 * PHPMailer function
	 */
	public function PHPMailer_send_email($mailto, $rcvrName, $title, $content) {
		$mail = new PHPMailer;
		
		//Set character set
		$mail->CharSet = "utf-8"; 
		
		//Set PHPMailer to use SMTP.
		$mail->isSMTP();  
		//Enable SMTP debugging. 
		//$mail->SMTPDebug = 1; 
		//Set this to true if SMTP host requires authentication to send email
		$mail->SMTPAuth = true;
		
		//Set SMTP host name                          
		$mail->Host = "smtp.mxhichina.com";
		//Provide username and password     
		$mail->Username = "sales@lillianbear.com";                 
		$mail->Password = "WaterLand45$";                             
		//If SMTP requires SSL encryption then set it
		$mail->SMTPSecure = "ssl";                           
		//Set TCP port to connect to  
		$mail->Port = 465;    
		
		$mail->From = "sales@lillianbear.com";
		$mail->FromName = "GoGoGoUS";
		$mail->addReplyTo('sales@lillianbear.com','GoGoGoUS');
		$mail->addAddress($mailto, $rcvrName);
		$mail->isHTML(true);
		
		$mail->Subject = $title;
		$mail->Body = $content; // $content;
		$mail->AltBody = "您的订单已确认 - USYiLu.com";
		/*
		var_dump($mail->send());
		*/
		if(!$mail->send()) 
		{
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} 
		else 
		{
		    echo "Message has been sent successfully";
		}
		

	}
	
	/*
     *@function 直接给某个email发送任意内容邮件
     *@param string $maillto,接收email
     *@param string $title,邮件标题
     *@param string $content,邮件内容.
     *@return bool
     * */
    public static function send_email($maillto, $title, $content)
    {
        if (empty($maillto) || empty($title))
            return false;

        //如果没有自定义SMTP配置
        $smtp_config = self::get_email_config();
        
        $cfg_mail_smtp = ($smtp_config['cfg_mail_smtp'] == '' ? "smtp.gmail.com" : $smtp_config['cfg_mail_smtp']);
        // $cfg_mail_smtp = "smtp.gmail.com";
        $cfg_mail_port = ($smtp_config['cfg_mail_port'] == '' ? 25 : $smtp_config['cfg_mail_port']);
        if ($smtp_config['cfg_mail_user'] == '')
        {
            $cfg_mail_user = "spot.gogogous@gmail.com";
            $cfg_mail_pass = "spotgogogous";
        } else
        {
            $cfg_mail_user = $smtp_config['cfg_mail_user'];
            $cfg_mail_pass = $smtp_config['cfg_mail_pass'];
        }
        $smtpserver = $cfg_mail_smtp; //SMTP服务器
        $smtpserverport = $cfg_mail_port; //SMTP服务器端口
        $smtpemailto = $maillto; //发送给谁
        $smtpuser = $cfg_mail_user; //SMTP服务器的用户帐号
        $smtppass = $cfg_mail_pass; //SMTP服务器的用户密码
        $mailtype = "HTML"; //邮件格式（HTML/TXT）,TXT为文本邮件
        if ($smtpserverport == 25)
        {
            require_once dirname(__FILE__) . '/email.class.php';
            $mailsubject = iconv('UTF-8', 'GB2312//IGNORE', $title); //邮件主题
            $mailbody = iconv('UTF-8', 'GB2312//IGNORE', $content); //邮件内容
            $smtp = new smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
            $smtp->debug = false; //是否显示发送的调试信息
            $status = $smtp->sendmail($smtpemailto, $smtpuser, $mailsubject, $mailbody, $mailtype);
        } else
        {
            require_once dirname(__FILE__) . '/mysendmail.class.php';
            $mail = new MySendMail();
            $mail->setServer($smtpserver, $smtpuser, $smtppass, 465, true); //设置smtp服务器，到服务器的SSL连接
            $mail->setFrom($smtpuser); //设置发件人
            $mail->setReceiver($smtpemailto); //设置收件人，多个收件人，调用多次
            $mail->setMail($title, $content); //设置邮件主题、内容
            $status = $mail->sendMail(); //发送
        }
        return $status;
    }

    /*
	 *@function 会员特定事件邮件发送
	 *@param string $maillto,接收email
	 *@param string $msgtag,会员短信事件类型，NoticeCommon::MEMBER_REG_MSGTAG：会员注册成功后；NoticeCommon::MEMBER_REG_CODE_MSGTAG：会员注册验证码；NoticeCommon::MEMBER_FINDPWD_CODE_MSGTAG：会员找回密码验证码；
     *@param string $member_password,会员密码，在会员注册成功事件中传递.
     *@param string $code,验证码.
     *@return bool
	 * */
    public static function send_member_email($maillto, $msgtag, $member_password, $code)
    {
        $sql = "select msg,isopen from sline_email_msg where msgtype='{$msgtag}'";
        $config_data = DB::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($config_data) <= 0 || empty($config_data[0]["msg"]))
            return false;

        if ($config_data[0]["isopen"] == "0")
            return true;

        $content = $config_data[0]["msg"];
        $cfg_webname = functions::get_sys_para("cfg_webname");
        $content = str_ireplace('{#WEBNAME#}', $cfg_webname, $content);
        $content = str_ireplace('{#EMAIL#}', $maillto, $content);
        $content = str_ireplace('{#PASSWORD#}', $member_password, $content);
        $content = str_ireplace('{#CODE#}', $code, $content);

        $title = $cfg_webname . (empty($code) ? "会员注册成功" : "验证码");
        return self::send_email($maillto, $title, $content); //发送

    }

    /*
	 *@function 产品订单特定事件邮件发送
	 *@param string $msgtag,产品订单特定事件类型，NoticeCommon::PRODUCT_ORDER_UNPROCESSING_MSGTAG：订单未处理；NoticeCommon::PRODUCT_ORDER_PROCESSING_MSGTAG：订单处理中；NoticeCommon::PRODUCT_ORDER_PAYSUCCESS_MSGTAG：订单处理中支付成功；NoticeCommon::PRODUCT_ORDER_CANCEL_MSGTAG：订单被取消；
	 *@param array $order_info,订单详细信息.
     *@return bool
	 * */
    public static function send_product_order_email($msgtag, array $order_info)
    {
        $model_info = NoticeCommon::get_system_model($order_info["typeid"]);
        if ($model_info === false)
        {
            return false;
        }

        $order_price_num_summary = NoticeCommon::summary_price_number($order_info);
        $cfg_webname = functions::get_sys_para("cfg_webname");

        $product_order_msgtype_result = NoticeCommon::create_product_order_msgtype($msgtag, $model_info['pinyin']);
        foreach ($product_order_msgtype_result as $product_order_msgtypelist)
        {
            foreach ($product_order_msgtypelist as $product_order_msgtype)
            {
                $sql = "select msg,isopen from sline_email_msg where msgtype='{$product_order_msgtype}'";
                $config_data = DB::query(Database::SELECT, $sql)->execute()->as_array();
                if (count($config_data) <= 0 || $config_data[0]["isopen"] == "0" || empty($config_data[0]["msg"]))
                {
                    continue;
                }

                $recipients_tag = explode("_", $product_order_msgtype);
                $recipients_tag = $recipients_tag[0];
                if ($recipients_tag == "supplier")
                {
                    if(empty($order_info["productautoid"]))
                        continue;

                    $table = 'sline_' . $model_info['maintable'];
                    $sql = "SELECT supplierlist FROM {$table} where id='{$order_info["productautoid"]}'";
                    $product_rows = DB::query(Database::SELECT, $sql)->execute()->as_array();
                    if (count($product_rows) <= 0 || empty($product_rows[0]['supplierlist']))
                    {
                        continue;
                    } else
                    {
                        $supplierid = $product_rows[0]['supplierlist'];
                        $sql = "SELECT * FROM `sline_supplier` WHERE id='{$supplierid}'";
                        $supplier_rows = DB::query(Database::SELECT, $sql)->execute()->as_array();
                        if (count($supplier_rows) <= 0 || empty($supplier_rows[0]["email"]))
                        {
                            continue;
                        } else
                        {
                            $mailto = $supplier_rows[0]["email"];
                        }
                    }
                } elseif ($recipients_tag == "administrator")
                {
                    $mailto = functions::get_sys_para("cfg_webmaster_email");
                } else
                {
                    $mailto = $order_info['linkemail'];
                }

                if (empty($mailto))
                {
                    continue;
                }


                $content = $config_data[0]["msg"];
                $content = str_ireplace('{#WEBNAME#}', $cfg_webname, $content);
                $content = str_ireplace('{#PHONE#}', $order_info['linktel'], $content);
                $content = str_ireplace('{#MEMBERNAME#}', $order_info['linkman'], $content);
                $content = str_ireplace('{#PRODUCTNAME#}', $order_info["productname"], $content);
                $content = str_ireplace('{#PRICE#}', $order_price_num_summary['priceDescript'], $content);
                $content = str_ireplace('{#NUMBER#}', $order_price_num_summary['numberDescript'], $content);
                $content = str_ireplace('{#TOTALPRICE#}', $order_price_num_summary['totalPrice'], $content);
                $content = str_ireplace('{#ORDERSN#}', $order_info['ordersn'], $content);
                $content = str_ireplace('{#ETICKETNO#}', $order_info['eticketno'], $content);

                $title = "预定" . $order_info['productname'] . '[' . $cfg_webname . ']';
                if (!self::send_email($mailto, $title, $content)) //发送
                {
                    return false;
                }
            }
        }

        return true;
    }

    /*
   *@function 自定义模板email发送
   *@param string $maillto,接收邮件地址
   *@param string $mailltitle,邮件标题
   *@param string $msgtag,自定义模板名称（msgtype）
   *@param array $msg_placeholder_list,自定义模板中占位符替换值列表.
   *@return bool
   * */
    public static function send_custom_email($maillto, $mailltitle, $msgtag, array $msg_placeholder_list)
    {
        $sql = "select msg,isopen from sline_email_msg where msgtype='{$msgtag}'";
        $config_data = DB::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($config_data) <= 0 || empty($config_data[0]["msg"]))
            return false;

        if ($config_data[0]["isopen"] == "0")
            return true;

        $content = $config_data[0]["msg"];
        foreach ($msg_placeholder_list as $msg_placeholder_name => $msg_placeholder_value)
        {
            $content = str_ireplace("{#{$msg_placeholder_name}#}", $msg_placeholder_value, $content);
        }

        return self::send_email($maillto, $mailltitle, $content); //发送
    }


    public static function get_email_config()
    {
        $sql = "select varname,value from sline_sysconfig where
         (varname='cfg_mail_smtp' or
         varname='cfg_mail_port' or
         varname='cfg_mail_user' or
         varname='cfg_mail_pass')
         and webid=0";

        $config_data = DB::query(Database::SELECT, $sql)->execute()->as_array();

        $result = array(
            'cfg_mail_smtp' => "",
            'cfg_mail_port' => "",
            'cfg_mail_user' => "",
            'cfg_mail_pass' => ""
        );

        foreach ($config_data as $config_data_item)
        {
            if ($config_data_item['varname'] == 'cfg_mail_smtp')
                $result['cfg_mail_smtp'] = $config_data_item['value'];

            if ($config_data_item['varname'] == 'cfg_mail_port')
                $result['cfg_mail_port'] = $config_data_item['value'];

            if ($config_data_item['varname'] == 'cfg_mail_user')
                $result['cfg_mail_user'] = $config_data_item['value'];

            if ($config_data_item['varname'] == 'cfg_mail_pass')
                $result['cfg_mail_pass'] = $config_data_item['value'];
        }

        return $result;

    }

    public static function set_email_config(array $config_data)
    {
        foreach ($config_data as $key => $val)
        {
            $sql = "select * from sline_sysconfig where webid=0 and varname='{$key}'";
            $result = DB::query(Database::SELECT, $sql)->execute()->as_array();
            if (count($result) <= 0)
                $sql = "insert into sline_sysconfig(webid,
                        varname,
                        value
                        ) values (
                        '0',
                        '{$key}',
                        '{$val}'
                        )";
            else
                $sql = "update sline_sysconfig set value='{$val}' where webid=0 and varname='{$key}'";


            DB::query(Database::UPDATE, $sql)->execute();
        }
    }
} 