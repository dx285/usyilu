<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$info['title']}-{$GLOBALS['cfg_webname']}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {Common::css('amazeui.css,style.css,extend.css')}
    {Common::js('jquery.min.js,amazeui.js,template.js,delayLoading.min.js')}
    <script>
        $(function(){
            $('#my-st-slide').offCanvas('close');
        })
    </script>
</head>

<body>

{request "pub/header/typeid/0/isshowpage/1/definetitle/".urlencode($channel)}

    <section>

        <div class="mid_content">

            <div class="st-help-block">
                <h3>{$info['title']}</h3>
                <div class="st-help-show">
                   {Product::strip_style($info['body'])}
                </div>
            </div>
            <!-- 帮助详情 -->

        </div>

    </section>

{request "pub/footer"}
</body>
</html>
