<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$info['modulename']}订单-{$webname}</title>
    {Common::css('user.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,layer/layer.js')}
</head>

<body>

{request "pub/header"}

<div class="big">
    <div class="wm-1200">

        <div class="st-guide">
            <a href="{$cmsurl}">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{$info['modulename']}订单
        </div><!--面包屑-->

        <div class="st-main-page">

            {include "member/left_menu"}

            <div class="user-order-box">
                <iframe frameborder="0" id="iframepage" src="{$info['url']}" style="width:100%;" onload="ReFrameHeight()">

                </iframe>
            </div><!--所有订单-->

        </div>

    </div>
</div>
<script>
    var module_pinyin = "{$info['pinyin']}";
    $(function(){
        $(".user-side-menu #nav_"+module_pinyin+"order").addClass('on');
    });
    function ReFrameHeight() {
        var ifm= document.getElementById("iframepage");
        var subWeb = document.frames ? document.frames["iframepage"].document : ifm.contentDocument;
        if(ifm != null && subWeb != null) {
            ifm.height = subWeb.body.scrollHeight;
        }
    }
</script>
{request "pub/footer"}
</body>
</html>
