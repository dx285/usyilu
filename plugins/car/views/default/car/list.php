<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--    <title>{if !empty($destinfo['seotitle'])}{$destinfo['seotitle']}{else}{$searchtitle}{/if}-{$GLOBALS['cfg_webname']}</title>-->
    <title>{$GLOBALS['cfg_webname']}</title>
    {$destinfo['keyword']}
    {$destinfo['description']}
<!--    {include "pub/varname"}-->
    {Common::css_plugin('car.css','car')}
    {Common::css('base.css,extend.css')}
<!--    {Common::js('jquery.min.js,base.js,common.js,delayLoading.min.js')}-->
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,template.js')}


    <script type="text/javascript" src="/tools/js/DatePicker/WdatePicker.js"></script>
    <link rel="stylesheet" href="/tools/js/DatePicker/jquery-timepicker2/jonthornton-jquery-timepicker-0aea507/jquery.timepicker.css">
    <script type="text/javascript" src="/tools/js/DatePicker/jquery-timepicker2/jonthornton-jquery-timepicker-0aea507/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="/tools/js/js-cookie-master/src/js.cookie.js"></script>
<!--    <script type="text/javascript" src="/tools/js/notify.min.js"></script>-->
<!--    <script>-->
<!--        $.notify.defaults({autoHideDelay:2500});-->
<!---->
<!--    </script>-->



</head>
<body>
{request "pub/header"}
  
  <div class="big">
  	<div class="wm-1200">
    
<!--    	<div class="st-guide">-->
<!--            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="{$cmsurl}cars/">{$channelname}</a>-->
<!--        </div><!--面包屑-->

        <!--背景图-->
        <div class="header-slide">
            <div class="bd">
                <ul>
                    <li class="banner"><a href="" target="_blank"><img class="" src="" ></a></li>
                </ul>
            </div>
        </div>

        <div class="st-car-home-top" style="background-image: url(/uploads/2017/0113/car_backgroundImg1.jpg);">

            <ul class="tab">
                <li><a href="javascript:void(0)" class="tablinks" id="defaultOpen" onclick="openCity(event, 'jieji')">接机</a></li>
                <li><a href="javascript:void(0)" class="tablinks" id="songjiTab" onclick="openCity(event, 'songji')">送机</a></li>
            </ul>

            <form id="jiejiForm" name="cusfrm" method="post" action="" >


                <div id="jieji" class="st-car-search tabcontent">
                    <dl class="search-dl">
                        <!--                <dt class="item">选择日期</dt>-->
                        <dd class="con"><input type="text" class="custom-default-text up-ico-day noblank endtime_jieji jieji-searchattr-submit" id="jieji-date" name="jieji-date" placeholder="选择日期(必选)" name="days" style="font-size:14px; " /></dd>
                    </dl>

                    <dl class="search-dl">
                        <!--                <dt class="item">选择时间</dt>-->
                        <dd class="con"><input type="text" class="custom-default-text up-ico-day pickTime jieji-searchattr-submit" placeholder="选择时间(必选)" id="jieji-time" name="jieji-time" style="font-size:14px;" /></dd>
                    </dl>

                    {st:attr action="query" flag="grouplist" row="8" typeid="$typeid" return="grouplist"}
                    {loop $grouplist $group}
                    {if $group['attrname'] == '送机机场' or $group['attrname'] == '出发地点'}
                    {elseif $group['attrname'] == '邮编'}
                    <dl class="search-dl">
                        <!--                    <dt></dt>-->
                        <dd>
                            <input type="text" class="cs-text up-ico youbian jieji-searchattr searchattr jieji-searchattr-submit" id="jieji-zipcode" name="jieji-zipcode" placeholder="{$group['attrname']}" data-id="0" readonly/>
                            <input type="hidden" class="cs-text up-ico youbian  searchattr" id="jieji-zipcode-bool" name="jieji-zipcode-bool" value="true" />

                            <div class="cs-select-box">
                                {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                                {loop $data $r}
                                <span data-id="{$r['id']}">{$r['title']}</span>

                                {/loop}
                                {/st}
                                <script type="text/javascript">
                                    var zipcodes = <?php echo json_encode($data); ?>;
                                    //console.log("zipcode array: "+JSON.stringify(zipcodes, null, 2));
                                    var zipcodeHashMap = {};

                                    //console.log("zipcode element: "+zipcodes[0]['id']);
                                    //console.log("zipcode element: "+zipcodes[0]['title']);
                                    for(zipcode of zipcodes){
                                        //console.log("zipcode: "+zipcode);
                                        zipcodeHashMap[zipcode['title']] = zipcode['id'];
                                    }

                                </script>
                            </div>
                        </dd>
                    </dl>
                    {elseif $group['attrname'] == '接送地点'}
                    <dl class="search-dl">
                        <!--                <dt></dt>-->
                        <dd>
                            <input type="text" class="cs-text up-ico jieji-searchattr-submit" id="jieji-addr" name="jieji-addr" placeholder="送达地点(必填)"   data-id="0"  />
                            <div class="cs-select-box">
                                <!--                        {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}-->
                                <!--                        {loop $data $r}-->
                                <span data-id="{$r['id']}">{$r['title']}</span>
                                <!--                        {/loop}-->
                                <!--                        {/st}-->

                            </div>
                        </dd>
                    </dl>
                    {elseif $group['attrname'] == '机场'}
                    <dl class="search-dl">
                        <!--                <dt></dt>-->
                        <dd>
                            <input type="text" class="cs-text up-ico jichang jieji-searchattr searchattr jieji-searchattr-submit" id="jieji-airport" name="jieji-airport" placeholder="{$group['attrname']}(必选)"   data-id="0" />
                            <div class="cs-select-box">
                                {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                                {loop $data $r}
                                <span data-id="{$r['id']}">{$r['title']}</span>
                                {/loop}
                                {/st}

                                <script type="text/javascript">
                                    var airports = <?php echo json_encode($data); ?>;
                                    var airportBool = true;
                                    //console.log("airports array: "+JSON.stringify(airports, null, 2));
                                    var airportsHashMap = {};

                                    //console.log("airports element: "+airports[0]['id']);
                                    //console.log("airports element: "+airports[0]['title']);
                                    for(airport of airports){
                                        console.log("airport: "+airport);
                                        airportsHashMap[airport['title']] = airport['id'];
                                    }

                                </script>

                            </div>
                        </dd>
                    </dl>
                    {elseif $group['attrname'] == '航班'}
                    <dl class="search-dl">
                        <!--                <dt></dt>-->
                        <dd>
                            <input type="text" class="cs-text up-ico jieji-searchattr-submit" id="jieji-flightNum" name="jieji-flightNum" placeholder="{$group['attrname']}(必填)"   data-id="0" />
                            <!--                    <div class="cs-select-box">-->
                            <!--                        {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}-->
                            <!--                        {loop $data $r}-->
                            <!--                        <span data-id="{$r['id']}">{$r['title']}</span>-->
                            <!--                        {/loop}-->
                            <!--                        {/st}-->
                            <!--                    </div>-->
                        </dd>
                    </dl>

                    {/if}

                    {/loop}

<!--                    <dl class="search-dl">-->
<!--                        <!--                <dt class="item">选择日期</dt>-->
<!--                        <dd class="con"><input type="text" class="custom-default-text up-ico-day noblank endtime_jieji jieji-searchattr-submit" id="jieji-date" name="jieji-date" placeholder="选择日期(必选)" name="days" style="font-size:14px; " /></dd>-->
<!--                    </dl>-->
<!---->
<!--                    <dl class="search-dl">-->
<!--                        <!--                <dt class="item">选择时间</dt>-->
<!--                        <dd class="con"><input type="text" class="custom-default-text up-ico-day pickTime jieji-searchattr-submit" placeholder="选择时间(必选)" id="jieji-time" name="jieji-time" style="font-size:14px;" /></dd>-->
<!--                    </dl>-->


                    {st:attr action="query" flag="grouplist" row="5" typeid="$typeid" return="grouplist"}
                    {loop $grouplist $group}
                    {if $group['attrname'] == '专拼'}
                    <dl class="search-dl">
                        <!--                <dt></dt>-->
                        <dd>
                            <input type="text" class="cs-text up-ico searchattr zhuanpin jieji-searchattr jieji-searchattr-submit" id="jieji-zhuanpin" name="jieji-zhuanpin" placeholder="{$group['attrname']}(必选)"   data-id="0"  />
                            <div class="cs-select-box">
                                {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                                {loop $data $r}
                                <span data-id="{$r['id']}">{$r['title']}</span>
                                {/loop}
                                {/st}

                                <script type="text/javascript">
                                    var zhuanpins = <?php echo json_encode($data); ?>;
                                    var zhuanpinBool = true;
                                    //console.log("zhuanpins array: "+JSON.stringify(zhuanpins, null, 2));
                                    var zhuanpinsHashMap = {};

                                    //console.log("airports element: "+zhuanpins[0]['id']);
                                    //console.log("airports element: "+zhuanpins[0]['title']);
                                    for(zp of zhuanpins){
                                        //console.log("专拼: "+zp);
                                        zhuanpinsHashMap[zp['title']] = zp['id'];
                                    }

                                    //console.log("key: JFK, value: "+zhuanpinsHashMap['JFK']);
                                </script>

                            </div>
                        </dd>
                    </dl>
                    {/if}
                    {/loop}

                    <input type="submit" value="接机搜索" name="jiejiBtn" class="car-search-btn clearbtn" onClick="return isValidateJieji(this)">
                </div><!--接车搜索-->
            </form>



            <form class="songjiForm" id="songjiForm" name="cusfrm" method="post" action="" >  <!-- action="{$cmsurl}customize/ajax_save" -->

                <!--送车搜索-->
                <div id="songji" class="st-car-search tabcontent">

                    <dl class="search-dl">
                        <dt class="item" style="display: none;">选择日期</dt>
                        <dd class="con"><input type="text" class="custom-default-text up-ico-day noblank2 endtime_songji songji-searchattr-submit" id="songji-date" name="songji-date" placeholder="选择日期(必选)" name="days" style="font-size:14px; " /></dd>
                    </dl>

                    <dl class="search-dl">
                        <dt class="item" style="display: none;">选择时间</dt>
                        <dd class="con"><input type="text" class="custom-default-text up-ico-day pickTime_songji songji-searchattr-submit" id="songji-time" placeholder="选择时间(必选)" name="songji-time" style="font-size:14px;" /></dd>
                    </dl>
                    {st:attr action="query" flag="grouplist" row="10" typeid="$typeid" return="grouplist"}
                    {loop $grouplist $group}
                    {if $group['attrname'] == '邮编'}
                    <dl class="search-dl">
                        <dt style="display: none;">{$group['attrname']}</dt>
                        <dd>
                            <input type="text" class="cs-text up-ico searchattr songji-searchattr songji-searchattr-submit" id="songji-zipcode" name="songji-zipcode" placeholder="{$group['attrname']}"  data-id="0" readonly />
                            <input type="hidden" class="cs-text up-ico youbian  searchattr" id="songji-zipcode-bool" name="songji-zipcode-bool" value="true" />

                            <div class="cs-select-box">
                                {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                                {loop $data $r}
                                <span data-id="{$r['id']}">{$r['title']}</span>
                                {/loop}
                                {/st}
                                <script type="text/javascript">


                                </script>

                            </div>
                        </dd>
                    </dl>
                    {elseif $group['attrname'] == '接送地点'}
                    <dl class="search-dl">
                        <dt style="display: none;">{$group['attrname']}</dt>
                        <dd>
                            <input type="text" class="cs-text up-ico songji-searchattr-submit" placeholder="送机地点(必填)" id="songji-addr" name="songji-addr"  data-id="0" />
                            <div class="cs-select-box">
                                {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                                {loop $data $r}
                                <span data-id="{$r['id']}">{$r['title']}</span>
                                {/loop}
                                {/st}

                            </div>
                        </dd>
                    </dl>
                    {elseif $group['attrname'] == '机场'}
                    <dl class="search-dl">
                        <dt style="display: none;">{$group['attrname']}</dt>
                        <dd>
                            <input type="text" class="cs-text up-ico searchattr songji-searchattr songji-searchattr-submit" id="songji-airport" name="songji-airport" placeholder="{$group['attrname']}(必选)" data-="0" />
                            <div class="cs-select-box">
                                {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                                {loop $data $r}
                                <span data-id="{$r['id']}">{$r['title']}</span>
                                {/loop}
                                {/st}

                                <script type="text/javascript">
                                    var songjiAirportBool = true;

                                    console.log("key: JFK, value: "+airportsHashMap['JFK']);


                                </script>

                            </div>
                        </dd>
                    </dl>
                    {elseif $group['attrname'] == '航班'}
                    <dl class="search-dl">
                        <dt style="display: none;">{$group['attrname']}</dt>
                        <dd>
                            <input type="text" class="cs-text up-ico songji-searchattr-submit" id="songji-flightNum" name="songji-flightNum" placeholder="{$group['attrname']}(必填)" data-id="0" />
                            <!--                      <div class="cs-select-box">-->
                            <!--                          {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}-->
                            <!--                          {loop $data $r}-->
                            <!--                          <span data-id="{$r['id']}">{$r['title']}</span>-->
                            <!--                          {/loop}-->
                            <!--                          {/st}-->
                            <!---->
                            <!--                      </div>-->
                        </dd>
                    </dl>
                    {/if}

                    {/loop}

<!--                    <dl class="search-dl">-->
<!--                        <dt class="item" style="display: none;">选择日期</dt>-->
<!--                        <dd class="con"><input type="text" class="custom-default-text up-ico-day noblank2 endtime_songji songji-searchattr-submit" id="songji-date" name="songji-date" placeholder="选择日期(必选)" name="days" style="font-size:14px; " /></dd>-->
<!--                    </dl>-->
<!---->
<!--                    <dl class="search-dl">-->
<!--                        <dt class="item" style="display: none;">选择时间</dt>-->
<!--                        <dd class="con"><input type="text" class="custom-default-text up-ico-day pickTime_songji songji-searchattr-submit" id="songji-time" placeholder="选择时间(必选)" name="songji-time" style="font-size:14px;" /></dd>-->
<!--                    </dl>-->

                    {st:attr action="query" flag="grouplist" row="5" typeid="$typeid" return="grouplist"}
                    {loop $grouplist $group}
                    {if $group['attrname'] == '专拼'}
                    <dl class="search-dl">
                        <!--                <dt></dt>-->
                        <dd>
                            <input type="text" class="cs-text up-ico searchattr songji-searchattr songji-searchattr-submit" id="songji-zhuanpin" name="songji-zhuanpin" placeholder="{$group['attrname']}(必选)"   data-id="0"  />
                            <div class="cs-select-box">
                                {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                                {loop $data $r}
                                <span data-id="{$r['id']}">{$r['title']}</span>
                                {/loop}
                                {/st}

                                <script type="text/javascript">

                                    var songjiZPBool = true;

                                </script>

                            </div>
                        </dd>
                    </dl>
                    {/if}
                    {/loop}
                    <!--              <div class="car-search-btn-songji"><a href="javascript:;">送机搜索</a></div>-->
                    <input type="submit" value="送机搜索" name="songjiBtn" class="car-search-btn-songji" onClick="return isValidateSongji(this)">

                </div>
            </form>
        </div>
        <!--送车搜索-->

      <div class="st-main-page st-car-search-center">
      	<div class="st-carlist-box">
          <div class="st-list-search">
<!--          	<div class="been-tj" {if count($chooseitem)<1}style="display:none"{/if}>-->
<!--            	<strong>已选条件：</strong>-->
<!--              <p>-->
<!--                  {loop $chooseitem $item}-->
<!--                     <span class="chooseitem" data-url="{$item['url']}">{$item['itemname']}<i></i></span>-->
<!--                  {/loop}-->
<!--                  <a href="javascript:;" class="clearc">清空筛选条件 </a>-->
<!--              </p>-->
<!--            </div>-->
            <div class="line-search-tj" >
<!--                <dl class="type"  >-->
<!--                    <dt>目的地：</dt>-->
<!--                    <dd>-->
<!--                        <p>-->
<!--                            {st:dest action="query" typeid="$typeid" flag="nextsame" row="100" pid="$destid" return="destlist"}-->
<!--                            {loop $destlist $dest}-->
<!--                            <a href="{$cmsurl}cars/{$dest['pinyin']}/">{$dest['kindname']}</a>-->
<!--                            {/loop}-->
<!--                            {/st}-->
<!--                        </p>-->
<!--                        {if count($destlist)>10}-->
<!--                        <em><b>收起</b><i class='up'></i></em>-->
<!--                        {/if}-->
<!--                    </dd>-->
<!--                </dl>-->
              <dl class="type car-type">
                <dt>车型：</dt>

                <dd>
                	<p>
                        {st:car action="kind_list" row="10"}
                            {loop $data $kind}
                                <a href="{Model_Car::get_search_url($kind['id'],'carkindid',$param)}" {if $param['carkindid']==$kind['id']}class="on"{/if}>{$kind['title']}</a>
                            {/loop}
                        {/st}
                  </p>
                </dd>
              </dl>

                <!--属性组读取-->
                {st:attr action="query" flag="grouplist" typeid="$typeid" return="grouplist"}

                {loop $grouplist $group}
                    {if $group['attrname'] == '优势服务'}
                    <dl class="type">
                        <dt>{$group['attrname']}：</dt>
                        <dd>
                            <p>
                                {st:attr action="query" flag="childitem" typeid="$typeid" groupid="$group['id']" return="attrlist"}
                                {loop $attrlist $attr}
                                {if $attr['attrname'] == '举牌接机'}
                                    <a href="{Model_Car::get_search_url($attr['id'],'attrid',$param)}" {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}class="on"{/if}>{$attr['attrname']}</a>
                                {elseif  $attr['attrname'] == '中文司机'}
                                    <a href="{Model_Car::get_search_url($attr['id'],'attrid',$param)}" {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}class="on"{/if}>{$attr['attrname']}</a>
                                {elseif  $attr['attrname'] == '英文司机'}
                                    <a href="{Model_Car::get_search_url($attr['id'],'attrid',$param)}" {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}class="on"{/if}>{$attr['attrname']}</a>
                                {/if}
                                {/loop}
                                {/st}
                            </p>
                        </dd>
                    </dl>
                    {/if}
                {/loop}
                {/st}
            </div>
          </div>
          <!--条件搜索-->
          <div class="st-carlist-con" >
          	<div class="st-sort-menu" >
            	<span class="sort-sum">
              <a data-url="{Model_Car::get_search_url(0,'sorttype',$param)}">综合排序</a>
                  <a href="javascript:;">价格
                      {if $param['sorttype']!=1 && $param['sorttype']!=2}
                      <i class="jg-default" data-url="{Model_Car::get_search_url(1,'sorttype',$param)}"></i>
                      {/if}
                      {if $param['sorttype']==1}
                      <i class="jg-up" data-url="{Model_Car::get_search_url(2,'sorttype',$param)}"></i>
                      {/if}
                      {if $param['sorttype']==2}
                      <i class="jg-down" data-url="{Model_Car::get_search_url(0,'sorttype',$param)}"></i></a>
                    {/if}
                <a href="javascript:;">销量
                    {if $param['sorttype']!=3}
                    <i class="xl-default" data-url="{Model_Car::get_search_url(3,'sorttype',$param)}"></i>
                    {/if}
                    {if $param['sorttype']==3}
                    <i class="xl-down" data-url="{Model_Car::get_search_url(0,'sorttype',$param)}"></i>
                    {/if}
                </a>
                <a href="javascript:;">推荐
                    {if $param['sorttype']!=4}
                    <i class="tj-default" data-url="{Model_Car::get_search_url(4,'sorttype',$param)}"></i>
                    {/if}
                    {if $param['sorttype']==4}
                    <i class="tj-down" data-url="{Model_Car::get_search_url(0,'sorttype',$param)}"></i>
                    {/if}
                </a>
              </span><!--排序-->
            </div>
            <div class="car-list-con">
            {if !empty($list)}
                {loop $list $c}
                  <div class="list-child">

                    <div class="lc-image-text">
                        <div class="pic"><a href="{$c['url']}" target="_blank"><img src="{Product::get_lazy_img()}" st-src="{Common::img($c['litpic'],265,180)}" alt="{$c['title']}" /></a></div>
                      <div class="text">
                        <p class="bt">
                            <a href="{$c['url']}" target="_blank">{$c['title']}
                                {loop $c['iconlist'] $icon}
                                    <img src="{$icon['litpic']}" />
                                {/loop}
                            </a></p>
                        <p class="attr">
                          <span>销量：{$c['sellnum']}</span>
                          <span>满意度：{if $c['satisfyscore']}{$c['satisfyscore']}%{/if}</span>
                          <span>推荐：{$c['recommendnum']}</span>
                        </p>
                        <p class="js">乘客容量：{$c['maxseatnum']}</p>
                        <p class="js">行李数量：{$c['usedyears']}</p>
                        <p class="ads">车型：{$c['kindname']}</p>
                      </div>
                      <div class="lowest-jg">
                          {if $c['price']}
                            <span class="lowest-jg-span"><i class="currency_sy ">{Currency_Tool::symbol()}</i><b class="">{$c['price']}</b></span>
                          {else}
                            <span>电询</span>
                          {/if}
                      </div>
                    </div>
                    <div class="car-typetable">
                        <table width="100%" border="0">

                            {st:car action="suit_type" row="8" productid="$c['id']" return="typelist"}
                            {loop $typelist $type}
<!--                            {$type['title']}-->
                            <tr>
                                <th width="240" height="40" scope="col"><span class="pl20">优势服务</span></th>
<!--                                <th width="80" align="center" scope="col">用车日期</th>-->
<!--                                <th width="80" scope="col">单位</th>-->
                                <th width="80" align="center" scope="col">优惠价</th>
                                <th width="100" scope="col">支付方式</th>
                                <th width="200" scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                            {st:car action="suit" row="3" productid="$c['id']" suittypeid="$type['id']" return="suitlist"}
                            {loop $suitlist $suit}
                            <tr>
                                <td height="40"><strong class="type-tit">{$suit['title']}</strong></td>
<!--                                <td align="center"><span class="date" data-suitid="{$suit['id']}">选择日期</span></td>-->
<!--                                <td align="center">{$suit['unit']}</td>-->
                                <td align="center"><span class="price">{if !empty($suit['price'])}<i class="currency_sy">{Currency_Tool::symbol()}</i>{$suit['price']}{else}电询{/if}</span></td>
                                <td class="payment-image">
                                    <img class="car-payment-icon" src="https://www.usyilu.com/uploads/2017/0110/paypalIcon.png"  >

                                </td>



                                <!-- add new form here  -->

                                <td class="orderForm">
                                    <form id="jiejiForm" name="cusfrm" method="post" action="{$cmsurl}cars/show_{$c['aid']}.html" >
                                        <input type="hidden" class=""  name="orderBtn"  value={$orderBtn}  data-id="0" />
                                        <input type="hidden" class=""  name="orderflightNum"  value={$orderflightNum} />
                                        <input type="hidden" class=""  name="orderairport"  value={$orderairport} data-id="0" />
                                        <input type="hidden" class=""  name="orderzhuanpin"  value={$orderzhuanpin} data-id="0" />
                                        <input type="hidden" class=""  name="orderaddr"  value={$orderaddr} data-id="0" />
                                        <input type="hidden" class=""  name="orderzipcode"  value={$orderzipcode}  data-id="0" />
                                        <input type="hidden" class=""  name="orderdate"  value={$orderdate}  data-id="0" />
                                        <input type="hidden" class=""  name="ordertime"  value={$ordertime}  data-id="0" />

                                        <input type="submit" value="预订" name="bookBtn" class="car-order-btn" onClick="showDetailPage()">

                                    </form>
                                </td>



                            </tr>
                            <tr style="display: none">
                                <td colspan="7">
                                    <div class="cartype-nr">
                                        {$suit['content']}
                                    </div>
                                </td>
                            </tr>
                            {/loop}
                            {/loop}

                        </table>
                    </div>
                  </div>
                {/loop}
                 <div class="main_mod_page clear">
                     {$pageinfo}
                  </div>
            {else}
                <div class="no-content">
                    <p><i></i>抱歉，没有找到符合条件的产品！<a href="/cars/all">查看全部产品</a></p>
                </div>
            {/if}
            </div>
          </div>
        </div>
        <div class="st-sidebox">
            {st:right action="get" typeid="$typeid" data="$templetdata" pagename="search"}
        </div><!--边栏模块-->
      </div>
    </div>

{request "pub/footer"}

{request "pub/flink"}
<script>


    function get_action(form) {

        var carkind = $(".carkind").attr('data-id');
        var attrid = '';
        var attrArr = [];
        console.log("carkind: " + carkind);

        $('.searchattr').each(function (i, obj) {
            if ($(obj).attr('data-id') != undefined){
                attrArr.push($(obj).attr('data-id'));
            }
            console.log("attr: "+$(obj).attr('data-id'));

        })

        attrid = attrArr.join('_', attrArr);
        console.log("attrArr after: " + attrid);

        //             var url = SITEURL+'cars/all-'+carkind+'-'+attrid;
        var url = SITEURL + 'cars/all-' + carkind + '-' + attrid;
        //location.href = url;



        form.action = url;
    }

    $(function(){

        var tmpUrl = window.location.href;
        console.log("tmpUrl: "+tmpUrl);
        tmpUrl = tmpUrl.split('/');
        var lastPart = tmpUrl[tmpUrl.length-1];
        lastPart = lastPart.split('-')[lastPart.length-1];
        console.log("lastPart: "+lastPart);


        //租车搜索条件去掉最后一条边框
        $('.line-search-tj').find('dl').last().addClass('bor_0')
        $(".line-search-tj dl dd em").toggle(function(){
            $(this).prev().children('.hide-list').hide();
            $(this).children('b').text('展开');
            $(this).children('i').removeClass('up')
        },function(){
            $(this).prev().children('.hide-list').show();
            $(this).children('b').text('收起');
            $(this).children('i').addClass('up')
        });

        //套餐点击
        $(".type-tit").click(function(){
            $(this).parents('tr').first().next().toggle();
        })

        //隐藏没有属性下级分类
        $(".type").each(function(i,obj){
            var len = $(obj).find('dd p a').length;
            if(len<1){
                $(obj).hide();
            }
        })

        //排序方式点击
        $('.sort-sum').find('a').click(function(){
            var url = $(this).find('i').attr('data-url');
            if(url==undefined){
                url = location.href;
            }
            window.location.href = url;
        })
        //删除已选
        $(".chooseitem").find('i').click(function(){
            var url = $(this).parent().attr('data-url');
            window.location.href = url;
        })
        //清空筛选条件
        $('.clearc').click(function(){
            var url = SITEURL+'cars/all/';
            window.location.href = url;
        })
        //预订
        $(".booking-btn").click(function(){

            var dataurl = $(this).attr('data-url');
            window.location.href = dataurl;
            //$(this).parents('tr').first().find('.date').trigger('click');

        })

    })
</script>

<script type="text/javascript" src="/tools/js/car-common.js"></script>


<?php
    $jiejiBtn = $_POST['jiejiBtn'];
    $songjiBtn = $_POST['songjiBtn'];
    $tmpTest = $_POST['songjiaddr'];



    //echo $songjiBtn;

//    $jiejizipcode =$_POST['jiejizipcode'];
//    $jiejiaddr =$_POST['jiejiaddr'];
//    $jiejizhuanpin =$_POST['jiejizhuanpin'];
//    $jiejiairport =$_POST['jiejiairport'];
//    $jiejiflightNum =$_POST['jiejiflightNum'];
//    $jiejidate =$_POST['jiejidate'];
//    $jiejitime =$_POST['jiejitime'];

?>


<script>

    var zhuanpin = '{$orderzhuanpin}';
    if(zhuanpin=='专车'){
        //console.log("专车");
    }else{
        //console.log("拼车");
        $('.car-type').css('display','none');
    }


    function showDetailPage(){
        console.log("show detail page: ");
    }


    var jiejiButton = '<?php echo $jiejiBtn; ?>';
    var songjiButton = '<?php echo $songjiBtn; ?>';
    var zipcodeBool = '{$zipcodeBool}';
//    console.log("jiejibutton: "+jiejiButton.length);
//    console.log("songjibutton: "+songjiButton.length);
//    console.log("zipcode bool length: "+ zipcodeBool.length);
//    console.log("false type: "+ typeof 'false');


    $(function() {
        //console.log( "ready!" );
        $('.sold-out').hover(function(){
            //$(this).css("background-color", "yellow");
            //console.log("mouse     over");
            $(this).notify("请联系我们的客服400-011-9588", {className: "info", autoHide: false, elementPosition: 'bottom right'});
            //$(this).notify("请联系我们的客服800400", "info");

        }, function(){
            //$(this).css("background-color", "pink");
            //console.log("mouse     out");

        });

//        $( ".sold-out" ).mouseenter(function() {
//            console.log("mouse over");
//            $(this).css("background-color", "yellow");
//        }).mouseleave(function() {
//            $(this).css("background-color", "pink");
//            console.log("mouse out");
//        });

    });

//    $('.sold-out').hover(function(){
//        $(this).css("background-color", "yellow");
//        console.log("mouse     over");
//        //$(this).notify("请联系我们的客服800400", "info");
//    }, function(){
//        $(this).css("background-color", "pink");
//        console.log("mouse     out");
//
//    });
//
//    $( ".sold-out" ).mouseenter(function() {
//        console.log("mouse over");
//        $(this).css("background-color", "yellow");
//    }).mouseleave(function() {
//        $(this).css("background-color", "pink");
//        console.log("mouse out");
//    });

    //car sold out
    if(zipcodeBool.length == 7){
        console.log("sold out");
//        $('.car-order-btn').val('sold out');
//        $('.car-order-btn').css('font-size', '15px');
        $('.car-order-btn').prop('disabled', true);
        $('.list-child').addClass('sold-out');

        $('.car-order-btn').css('background-color', '#999');
        //$('.car-order-btn').removeAttr('onClick');
        //$('.orderForm').removeAttr('action');
    }else{
        console.log("not sold out");
    }


    if (jiejiButton.length == 4 ){
        //console.log("接机 click");

        document.getElementById('jieji-zipcode').value={$jiejizipcode};


        document.getElementById('jieji-addr').value={$jiejiaddr};
        document.getElementById('jieji-zhuanpin').value={$jiejizhuanpin};
        var tmpZhuanpin = {$jiejizhuanpin};
        tmpZhuanpin = tmpZhuanpin.trim();
        //console.log("tmpAirport1: "+tmpZhuanpin.length);
        //console.log("tmpAirport2: "+zhuanpinsHashMap[tmpZhuanpin]);
        //console.log("Newark: "+zhuanpinsHashMap['Newark']);
        $('#jieji-zhuanpin').attr('data-id', zhuanpinsHashMap[tmpZhuanpin]);
        //console.log("jieji-airport data-id: "+$('#jieji-zhuanpin').attr('data-id'));


        document.getElementById('jieji-airport').value={$jiejiairport};
        var tmpAirport = {$jiejiairport};
        tmpAirport = tmpAirport.trim();
        console.log("tmpAirport1: "+tmpAirport.length);
        console.log("tmpAirport2: "+airportsHashMap[tmpAirport]);
        console.log("Newark: "+airportsHashMap['Newark']);
        $('#jieji-airport').attr('data-id', airportsHashMap[tmpAirport]);
        console.log("jieji-airport data-id: "+$('#jieji-airport').attr('data-id'));

        document.getElementById('jieji-flightNum').value={$jiejiflightNum};
        document.getElementById('jieji-date').value={$jiejidate};
        document.getElementById('jieji-time').value= {$jiejitime};
//
////        document.getElementById('jieji-zipcode').value='<?php ////echo $jiejizipcode; ?>////';
////        document.getElementById('jieji-addr').value='<?php ////echo $jiejiaddr; ?>////';
////        document.getElementById('jieji-zhuanpin').value='<?php ////echo $jiejizhuanpin; ?>////';
////        document.getElementById('jieji-airport').value='<?php ////echo $jiejiairport; ?>////';
////        document.getElementById('jieji-flightNum').value='<?php ////echo $jiejiflightNum; ?>////';
////        document.getElementById('jieji-date').value='<?php ////echo $jiejidate; ?>////';
////        document.getElementById('jieji-time').value='<?php ////echo $jiejitime; ?>////';
//
////        document.getElementById('jieji-zipcode').value='<?php ////echo $_POST['jiejizipcode']; ?>////';
////        document.getElementById('jieji-addr').value='<?php ////echo $_POST['jiejiaddr']; ?>////';
////        document.getElementById('jieji-zhuanpin').value='<?php ////echo $_POST['jiejizhuanpin']; ?>////';
////        document.getElementById('jieji-airport').value='<?php ////echo $_POST['jiejiairport']; ?>////';
////        document.getElementById('jieji-flightNum').value='<?php ////echo $_POST['jiejiflightNum']; ?>////';
////        document.getElementById('jieji-date').value='<?php ////echo $_POST['jiejidate']; ?>////';
////        document.getElementById('jieji-time').value='<?php ////echo $_POST['jiejitime']; ?>////';
//
    }
//
//
//
    if (songjiButton.length == 4){
        //console.log("送机 click");
        document.getElementById("songjiTab").click();
        document.getElementById('songjiForm').style.visibility='visible';

        document.getElementById('songji-zipcode').value={$songjizipcode};
        document.getElementById('songji-addr').value={$songjiaddr};
        document.getElementById('songji-zhuanpin').value={$songjizhuanpin};
        var tmpZhuanpin = {$songjizhuanpin};
        tmpZhuanpin = tmpZhuanpin.trim();
        $('#songji-zhuanpin').attr('data-id', zhuanpinsHashMap[tmpZhuanpin]);


        document.getElementById('songji-airport').value={$songjiairport};
        var tmpAirport = {$songjiairport};
        tmpAirport = tmpAirport.trim();
        $('#songji-airport').attr('data-id', airportsHashMap[tmpAirport]);

        document.getElementById('jieji-flightNum').value={$jiejiflightNum};
        document.getElementById('jieji-date').value={$jiejidate};
        document.getElementById('jieji-time').value= {$jiejitime};
//

        document.getElementById('songji-flightNum').value={$songjiflightNum};
        document.getElementById('songji-date').value={$songjidate};
        document.getElementById('songji-time').value= {$songjitime};

////        document.getElementById('songji-zipcode').value='<?php ////echo $_POST['songjizipcode']; ?>////';
////        document.getElementById('songji-addr').value='<?php ////echo $_POST['songjiaddr']; ?>////';
////        document.getElementById('songji-zhuanpin').value='<?php ////echo $_POST['songjizhuanpin']; ?>////';
////        document.getElementById('songji-airport').value='<?php ////echo $_POST['songjiairport']; ?>////';
////        document.getElementById('songji-flightNum').value='<?php ////echo $_POST['songjiflightNum']; ?>////';
////        document.getElementById('songji-date').value='<?php ////echo $_POST['songjidate']; ?>////';
////        document.getElementById('songji-time').value='<?php ////echo $_POST['songjitime']; ?>////';
//
    }


</script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="/tools/js/notify.min.js"></script>
<script>
    $.notify.defaults({autoHideDelay:2500});

</script>
<script>

//    $(window).bind('beforeunload',function(){
//
//        //save info somewhere
//
//        return 'are you sure you want to leave?';
//
//    });

</script>
      {Common::js('delayLoading.min.js')}


</body>
</html>
