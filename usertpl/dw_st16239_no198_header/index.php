{Common::get_user_css('dw_st16239_no198_index/css/header.css')}

<!-- header开始 -->
<div class="st-header">
    <div class="wm-1200">
        <div class="header-block">
            <div class="st-logo">
                {if !empty($GLOBALS['cfg_logo'])}
                <a href="{$GLOBALS['cfg_logourl']}"><img src="{Common::img($GLOBALS['cfg_logo'],70,70)}" alt="{$GLOBALS['cfg_logotitle']}" /></a>
                {/if}<p>全美首家:租车 + 小团</p>
                <p id="phoneNum">{str_replace(array(',',';',':','，'),'<br />',$GLOBALS['cfg_phone'])}</p>
            </div>

            <div class="st-nav">
                <ul class="clearfix">
                    <li><a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a></li>
                    {st:channel action="pc" row="8"}
                    {loop $data $row}
                    <li>
<!--                        {if $row['kind']==1}-->
<!--                        <i class="st-new-ico"></i><s></s>-->
<!--                        {elseif $row['kind']==2}-->
<!--                        <i class="st-hot-ico"></i><s></s>-->
<!--                        {elseif $row['kind']==3}-->
<!--                        <i class="st-jing-ico"></i><s></s>-->
<!--                        {elseif $row['kind']==4}-->
<!--                        <i class="st-jian-ico"></i><s></s>-->
<!--                        {/if}-->

                        {if $row['url']=="https://www.usyilu.com/customize/"}
                            <a href="{$row['url']}">{$row['title']}</a>
                        {elseif $row['title'] == "一路小团"}
                            <a href="{$row['url']}all-0-0-0-0-0-18-1">{$row['title']}</a>
                        {elseif $row['title'] == "一路接机"}
                            <a href="{$row['url']}">{$row['title']}</a>
                        {elseif $row['title'] == "一路租车"}
                            <a href="{$row['url']}">{$row['title']}</a>
                        {elseif $row['title'] == "落地参团"}
                            <a href="{$row['url']}all-0-0-0-0-0-27-1">{$row['title']}</a>
                        {elseif $row['title'] == "特价酒店"}
                            <a href="https://www.usyilu.com/hotels/all">{$row['title']}</a>
                        {else}
                            <a href="https://www.usyilu.com/lines/all-0-0-0-0-0-0-1">{$row['title']}</a>
                        {/if}
<!--                        <a href="{$row['url']}">{$row['title']}</a>-->

                    </li>
                    {/loop}
                    {/st}

                    {st:help action="kind" row="4"}
                    {loop $data $row}
                    <li>
                        {if $row['title'] == '关于我们'}
                        <a href="{$row['url']}" rel="nofollow">{$row['title']}</a>
                        {/if}
                    </li>
                    {/loop}
                    {/st}

                </ul>
            </div>
            <!-- 主导航 -->
            <div class="st-rig">
<!--                <div class="phone-num">{str_replace(array(',',';',':','，'),'<br />',$GLOBALS['cfg_phone'])}</div>-->
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
                    //Di 避免直接暴露ip
//                    $txt+= '<a class="dl" href="{Common::get_main_host()}/member/">'+data.user.nickname+  '&nbsp;&nbsp;</a>';
//                    $txt+= '<a class="dl" href="{Common::get_main_host()}/member/login/loginout">退出</a></div>';

                    $txt+= '<a class="dl" href="{Common::get_web_url()}/member/">'+data.user.nickname+  '&nbsp;&nbsp;</a>';
                    $txt+= '<a class="dl" href="{Common::get_web_url()}/member/login/loginout">退出</a></div>';


                    //$txt+= '<a class="dl" href="{$cmsurl}member">个人中心</a>';
                }else{
                    //Di 避免直接暴露ip
//                    $txt = ' <div class="login-before"><a class="dl" href="{Common::get_main_host()}/member/login">登录</a>|';
//                    $txt+= '<a class="zc" href="{Common::get_main_host()}/member/register">注册</a></div>';

                    $txt = ' <div class="login-before"><a class="dl" href="{Common::get_web_url()}/member/login">登录</a>|';
                    $txt+= '<a class="zc" href="{Common::get_web_url()}/member/register">注册</a></div>';
                }
                $("#loginstatus").html($txt);
            }
        })

    })
</script>