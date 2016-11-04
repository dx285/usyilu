<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$webname}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}"/>
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}"/>
    {/if}
    {$GLOBALS['cfg_indexcode']}
    {include "pub/varname"}
    {Common::get_user_css('dw_st16239_no198_index/css/base.css')}
    {Common::get_user_css('dw_st16239_no198_index/css/index.css')}
    {Common::js('jquery.min.js,base.js,common.js,delayLoading.min.js',false)}
    {Common::get_user_js('dw_st16239_no198_index/js/SuperSlide.min.js')}
</head>
<body>

    <!-- header开始 -->
 {request "pub/header"}
    <!-- header结束 -->

    <div class="head-container">

        <!-- 搜索开始 -->
        <div class="header-search">
            <div class="hot-search">
                <input type="text" class="hs-text destname" placeholder="我要去..." />
                <input type="button" class="hs-btn dest-btn" value="搜 索" />
            </div>
            <div class="hot-dest clearfix">
                <span>热门目的地：</span>
                {st:dest action="query" flag="hot" row="5" }
                {loop $data $ad}
                <a href="/{$ad['pinyin']}" target="_blank">{$ad['kindname']}</a>
                {/loop}
                {/st}
            </div>
        </div>
        <!-- 搜索结束 -->

        <!-- 焦点图开始 -->
        <div class="header-slide">
            <div class="bd">
                <ul>
                    {st:ad action="getad" name="No198IndexRollingAd" pc="1" return="ad"}
                    {loop $ad['aditems'] $v}
                    <li class="banner"><a href="{$v['adlink']}" target="_blank"><img src="{Product::get_lazy_img()}" st-src="{Common::img($v['adsrc'],1920,730)}" alt="{$v['adname']}" /></a></li>
                    {/loop}
                    {/st}
                </ul>
            </div>
            <div class="hd"><ul>
                    {loop $ad['aditems'] $v}
                    <li></li>
                    {/loop}
                </ul></div>
        </div>
        <!-- 焦点图结束 -->

    </div>
    <!-- header结束 -->

    <!-- 目的地选择开始 -->
    <div class="big bg-white">
        <div class="wm-1200">

            <div class="dest-content">
                <div class="dest-tit">
                    <h3>目的地选择</h3>
                    <p>好的拍摄点都在这里</p>
                </div>
                <div class="dest-block">
                    <ul class="clearfix">
                        {st:dest action="query" flag="order" row="6" }
                        {php $arrnum = count($data);}
                        {loop $data $ad}
                        <li class="{if $n==1}first{elseif $n==$arrnum}last{elseif $n%3==0}mr_0{/if}">
                            <a href="/{$ad['pinyin']}" target="_blank">
                                <img src="{Product::get_lazy_img()}" st-src="{Common::img($ad['litpic'])}" alt="{$ad['kindname']}" width="{if $n > 1 && $n < 6 }332{else}524{/if}" height="327" />
                                <span>{$ad['kindname']}</span>
                            </a>
                        </li>
                        {/loop}
                        {/st}
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- 目的地选择结束 -->

    <!-- 线路精选开始 -->
    <div class="big bg-grey">
        <div class="wm-1200">

            <div class="line-content">
                <div class="line-tit">
                    <h3>线路精选</h3>
                    <p>你感兴趣的线路都在这里</p>
                </div>
                <div class="line-block">
                    <ul class="clearfix">
                        {st:line action="query" flag="order"  row="6"}
                        {php $arrnum = count($data);}
                        {loop $data $l}
                        <li {if $n % 3 == 0}class="mr_0"{/if}>
                            <div class="pic"><img src="{Product::get_lazy_img()}" st-src="{Common::img($l['litpic'],384,261)}" alt="{$l['title']}" /></div>
                            <div class="buy"><a href="{$l['url']}" target="_blank">立即预定</a></div>
                            <div class="bt"><a href="{$l['url']}" target="_blank">{$l['title']}</a></div>
                            <div class="data clearfix">
                                <span class="day">提前报名天数：<span>{if $l['islinebefore']==1}{$l['linebefore']}{else}0{/if}天</span></span>
                                <span class="jg">
                                    {if !empty($l['price'])}
                                  <strong><i class="currency_sy">{Currency_Tool::symbol()}</i>{$l['price']}</strong>起
                                {else}
                                    电询
                                {/if}
                                </span>
                            </div>
                        </li>
                        {/loop}
                        {/st}

                    </ul>
                </div>
                <a href="{$cmsurl}lines/" target="_blank" class="st-more-link">更多</a>
            </div>

        </div>
    </div>
    <!-- 线路精选结束 -->
	{if St_Functions::is_normal_app_install("jieban")}
    <!-- 组团摄影开始 -->
    <div class="big bg-white">
        <div class="wm-1200">

            <div class="photo-content">
                <div class="photo-tit">
                    <h3>组团摄影</h3>
                    <p>你感兴趣的团队都在这里</p>
                </div>
                <div class="photo-block">
                    <ul class="clearfix">
                        {st:jieban action="query" flag="order"  row="4"}
                        {php $arrnum = count($data);}
                        {loop $data $v}
                        <li{if $n % 4 == 0} class="mr_0"{/if}>
                            <div class="pic">
                               <img src="{Product::get_lazy_img()}" st-src="{Common::img($v['litpic'])}" width="285px" height="193px" alt="{$v['title']}" />
                            </div>
                            <div class="buy"><a href="{$v['url']}" target="_blank">立即加入</a></div>
                            <div class="bt"><a href="{$v['url']}" target="_blank">{$v['title']}</a></div>
                            <div class="data clearfix">
                                <span class="day">剩余时间：<em>{$v['leftday']}天</em></span>
                                <span class="num">已有<em>{$v['joinnum']}</em>人加入</span>
                            </div>
                        </li>
                        {/loop}
                        {/st}
                    </ul>
                </div>
                <a href="{$cmsurl}jieban/" target="_blank" class="st-more-link">更多</a>
            </div>

        </div>
    </div>
	{/if}
    <!-- 组团摄影结束 -->

    <!-- 攻略精选开始 -->
    <div class="big bg-grey">
        <div class="wm-1200">
            <div class="article-content">
                <div class="article-tit">
                    <h3>攻略精选</h3>
                    <p>你感兴趣的旅游攻略推荐都在这里</p>
                </div>
                <div class="article-block">
                    <ul class="clearfix">
                        {st:article action="query" flag="order" row="3"}
                        {php $arrnum = count($data);}
                        {loop $data $gl}
                        <li {if $n % 3 == 0}class="mr_0"{/if}>
                            <div class="pic"><a href="{$gl['url']}" target="_blank"><img src="{Product::get_lazy_img()}" st-src="{Common::img($gl['litpic'],380,233)}" alt="{$gl['title']}"/></a></div>
                            <div class="bt"><a href="{$gl['url']}" target="_blank">{$gl['title']}</a></div>
                            <div class="txt">
                                {if !empty($gl['summary'])}{Common::cutstr_html($gl['summary'],70)}{else}{Common::cutstr_html($gl['content'],70)}{/if}
                            </div>
                            <div class="data clearfix">
                                <span class="gz">{$gl['shownum']}</span>
                                <span class="pl">{$gl['commentnum']}</span>
                            </div>
                        </li>
                        {/loop}
                        {/st}
                    </ul>
                </div>
                <a href="{$cmsurl}raiders/" target="_blank" class="st-more-link">更多</a>
            </div>

        </div>
    </div>
    <!-- 攻略精选结束 -->

    <!-- 通栏广告开始 -->
    {st:ad action="getad" name="No198FootAd" pc="1" row="1"}
    {if !empty($data)}
    <div class="ad-block-img">
        <a href="{$data['adlink']}" target="_blank"><img src="{Common::img($data['adsrc'])}" title="{$data['adname']}"></a>
    </div>
    {/if}
    {/st}
    <!-- 通栏广告结束 -->
{request "pub/footer"}

    <script>
        $(function(){

            //首页滚动图
            $('.header-slide').slide({
                mainCell: ".bd ul",
                titCell: ".hd li",
                effect: "fold",
                interTime: "5000",
                delayTime: "1000",
                autoPlay: true ,
                switchLoad:"st-src"

            });

//            $('.destname').Result({url:SITEURL+'destination/ajax_dest_by_pinyin',extraParams:{typeid:0}});
            //搜索进目的地
            $(".dest-btn").click(function(){
                var destname = $(".destname").val();
                destname = $.trim(destname);
                if(destname==''){
                    $(".destname").focus();
                    return false;
                }else{
                    var url = SITEURL+'search/cloudsearch?keyword='+encodeURIComponent(destname);
                    location.href= url;
                }
            });

        });

    </script>

</body>
</html>
