<?php defined('SYSPATH') or die();?>
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
    {php echo Common::css('amazeui.css,style.css,extend.css');}
    {php echo Common::js('jquery.min.js,amazeui.js,delayLoading.min.js');}

</head>
<body>
{request "pub/header/typeid/$typeid"}
<section>
    <div class="mid_content">
        <div class="am-slider am-slider-default" id="lines-column" >
            <ul class="am-slides">
                {st:ad action="getad" name="s_line_index_1"}
                    {loop $data['aditems'] $v}
                     <li><a href="{$v['adlink']}"><img src="{$defaultimg}" original-src="{Common::img($v['adsrc'],640,214)}" title="{$v['adname']}"></a></li>
                    {/loop}
                {/st}
            </ul>
        </div><!--轮播图-->
        <div class="st_search">
        <div class="st_search_box">
            <input type="text" class="st_home_txt keyword" placeholder="搜索{$channelname}" />
            <input type="button" class="st_home_btn search" value="搜索" />
        </div><!--搜索-->
        </div>
        <div class="hot_cp_slide">
            <h3><span>{$channelname}推荐</span></h3>
            <div class="st-slider">
                <ul class="am-slides">
                    {st:line action="query" flag="order" row="4"}
                        {loop $data $row}
                            <li>
                                <a href="{$row['url']}" title="{$row['title']}">
                                    <div class="pic"><img src="{$defaultimg}" st-src="{Common::img($row['litpic'],308,209)}"  alt="{$row['title']}" /></div>
                                    <div class="rig_txt">
                                        <p class="tit"><span>{if !empty($row['startcity'])}[{$row['startcity']}]{/if}</span>{$row['title']}</p>
                                        <p class="attr">
                                            {loop $row['attrlist'] $v}
                                                <span>{$v['attrname']}</span>
                                            {/loop}
                                        </p>
                                        <p class="num">
                                            {if !empty($row['price'])}
                                             <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$row['price']}</b>起</span>
                                            {else}
                                              <span><b>电询</b></span>
                                            {/if}
                                        </p>
                                     </div>
                                </a>
                            </li>
                        {/loop}
                    {/st}
                </ul>
            </div>
        </div><!--产品推荐-->
        {st:dest action="query" flag="channel_nav" typeid="1" row="3"}
        {loop $data $row}
        <div class="st_hot_list">
            <div class="st_tit">
                <h3>{$row['kindname']}</h3>
            </div>
            <div class="st_list_con">
                <ul class="st_list_ul">
                    {st:line action="query" flag="mdd" destid="$row['id']" return="list" row="4"}
                        {loop $list $h}
                        <li>
                            <a href="{$h['url']}">
                                <p class="pic"><img src="{$defaultimg}" st-src="{Common::img($h['litpic'],302,205)}" alt="{$h['title']}" /></p>
                                <p class="tit">{$h['title']}</p>
                                <p class="num">
                                    {if !empty($h['price'])}
                                     <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$h['price']}</b>起</span>
                                    {else}
                                     <span><b>电询</b></span>
                                    {/if}
                                </p>
                            </a>
                        </li>
                        {/loop}
                    {/st}
                </ul>
                <div class="list_more"><a href="{$cmsurl}lines/{$row['pinyin']}">查看更多</a></div>
                <div style=" clear:both"></div>
            </div>
        </div>
        {/loop}
    {/st}
    </div>
</section>
{request 'pub/code'}
{request 'pub/footer'}
{if !empty($GLOBALS['cfg_m_phone'])}
<a class="call-phone" href="tel:{$GLOBALS['cfg_m_phone']}"></a>
{/if}
<script>
    $(function(){
        //轮播图
        $('#lines-column').flexslider({
            animationSpeed:200,
            slideshowSpeed:3000,
            init:function(slider){
                var imgobj = slider.find('li:lt(2)').find('a img');
                imgobj.attr('src',imgobj.attr('original-src'));
            },
            before:function(slider){

                var index = slider.animatingTo+1;
                var imgobj = slider.find('li:eq('+index+')').find('a img');
                imgobj.attr('src',imgobj.attr('original-src'));
            }
        })



        $('.search').click(function(){
            var keyword = $('.keyword').val();
            var url = SITEURL + 'lines/all';

            if(keyword!=''){
                url+="?keyword="+encodeURIComponent(keyword);
            }
            window.location.href = url;
        })
    })
</script>
</body>
</html>
