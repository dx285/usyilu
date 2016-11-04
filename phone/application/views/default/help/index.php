<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$info['kindname']}-{$GLOBALS['cfg_webname']}</title>

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

            {st:help action="kind" row="30" return="kinds"}
            {loop $kinds $kind}
            <div class="st-help-block">
                <h3>{$kind['title']}</h3>
                <ul>
                    {st:help action="article" row="3" kindid="$kind['id']" return="list"}
                    {loop $list $r}
                       <li><a href="{$r['url']}">{$r['title']}</a><i class="ico"></i></li>
                    {/loop}
                    {/st}
                </ul>
                {if $kind['number']>3}
                <a class="more-link" href="{$kind['url']}">查看更多</a>
                {/if}
            </div>

            {/loop}
            {/st}

            <!-- 帮助分类 -->

        </div>
    </section>
{request "pub/footer"}
</body>
</html>
