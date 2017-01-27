<link type="text/css" href="/min/?f=/usertpl/dw_st16239_no198_index/css/header.css" rel="stylesheet">
{Common::load_skin()}

<script>
$(function(){
	var txt;
	$.ajax({
	    type:"POST",
	    async:false,
	    url:SITEURL+"member/login/ajax_is_login",
	    dataType:'json',
	    success:function(data){
	        if(data.status){
		        console.log("Logged in already!");
	            txt = '<a class="dl" style="padding:0" href="javascript:;">你好,&nbsp</a>';
	            txt+= '<a class="dl" href="{Common::get_main_host()}/member/">'+data.user.nickname+'&nbsp&nbsp&nbsp</a>';
	            txt+= '<a class="dl" href="{Common::get_main_host()}/member/login/loginout">退出</a>';
	            //txt+= '<a class="dl" href="{$cmsurl}member">个人中心</a>';
	        }else{
	
	            txt = '<a class="dl" href="{Common::get_main_host()}/member/login">登录&nbsp&nbsp&nbsp</a>';
	            txt+= '<a class="zc" href="{Common::get_main_host()}/member/register">免费注册</a>';
	        }
	        $("#loginstatus").html(txt);
	    }
	})
})
</script>

<div class="cnfrm-header st-header">
	<div class="wm-1200">
		<div class="header-block">
			<div class="st-logo">
				<a href="http://www.usyilu.com">
					<img src="http://www.usyilu.com/uploads/main/allimg/20161217/20161217030520_70x70.png" alt="美国一路">
				</a>
				<p>全美首家:租车 + 小团</p>
			</div>
			<div class="cnfirm-reg">
				<span id="loginstatus"></span>
			</div>
		</div>
	</div>
</div>