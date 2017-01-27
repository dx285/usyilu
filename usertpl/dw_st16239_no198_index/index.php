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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    {Common::get_user_css('dw_st16239_no198_index/css/base.css')}
    {Common::get_user_css('dw_st16239_no198_index/css/index.css')}
    <!-- Di 添加额外css 修改新路线界面展示   -->
    {Common::js('jquery.min.js,base.js,common.js,delayLoading.min.js',false)}
    {Common::get_user_js('dw_st16239_no198_index/js/SuperSlide.min.js')}


    {Common::get_user_css('dw_st16239_no198_index/css/newCss.css')}


</head>
<body>

<!-- header开始 -->
{request "pub/header"}
<!-- header结束 -->

<div class="head-container">

    <!--Di comment out    -->
    <!-- 搜索开始 -->
    <div class="header-search">
        <div class="hot-search">
            <input type="text" class="hs-text destname" placeholder="我要去..." />
            <input type="button" class="hs-btn dest-btn" value="搜 索" />
        </div>
        <div class="hot-dest clearfix">
<!--            <span>热门目的地：</span>-->
<!--            {st:dest action="query" flag="hot" row="5" }-->
<!--            {loop $data $ad}-->
<!--            <a href="/{$ad['pinyin']}" target="_blank">{$ad['kindname']}</a>-->
<!--            {/loop}-->
<!--            {/st}-->
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




<div class="big bg-white">
    <div class="wm-1200">
            <div class="images">
                <img class="single-ad" src="https://www.usyilu.com/uploads/2016/1123/7eec8aae940cb60883e2a3d85e8d4967_1920x730.jpg" >
                <img class="single-ad" src="https://www.usyilu.com/uploads/2016/1123/633d904480a10da60330ba520bce2558_1920x730.jpg" alt="">
            </div>
    </div>
</div>
<!-- 目的地选择结束 -->



<!-- 目的地选择开始 -->
<div class="big bg-white">
    <div class="wm-1200">

        <div class="dest-content">
            <div class="dest-tit">
                <h3>热门城市</h3>
            </div>
            <div class="hot-block">
                <ul class="clearfix">
                    {st:dest action="query" flag="order" row="7" }
                    {php $arrnum = count($data);}
                    {loop $data $ad}
                    <li class="">
                        <!-- Di change link  -->
                        <div class="img-link">
<!--                            <a href="lines/{$ad['pinyin']}" target="_blank" class="img-link-a">-->
                                <!--                            <a href="/{$ad['pinyin']}" target="_blank">-->
                                <img src="{Product::get_lazy_img()}" st-src="{Common::img($ad['litpic'])}" alt="{$ad['kindname']}" width="100%" height="450" />
                            <a href="lines/{$ad['pinyin']}" target="_blank" class="img-link-a"><span>{$ad['kindname']}</span>
                            </a>
                            <div class="img-link-buttons">
                                <!--   Indicates a dangerous or potentially negative action -->
                                {if $ad['kindname'] == '拉斯维加斯'}
                                    <button onclick="location.href='https://www.usyilu.com/cars/{$ad['pinyin']}/';" type="button" class="btn btn-danger btn-lg cusmize-btn">
                                    <p>拉斯接送机</p>
                                {elseif $ad['kindname'] == '纽约' or $ad['kindname'] == '黄石'}
                                    <button onclick="location.href='https://www.usyilu.com/cars/{$ad['pinyin']}/';" type="button" class="btn btn-danger btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}接送机</p>
                                {else}
                                    <button onclick="location.href='https://www.usyilu.com/cars/{$ad['pinyin']}/';" type="button" class="btn btn-danger btn-lg three-words-city cusmize-btn">
                                    <p>{$ad['kindname']}接送机</p>
                                </button>
                                {/if}


                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                {if $ad['kindname'] == '拉斯维加斯'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-79-27-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>拉斯落地参团</p>
                                {elseif $ad['kindname'] == '纽约'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-75-27-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}落地参团</p>
                                {elseif $ad['kindname'] == '华盛顿'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-77-27-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}落地参团</p>
                                {elseif $ad['kindname'] == '波士顿'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-76-27-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}落地参团</p>
                                {elseif $ad['kindname'] == '黄石'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-78-27-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}落地参团</p>
                                {elseif $ad['kindname'] == '洛杉矶'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-80-27-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}落地参团</p>
                                {elseif $ad['kindname'] == '旧金山'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-81-27-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                            <p>{$ad['kindname']}落地参团</p>
                                </button>
                                {/if}

                                <!-- Indicates caution should be taken with this action -->
                                {if $ad['kindname'] == '拉斯维加斯'}
                                    <button onclick="location.href='https://www.usyilu.com/cars/{$ad['pinyin']}/';" type="button" class="btn btn-warning btn-lg cusmize-btn">
                                    <p>拉斯租车</p>

                                {else}
                                    <button onclick="location.href='https://www.usyilu.com/cars/{$ad['pinyin']}/';" type="button" class="btn btn-warning btn-lg cusmize-btn ">
                                    <p>{$ad['kindname']}租车</p>
                                </button>
                                {/if}

                                <!-- Contextual button for informational alert messages -->
                                {if $ad['kindname'] == '拉斯维加斯'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/{$ad['pinyin']}-0-0-0-0-0-5-1';" type="button" class="btn btn-info btn-lg cusmize-btn">
                                    <p>拉斯自驾</p>
                                
                                {else}
                                    <button onclick="location.href='https://www.usyilu.com/lines/{$ad['pinyin']}-0-0-0-0-0-5-1';" type="button" class="btn btn-info btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}自驾</p>
                                </button>
                                {/if}

                                <!-- Indicates a successful or positive action -->
                                {if $ad['kindname'] == '拉斯维加斯'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-79-18-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>拉斯小团</p>
                                {elseif $ad['kindname'] == '纽约'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-75-18-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}小团</p>
                                {elseif $ad['kindname'] == '华盛顿'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-77-18-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}小团</p>
                                {elseif $ad['kindname'] == '波士顿'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-76-18-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}小团</p>
                                {elseif $ad['kindname'] == '黄石'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-78-18-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}小团</p>
                                {elseif $ad['kindname'] == '洛杉矶'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-80-18-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}小团</p>
                                {elseif $ad['kindname'] == '旧金山'}
                                    <button onclick="location.href='https://www.usyilu.com/lines/all-0-0-0-0-81-18-1/';" type="button" class="btn btn-success btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}小团</p>

                                </button>
                                {/if}

                                <!-- Secondary, outline button -->
                                {if $ad['kindname'] == '拉斯维加斯'}
                                    <button onclick="location.href='https://www.usyilu.com/customize/';" type="button" class="btn btn-secondary btn-lg cusmize-btn">
                                    <p>拉斯包车</p>
                                {elseif $ad['kindname'] == '纽约'}
                                    <button onclick="location.href='https://www.usyilu.com/customize/';" type="button" class="btn btn-secondary btn-lg cusmize-btn">
                                    <p>{$ad['kindname']}包车</p>
                                {else}
                                    <button onclick="location.href='https://www.usyilu.com/customize/';" type="button" class="btn btn-secondary btn-lg cusmize-btn ">
                                    <p>{$ad['kindname']}包车</p>
                                </button>
                                {/if}

                            </div>
                        </div>
                    </li>
                    {/loop}
                    {/st}
                </ul>
            </div>
        </div>

    </div>

</div>
<!-- 目的地选择结束 -->



<!-- Di switch 路线精选和city -->
<!-- 线路精选开始 -->
<div class="big bg-grey">
    <div class="wm-1200">

        <div class="line-content">
            <div class="line-tit">
                <h3>一路精品参团-热门路线</h3>
                <p>全美首家 漫游慢走 100%出团 5到10人</p>
            </div>
            <div class="line-block">
                <ul class="clearfix">
                    {st:line action="query" flag="order"  row="3"}
                    {php $arrnum = count($data);}
                    {loop $data $l}
                    <li {if $n % 3 == 0}class="mr_0"{/if}>
                    <div class="pic"><img src="{Product::get_lazy_img()}" st-src="{Common::img($l['litpic'],384,261)}" alt="{$l['title']}" /></div>
                    <div class="buy"><a href="{$l['url']}" target="_blank">立即预定</a></div>
                    <!-- test  <div class="buy"><a href="{$l['url']}" target="_blank">{$l['url']}</a></div>-->
                    <!--  url没有www                  -->
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
            <!-- Di change link           -->
            <a href="{$cmsurl}lines/all" target="_blank" class="st-more-link">更多</a>
            <!--            <a href="{$cmsurl}lines/" target="_blank" class="st-more-link">更多</a>-->
        </div>

    </div>
</div>
<!-- 线路精选结束 -->


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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

</body>
</html>
