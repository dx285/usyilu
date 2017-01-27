<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}-{$contactname}，您的订单即将生成</title>
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
    {Common::css('base.css,extend.css,user.css,confirmation.css')}
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

    
    function GoToSignIn() {
        var login = "{$login}";
        var mid = "{$mid}";
        console.log("mid = "+mid);
        console.log("login = "+login);
    	if(login == 1 /* 已登陆 */) {
    		// console.log("login success: " +JSON.stringify(data));
    		$("#cnfrm").removeClass("active");
            $("#submit-div").addClass("active");
            $("#step1").removeClass("active");
            $("#step3").addClass("active");
    		$.ajax({
                type:'POST',
                url:SITEURL+'customize/ajax_save',
                data:$("#cusfrmR").serialize(),
                dataType:'json',
                success:function(data){
                    if(data.status){
                    	/* Data submit success */
                    } else {
                    	layer.alert("提交失败", {
                            icon: 2,
                            skin: 'layer-ext-moon'
                        })
                    }
                }
    		})
        }
        else {
			$("#cnfrm").removeClass("active");
			$("#signin").addClass("active");
			$("#step1").removeClass("active");
			$("#step2").addClass("active");
        }
    }

    function GoToEdit() {
    	$("#cusfrmR").submit();
    }

    function GoBackToConfirm() {
    	$("#signin").removeClass("active");
		$("#cnfrm").addClass("active");
		$("#step2").removeClass("active");
		$("#step1").addClass("active");
    }

    function GoToSubmit() {
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
            console.log("submit login request: " +loginname + ",loginpwd: " +loginpwd + ",frmcode: " +frmcode);

            $.ajax({
                type:"post",
                async: false,
                url:url,
                data:{loginname:loginname,loginpwd:loginpwd,frmcode:frmcode},
                dataType:'json',
                success: function(data){
                	if(data.status == '1'){//登陆成功,跳转到来源网址
                        var url = "{$cmsurl}customize/confirmation?submitted=1"; 
                        // setTimeout(function(){window.open(url,'_self');},500);
                        $('body').append(data.js);//同步登陆js
                        console.log("login success: " +JSON.stringify(data));

                    	var txt;
                    	txt = '<a class="dl" style="padding:0" href="javascript:;">您好,&nbsp</a>';
        	            txt+= '<a class="dl" href="{Common::get_main_host()}/member/">'+'{$contactname}'+'&nbsp &nbsp &nbsp</a>';                    	            
        	            txt+= '<a class="dl" href="{Common::get_main_host()}/member/login/loginout">取消登陆</a>';
        	            $("#loginstatus").html(txt);
                    	$("#signin").removeClass("active");
                		$("#submit-div").addClass("active");
                		$("#step2").removeClass("active");
                		$("#step3").addClass("active");
                		
                		$.ajax({ // 发送确认邮件 并 上传至数据库
                            type:'POST',
                            url:SITEURL+'customize/ajax_save',
                            data:$("#cusfrmR").serialize(),
                            dataType:'json',
                            success:function(data){
                                if(data.status){

                                } else {
                                	layer.alert("提交失败", {
                                        icon: 2,
                                        skin: 'layer-ext-moon'
                                    })
                                }
                            }
                		})
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

    function Print() {
    	window.print();
    }

    $(function(){
        var submitted = getQueryVariable("submitted");
    	if(submitted) {
    		$("#cnfrm").removeClass("active");
			$("#signin").removeClass("active");
			$("#submit-div").addClass("active");
			$("#step1").removeClass("active");
			$("#step2").removeClass("active");
			$("#step3").addClass("active");
       	}
    })
    
    </script>
</head>
<body>
   {request "pub/blankheader"}

<div class="cnfrm-wrapper">
	<div class="cnfrm-step">
		<ul>
			<li>
				<div id="cnfrm" class="steps active">
					<p>核对订单信息</p>
				</div>
			</li>
			<li>
				<div id="signin" class="steps">
					<p>登陆 / 注册</p>
				</div>
			</li>
			<li>
				<div id="submit-div" class="steps">
					<p>订单提交成功</p>
				</div>
			</li>
		</ul>
	</div>
	
	<div id="step1" class="active">
		<div class="info">
			<h1><span>{$contactname}</span>，您的订单即将生成，请确认内容是否正确</h1>
			
			<div class="section-title">
				<p>联系人信息</p>
				<div class="seperator"></div>
			</div>
			<div class="section">
				<div class="width-6">
					<p><span>姓名：</span> {$contactname}&nbsp&nbsp{$sex}</p>
				</div>
				<div class="width-6">
					<p><span>电话：</span> {$region}&nbsp{$phone} </p>
				</div>
				<div class="width-12">
					<p><span>电子邮箱：</span> {$email} </p>
				</div>
				<div class="width-12">
					<p><span>最佳联系时段：</span> {$contacttime} </p>
				</div>
			</div>
			
			<div class="section-title">
				<p>旅行信息</p>
				<div class="seperator"></div>
			</div>
			<div class="section">
				<div class="width-6">
					<p><span>出发日期：</span> {$starttime}</p>
				</div>
				<div class="width-6">
					<p><span>返回日期：</span> {$days} </p>
				</div>
				<div class="width-6">
					<p><span>旅行始发城市：</span> {$startplace}</p>
				</div>
				<div class="width-6">
					<p><span>旅行结束城市：</span> {$dest} </p>
				</div>
				<div class="width-6">
					<p><span>总人数：</span> {$adultnum}</p>
				</div>
				<div class="width-6">
					<p><span>总房间数：</span> {$childnum} </p>
				</div>
				<div class="width-12">
					<p><span>喜爱的车型：</span> {$planerank} </p>
				</div>
				<div class="width-6">
					<p><span>酒店星级：</span> {$hotelrank}</p>
				</div>
				<div class="width-6">
					<p><span>需要的房型：</span> {$room} </p>
				</div>
				<div class="width-12">
					<p><span>用餐形式：</span> {$food} </p>
				</div> <br />
				<div class="width-12">
					<p><span>备注：</span></p> <br />
					<p> {$content} </p>
				</div>
			</div>
			
		</div>
		<div class="modify-form">
			<form id="cusfrmR" name="cusfrmR" method="post" action="{$cmsurl}customize?backtoedit=1">
				<input type="hidden" id="frmcode" name="frmcode" value="{$frmcode}"/>
				<input type="hidden" name="contactname" value="{$contactname}"/>
				<input type="hidden" name="sex" value="{$sex}"/>
				<input type="hidden" name="region" value="{$region}"/>
				<input type="hidden" name="phone" value="{$phone}"/>
				<input type="hidden" name="email" value="{$email}"/>
				<input type="hidden" name="contacttime" value="{$contacttime}"/>
				<input type="hidden" name="starttime" value="{$starttime}"/>
				<input type="hidden" name="startplace" value="{$startplace}"/>
				<input type="hidden" name="endtime" value="{$days}"/>
				<input type="hidden" name="dest" value="{$dest}"/>
				<input type="hidden" name="adultnum" value="{$adultnum}"/>
				<input type="hidden" name="childnum" value="{$childnum}"/>
				<input type="hidden" name="planerank" value="{$planerank}"/>
				<input type="hidden" name="hotelrank" value="{$hotelrank}"/>
				<input type="hidden" name="room" value="{$room}"/>
				<input type="hidden" name="food" value="{$food}"/>
				<input type="hidden" name="content" value="{$content}"/>
				<input style="display:none" type="submit" name="return" value="submit">
			</form>
		</div>
		<div class="buttons">
			<button id="btnToEdit" type="button" onclick="GoToEdit()">修改订单内容</button>
			<button id="btnToSignIn" type="button" onclick="GoToSignIn()">下一步</button>
		</div>
	</div>
	
	
	<div id="step2">
		<form id="cnfrm-login" name="cnfrm-login" method="post"  action="">
			<div class="login-info">
				<h1><span>{$contactname}</span>，您需要登陆以保存您的订单</h1>
				
				
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
				<button id="btnBack" type="button" onclick="GoBackToConfirm()">上一步</button>
				<button id="btnToSubmit" type="button" onclick="GoToSubmit()">登陆</button>
			</div>
		</form>
		<div class="seperator"></div>
		<h1 class="sign-up">还没有账户？<span><a href="{Common::get_main_host()}/member/register">注册</a></span> 一个吧。</h1>
	</div>
	
	
	<div id="step3">
		<div class="success-info">
			<h1><span style="font-size: 1.8em">&#x26F1;</span> 恭喜您 <span>{$contactname}</span>，您的订单已成功提交！</h1>
			<p>我们将在近日 {$contacttime} 致电 {$phone}，并与您确认更加详细的行程规划。</p>
			<h1>请再次确认您的订单信息</h1>
			<p>如有任何问题或需要更改，欢迎随时致电 xxx-xxx-xxxx，或发邮件至 xxxxx@usyilu.com</p>
			<div class="section-title">
				<p>联系人信息</p>
				<div class="seperator"></div>
			</div>
			<div class="section">
				<div class="width-6">
					<p><span>姓名：</span> {$contactname}&nbsp&nbsp{$sex}</p>
				</div>
				<div class="width-6">
					<p><span>电话：</span> {$phone} </p>
				</div>
				<div class="width-12">
					<p><span>电子邮箱：</span> {$email} </p>
				</div>
				<div class="width-12">
					<p><span>最佳联系时段：</span> {$contacttime} </p>
				</div>
			</div>
			
			<div class="section-title">
				<p>旅行信息</p>
				<div class="seperator"></div>
			</div>
			<div class="section">
				<div class="width-6">
					<p><span>出发日期：</span> {$starttime}</p>
				</div>
				<div class="width-6">
					<p><span>返回日期：</span> {$days} </p>
				</div>
				<div class="width-6">
					<p><span>旅行始发城市：</span> {$startplace}</p>
				</div>
				<div class="width-6">
					<p><span>旅行结束城市：</span> {$dest} </p>
				</div>
				<div class="width-6">
					<p><span>总人数：</span> {$adultnum}</p>
				</div>
				<div class="width-6">
					<p><span>总房间数：</span> {$childnum} </p>
				</div>
				<div class="width-12">
					<p><span>喜爱的车型：</span> {$planerank} </p>
				</div>
				<div class="width-6">
					<p><span>酒店星级：</span> {$hotelrank}</p>
				</div>
				<div class="width-6">
					<p><span>需要的房型：</span> {$room} </p>
				</div>
				<div class="width-12">
					<p><span>用餐形式：</span> {$food} </p>
				</div> <br />
				<div class="width-12">
					<p><span>备注：</span></p> <br />	
					<p> {$content} </p>
				</div>
			</div>
		</div>
		<div class="buttons">
			<button id="btnToSubmit" type="button" onclick="">查看我的订单</button>
			<button id="btnToSubmit" type="button" onclick="Print()">打印订单</button>
		</div>
</div>
	
 

</body>
