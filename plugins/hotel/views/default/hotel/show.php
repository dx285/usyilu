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
    {include "pub/varname"}
    {Common::css_plugin('hotel.css,calendar.css','hotel')}
    {Common::css('base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,template.js')}

<script>
	$(function(){
		$(".hpic-slide").slide({mainCell:".bd ul",delayTime:0,trigger:"click"});
	})
</script>
</head>

<body>

{request "pub/header"}
{if St_Functions::is_normal_app_install('coupon')}
    {request 'coupon/float_box'}
    {/if}

  <div class="big">
  	<div class="wm-1200">
    
    	<div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="/hotels/">{$channelname}</a>&gt;&nbsp;&nbsp;
            {loop $predest $dest}
            <a href="/hotels/{$dest['pinyin']}/">{$dest['kindname']}</a>
            {/loop}
            {$info['title']}
        </div><!--面包屑-->
      
      <div class="st-main-page">
      	<div class="st-hotel-show">
        	<div class="hotelshow-tw">
            <div class="focus-slide">
              <div class="imgnav" id="imgnav"> 
                <div id="img">
                    {loop $info['piclist'] $pic}
                     <img src="{Common::img($pic[0],460,312)}"/>
                    {/loop}

                  <div id="front" title="上一张"><a href="javaScript:void(0)" class="pngFix"></a></div>
                  <div id="next" title="下一张"><a href="javaScript:void(0)" class="pngFix"></a></div>
                </div>
                <div id="cbtn">
                  <i class="picSildeLeft"><img src="{$GLOBALS['cfg_public_url']}images/picSlideLeft.gif"/></i>
                  <i class="picSildeRight"><img src="{$GLOBALS['cfg_public_url']}images/picSlideRight.gif"/></i>
                  <div id="cSlideUl">
                    <ul>
                        {loop $info['piclist'] $pic}
                            <li><img src="{Common::img($pic[0],90,61)}"/></li>
                        {/loop}
                    </ul>
                  </div>
                </div>         
              
              </div>
            </div>
            <div class="cp-show-msg">
            	<div class="hs-title">
              	<h1>
                    {$info['title']}
                    {loop $info['iconlist'] $icon}
                    <img src="{$icon['litpic']}" />
                    {/loop}
                </h1>
                <p>{$info['address']}</p>
              </div>
              <div class="price">
                  {if !empty($info['price'])}
                    <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$info['price']}</b>起</span>
                  {else}
                    <span>电询</span>
                  {/if}
              </div>
              <div class="sl">
              	<span>销量：{$info['sellnum']}</span><s>|</s><span class="myd">满意度：5.0</span><s>|</s><span>推荐：{$info['recommendnum']}</span>
              </div>
              <ul class="msg-ul">
              	<li><em>酒店星级：</em><p>{$info['hotelrank']}</p></li>
                <li><em>开业时间：</em><p>{$info['opentime']}</p></li>
                <li><em>装修时间：</em><p>{$info['decoratetime']}</p></li>
                <li><em>酒店电话：</em><p>{$info['telephone']}</p></li>
                <li class="mb_0"><em>付款方式：</em>
                    <p>
                        {php $paymethod = Product::get_paytype_list();}
                        {loop $paymethod $method}
                        <img src="{$GLOBALS['cfg_public_url']}images/{$method['ico']}" />
                        {/loop}
                    </p>
                </li>
              </ul>	
            </div>
          </div>
          <div class="hotelshow-con">
          	<div class="tabnav-list">
            	<span class="on">房型</span>
                {st:detailcontent action="get_content" pc="1" typeid="$typeid" productinfo="$info" return="hotelcontent"}
                    {loop $hotelcontent $row}
                    <span>{$row['chinesename']}</span>
                    {/loop}
                {/st}
            	<span>客户评价</span>
            	<span>我要咨询</span>
            </div><!--酒店导航-->
            <div class="tabbox-list">

            <div class="tabcon-list">
                <div class="roomtype-con">
                    <table width="100%" border="0">
                        <tbody><tr class="room-attr">
                            <th width="213" height="40" scope="col"><span class="pl20">房型</span></th>
                            <th width="60" scope="col">床型</th>
                            <th width="60" scope="col">餐标</th>
                            <th width="60" scope="col">原价</th>
                            <th width="60" scope="col">优惠价</th>
                            <th width="80" scope="col">支付方式</th>
                            <th width="250" scope="col">&nbsp;</th>
                            <th scope="col">&nbsp;</th>
                        </tr>

                        {st:hotel action="suit" row="10" productid="$info['id']" return="roomlist"}

                        {loop $roomlist $room}

                        <tr data-more="more_{$room['id']}">
                            <td height="40" class="room" style="cursor: pointer">
                                <strong class="type-tit">{$room['title']}</strong>

                                {if !empty($room['piclist'])}

                                <i class="pic-ico"></i>

                                {/if}

                            </td>
                            <td align="center"><span>{$room['roomstyle']}</span></td>
                            <td align="center"><span>{$room['breakfirst']}</span></td>
                            <td align="center"><span>{if $room['sellprice']}{Currency_Tool::symbol()}{$room['sellprice']}{/if}</span></td>
                            <td align="center"><span class="yh">{if $room['price']}{Currency_Tool::symbol()}{$room['price']}{else}电询{/if}</span></td>
                            <td>{if !empty($room['paytype_name'])}<span class="fk-way">{$room['paytype_name']}</span>{/if}</td>
                            <td>
                                {if !empty($room['jifenbook'])}
                                <span class="s-jf">{$room['jifenbook']}分<i></i></span>
                                {/if}

                                {if !empty($room['jifencomment'])}
                                <span class="p-jf">{$room['jifencomment']}分<i></i></span>
                                {/if}

                                {if !empty($room['jifentprice'])}
                                <span class="d-jf">{$room['jifentprice']}元<i></i></span>
                                {/if}
                            </td>
                            <td><a class="booking-btn" {if empty($room['price'])}style="color: #fff;background-color: #999;cursor: default;"{/if} href="{if $room['price']}/hotels/book?suitid={$room['id']}&hotelid={$room['hotelid']}{else}javascritp:;{/if}">{if empty($room['price'])}不可{/if}预订</a></td>
                        </tr>
                        <tr style="display: none">
                            <td height="40" colspan="8" >
                                <div class="roomtype-sheshi">

                                    {if count($room['piclist'])>0}

                                    <div class="images-con">
                                        <img class="show-pic" src="{$room['piclist'][0][0]}">
                                        <span class="ck"><em>查看全部{count($room['piclist'])}张图片</em></span>
                                    </div>

                                    {/if}

                                    <ul class="type-attr">
                                        <li>面积：{$room['roomarea']}平方米</li>
                                        <li>楼层：{$room['roomfloor']}层</li>
                                        <li>房间：{$room['number']}间</li>
                                        <li>窗户：{$room['roomwindow']}</li>
                                        <li>宽带：{$room['computer']}</li>
                                    </ul>

                                    {if !empty($room['description'])}
                                    <div class="type-sm">
                                        房型说明：{Common::cutstr_html($room['description'],2000)}
                                    </div>
                                    {/if}

                                    <div class="pic-fixed-box" style=" display:none">
                                        <div class="zoom-images-box">
                                            <div id="hpic-slide" class="hpic-slide">
                                                <div class="bd">
                                                    <h3>{$room['title']}</h3>
                                                    <ul>

                                                        {loop $room['piclist'] $pic}
                                                        <li><img src="{Common::img($pic[0],456,330)}"></li>
                                                        {/loop}

                                                    </ul>
                                                    <a class="prev" href="javascript:void(0)"></a>
                                                    <a class="next" href="javascript:void(0)"></a>
                                                </div>
                                                <div class="hd">
                                                    <div class="hp-closed"><span></span></div>
                                                    <ul>

                                                        {loop $room['piclist'] $pic}
                                                        <li class="on"><img src="{Common::img($pic[0],110,74)}"></li>
                                                        {/loop}

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        {/loop}

                        {/st}

                        </tbody>
                    </table>
                </div>
            </div>


                {loop $hotelcontent $hotel}
            	    <div class="tabcon-list">
              	<div class="list-tit"><strong>{$hotel['chinesename']}</strong></div>
                <div class="list-txt">
                    {$hotel['content']}
                </div>
              </div>
                {/loop}
                {include "pub/comment"}
                {include "pub/ask"}
              
            </div>
          </div>
        </div><!--详情主体-->
        <div class="st-sidebox">
            {st:right action="get" typeid="$typeid" data="$templetdata" pagename="show"}
        </div><!--边栏模块-->
      </div>
    
    </div>
  </div>

{request "pub/footer"}

{request "pub/flink"}
{Common::js('floatmenu/floatmenu.js')}
{Common::js('SuperSlide.min.js,template.js,scorll.img.js')}
{Common::css('/res/js/floatmenu/floatmenu.css',0,0)}
<script type="text/javascript">
$(document).ready(function(){                          



    //展示房型详细信息
    $('.room').click(function(){
        $(this).parent().next().toggle();
    })
    //展示更新房型图片
    $('.ck').click(function(){
        $(this).parents('.roomtype-sheshi').first().find('.pic-fixed-box').show();
    })
    //关闭图层显示
    $(".hp-closed").click(function(){
        $(this).parents(".pic-fixed-box").first().hide();
    })
    //内容切换
    $.floatMenu({
        menuContain : '.tabnav-list',
        tabItem : 'span',
        chooseClass : 'on',
        contentContain : '.tabbox-list',
        itemClass : '.tabcon-list'
    });
    $('.booking-btn').click(function(){
        if(!is_login_order()){
            return false;
        }
    });
});
</script>
{include "member/login_order"}
</body>
</html>
