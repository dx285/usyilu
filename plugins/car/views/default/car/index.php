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

    <!--    <link rel="stylesheet" href="/tools/js/DatePicker/jquery-ui-timepicker/include/ui-1.10.0/ui-lightness/jquery-ui-1.10.0.custom.min.css" type="text/css">-->
<!--    <link rel="stylesheet" href="/tools/js/DatePicker/jquery-ui-timepicker/jquery.ui.timepicker.css">-->
<!--    <script type="text/javascript" src="/tools/js/DatePicker/jquery-ui-timepicker/include/jquery-1.9.0.min.js"></script>-->
<!--    <script type="text/javascript" src="/tools/js/DatePicker/jquery-ui-timepicker/include/ui-1.10.0/jquery.ui.core.min.js"></script>-->
<!--    <script type="text/javascript" src="/tools/js/DatePicker/jquery-ui-timepicker/include/ui-1.10.0/jquery.ui.position.min.js"></script>-->
<!--    <script type="text/javascript" src="/tools/js/DatePicker/jquery-ui-timepicker/include/ui-1.10.0/jquery.ui.tabs.min.js"></script>-->
<!--    <script type="text/javascript" src="/tools/js/DatePicker/jquery-ui-timepicker/include/ui-1.10.0/jquery.ui.widget.min.js"></script>-->


    <script type="text/javascript" src="/tools/js/DatePicker/WdatePicker.js"></script>




    <!---->

    {include "pub/varname"}
    {Common::css_plugin('car.css','car')}
    {Common::css('base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,template.js,delayLoading.min.js')}


    <link rel="stylesheet" href="/tools/js/DatePicker/jquery-timepicker2/jonthornton-jquery-timepicker-0aea507/jquery.timepicker.css">
    <script type="text/javascript" src="/tools/js/DatePicker/jquery-timepicker2/jonthornton-jquery-timepicker-0aea507/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>

<body>

 {request "pub/header"}


  <div class="big">
  	<div class="wm-1200">
    
<!--      <div class="st-guide">-->
<!--            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{$channelname}-->
<!--      </div><!--面包屑-->


      <div class="st-car-home-top">

          <ul class="tab">
              <li><a href="javascript:void(0)" class="tablinks" id="defaultOpen" onclick="openCity(event, 'jieji')">接机</a></li>
              <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'songji')">送机</a></li>
          </ul>

        <div id="jieji" class="st-car-search tabcontent">

<!--        	<dl class="search-dl">-->
<!--          	<dt>选择车型</dt>-->
<!--            <dd>-->
<!--              <input type="text" class="cs-text up-ico carkind" placeholder="车选择型" data-id="0" />-->
<!--              <div class="cs-select-box">-->
<!--                {st:car action="kind_list" row="10"}-->
<!--                  {loop $data $kind}-->
<!--                    <span data-id="{$kind['id']}">{$kind['title']}</span>-->
<!--                  {/loop}-->
<!--                {/st}-->
<!---->
<!--              </div>-->
<!--            </dd>-->
<!--          </dl>-->
           {st:attr action="query" flag="grouplist" row="8" typeid="$typeid" return="grouplist"}
            {loop $grouplist $group}
            {if $group['attrname'] == '送机机场' or $group['attrname'] == '出发地点'}
            {elseif $group['attrname'] == '邮编'}
                <dl class="search-dl">
                    <dt>{$group['attrname']}</dt>
                    <dd>
                        <input type="text" class="cs-text up-ico searchattr" id="zipcode_jie" placeholder="{$group['attrname']}" data-id="0" />
                      <div class="cs-select-box">
                          {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                              {loop $data $r}
                                <span data-id="{$r['id']}">{$r['title']}</span>
                              {/loop}
                          {/st}
                          <script type="text/javascript">
                              var complex = <?php echo json_encode($data); ?>;
                              console.log("complex: "+complex);
                          </script>
                      </div>
                    </dd>
                </dl>
            {elseif $group['attrname'] == '送达地点'}
            <dl class="search-dl">
                <dt>{$group['attrname']}</dt>
                <dd>
                    <input type="text" class="cs-text up-ico searchattr" id="autocomplete1" placeholder="{$group['attrname']}" " data-id="0" />
                    <div class="cs-select-box">
<!--                        {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}-->
<!--                        {loop $data $r}-->
                        <span data-id="{$r['id']}">{$r['title']}</span>
<!--                        {/loop}-->
<!--                        {/st}-->

                    </div>
                </dd>
            </dl>
            {elseif $group['attrname'] != '优势服务'}
                <dl class="search-dl">
                    <dt>{$group['attrname']}</dt>
                    <dd>
                        <input type="text" class="cs-text up-ico searchattr" placeholder="{$group['attrname']}" data-id="0" />
                        <div class="cs-select-box">
                            {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                            {loop $data $r}
                            <span data-id="{$r['id']}">{$r['title']}</span>
                            {/loop}
                            {/st}
                        </div>
                    </dd>
                </dl>
            {/if}

            {/loop}
            <dl class="search-dl" style="display: none; ">

                <dt>车型选择</dt>
                <dd>
                    <input type="text" class="cs-text up-ico carkind" placeholder="车型选择" data-id="0" />
                    <div class="cs-select-box">
                        {st:car action="kind_list" row="10"}
                        {loop $data $kind}
                            <span data-id="{$kind['id']}">{$kind['title']}</span>
                        {/loop}
                        {/st}

                    </div>
                </dd>
            </dl>
            <dl class="search-dl">
                <dt class="item">选择日期</dt>
                <dd class="con"><input type="text" class="custom-default-text up-ico-day noblank endtime_jieji" placeholder="选择日期" name="days" style="width: 95%; font-size:14px; " /></dd>
            </dl>

            <dl class="search-dl">
                <dt class="item">选择时间</dt>
                <dd class="con"><input type="text" class="custom-default-text up-ico-day pickTime" placeholder="选择时间" id="jieji-time-inputs" name="more" style="width: 95%; font-size:14px;" /></dd>
            </dl>

            <div class="car-search-btn"><a href="javascript:;">搜索</a></div>
        </div><!--接车搜索-->

          <!--送车搜索-->
          <div id="songji" class="st-car-search tabcontent">

<!--                <dl class="search-dl">-->
<!--                    <dt>选择车型</dt>-->
<!--                  <dd>-->
<!--                    <input type="text" class="cs-text up-ico carkind" placeholder="车选择型" data-id="0" />-->
<!--                    <div class="cs-select-box">-->
<!--                      {st:car action="kind_list" row="10"}-->
<!--                        {loop $data $kind}-->
<!--                          <span data-id="{$kind['id']}">{$kind['title']}</span>-->
<!--                        {/loop}-->
<!--                      {/st}-->
<!---->
<!--                    </div>-->
<!--                  </dd>-->
<!--                </dl>-->
              {st:attr action="query" flag="grouplist" row="8" typeid="$typeid" return="grouplist"}
              {loop $grouplist $group}
              {if $group['attrname'] == '邮编'}
              <dl class="search-dl">
                  <dt>{$group['attrname']}</dt>
                  <dd>
                      <input type="text" class="cs-text up-ico searchattr" id="zipcode_song" placeholder="{$group['attrname']}" data-id="0" />
                      <div class="cs-select-box">
                          {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                          {loop $data $r}
                          <span data-id="{$r['id']}">{$r['title']}</span>
                          {/loop}
                          {/st}
                          <script type="text/javascript">
                              var complex = <?php echo json_encode($data); ?>;
                              console.log("complex: "+complex);
                          </script>

                      </div>
                  </dd>
              </dl>
              {elseif $group['attrname'] == '出发地点'}
              <dl class="search-dl">
                  <dt>{$group['attrname']}</dt>
                  <dd>
                      <input type="text" class="cs-text up-ico searchattr" placeholder="{$group['attrname']}" id="autocomplete2" onFocus="geolocate1()" data-id="0" />
                      <div class="cs-select-box">
                          {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                          {loop $data $r}
                          <span data-id="{$r['id']}">{$r['title']}</span>
                          {/loop}
                          {/st}
                          <script type="text/javascript">
                              var complex = <?php echo json_encode($data); ?>;
                              console.log("complex: "+complex);
                          </script>

                      </div>
                  </dd>
              </dl>
              {elseif $group['attrname'] == '送机机场'}
              <dl class="search-dl">
                  <dt>{$group['attrname']}</dt>
                  <dd>
                      <input type="text" class="cs-text up-ico searchattr" placeholder="{$group['attrname']}" data-id="0" />
                      <div class="cs-select-box">
                          {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                          {loop $data $r}
                          <span data-id="{$r['id']}">{$r['title']}</span>
                          {/loop}
                          {/st}
                          <script type="text/javascript">
                              var complex = <?php echo json_encode($data); ?>;
                              console.log("complex: "+complex);
                          </script>

                      </div>
                  </dd>
              </dl>
              {/if}

              {/loop}
              <dl class="search-dl" style="display: none; ">
                  <?php
                  $_COOKIE['varname'] = "999";
                  //                    echo $_COOKIE['varname'];
                  setcookie("TestCookie","919",time()+3600*24);
                  //                    echo $_COOKIE['TestCookie'];
                  ?>
                  <!--                <dt>车型选择</dt>-->
                  <dt>车型选择</dt>
                  <dd>
                      <input type="text" class="cs-text up-ico carkind" placeholder="车型选择" data-id="0" />
                      <div class="cs-select-box">
                          {st:car action="kind_list" row="10"}
                          {loop $data $kind}
                          <span data-id="{$kind['id']}">{$kind['title']}</span>
                          {/loop}
                          {/st}

                      </div>
                  </dd>
              </dl>
              <dl class="search-dl">
                  <dt class="item">选择日期</dt>
                  <dd class="con"><input type="text" class="custom-default-text up-ico-day noblank2 endtime_songji" placeholder="选择日期" name="days" style="width: 95%; font-size:14px; " /></dd>
              </dl>

              <dl class="search-dl">
                  <dt class="item">选择时间</dt>
                  <dd class="con"><input type="text" class="custom-default-text up-ico-day pickTime" placeholder="选择时间" id="songji-time-inputs" name="more" style="width: 95%; font-size:14px;" /></dd>
              </dl>

              <div class="car-search-btn-songji"><a href="javascript:;">搜索</a></div>
          </div><!--送车搜索-->


        <div id="st-car-slideBox" class="st-car-slideBox">
          <div class="hd">
            <ul>
                {st:ad action="getad" name="CarRollingAd" pc="1" return="carad"}
                    {loop $carad['aditems'] $k $v}
                        <li>{$k}</li>
                    {/loop}
            </ul>
          </div>
          <div class="bd">
            <ul>
                {loop $carad['aditems'] $v}
                    <li><a href="{$v['adlink']}" target="_blank"><img src="{Product::get_lazy_img()}" original-src="{Common::img($v['adsrc'])}" /></a></li>
                {/loop}
            </ul>
          </div>
          <!--前/后按钮代码-->
          <a class="prev" href="javascript:void(0)"></a>
          <a class="next" href="javascript:void(0)"></a>
        </div><!--租车首页焦点图-->
      </div>


<!--        <div id="locationField">-->
<!--            <input id="autocomplete" placeholder="Enter your address"-->
<!--                   onFocus="geolocate1()" type="text"/>-->
<!--        </div>-->

        
        <div class="st-cp-slideTab">
      	<div class="st-tabnav">
          <h3>热门推荐</h3>
          {st:car action="kind_list" return="carkind"}
            {loop $carkind $kind}
                <span data-id="{$kind['id']}" {if $n==1}class="on"{/if}>{$kind['title']}<i></i></span>
            {/loop}
          <a href="/cars/all" class="more">更多</a>
        </div>
        <div class="st-tabcon">
        	<ul>
              {st:car action="query" flag="recommend" kindid="$carkind[0]['id']" row="8"}
                {loop $data $c}
                    <li {if $n%4==0}class="mr_0"{/if}>
                        <i class="hot-ico"></i>
                        <a class="pic" href="{$c['url']}" target="_blank"><img src="{Product::get_lazy_img()}" st-src="{Common::img($c['litpic'],283,193)}" alt="{$c['title']}" /></a>
                        <p class="tit"><a href="{$c['url']}" target="_blank">{$c['title']}</a></p>
                      <p class="data">
                        <em>满意度 {if $c['satisfyscore']}{$c['satisfyscore']}%{/if}</em>
                        {if !empty($c['price'])}
                            <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$c['price']}</b>起</span>
                        {else}
                            <span>电询</span>
                        {/if}
                      </p>
                    </li>
                {/loop}
              {/st}
          </ul>
        </div>
      </div>
        <script type="text/html" id="tpl_car">
          <ul>
          {{each list as value i}}
            <li {{if (i+1)%4==0}}class="mr_0"{{/if}}>
            <i class="hot-ico"></i>
            <a class="pic" href="{{value.url}}" target="_blank"><img src="{{value.litpic}}" alt="{{value.title}}" /></a>
            <p class="tit"><a href="{{value.url}}" target="_blank">{{value.title}}</a></p>
            <p class="data">
                <em>满意度 {{if value.satisfyscore}}{{value.satisfyscore}}%{{/if}}</em>
                {{if value.price!=''}}
                <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{{value.price}}</b>起</span>
                {{else}}
                 <span>电询</span>
                {{/if}}
            </p>
            </li>
          {{/each}}
           </ul>
        </script>
        <script>
            $(function(){
                $('.st-tabnav').find('span').click(function(){
                    var carkindid = $(this).attr('data-id');
                    var url = SITEURL+'car/ajax_index_car';
                    var content = $(this).data(carkindid);

                    var concontain = $('.st-tabcon');
                    $(this).addClass('on').siblings().removeClass('on');

                    concontain.html('<img src="/res/images/loading.gif" style="display:block;width:28px;height:28px;margin:160px auto 157px auto;">');
                    if(content){
                        concontain.html(content);
                    }else{
                        $.getJSON(url, {carkindid:carkindid,pagesize:8}, function(data) {

                               var licontent = template('tpl_car',data);
                               concontain.html(licontent);
                               concontain.data(carkindid,licontent);

                        });
                    }
                })
            })
        </script>
      
      <div class="comment-list-box">
      	<div class="com-tit">
        	<h3>客户点评</h3>
          <p>已为<span>{$totalorder}</span>位客户提供旅游租车服务</p>
        </div>
        <div class="com-conbox">
           {st:comment action="query" flag="car" row="5"}

            {loop $data $c}
                <dl>
                <dt><a href="javascript:;" target="_blank"><img src="{Product::get_lazy_img()}" st-src="{Common::img($c['product_litpic'],180,110)}" /></a></dt>
                <dd>
                    <p class="bt">
                        {if !empty($c['productname'])}
                            {$c['productname']}
                        {/if}
                        <span class="price">{if !empty($c['product_price'])}预定价格：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$c['product_price']}{/if}</span>
                    </p>
                   <p class="user"><span class="name">{$c['nickname']}</span><span class="date">{Common::mydate('Y-m-d',$c['addtime'])}</span></p>
                  <p class="txt">{$c['content']}</p>
                  <p class="score"><em>综合评分：</em><span><i style=" width:{$c['percent']}"></i></span></p>
                </dd>
                </dl>
            {/loop}
           {/st}
        </div>
      </div>
    
    </div>
  </div>

 {request "pub/footer"}

 {request "pub/flink"}

<!-- <script type="text/javascript" src="/tools/js/DatePicker/jquery-ui-timepicker/jquery.ui.timepicker.js" />-->

 <script>
     // This example displays an address form, using the autocomplete feature
     // of the Google Places API to help users fill in the information.

     // This example requires the Places library. Include the libraries=places
     // parameter when you first load the API. For example:
     // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
    var zipcodeValid = true;
//     var placeSearch, autocomplete1, autocomplete2, placeValid;
//     var componentForm = {
//
//         postal_code: 'short_name'
//
//     };
//
//     function initAutocomplete() {
//         // Create the autocomplete object, restricting the search to geographical
//         // location types.
//         autocomplete1 = new google.maps.places.Autocomplete(
//             /** @type {!HTMLInputElement} */(document.getElementById('autocomplete1')),
//             {types: ['geocode']});
//
//         autocomplete2 = new google.maps.places.Autocomplete(
//             /** @type {!HTMLInputElement} */(document.getElementById('autocomplete2')),
//             {types: ['geocode']});
//
//         // When the user selects an address from the dropdown, populate the address
//         // fields in the form.
//         autocomplete1.addListener('place_changed', fillInAddress1);
//         autocomplete2.addListener('place_changed', fillInAddress2);
//     }
//
//     function fillInAddress1() {
//         // Get the place details from the autocomplete object.
//         var place = autocomplete1.getPlace();
//         console.log("user select place: " + JSON.stringify(place));
//         console.log("user select components: " + place.address_components);
//         if(place.address_components && place.address_components !== "null" && place.address_components !== "undefined") {
//             console.log("place is valid");
//
//
//             // Get each component of the address from the place details
//             // and fill the corresponding field on the form.
//             for (var i = 0; i < place.address_components.length; i++) {
//                 var addressType = place.address_components[i].types[0];
//
//                 if (addressType == 'postal_code') {
//                     console.log("component val: " + place.address_components[i][componentForm[addressType]]);
//                     var val = place.address_components[i][componentForm[addressType]];
//                     document.getElementById('zipcode_jie').value = val;
//                 }
//             }
//             placeValid = true;
//         }else{
//             console.log("place not valid");
//             placeValid = false;
//             return false;
//         }
//     }
//
//     function fillInAddress2() {
//         // Get the place details from the autocomplete object.
//         var place = autocomplete2.getPlace();
//
//         // Get each component of the address from the place details
//         // and fill the corresponding field on the form.
//         for (var i = 0; i < place.address_components.length; i++) {
//             var addressType = place.address_components[i].types[0];
//
//             if(addressType=='postal_code'){
//                 console.log("component val: "+place.address_components[i][componentForm[addressType]]);
//                 var val = place.address_components[i][componentForm[addressType]];
//                 document.getElementById('zipcode_song').value = val;
//             }
//         }
//     }
//
//     // Bias the autocomplete object to the user's geographical location,
//     // as supplied by the browser's 'navigator.geolocation' object.
//     function geolocate1() {
//         if (navigator.geolocation) {
//             navigator.geolocation.getCurrentPosition(function(position) {
//                 var geolocation = {
//                     lat: position.coords.latitude,
//                     lng: position.coords.longitude
//                 };
//                 var circle = new google.maps.Circle({
//                     center: geolocation,
//                     radius: position.coords.accuracy
//                 });
//                 autocomplete1.setBounds(circle.getBounds());
//                 autocomplete2.setBounds(circle.getBounds());
//             });
//         }
//     }
//
//
//     $("#autocomplete1").focus(function() {
//
//         console.log('in');
//
//     }).blur(function() {
//
//         console.log('out');
//
//         console.log("out get current address: "+ document.getElementById('autocomplete1').value);
//         fillInAddress1();
//     });


 </script>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeQdRCMmFcS4EBmFpGk-hzF-dm-9p6gvU&libraries=places&callback=initAutocomplete" async defer></script>-->


 <script>
     $(function(){
         //租车首页焦点图
         $('.st-car-slideBox').slide({
					 mainCell:'.bd ul',
					 effect:"fold",
						interTime: 5000,
						delayTime: 500,
						autoPlay:true,
                        switchLoad:"original-src"
					 })

         //租车下拉选择
         $('.cs-text').click(function(){
             $('.cs-select-box').hide();
             var selectBox =$(this).parent().find('.cs-select-box');
             if(selectBox.css("display")=="none"){
                 $(this).removeClass('up-ico').addClass('down-ico')
                 $(this).next().slideDown("fast");
             }else{
                 $(this).next().slideUp("fast");
                 $(this).removeClass('down-ico').addClass('up-ico');
                 selectBox.hide();
             }
         });
         $(".cs-select-box span").click(function(){
             $(this).parent().prev().removeClass('down-ico').addClass('up-ico')
             var txt = $(this).text();
             $(this).parent().prev().val(txt);
             var value = $(this).attr("data-id");
             $(this).parent().prev().attr('data-id',value);
             $(this).parent().hide();
         });

         //接机搜索
         $(".car-search-btn").click(function(){


             if (checkForm()) {

                 console.log("checkForm return true");
                 var carkind = $(".carkind").attr('data-id');
                 var attrid = '';
                 var attrArr = [];
                 console.log("carkind: " + carkind);

                 $('.searchattr').each(function (i, obj) {
                     attrArr.push($(obj).attr('data-id'))
                 })

                 attrid = attrArr.join('_', attrArr);
                 console.log("carkind: " + attrid);

//             var url = SITEURL+'cars/all-'+carkind+'-'+attrid;
                 var url = SITEURL + 'cars/all-' + carkind + '-' + attrid;
                 location.href = url;
                 console.log("carkind: " + carkind);
                 console.log("attrid: " + attrid);
             }else {
                 console.log("checkForm return false");
             }

         })

         //送机搜索
         $(".car-search-btn-songji").click(function(){


             if (checkForm()) {

                 console.log("checkForm return true");
                 var carkind = $(".carkind").attr('data-id');
                 var attrid = '';
                 var attrArr = [];
                 console.log("carkind: " + carkind);

                 $('.searchattr').each(function (i, obj) {
                     attrArr.push($(obj).attr('data-id'))
                 })

                 attrid = attrArr.join('_', attrArr);
                 console.log("carkind: " + attrid);

//             var url = SITEURL+'cars/all-'+carkind+'-'+attrid;
                 var url = SITEURL + 'cars/all-' + carkind + '-' + attrid;
                 location.href = url;
                 console.log("carkind: " + carkind);
                 console.log("attrid: " + attrid);
             }else {
                 console.log("checkForm return false");
             }

         })

         $(document).mouseup(function(e){
             var _con = $('.cs-select-box');   // 设置目标区域
             if(!_con.is(e.target) && _con.has(e.target).length === 0){ // Mark 1
                 $('.cs-select-box').hide();
             }
         });

     })

     function checkForm() {

         $(".noblank").each(function (index, element) {
             var val = $(element).val();
             console.log("val: " + val);
             val = $.trim(val);

             document.cookie = "daytime="+val;
             //alert(document.cookie);
             console.log("after trim val: " + val);
             var date_regex = /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/ ;

             console.log("regre date test: "+ date_regex.test(val));

             if (!val || !(date_regex.test(val))) {
                 var offset = $(element).offset();
                 $(window).scrollTop(offset.top - 100);
                 $(element).css("border", "1px solid red");
                 isvalidateDate = false;
//                 return false;
             }
             else {
                 $(element).css("border", "1px solid #dcdcdc");
                 isvalidateDate = true;
             }
         });

         $(".pickTime").each(function (index, element) {
             var val = $(element).val();
             console.log("pickTime: " + val);
             val = $.trim(val);

             document.cookie = "pickTime="+val;
             alert(document.cookie);
             console.log("after trim pickTime: " + val);

             var time_regex = /^(0?[1-9]|1[012])(:[0-5]\d)[APap][mM]$/;
             console.log("regre time test: "+ time_regex.test(val));
             if (!val || !(time_regex.test(val))) {
                 console.log("pickTime val is not valid");
                 var offset = $(element).offset();
                 $(window).scrollTop(offset.top - 100);
                 $(element).css("border", "1px solid red");
                 isvalidateTime = false;
                 //return false;
             }
             else {
                 console.log("pickTime val is valid");
                 $(element).css("border", "1px solid #dcdcdc");
                 //return true;
                 isvalidateTime = true;
             }
//             console.log("pickTime Finish false");
//             return false;
         });
         
         console.log("return true here: " + isvalidateDate +", " +isvalidateTime + ", "+zipcodeValid);

         if(!isvalidateDate){
             alert("您输入的日期不正确, 请重新填写正确日期。");
             return false;
         }else if(!isvalidateTime){
             alert("您输入的时间不正确, 请重新填写正确时间。");
             return false;
         }else if(!zipcodeValid){
             alert("您输入的地址不正确, 请重新填写正确地址。");
             $('#autocomplete1').css("border", "1px solid red");
             return false;
         }

         return (isvalidateDate & isvalidateTime & zipcodeValid);
     }
 </script>

<script>
    //结束时间
    $(".endtime_jieji").click(function(){
        WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d'});
        console.log("end time pick");
    })


    $(".endtime_songji").click(function(){
        WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d'});
        console.log("end time pick");
    })


    //结束时间2

//    $('#timepicker').timepicker();

//    $(document).ready(function() {
//        $('#timepicker').timepicker( {
//            showAnim: 'blind'
//        });
//    });

    $('#jieji-time-inputs').timepicker({ 'step': 15 });
    $('#songji-time-inputs').timepicker({ 'step': 15 });


    document.getElementById("defaultOpen").click();

    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }


</script>


</body>
</html>
