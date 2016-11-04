<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}"/>
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}"/>
    {/if}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {Common::css('amazeui.css,style.css,extend.css')}
    {Common::js('jquery.min.js,amazeui.js,delayLoading.min.js')}
</head>
<body>
{request "pub/header/typeid/$typeid"}
<section>
    <div class="mid_content">
        <div  class="am-slider am-slider-default" id="cars-column" >
            <ul class="am-slides">
                {st:ad action="getad" name="s_car_index_1"}
                    {loop $data['aditems'] $v}
                    <li><a href="{$v['adlink']}"><img src="{$defaultimg}" original-src="{Common::img($v['adsrc'],640,214)}" title="{$v['adname']}"></a></li>
                    {/loop}
                {/st}
            </ul>
        </div><!--轮播图-->
        <!--轮播图-->
        <div class="st_search">
        <div class="st_search_box">
            <input type="text" class="st_home_txt keyword" placeholder="搜索{$channelname}"/>
            <input type="button" class="st_home_btn search" value="搜索"/>
        </div>
        </div>
        <!--搜索-->
        <div class="hot_cp_slide">
            <h3><span>{$channelname}推荐</span></h3>

            <div class="st-slider">
                <ul class="am-slides">
                    {st:car action="query" kindid="$kind['id']" flag="recommend" row="4"}
                    {loop $data $row}
                    <li>
                        <a href="{$row['url']}">
                            <div class="pic"><img src="{$defaultimg}" st-src="{Common::img($row['litpic'],308,209)}"/></div>
                            <div class="rig_txt">
                                <p class="tit">{$row['title']}</p>

                                <p class="attr">
                                    {loop $row['attrlist'] $v}
                                    <span>{$v['attrname']}</span>
                                    {/loop}
                                </p>

                                <p class="num">
                                    <span>
                                        {if $row['price'] > 0}
                                        <i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$row['price']}</b>起
                                        {else}
                                        <strong>电询</strong>
                                        {/if}
                                    </span>
                                </p>
                            </div>
                        </a>
                    </li>
                    {/loop}
                    {/st}
                </ul>
            </div>
        </div>
        <!--产品推荐-->
        {st:car action="kind" return="kindlist"}
        {loop $kindlist $kind}
        <div class="st_hot_list">
            <div class="st_tit">
                <h3>{$kind['kindname']}</h3>
                <a class="more" href="{$cmsurl}cars/all-{$kind['id']}-0-0-1">更多&gt;</a>
            </div>
            <div class="st_list_con">
                <ul class="st_list_ul">
                    {st:car action="query" kindid="$kind['id']" flag="recommend" row="4"}
                    {loop $data $row}
                    <li>
                        <a href="{$row['url']}">
                            <p class="pic"><img src="{$defaultimg}" st-src="{Common::img($row['litpic'],302,205)}" alt="{$row['title']}"/></p>

                            <p class="tit">{$row['title']}</p>

                            <p class="num">
                                <span>
                                    {if $row['price'] > 0}
                                    <i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$row['price']}</b>起
                                    {else}
                                    <strong>电询</strong>
                                    {/if}
                                </span>
                            </p>
                        </a>
                    </li>
                    {/loop}
                    {/st}

                </ul>
                <div class="list_more"><a href="{$cmsurl}cars/all-{$kind['id']}-0-0-1">查看更多</a></div>
                <div style=" clear:both"></div>
            </div>
        </div>
        <!--商务车-->
        {/loop}
        {/st}
    </div>

</section>
{request 'pub/code'}
{request 'pub/footer'}
<script>
    $(function () {
        //轮播图
        //首页轮播图
        $('#cars-column').flexslider({

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
        $('.search').click(function () {
            var url = SITEURL + 'cars/all';
            var keyword = $('.keyword').val();
            if(keyword!=''){
                url+="?keyword="+encodeURIComponent(keyword);
            }
            window.location.href = url;
        })
    })
</script>
</body>
</html>
