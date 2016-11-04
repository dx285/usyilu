{Common::get_user_css('dw_st16239_no198_index/css/header.css')}

<!-- header开始 -->
<div class="st-header">
    <div class="wm-1200">
        <div class="header-block">
            <div class="st-logo">
                {if !empty($GLOBALS['cfg_logo'])}
                <a href="{$GLOBALS['cfg_logourl']}"><img src="{Common::img($GLOBALS['cfg_logo'],157,34)}" alt="{$GLOBALS['cfg_logotitle']}" /></a>
                {/if}
            </div>
            <!--logo -->
            <div class="st-nav">
                <ul class="clearfix">
                    <li><a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a></li>
                    {st:channel action="pc" row="4"}
                    {loop $data $row}
                    <li>
                        {if $row['kind']==1}
                        <i class="st-new-ico"></i><s></s>
                        {elseif $row['kind']==2}
                        <i class="st-hot-ico"></i><s></s>
                        {elseif $row['kind']==3}
                        <i class="st-jing-ico"></i><s></s>
                        {elseif $row['kind']==4}
                        <i class="st-jian-ico"></i><s></s>
                        {/if}

                        <a href="{$row['url']}">{$row['title']}</a>

                    </li>
                    {/loop}
                    {/st}

                </ul>
            </div>
            <!-- 主导航 -->
            <div class="st-rig">
                <div class="phone-num">{str_replace(array(',',';',':','，'),'<br />',$GLOBALS['cfg_phone'])}</div>
                <span id="loginstatus"></span>
            </div>
        </div>
    </div>
</div>


<script>
    var SITEURL = "{$cmsurl}";
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
                    $txt+= '<a class="dl" href="{Common::get_main_host()}/member/">'+data.user.nickname+  '&nbsp;&nbsp;</a>';
                    $txt+= '<a class="dl" href="{Common::get_main_host()}/member/login/loginout">退出</a></div>';
                    //$txt+= '<a class="dl" href="{$cmsurl}member">个人中心</a>';
                }else{

                    $txt = ' <div class="login-before"><a class="dl" href="{Common::get_main_host()}/member/login">登录</a>|';
                    $txt+= '<a class="zc" href="{Common::get_main_host()}/member/register">注册</a></div>';
                }
                $("#loginstatus").html($txt);
            }
        })

    })
</script>