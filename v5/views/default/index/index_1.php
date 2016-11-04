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
    {Common::css("base.css,index.css,extend.css",false)}
    {Common::js("jquery.min.js,base.js,common.js,SuperSlide.min.js,delayLoading.min.js")}
</head>
<body>
{request 'pub/header'}
  
  <div class="st-focus-banners">
        <div class="banners">
            <ul>
            		{st:ad action="getad" name="IndexRollingAd" pc="1" return="ad"}
            			{loop $ad['aditems'] $v}
                	<li class="banner"><a href="{$v['adlink']}" target="_blank"><img src="{Product::get_lazy_img()}" original-src="{Common::img($v['adsrc'],1920,420)}" alt="{$v['adname']}" /></a></li>
                	{/loop}
                {/st}
            </ul>
        </div>
        <div class="focus">
            <ul>
            	{loop $ad['aditems'] $k}
            	<li></li>
              {/loop}
            </ul>
        </div>
    </div><!--滚动焦点图结束-->

  <div class="big">
  	<div class="wm-1200">
        {st:channel action="pc" row="20"}
        {loop $data $row}
            {if $row['typeid']< 14 && $row['issystem'] && !in_array($row['typeid'],array(0,6,7,9,10,11,12)) || $row['typeid']=='104'}
                {include 'index/index_1/'.Model_Model::all_model($row['typeid'],'maintable')}
            {/if}
        {/loop}
    </div>
  </div>
 {request 'pub/footer'}
 {request "pub/flink"}
 {Common::js("fcous.js,slideTabs.js")}
    <script>
        $(function(){
            $('.st-slideTab').switchTab();
			//首页焦点图
            $('.st-focus-banners').slide({
                mainCell:".banners ul",
                titCell:".focus li",
                effect:"fold",
                interTime: 5000,
                delayTime: 1000,
                autoPlay:true,
                switchLoad:"original-src"
            });
        })
    </script>

</body>
</html>
