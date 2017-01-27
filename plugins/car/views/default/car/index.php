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

<!--    <script type="text/javascript" src="/tools/js/DatePicker/WdatePicker.js"></script>-->

    {include "pub/varname"}
    {Common::css_plugin('car.css','car')}
    {Common::css('base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,template.js')}




    <link rel="stylesheet" href="/tools/js/DatePicker/jquery-timepicker2/jonthornton-jquery-timepicker-0aea507/jquery.timepicker.css">
    <script type="text/javascript" src="/tools/js/DatePicker/jquery-timepicker2/jonthornton-jquery-timepicker-0aea507/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">




</head>

<body>

 {request "pub/header"}


  <div class="big car-search-page">
  	<div class="wm-1200">
      <div class="st-car-home-top" style="background-image: url(/uploads/2017/0113/car_backgroundImg1.jpg);">

<!--          {st:ad action="getad" name="CarRollingAd" pc="1" return="carad"}-->
<!--          {loop $carad['aditems'] $v}-->
<!--          <li><a href="{$v['adlink']}" target="_blank"><img src="{Product::get_lazy_img()}" original-src="{Common::img($v['adsrc'])}" /></a></li>-->
<!--          {/loop}-->
<!--          {/st}    -->

          <ul class="tab">
              <li><a href="javascript:void(0)" class="tablinks" id="defaultOpen" onclick="openCity(event, 'jieji')">接机</a></li>
              <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'songji')">送机</a></li>
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
                    <input type="text" class="cs-text up-ico jieji-searchattr-submit" id="jieji-addr" name="jieji-addr" placeholder="送达地点(必填)"  data-id="0"  />
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
                    <input type="text" class="cs-text up-ico jichang jieji-searchattr searchattr jieji-searchattr-submit" id="jieji-airport" name="jieji-airport" placeholder="{$group['attrname']}(必选)" data-id="0" />
                    <div class="cs-select-box">
                        {st:attr action="query" flag="childitem" groupid="$group['id']" row="10" typeid="$typeid"}
                        {loop $data $r}
                        <?php
                            $tmpAirportName = $r['title'];
                            $AirportNameArr = explode(',', $tmpAirportName);
                        ?>
<!--                        <span data-id="{$r['id']}">{$r['title']}</span>-->
                        <span data-id="{$r['id']}"><?php echo $AirportNameArr[0];?></span>
                        {/loop}
                        {/st}

                        <script type="text/javascript">
                              var airports = <?php echo json_encode($data); ?>;
                            //console.log("airports array: "+JSON.stringify(airports, null, 2));
                            var airportsHashMap = {};
                            var airportsShortNameHashMap = {};
                            for(airport of airports){
                                var tmpAirportNameArr = airport['title'].split(',');

                                //console.log("airport: "+tmpAirportNameArr[0]);
                                airportsHashMap[tmpAirportNameArr[0]] = airport['id'];
                                airportsShortNameHashMap[tmpAirportNameArr[0]] = tmpAirportNameArr[2];

                            }
//
//
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
//                              var zhuanpins = <?php //echo json_encode($data); ?>//;
//                              var zhuanpinBool = true;
//                              //console.log("zhuanpins array: "+JSON.stringify(zhuanpins, null, 2));
//                              var zhuanpinsHashMap = {};
//
//                              //console.log("airports element: "+zhuanpins[0]['id']);
//                              //console.log("airports element: "+zhuanpins[0]['title']);
//                              for(zp of zhuanpins){
//                                  //console.log("专拼: "+zp);
//                                  zhuanpinsHashMap[zp['title']] = zp['id'];
//                              }

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
                      <input type="text" class="cs-text up-ico searchattr songji-searchattr songji-searchattr-submit" id="songji-zipcode" name="songji-zipcode" placeholder="{$group['attrname']}"  data-id="0" readonly/>
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
//


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

<!--              <dl class="search-dl">-->
<!--                  <dt class="item" style="display: none;">选择日期</dt>-->
<!--                  <dd class="con"><input type="text" class="custom-default-text up-ico-day noblank2 endtime_songji songji-searchattr-submit" id="songji-date" name="songji-date" placeholder="选择日期(必选)" name="days" style="font-size:14px; " /></dd>-->
<!--              </dl>-->
<!---->
<!--              <dl class="search-dl">-->
<!--                  <dt class="item" style="display: none;">选择时间</dt>-->
<!--                  <dd class="con"><input type="text" class="custom-default-text up-ico-day pickTime_songji songji-searchattr-submit" id="songji-time" placeholder="选择时间(必选)" name="songji-time" style="font-size:14px;" /></dd>-->
<!--              </dl>-->

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
      

    </div>
  </div>

 {request "pub/footer"}
 {request "pub/flink"}


 <script type="text/javascript" src="/tools/js/car-common.js"></script>

 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 <script type="text/javascript" src="/tools/js/notify.min.js"></script>
 <script>
     $.notify.defaults({autoHideDelay:2500});

 </script>
 

  <script>
	//<----------------------------------------------------------------------->
	//<--               This is the google autocompletion API               -->
	//<----------------------------------------------------------------------->
	
	  // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocompleteJ;
    var componentForm = {
      // street_number: 'short_name',
      // route: 'long_name',
      // locality: 'long_name',
      // administrative_area_level_1: 'short_name',
      // country: 'long_name',
      postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types with location bias.
    	autocompleteJ = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('jieji-addr')),
                {types: ['geocode']});

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocompleteJ.addListener('place_changed', fillInAddress);
      }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocompleteJ.getPlace();
		 /* 
        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        } */
        if(place.address_components && place.address_components !== "null" && place.address_components !== "undefined") {
            console.log("place is valid");

	        // Get each component of the address from the place details
	        // and fill the corresponding field on the form.
	        for (var i = 0; i < place.address_components.length; i++) {
	          var addressType = place.address_components[i].types[0];
	          if (addressType == 'postal_code') {
	          // if (componentForm[addressType]) {
	            var val = place.address_components[i][componentForm[addressType]];
	            // document.getElementById(addressType).value = val;
	            document.getElementById('jieji-zipcode').value = val;
	          }
	        }
        	placeValid = true;
    	}
    	else{
        	console.log("place not valid");
        	placeValid = false;
    	}
      }

   // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
  
 </script>

 <script src="http://maps.google.cn/maps/api/js?key=AIzaSyAeQdRCMmFcS4EBmFpGk-hzF-dm-9p6gvU&libraries=places&callback=initAutocomplete"
     async defer>
 </script>

 {Common::js('delayLoading.min.js')}


</body>
</html>
