<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS{$coreVersion}短信接口</title>
    {template 'stourtravel/public/public_min_js'}
    {php echo Common::getCss('style.css,base.css,base2.css,upgrade.css'); }
</head>

<body>
<!--顶部-->
<table class="content-tab">
<tr>
    <td width="119px" class="content-lt-td" valign="top">
        {template 'stourtravel/public/leftnav'}
        <!--右侧内容区-->
    </td>
    <td valign="top" class="content-rt-td" style="overflow:auto;">
        <div class="list-top-set">
            <div class="list-web-pad"></div>
            <div class="list-web-ct">
                <table class="list-head-tb">
                    <tr>
                        <td>
                            <div class="w-set-tit bom-arrow">
                                {loop $providerlist $provider}
                                <span {if $n <= 1} class="on" {/if} data-providerid="{$provider['id']}" data-providercfgurl="{$provider['config_url']}" ><s></s>{$provider['name']}</span>
                                {/loop}
                                <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="manage-nr">

            <div class="version_sj">

                <div class="version_list" style=" height: 845px">

                </div>

            </div>

    </td>
</tr>


<!--左侧导航区-->

<!--右侧内容区-->

<script language="JavaScript">
var public_url = "{$GLOBALS['cfg_public_url']}";
var basehost = "{$GLOBALS['cfg_basehost']}";
$(function () {
    //切换
    $('.w-set-tit').find('span').click(function () {
        var providerid = $(this).attr('data-providerid');
        var providercfgurl = basehost + $(this).attr('data-providercfgurl')+"?provider_id="+providerid;
        var html = "<iframe src='" + providercfgurl  + "' width='100%' height='100%' frameborder='0px'></iframe>";

        $(this).addClass('on').siblings().removeClass('on');

        $(".version_list").html(html);
    })

    $('.w-set-tit .on').trigger("click");
})

</script>


</body>
</html>
