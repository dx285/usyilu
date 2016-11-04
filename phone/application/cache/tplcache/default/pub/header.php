<header> <?php echo Model_Fenxiao::save_fxcode();?> <div class="header_top sys_header"> <?php if($showlogo==1) { ?> <div class="st_logo"><a href="<?php echo $GLOBALS['cfg_m_main_url'];?>"><img src="<?php echo Common::img($GLOBALS['cfg_m_logo']);?>" height="30" alt="<?php echo $webname;?>"/></a></div> <?php } else { ?> <div class="st_back"><a <?php echo $backurl;?>></a></div> <?php } ?> <h1 class="tit"> <?php echo $channelname;?> </h1> <div class="st_top_menu"> <span data-am-offcanvas="{target: '#my-st-slide'}"></span> <div id="my-st-slide" class="am-offcanvas"> <!--登录后--> <div class="am-offcanvas-bar" id="login-html"> <div class="st_user_header_pic" id="log_head"> <img src="<?php echo $member['litpic'];?>" /> <p> <a href="<?php echo $cmsurl;?>member/login">登录</a>|
                            <a href="<?php echo $cmsurl;?>member/register">注册</a> </p> </div> <div class="st_user_cz" id="log_nav"> <a href="<?php echo $cmsurl;?>order/index"><i class="ico_05"></i>订单查询</a> </div> </div> </div> </div> </div> </header> <script>
    var SITEURL = "<?php echo URL::site();?>";
    $(function(){
        $('#my-st-slide').offCanvas('close');
        $('.st-slider').flexslider({pauseOnAction: false});
        $("body").delegate("#logout",'click',function(){
            $.get(SITEURL+'member/login/ajax_out','',function(){
                window.location.href='http://'+window.location.host+SITEURL;
            });
        })
        //检测登陆
        $('body').append('<script'+' type="text/javascript" src="'+SITEURL+'member/login/ajax_islogin"></'+'script>');
    })
    function is_login($obj){
        var fx_url="content=<?php echo urlencode($info['title']);?>";
         if($obj['islogin']==1){
           $('#log_head').html($obj['info']['head']);
           $('#log_nav').html($obj['info']['nav']);
           if($obj['info']['fx_member']){
               if(window.location.href.indexOf('/show_')!=-1)
                   $('.bom_fixed').append($obj['info']['fx_btn'].replace('[fx_url]',fx_url));
           }
         }
    }
</script>