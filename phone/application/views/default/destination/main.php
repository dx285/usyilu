<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
{if $seoinfo['keyword']}
<meta name="keywords" content="{$seoinfo['keyword']}" />
{/if}
{if $seoinfo['description']}
<meta name="description" content="{$seoinfo['description']}" />
{/if}
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
{Common::css('amazeui.css,style.css')}
{Common::js('jquery.min.js,amazeui.js,template.js')}
<script>
	$(function(){
		$('#my-st-slide').offCanvas('close');
		$('.st-slider').flexslider({pauseOnAction: false});
	})
</script>
</head>
<body>

  	{request "pub/header/typeid/$typeid"}

    <section>

        <div class="mid_content">

            <div class="dest_home">

                <div class="dest_hd">
                    {if $destinfo['litpic']}
                    <div class="pic">
                        <img src="{Common::img($destinfo['litpic'],640,435)}" title="{$destinfo['kindname']"/>
                    </div>
                    {/if}
                    <div class="dest_msg">
                        <div class="name">
                            <strong>{$destinfo['kindname']}</strong>
                            <span>{strtoupper($destinfo['pinyin'])}</span>
                        </div>
                    </div>
                </div><!--目的地介绍-->

                <div class="dest_menu">
                    {st:channel action="destchannel" destpinyin="$destinfo['pinyin']" row="100"}
                    {loop $data $row}
                    <a href="{$row['url']}">
                        <span><img src="{$row['ico']}"/>
                        <strong>{$row['title']}</strong>
                         </span>
                    </a>
                    {/loop}
                    {/st}

                </div><!--目的地导航-->

            </div><!--目的地-->
        </div>

    </section>

    {request "pub/footer"}

</body>
</html>
