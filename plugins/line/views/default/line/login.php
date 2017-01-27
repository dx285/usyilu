<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}-{$linkman}，您还没有登陆</title>
    {include "pub/varname"}
    {Common::css('user.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,jquery.validate.js,jquery.md5.js')}
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}" />
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}" />
    {/if}
    {include "pub/varname"}
    {Common::css('base.css,extend.css,user.css,confirmation.css,cars_login.css')}
    {Common::js('jquery.min.js,base.js,common.js,delayLoading.min.js,jquery.validate.js,jquery.md5.js')}
    {Common::css_plugin('customize.css','customize')}
    
    <script type="text/javascript">
    function getQueryVariable(variable)
    {
           var query = window.location.search.substring(1);
           var vars = query.split("&");
           for (var i=0;i<vars.length;i++) {
                   var pair = vars[i].split("=");
                   if(pair[0] == variable){return pair[1];}
           }
           return(false);
    }

    function GoToBook() 
    {
    	isvalidate=true;
		// Check if the fields are empty
		$("#usrname").css("border","1px solid #ccc");
		$("#pswd").css("border","1px solid #ccc");
		var usrname=$("#usrname").val();
        console.log("userName: " + usrname);
		var pswd=$("#pswd").val();
        // console.log("Password: " + pswd);
        if(!usrname) {
        	isvalidate=false;
        	$("#usrname").css("border","1px solid red");
            $("#usrname").attr('placeholder','用户名不能为空');
        }
        if(!pswd) {
        	isvalidate=false;
        	$("#pswd").css("border","1px solid red");
            $("#pswd").attr('placeholder','密码不能为空');
        }

        // Validating finish
        if(isvalidate) {
        	var url = SITEURL+'member/login/ajax_login';
            var loginname = $("#usrname").val();
            var loginpwd = $.md5($("#pswd").val());
            var frmcode = $("#frmcode").val();
            var lineid = $("#lineid").val();
            var suitid = $("#suitid").val();
            var usedate = $("#usedate").val();
            var adultnum = $("#adult_num").val();
            var linkman = $("#linkman").val();
            var linktel = $("#linktel").val();
            var linkemail = $("#linkemail").val();
            var remark = $("#remark").val();
            var orderSn = $("#orderSn").val();
            var t_name = $("#t_name").val();
            var t_cardtype = $("#t_cardtype").val();
            var t_cardno = $("#t_cardno").val();
            
            console.log("submit login request: " +loginname + ",loginpwd: " +loginpwd + ",frmcode: " +frmcode);

            $.ajax({
                type:"post",
                async: false,
                url:url,
                data:{loginname:loginname,loginpwd:loginpwd,frmcode:frmcode},
                dataType:'json',
                success: function(data){
                	if(data.status == '1'){//登陆成功,跳转到来源网址
                    	// $("#orderfrmB").submit(); // 没有 submit button
                        var url = "{$GLOBALS['cfg_basehost']}"+'/lines/book/?usedate='+usedate+'&suitid='+suitid+'&lineid='+lineid+'&t_name='+t_name.tostring()+'&t_cardtype='+t_cardtype.tostring()+'&t_cardno='+t_cardno.tostring()+'&adultnum='+adultnum+'&orderSn='+orderSn+'&linkman='+linkman+'&linktel='+linktel+'&linkemail='+linkemail+'&remark='+remark;
                        console.log("订单url: "+url);
						setTimeout(function(){window.open(url,'_self');},500);
                        
                        $('body').append(data.js);//同步登陆js
                        console.log("login success: " +JSON.stringify(data));

                    	var txt;
                    	txt = '<a class="dl" style="padding:0" href="javascript:;">您好,&nbsp</a>';
        	            txt+= '<a class="dl" href="{Common::get_main_host()}/member/">'+linkman+'&nbsp &nbsp &nbsp</a>';                    	            
        	            txt+= '<a class="dl" href="{Common::get_main_host()}/member/login/loginout">取消登陆</a>';
        	            $("#loginstatus").html(txt);
                	} else {
                        if(data.msg!=undefined){
                            $(".login-error").html(data.msg);
                        	$(".login-error")[0].style.display="block";
                        }else{
                        	$(".login-error")[0].style.display="block";
                        }
                        console.log("login err: " + JSON.stringify(data));
                    }
                },
                error:function(a,b,c){
                }
            });
        }
    }

    </script>
    </head>
    <body>
       {request "pub/blankheader"}

    <div class="cnfrm-wrapper">
	    <div class="step2-cls">
	    	<form id="orderfrmB" method="get" action="">
       		<input type="hidden" name="frmcode" id="frmcode" value="{$frmcode}"/>
       		<input type="hidden" name="webid" id="webid" value="{$webid}"/>
	        <input type="hidden" name="adult_num" id="adult_num" value="{$adultNum}"/>
	        <input type="hidden" name="child_num" id="child_num" value="{$childNum}"/>
	        <input type="hidden" name="old_num" id="old_num" value="{$oldNum}"/>
	        <input type="hidden" name="suitid" id="suitid" value="{$suitId}"/>
	        <input type="hidden" name="lineid" id="lineid" value="{$lineId}"/>
	        <input type="hidden" name="usedate" id="usedate" value="{$useDate}"/>
	        <input type="hidden" name="linkman" id="linkman" value="{$linkMan}"/>
	        <input type="hidden" name="linktel" id="linktel" value="{$linkTel}"/>
	        <input type="hidden" name="linkemail" id="linkemail" value="{$linkEmail}"/>
	        <input type="hidden" name="remark" id="remark" value="{$remark}"/>
	        <input type="hidden" name="roombalance_num" id="roombalance_num" value="{$roomBalanceNum}"/>
	        <input type="hidden" name="roombalance_paytype" id="roombalance_paytype" value="{$roomBalance_Paytype}"/>
	        
	        <input type="hidden" name="isneedbill" id="isneedbill" value="{$isneedBill}"/>
	        <input type="hidden" name="bill_title" id="bill_title" value="{$billTitle}"/>
	        <input type="hidden" name="bill_receiver" id="bill_receiver" value="{$billReceiver}"/>
	        <input type="hidden" name="bill_phone" id="bill_phone" value="{$billPhone}"/>
	        <input type="hidden" name="bill_prov" id="bill_prov" value="{$billProv}"/>
	        <input type="hidden" name="bill_city" id="bill_city" value="{$billCity}"/>
	        <input type="hidden" name="bill_address" id="bill_address" value="{$billAddress}"/>
	        <input type="hidden" name="paytype" id="paytype" value="{$payType}"/>
	        <input type="hidden" name="insurance_code" id="insurance_code" value="{$insuranceCode}"/>
	        <input type="hidden" name="usejifen" id="usejifen" value="{$useJifen}"/>
	        <input type="hidden" name="t_name" id="t_name" value="{$t_name}"/>
	        <input type="hidden" name="t_cardtype" id="t_cardtype" value="{$t_cardtype}"/>
	        <input type="hidden" name="t_cardno" id="t_cardno" value="{$t_cardno}"/>
	         <input type="hidden" name="couponid" id="couponid" value="{$croleid}"/>
	         <input type="hidden" name="orderSn" id="orderSn" value="{$orderSn}"/>
	        	
	        	<div class="login-info">
					<h1><span>{$linkman}</span>，您需要登陆以保存您的订单</h1>
					
					
					<div class="section-title">
						<p>登陆</p>
						<div class="seperator"></div>
					</div>
					<div class="section">
						<div class="width-12">
							<div class="p-span">
								<p>用户名：</p> 
							</div>
							<div class="p-">
								<input type="text" id="usrname" name="usrname">
							</div>
						</div>
						<div class="width-12">
							<div class="p-span">
								<p>密码：</p>
							</div>
							<div class="p-">
								<input type="password" id="pswd" name="pswd">
							</div>
						</div>
						<span class="login-error">用户名或者密码错误</span>
						<div class="width-12">
							<a class="psw" href="{Common::get_main_host()}/member/findpwd">找回密码</a>
						</div>
					</div> 
				</div>
				<div class="buttons">
					<button id="loginBtn" type="button" onclick="GoToBook()">登陆</button>
				</div>
	    	</form>
	    	<div class="seperator"></div>
			<h1 class="sign-up">还没有账户？<span><a href="{Common::get_main_host()}/member/register">注册</a></span> 一个吧。</h1>
	    </div>
    </div>	
 

</body> 