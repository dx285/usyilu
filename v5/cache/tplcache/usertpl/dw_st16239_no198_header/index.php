<?php echo Common::get_user_css('dw_st16239_no198_index/css/header.css');?><!-- header开始 --><div class="st-header"><div class="wm-1200"><div class="header-block"><div class="st-logo"><?php if(!empty($GLOBALS['cfg_logo'])) { ?><a href="<?php echo $GLOBALS['cfg_logourl'];?>"><img src="<?php echo Common::img($GLOBALS['cfg_logo'],70,70);?>" alt="<?php echo $GLOBALS['cfg_logotitle'];?>" /></a><?php } ?><p>全美首家:租车 + 小团</p></div><div class="st-nav"><ul class="clearfix"><li><a href="<?php echo $cmsurl;?>"><?php echo $GLOBALS['cfg_indexname'];?></a></li><?php require_once ("/var/www/gogogous/taglib/channel.php");$channel_tag = new Taglib_Channel();if (method_exists($channel_tag, 'pc')) {$data = $channel_tag->pc(array('action'=>'pc','row'=>'8',));}?><?php $n=1; if(is_array($data)) { foreach($data as $row) { ?><li><!--                        <?php if($row['kind']==1) { ?>--><!--                        <i class="st-new-ico"></i><s></s>--><!--                        <?php } else if($row['kind']==2) { ?>--><!--                        <i class="st-hot-ico"></i><s></s>--><!--                        <?php } else if($row['kind']==3) { ?>--><!--                        <i class="st-jing-ico"></i><s></s>--><!--                        <?php } else if($row['kind']==4) { ?>--><!--                        <i class="st-jian-ico"></i><s></s>--><!--                        <?php } ?>
--><?php if($row['url']=="http://www.usyilu.com/customize/") { ?><a href="<?php echo $row['url'];?>"><?php echo $row['title'];?></a><?php } else if($row['url']=="http://usyilu.com/customize/") { ?><a href="<?php echo $row['url'];?>"><?php echo $row['title'];?></a><?php } else if($row['title'] == "一路小团") { ?><a href="<?php echo $row['url'];?>all-0-0-0-0-0-18-1"><?php echo $row['title'];?></a><?php } else if($row['title'] == "一路接机") { ?><a href="<?php echo $row['url'];?>"><?php echo $row['title'];?></a><?php } else if($row['title'] == "一路租车") { ?><a href="<?php echo $row['url'];?>"><?php echo $row['title'];?></a><?php } else if($row['title'] == "落地参团") { ?><a href="<?php echo $row['url'];?>all-0-0-0-0-0-27-1"><?php echo $row['title'];?></a><?php } else { ?><a href="http://www.usyilu.com/lines/all-0-0-0-0-0-0-1"><?php echo $row['title'];?></a><?php } ?><!--                        <a href="<?php echo $row['url'];?>"><?php echo $row['title'];?></a>--></li><?php $n++;}unset($n); } ?><?php require_once ("/var/www/gogogous/taglib/help.php");$help_tag = new Taglib_Help();if (method_exists($help_tag, 'kind')) {$data = $help_tag->kind(array('action'=>'kind','row'=>'4',));}?><?php $n=1; if(is_array($data)) { foreach($data as $row) { ?><li><?php if($row['title'] == '关于我们') { ?><a href="<?php echo $row['url'];?>" rel="nofollow"><?php echo $row['title'];?></a><?php } ?></li><?php $n++;}unset($n); } ?></ul></div><!-- 主导航 --><div class="st-rig"><div class="phone-num"><?php echo str_replace(array(',',';',':','，'),'<br />',$GLOBALS['cfg_phone']);?></div><span id="loginstatus"></span></div></div></div></div><script>
    var SITEURL = "<?php echo $cmsurl;?>";
    $(function(){
        //导航的选中状态
        $(".st-menu a").each(function(){
            var url= window.location.href;
            url=url.replace('index.php','');
            url=url.replace('index.html','');
            var ulink=$(this).attr("href");
            if(url==ulink)
            {
                $(this).parents("li:first").addClass('active');
            }
        })
        //登陆状态
        $.ajax({
            type:"POST",
            async:false,
            url:SITEURL+"member/login/ajax_is_login",
            dataType:'json',
            success:function(data){
                if(data.status){
                    $txt = '<div class="login-after"><a class="dl" style="padding:0" href="javascript:;">你好,</a>';
                    //Di 避免直接暴露ip
//                    $txt+= '<a class="dl" href="<?php echo Common::get_main_host();?>/member/">'+data.user.nickname+  '&nbsp;&nbsp;</a>';
//                    $txt+= '<a class="dl" href="<?php echo Common::get_main_host();?>/member/login/loginout">退出</a></div>';
                    $txt+= '<a class="dl" href="<?php echo Common::get_web_url();?>/member/">'+data.user.nickname+  '&nbsp;&nbsp;</a>';
                    $txt+= '<a class="dl" href="<?php echo Common::get_web_url();?>/member/login/loginout">退出</a></div>';
                    //$txt+= '<a class="dl" href="<?php echo $cmsurl;?>member">个人中心</a>';
                }else{
                    //Di 避免直接暴露ip
//                    $txt = ' <div class="login-before"><a class="dl" href="<?php echo Common::get_main_host();?>/member/login">登录</a>|';
//                    $txt+= '<a class="zc" href="<?php echo Common::get_main_host();?>/member/register">注册</a></div>';
                    $txt = ' <div class="login-before"><a class="dl" href="<?php echo Common::get_web_url();?>/member/login">登录</a>|';
                    $txt+= '<a class="zc" href="<?php echo Common::get_web_url();?>/member/register">注册</a></div>';
                }
                $("#loginstatus").html($txt);
            }
        })
    })
</script>