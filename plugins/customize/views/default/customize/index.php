<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}" />
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}" />
    {/if}
    {include "pub/varname"}
    {Common::css('base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,delayLoading.min.js')}
    {Common::css_plugin('customize.css','customize')}
    
    <script>
    $( document ).ready(function() {
		console.log( "ready!" );
		if(getQueryVariable("backtoedit") == 1) { /* This page is back to edit */
			$(".dropdown-list").show(); // Display the dropdown list
			$(".custom-child-item").hide(); // block the buttons
			// Hide the images
			$("#dest-city-ny").hide();
			$("#dest-city-boston").hide();
			$("#dest-city-dc").hide();
			$("#dest-city-ys").hide();
			$("#dest-city-lv").hide();
			$("#dest-city-la").hide();
			$("#dest-city-sf").hide();
			$("#pick-suvs").hide();
			$("#pick-ford15").hide();
			$("#pick-benz").hide();
			$("#pick-toyota").hide();
			$("#pick-star").hide();
			$("#pick-ford12").hide();

			// 
		}
        var contactname = "{$contactname}";
        // console.log( contactname.length );
        if(contactname.length > 0) { // This means there are data passed in
				var sex = "{$sex}";
				var region = "{$region}";
				var phone = "{$phone}";
				var email = "{$email}";
				var contacttime = "{$contacttime}";
				var starttime = "{$starttime}";
				var startplace = "{$startplace}";
				var days = "{$days}";
				var dest = "{$dest}";
				var adultnum = "{$adultnum}";
				var childnum = "{$childnum}";
				var planerank = "{$planerank}";
				var hotelrank = "{$hotelrank}";
				var room = "{$room}";
				var food = "{$food}";
				var content = "{$content}";

				// Update form comtent
				var offset = $("#form-start").offset();
				$(window).scrollTop(offset.top-20);

				// Set value for all the input field
				document.getElementsByName("contactname")[0].value = contactname;
				document.getElementsByName("sex")[0].value = sex;
				$("#sexDropdown").val(sex);
				console.log("region: "+region);
				$("#regionDropdown").val(region);
				document.getElementsByName("phone")[0].value = phone;
				document.getElementsByName("email")[0].value = email;
				document.getElementsByName("starttime")[0].value = starttime;
				document.getElementsByName("startplace")[0].value = startplace;
				$("#startplaceDropdown").val(startplace);
				document.getElementsByName("endtime")[0].value = days;
				document.getElementsByName("contacttime")[0].value = contacttime;
				$("#contacttimeDropdown").val(contacttime);
				document.getElementsByName("dest")[0].value = dest;
				$("#destDropdown").val(dest);
				document.getElementsByName("adultnum")[0].value = adultnum;
				document.getElementsByName("childnum")[0].value = childnum;
				document.getElementsByName("planerank")[0].value = planerank;
				$("#planerankDropdown").val(planerank);
				document.getElementsByName("hotelrank")[0].value = hotelrank;
				$("#hotelrankDropdown").val(hotelrank);
				document.getElementsByName("room")[0].value = room;
				$("#roomDropdown").val(room);
				document.getElementsByName("food")[0].value = food;
				$("#foodDropdown").val(food);
				document.getElementsByName("content")[0].value = content;

            }
    });


    function getQueryVariable(variable)
    {
           var query = window.location.search.substring(1);
           var vars = query.split("&");
           for (var i=0;i<vars.length;i++) {
                   var pair = vars[i].split("=");
                   if(pair[0] == variable){return pair[1];}
           }
           return(false);
    }

    function listChange(element) {
    	console.log("Changed dropdown list value: "+element.val());
		element.siblings("input:hidden").val(element.val());
    }
    </script>
    
</head>

<body>

   {request "pub/header"}
  
  <div class="dz-banner-box">
      {st:ad action="getad" name="s_customize_index_1" pc="1" return="ad"}
      {if !empty($ad)}
          <a href="{if empty($ad['adlink'])}javascript:;{else}{$ad['adlink']}{/if}" target="_blank"><img  src="{Product::get_lazy_img()}" st-src="{Common::img($ad['adsrc'],1920,386)}" alt="{$ad['adname']}"></a>
      {else}
         <a href="javascript:;" target="_blank"><img src="{$GLOBALS['cfg_plugin_customize_public_url']}images/siren-dz-banner.jpg" width="1920" height="386"></a>
      {/if}
  </div><!-- banner -->
  
  <div class="big">
  	<div class="wm-1200">
    
    	<div class="custom-super">
      	<ul>
        	<li class="sm">
          	<strong>私密</strong>
            <span>家庭成员、亲密好友<br>独立成团、随时出发</span>
          </li>
        	<li class="sx">
          	<strong>省心</strong>
            <span>交通、酒店、导游<br>全程服务设计安排</span>
          </li>
        	<li class="zs">
          	<strong>专属</strong>
            <span>“一对一”路线订制<br>打造独一无二专属旅行</span>
          </li>
        	<li class="ld">
          	<strong>灵动</strong>
            <span>告别每日既定式行程<br>路线景点随心安排</span>
          </li>
        </ul>
      </div>
    
    </div>
  </div><!-- 个性化 -->
  
  <div class="big custom-content">
  	<div class="wm-1200">
    	
      <div class="custom-bt">
      	<h3><strong>我们能为您做的更多！</strong>Because of you!</h3>
        <p>为更好的了解您的旅行计划，为您提供完美的订制服务，请完善以下资料。</p>
      </div>
      <form id="cusfrm" name="cusfrm" method="post" action="{$cmsurl}customize/confirmation" onsubmit="return validateForm()">  <!-- action="{$cmsurl}customize/ajax_save" -->
      <div id="form-start" class="custom-block">
      	<h3>step1&nbsp;&nbsp;您的旅行计划</h3>
        <div class="block-content">
        	<ul>
            <li class="full-li">
                <em class="item">出发地点：</em>
                <div class="con dest-nav-pills" id="dest-nav-pills">
                	<select class="dropdown-list" id="startplaceDropdown" name="startplaceDropdown">
                	<option value="纽约">纽约</option>
                	<option value="波士顿">波士顿</option>
                	<option value="华盛顿">华盛顿</option>
                	<option value="黄石">黄石</option>
                	<option value="拉斯维加斯">拉斯维加斯</option>
                	<option value="洛杉矶">洛杉矶</option>
                	<option value="旧金山">旧金山</option>
                	</select>
                    <input type="hidden" name="startplace" value="纽约"/>
                    <a class="custom-child-item cc-active  dest-nav-city-ny" href="javascript:void(0)">纽约</a>
                    <a class="custom-child-item dest-nav-city-boston" href="javascript:void(0)">波士顿</a>
                    <a class="custom-child-item dest-nav-city-dc" href="javascript:void(0)">华盛顿</a>
                    <a class="custom-child-item dest-nav-city-ys" href="javascript:void(0)">黄石</a>
                    <a class="custom-child-item dest-nav-city-lv" href="javascript:void(0)">拉斯维加斯</a>
                    <a class="custom-child-item dest-nav-city-la" href="javascript:void(0)">洛杉矶</a>
                    <a class="custom-child-item dest-nav-city-sf" href="javascript:void(0)">旧金山</a>
                </div>
            </li>

<!--            new york-->
            <ul class="dest-city-ny" id="dest-city-ny" >
                <li class="foot-certificate-item" id="">
                    <img class="destPicSize" src="https://usyilu.com/uploads/2017/0120/NY.jpg">
                </li>
            </ul>

<!--            boston-->
            <ul class="dest-city-boston" id="dest-city-boston" >
                <li class="foot-coop-item " id="">
                    <img class="destPicSize" src="https://usyilu.com/uploads/2017/0120/NY.jpg">
                </li>
            </ul>

<!--            washington DC-->
            <ul class="dest-city-dc" id="dest-city-dc" >
                <li class="foot-otherlinks-item " id="">
                    <img class="destPicSize" src="https://usyilu.com/uploads/2017/0120/NY.jpg">
                </li>
            </ul>

<!--            yellow stone-->
            <ul class="dest-city-ys" id="dest-city-ys" >
                <li class="foot-otherlinks-item " id="">
                    <img class="destPicSize" src="https://usyilu.com/uploads/2017/0120/YS.jpg">
                </li>
            </ul>

<!--            las vegas-->
            <ul class="dest-city-lv" id="dest-city-lv" >
                <li class="foot-otherlinks-item " id="">
                    <img class="destPicSize" src="https://usyilu.com/uploads/2017/0120/LS.jpg">
                </li>
            </ul>

<!--            Los angeles-->
            <ul class="dest-city-la" id="dest-city-la" >
                <li class="foot-otherlinks-item " id="">
                    <img class="destPicSize" src="https://usyilu.com/uploads/2017/0120/LA.jpg">
                </li>
            </ul>

<!--            San Francisco-->
            <ul class="dest-city-sf" id="dest-city-sf" >
                <li class="foot-otherlinks-item " id="">
                    <img class="destPicSize" src="https://usyilu.com/uploads/2017/0120/SF.jpg">
                </li>
            </ul>

          <li class="full-li">
                <em class="item">结束地点：</em>
                <div class="con">
                    <input type="hidden" name="dest" value="纽约"/>
                	<select class="dropdown-list" id="destDropdown" name="destDropdown">
                	<option value="纽约">纽约</option>
                	<option value="波士顿">波士顿</option>
                	<option value="华盛顿">华盛顿</option>
                	<option value="黄石">黄石</option>
                	<option value="拉斯维加斯">拉斯维加斯</option>
                	<option value="洛杉矶">洛杉矶</option>
                	<option value="旧金山">旧金山</option>
                	</select>
                    <a class="custom-child-item cc-active" href="javascript:void(0)">纽约</a>
                    <a class="custom-child-item" href="javascript:void(0)">波士顿</a>
                    <a class="custom-child-item" href="javascript:void(0)">华盛顿</a>
                    <a class="custom-child-item" href="javascript:void(0)">黄石</a>
                    <a class="custom-child-item" href="javascript:void(0)">拉斯维加斯</a>
                    <a class="custom-child-item" href="javascript:void(0)">洛杉矶</a>
                    <a class="custom-child-item" href="javascript:void(0)">旧金山</a>
                </div>
            </li>

          	<li class="half-li">
            	<em class="item required">出发时间：</em>
              <div class="con">
              	<input type="text" class="custom-default-text w270 noblank validat starttime" id="starttime" name="starttime" placeholder="" value=""/>
              </div>
            </li>
          	<li class="half-li">
            	<em class="item required">结束时间：</em>
              <div class="con">
              	<input type="text" class="custom-default-text w270 noblank validat endtime" id="endtime" name="endtime" placeholder="" value="" />
              </div>
            </li>
          	<li class="half-li">
            	<em class="item required">总人数：</em>
              <div class="con">
              	<input type="text" class="custom-default-text w270 noblank validat" name="adultnum" placeholder="" value="" />
              	<p class="error">* 此处请仅填写数字</p>
              </div>
            </li>

          	<li class="half-li">
            	<em class="item">房间数：</em>
              <div class="con">
              	<input type="text" class="custom-default-text w270 validat"  name="childnum" value=""/>
              	<p class="error">* 此处请仅填写数字</p>
              </div>
            </li>
          	<li class="full-li">
            	<em class="item">车型选择：</em>
              <div class="con" id="car-type-list">
                  <input type="hidden" name="planerank" value="凯迪拉克SUV"/>
                	<select class="dropdown-list" id="planerankDropdown" name="planerankDropdown">
                	<option value="丰田商务8座">丰田商务8座</option>
                	<option value="凯迪拉克SUV">凯迪拉克SUV</option>
                	<option value="福特12座商旅车">福特12座商旅车</option>
                	<option value="明星保姆9座">明星保姆9座</option>
                	<option value="美国福特15座">美国福特15座</option>
                	<option value="高顶奔驰15座">高顶奔驰15座</option>
                	</select>
              	<a class="custom-child-item pick-car-toyota" href="javascript:void(0)">丰田商务8座</a>
              	<a class="custom-child-item pick-car-suv cc-active" href="javascript:void(0)">凯迪拉克SUV</a>
                <a class="custom-child-item pick-car-ford12" href="javascript:void(0)">福特12座商旅车</a>
              	<a class="custom-child-item pick-car-star" href="javascript:void(0)">明星保姆9座</a>
              	<a class="custom-child-item pick-cars-ford15" href="javascript:void(0)">美国福特15座</a>
              	<a class="custom-child-item pick-car-benz" href="javascript:void(0)">高顶奔驰15座</a>
              </div>
            </li>

            <!-- add car pic-->
            <ul class="pick-suvs" id="pick-suvs" >
                <li class="pick-car-suvPic" id="">
                    <img class="carPicSize" src="https://usyilu.com/uploads/2017/0105/凯迪拉克SUV.jpg">
                </li>
            </ul>

            <ul class="pick-ford15" id="pick-ford15" >
                <li class="custom-car-ford15Pic" id="">
                    <img class="carPicSize" src="https://usyilu.com/uploads/2017/0105/福特15座.jpg">
                </li>
            </ul>

            <ul class="pick-benz" id="pick-benz" >
                <li class="custom-car-benzPic" id="">
                    <img class="carPicSize" src="https://usyilu.com/uploads/2017/0105/高顶奔驰15座.png">
                </li>
            </ul>

            <ul class="pick-toyota" id="pick-toyota" >
                <li class="custom-car-toyotaPic" id="">
                    <img class="carPicSize" src="https://usyilu.com/uploads/2017/0105/丰田商务8座.jpg">
                </li>
            </ul>

            <ul class="pick-star" id="pick-star" >
                <li class="custom-car-starPic" id="">
                    <img class="carPicSize" src="https://www.usyilu.com/uploads/2017/0105/明星保姆9座.jpg">
                </li>
            </ul>

            <ul class="pick-ford12" id="pick-ford12" >
                <li class="custom-car-ford12Pic" id="">
                    <img class="carPicSize" src="https://usyilu.com/uploads/2017/0105/福特12座商旅车.jpg">
                </li>
            </ul>


          	<li class="full-li">
            	<em class="item">酒店星级：</em>
              <div class="con">
                  <input type="hidden" name="hotelrank" value="三星级"/>
                	<select class="dropdown-list" id="hotelrankDropdown" name="hotelrankDropdown">
                	<option value="三星级">三星级</option>
                	<option value="四星级">四星级</option>
                	<option value="五星级">五星级</option>
                	<option value="五星级以上">五星级以上</option>
                	<option value="快捷经济型">快捷经济型</option>
                	<option value="客人自理">客人自理</option>
                	</select>
              	<a class="custom-child-item cc-active" href="javascript:void(0)">三星级</a>
              	<a class="custom-child-item" href="javascript:void(0)">四星级</a>
              	<a class="custom-child-item" href="javascript:void(0)">五星级</a>
              	<a class="custom-child-item" href="javascript:void(0)">五星级以上</a>
              	<a class="custom-child-item" href="javascript:void(0)">快捷经济型</a>
              	<a class="custom-child-item" href="javascript:void(0)">客人自理</a>
              </div>
            </li>
          	<li class="full-li">
            	<em class="item">需要房型：</em>
              <div class="con">
                  <input type="hidden" name="room" value="单人"/>
                	<select class="dropdown-list" id="roomDropdown" name="roomDropdown">
                	<option value="单人">单人</option>
                	<option value="双人大床房">双人大床房</option>
                	<option value="标准间">标准间</option>
                	<option value="套间">套间</option>
                	<option value="海景房">海景房</option>
                	<option value="客人自理">客人自理</option>
                	</select>
              	<a class="custom-child-item cc-active" href="javascript:void(0)">单人</a>
              	<a class="custom-child-item" href="javascript:void(0)">双人大床房</a>
              	<a class="custom-child-item" href="javascript:void(0)">标准间</a>
              	<a class="custom-child-item" href="javascript:void(0)">套间</a>
              	<a class="custom-child-item" href="javascript:void(0)">海景房</a>
              	<a class="custom-child-item" href="javascript:void(0)">客人自理</a>
              </div>
            </li>
          	<li class="full-li">
            	<em class="item">用餐形式：</em>
              <div class="con">
                  <input type="hidden" name="food" value="自理"/>
                	<select class="dropdown-list" id="foodDropdown" name="foodDropdown">
                	<option value="自理">自理</option>
                	<option value="部分自理">部分自理</option>
                	<option value="全面用餐">全面用餐</option>
                	</select>
              	<a class="custom-child-item cc-active" href="javascript:void(0)">自理</a>
              	<a class="custom-child-item" href="javascript:void(0)">部分自理</a>
              	<a class="custom-child-item" href="javascript:void(0)">全面用餐</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="custom-block">
      	<h3>step2&nbsp;&nbsp;您的联系方式</h3>
        <div class="block-content">
        	<ul>
          	<li class="half-li">
            	<em class="item required">联系人姓名：</em>
              <div class="con">
              	<input type="text" class="custom-default-text w270 noblank validat" name="contactname" placeholder="" value="" />
              </div>
            </li>
          	<li class="half-li">
            	<em class="item required">联系人性别：</em>
              <div class="con">
                  <input type="hidden" name="sex" value="先生"/>
                	<select class="dropdown-list" id="sexDropdown" name="sexDropdown">
                	<option value="先生">先生</option>
                	<option value="女士">女士</option>
                	</select>
              	<a class="custom-child-item cc-active" href="javascript:void(0)">先生</a>
              	<a class="custom-child-item" href="javascript:void(0)">女士</a>
              </div>
            </li>
          	<li class="half-li">
            	<em class="item required">联系人手机：</em>
              <div class="con-phone">
              	<select class="dropdown-list-reg" id="regionDropdown" name="regionDropdown">
                	<option value="+86 ">中国 +86</option>
                	<option value="+1 ">美国 +1</option>
               	</select>
              	<input type="text" class="custom-default-text w270 noblank validat" name="phone" placeholder="" value="" />
              	<p class="error" id="phone-error">* 此处请仅填写数字</p>
              </div>
            </li>
          	<li class="half-li">
            	<em class="item required">电子邮箱：</em>
              <div class="con">
              	<input type="text" class="custom-default-text w270 noblank validat" name="email" placeholder="" value="" />
              	<p class="error">* 请使用正确的邮箱格式</p>
              </div>
            </li>
<!--          	<li class="full-li">-->
<!--            	<em class="item">所在地点：</em>-->
<!--              <div class="con"><input type="text" class="custom-default-text w790 noblank" name="address" placeholder="" /></div>-->
<!--            </li>-->
          	<li class="full-li">
            	<em class="item">合适的联系时间：</em>
              <div class="con">
                <input type="hidden" name="contacttime" value="9:00-12:00"/>
                	<select class="dropdown-list" id="contacttimeDropdown" name="contacttimeDropdown">
                	<option value="9：00-12：00">9：00-12：00</option>
                	<option value="14：00-18：00">14：00-18：00</option>
                	<option value="19：00-22：00">19：00-22：00</option>
                	</select>
              	<a class="custom-child-item cc-active" href="javascript:void(0)">9：00-12：00</a>
              	<a class="custom-child-item" href="javascript:void(0)">14：00-18：00</a>
              	<a class="custom-child-item" href="javascript:void(0)">19：00-22：00</a>
              </div>
            </li>
          	<li class="full-li">
            	<em class="item">其他备注：</em>
              <div class="con">
              	<textarea cols="" rows="" class="remarks-textarea w790" name="content" value=""></textarea>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <input type="hidden" name="frmcode" value="{$frmcode}"/>
      <div class="custom-submit-block">
      <!-- <a href="javascript:;" class="custom-submit-btn" onClick="checkForm()">提交定制</a> -->
      <input type="submit" value="提交定制" class="custom-submit-btn" onClick="validateForm()">
      </div>
      </form>
      
    </div>
  </div>
   <script src="/tools/js/DatePicker/WdatePicker.js"></script>
   {Common::js('layer/layer.js',0)}
   <script>
       $("li .con a").click(function(e) {
    	   $(this).siblings("select").val($(this).text());
           $(this).siblings("input:hidden").val($(this).text());
           $(this).siblings("a").removeClass("cc-active");
           $(this).addClass("cc-active");
           
       });
       //日历选择
       $(".starttime").focus(function(){
           var today = '%y-%M-%d';
           console.log("endtime value before select start:");
           console.log($("#endtime").val());
           if ($("#endtime").val() != "") {
        	   var endtime = $("#endtime").val();
        	   WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd', minDate: today, maxDate: endtime});
           }
           else {
           	   WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd', minDate: today});
           }
           console.log("start time pick");
           console.log("endtime value:");
           console.log($("#endtime").val());
       })

       //结束时间
       $(".endtime").focus(function(){
           var today = '%y-%M-%d';
           var starttime = today;
           if ($("#starttime").val() != "")
           		starttime = $("#starttime").val();

           console.log("starttime value before select return:");
           console.log(starttime);
           WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd', minDate: starttime});
           console.log("end time pick");
       })

       $(".custom-submit-btn").click(function(){
           $("#cusfm").submit();
       })
       
       
       // 
       $(".dropdown-list").change(function(){
    	   listChange($(this));

       })
       


//
//       $(".custom-submit-btn").click(function(){
//           $("#cusfm").submit();
//       })

       function validateForm()
       {
           var isvalidate=true;
           var offset;
           // Clear all the form styles
           $(".validat").css("border","1px solid #dcdcdc");
           $(".validat").each(function(index, element) {
        	   var name = element.getAttribute("name");
        	   if(name === "adultnum" || name === "childnum" || name === "phone" || name === "email")
        		   element.nextSibling.style.display="none";
           });

           // Data validation
           $(".validat").each(function(index, element) {
               var val=$(element).val();
               // console.log("val: " + val);
               val=$.trim(val);
               // console.log("after trim val: " + val);
               if(!val && element.className.includes("blank")) /* if data field is empty */
               {
                   isvalidate=false;
                   if(typeof offset === 'undefined' || !offset)
                   		offset = $(element).offset();
              		
                   $(element).css("border","1px solid red");
                   $(element).attr('placeholder','此部分不能为空');
                   
               }
               else /* data field is not empty */
               {
                   var name = element.getAttribute("name");
                   if(name === "adultnum") {
                	   var isnum = /^[0-9]+$/.test(element.value);
                	   var isemail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(element.value);
                       console.log("adultnum is number?: " + isnum);
                	   if (!isnum) {
                		   isvalidate=false;
                           if(typeof offset === 'undefined' || !offset)
                           		offset = $(element).offset();
                           $(element).css("border","1px solid red");
                           element.nextSibling.style.display="block";
                  	   }
                   } else if(name === "childnum") {
                       if(!element.value)
                    	   element.value = "0";
                	   var isnum = /^[0-9]+$/.test(element.value);
                       console.log("childnum is number?:	 " + isnum);
                	   if (!isnum) {
                		   isvalidate=false;
                           if(typeof offset === 'undefined' || !offset)
                           		offset = $(element).offset();
                           $(element).css("border","1px solid red");
                           element.nextSibling.style.display="block";
                  	   }
                   } else if(name === "phone") {
                	   var isnum = /^[0-9]+$/.test(element.value);
                       console.log("phone is number?: " + isnum);
                	   if (!isnum) {
                		   isvalidate=false;
                           if(typeof offset === 'undefined' || !offset)
                           		offset = $(element).offset();
                           $(element).css("border","1px solid red");
                           element.nextSibling.innerHTML = "* 此处请仅填写数字";
                           element.nextSibling.style.display="block";
                  	   } else if($("#regionDropdown").val() == "+1 " && element.value.length != 10 /* 数字不是10位 */) { // 检查手机号位数
	                  		 isvalidate=false;
	                         if(typeof offset === 'undefined' || !offset)
	                         		offset = $(element).offset();
	                         $(element).css("border","1px solid red");
	                         element.nextSibling.innerHTML = "* 请输入10位美国电话号";
	                         element.nextSibling.style.display="block";
                       } else if($("#regionDropdown").val() == "+86 " && element.value.length != 11/* 数字不是11位 */) { // 检查手机号位数
                    	   isvalidate=false;
                           if(typeof offset === 'undefined' || !offset)
                           		offset = $(element).offset();
                           $(element).css("border","1px solid red");
                           element.nextSibling.innerHTML = "* 请输入11位中国手机号";
                           element.nextSibling.style.display="block";
                       }
                   } else if(name === "email") {
                	   var isemail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(element.value);
                	   if (!isemail) {
                		   isvalidate=false;
                           if(typeof offset === 'undefined' || !offset)
                           		offset = $(element).offset();
                           $(element).css("border","1px solid red");
                           element.nextSibling.style.display="block";
                  	   }
                   }
               }
           });

           // if there are defects in data
           console.log("Is validate?: " + isvalidate);
           if(!isvalidate) {
               $(window).scrollTop(offset.top-100);
			   return false;
           }
		   // if all the data is valid
		   /*
		   else{
               console.log("valid");
				// Prepare the data for summary page
				// prepare data for popup window
				var contactname = document.getElementsByName("contactname")[0].value;
                var sex = document.getElementsByName("sex")[0].value;
                var phone = document.getElementsByName("phone")[0].value;
                var email = document.getElementsByName("email")[0].value;
                var contacttime = document.getElementsByName("contacttime")[0].value;
                var starttime = document.getElementsByName("starttime")[0].value;
                var startplace = document.getElementsByName("startplace")[0].value;
                var endtime = document.getElementsByName("endtime")[0].value;
                var dest = document.getElementsByName("dest")[0].value;
                var adultnum = document.getElementsByName("adultnum")[0].value;
                var childnum = document.getElementsByName("childnum")[0].value;
                var planerank = document.getElementsByName("planerank")[0].value;
                var hotelrank = document.getElementsByName("hotelrank")[0].value;
                var room = document.getElementsByName("room")[0].value;
                var food = document.getElementsByName("food")[0].value;
                var content = document.getElementsByName("content")[0].value;
               
               $("#cusfm").submit();
               // Popup window
               console.log("Submit url: "+SITEURL+"customize/ajax_save");
               console.log("Data: "+$("#cusfrm").serialize());
               $.ajax({
                   type:'POST',
                   url:SITEURL+'customize/ajax_save',
                   data:$("#cusfrm").serialize(),
                   dataType:'json',
                   success:function(data){
                       if(data.status){
                           layer.alert(
                               "<h1>您的订单已提交成功!</h1>"+
                               "<h3>-----详细信息-----</h3>"+
                               "<h3>----------------</h3>"+
                               "<p>*****顾客姓名*****</p>"+contactname+
                               "<p>*****性别*****</p>"+sex+
                               "<p>*****联系电话*****</p>"+phone+
                               "<p>*****电子邮箱*****</p>"+email+
                               "<p>*****合适的联系时间*****</p>"+contacttime+
                               "<p>*****出发时间*****</p>"+starttime+
                               "<p>*****出发地点*****</p>"+startplace+
                               "<p>*****结束时间*****</p>"+endtime+
                               "<p>*****结束地点*****</p>"+dest+
                               "<p>*****成人人数*****</p>"+adultnum+
                               "<p>*****儿童人数*****</p>"+childnum+
                               "<p>*****车型选择*****</p>"+planerank+
                               "<p>*****酒店星级*****</p>"+hotelrank+
                               "<p>*****需要房型*****</p>"+room+
                               "<p>*****用餐形式*****</p>"+food+
                               "<p>*****其他备注*****</p>"+content, {
                               icon: 1,
                               skin: 'layer-ext-moon',
                               yes:function()
                               {
                                   window.location.reload();
                               }
                           })
                       }else{
                           layer.alert("提交失败", {
                               icon: 2,
                               skin: 'layer-ext-moon'
                           })
                       }
                   }
               })
               
           }*/
       }


       //城市选择
//       $(".foot-nav-item-certificate").hover(
       $(".dest-nav-city-ny").hover(
           function () {
               $(this).addClass('hover');
//            $("foot-certificate-item").addClass('showContent');
//            $(".foot-certificate").css({"background-color": "yellow"});
               $(".dest-city-ny").show();
               $(".dest-city-boston").hide();
               $(".dest-city-dc").hide();
               $(".dest-city-ys").hide();
               $(".dest-city-la").hide();
               $(".dest-city-lv").hide();
               $(".dest-city-sf").hide();

//            $(".foot-certificate").addClass('showContent');
           },
           function () {
               $(this).removeClass("hover");
//            $(".foot-certificate").hide();
               $(".dest-city-ny").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('dest-nav-pills'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("ny")) {
							$(".dest-city-ny").show();
						} else if(e.className.includes("bos")) {
							$(".dest-city-boston").show();
						} else if(e.className.includes("dc")) {
							$(".dest-city-dc").show();
						} else if(e.className.includes("ys")) {
							$(".dest-city-ys").show();
						} else if(e.className.includes("lv")) {
							$(".dest-city-lv").show();
						} else if(e.className.includes("la")) {
							$(".dest-city-la").show();
						} else {
							$(".dest-city-sf").show();
						}
                   }
               }
           }
       );
       $(".dest-nav-city-boston").hover(
           function () {
               $(this).addClass('hover');
//            $("foot-certificate-item").addClass('showContent');
//            $(".foot-certificate").css({"background-color": "yellow"});
               $(".dest-city-ny").hide();
               $(".dest-city-boston").show();
               $(".dest-city-boston").css({"visibility" : "visible"});
               $(".dest-city-dc").hide();
               $(".dest-city-ys").hide();
               $(".dest-city-la").hide();
               $(".dest-city-lv").hide();
               $(".dest-city-sf").hide();

//            $(".foot-certificate").addClass('showContent');
           },
           function () {
               $(this).removeClass("hover");
//            $(".foot-certificate").hide();
               $(".dest-city-boston").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('dest-nav-pills'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("ny")) {
							$(".dest-city-ny").show();
						} else if(e.className.includes("bos")) {
							$(".dest-city-boston").show();
						} else if(e.className.includes("dc")) {
							$(".dest-city-dc").show();
						} else if(e.className.includes("ys")) {
							$(".dest-city-ys").show();
						} else if(e.className.includes("lv")) {
							$(".dest-city-lv").show();
						} else if(e.className.includes("la")) {
							$(".dest-city-la").show();
						} else {
							$(".dest-city-sf").show();
						}
                   }
               }
           }
       );
       $(".dest-nav-city-dc").hover(
           function () {
               $(this).addClass('hover');
//            $("foot-certificate-item").addClass('showContent');
//            $(".foot-certificate").css({"background-color": "yellow"});
               $(".dest-city-ny").hide();
               $(".dest-city-boston").hide();
               $(".dest-city-dc").css({"visibility" : "visible"});
               $(".dest-city-dc").show();
               $(".dest-city-ys").hide();
               $(".dest-city-la").hide();
               $(".dest-city-lv").hide();
               $(".dest-city-sf").hide();

//            $(".foot-certificate").addClass('showContent');
           },
           function () {
               $(this).removeClass("hover");
//            $(".foot-certificate").hide();
               $(".dest-city-dc").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('dest-nav-pills'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("ny")) {
							$(".dest-city-ny").show();
						} else if(e.className.includes("bos")) {
							$(".dest-city-boston").show();
						} else if(e.className.includes("dc")) {
							$(".dest-city-dc").show();
						} else if(e.className.includes("ys")) {
							$(".dest-city-ys").show();
						} else if(e.className.includes("lv")) {
							$(".dest-city-lv").show();
						} else if(e.className.includes("la")) {
							$(".dest-city-la").show();
						} else {
							$(".dest-city-sf").show();
						}
                   }
               }
           }
       );
       $(".dest-nav-city-ys").hover(
           function () {
               $(this).addClass('hover');
//            $("foot-certificate-item").addClass('showContent');
//            $(".foot-certificate").css({"background-color": "yellow"});
               $(".dest-city-ny").hide();
               $(".dest-city-boston").hide();
               $(".dest-city-ys").css({"visibility" : "visible"});
               $(".dest-city-ys").show();
               $(".dest-city-dc").hide();
               $(".dest-city-la").hide();
               $(".dest-city-lv").hide();
               $(".dest-city-sf").hide();

//            $(".foot-certificate").addClass('showContent');
           },
           function () {
               $(this).removeClass("hover");
//            $(".foot-certificate").hide();
               $(".dest-city-ys").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('dest-nav-pills'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("ny")) {
							$(".dest-city-ny").show();
						} else if(e.className.includes("bos")) {
							$(".dest-city-boston").show();
						} else if(e.className.includes("dc")) {
							$(".dest-city-dc").show();
						} else if(e.className.includes("ys")) {
							$(".dest-city-ys").show();
						} else if(e.className.includes("lv")) {
							$(".dest-city-lv").show();
						} else if(e.className.includes("la")) {
							$(".dest-city-la").show();
						} else {
							$(".dest-city-sf").show();
						}
                   }
               }
           }
       );
       $(".dest-nav-city-lv").hover(
           function () {
               $(this).addClass('hover');
//            $("foot-certificate-item").addClass('showContent');
//            $(".foot-certificate").css({"background-color": "yellow"});
               $(".dest-city-ny").hide();
               $(".dest-city-boston").hide();
               $(".dest-city-lv").css({"visibility" : "visible"});
               $(".dest-city-lv").show();
               $(".dest-city-dc").hide();
               $(".dest-city-ys").hide();
               $(".dest-city-la").hide();
               $(".dest-city-sf").hide();

//            $(".foot-certificate").addClass('showContent');
           },
           function () {
               $(this).removeClass("hover");
//            $(".foot-certificate").hide();
               $(".dest-city-lv").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('dest-nav-pills'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("ny")) {
							$(".dest-city-ny").show();
						} else if(e.className.includes("bos")) {
							$(".dest-city-boston").show();
						} else if(e.className.includes("dc")) {
							$(".dest-city-dc").show();
						} else if(e.className.includes("ys")) {
							$(".dest-city-ys").show();
						} else if(e.className.includes("lv")) {
							$(".dest-city-lv").show();
						} else if(e.className.includes("la")) {
							$(".dest-city-la").show();
						} else {
							$(".dest-city-sf").show();
						}
                   }
               }
           }
       );
       $(".dest-nav-city-la").hover(
           function () {
               $(this).addClass('hover');
//            $("foot-certificate-item").addClass('showContent');
//            $(".foot-certificate").css({"background-color": "yellow"});
               $(".dest-city-ny").hide();
               $(".dest-city-boston").hide();
               $(".dest-city-la").css({"visibility" : "visible"});
               $(".dest-city-la").show();
               $(".dest-city-dc").hide();
               $(".dest-city-ys").hide();
               $(".dest-city-lv").hide();
               $(".dest-city-sf").hide();

//            $(".foot-certificate").addClass('showContent');
           },
           function () {
               $(this).removeClass("hover");
//            $(".foot-certificate").hide();
               $(".dest-city-la").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('dest-nav-pills'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("ny")) {
							$(".dest-city-ny").show();
						} else if(e.className.includes("bos")) {
							$(".dest-city-boston").show();
						} else if(e.className.includes("dc")) {
							$(".dest-city-dc").show();
						} else if(e.className.includes("ys")) {
							$(".dest-city-ys").show();
						} else if(e.className.includes("lv")) {
							$(".dest-city-lv").show();
						} else if(e.className.includes("la")) {
							$(".dest-city-la").show();
						} else {
							$(".dest-city-sf").show();
						}
                   }
               }
           }
       );
       $(".dest-nav-city-sf").hover(
           function () {
               $(this).addClass('hover');
//            $("foot-certificate-item").addClass('showContent');
//            $(".foot-certificate").css({"background-color": "yellow"});
               $(".dest-city-ny").hide();
               $(".dest-city-boston").hide();
               $(".dest-city-sf").css({"visibility" : "visible"});
               $(".dest-city-sf").show();
               $(".dest-city-dc").hide();
               $(".dest-city-ys").hide();
               $(".dest-city-la").hide();
               $(".dest-city-lv").hide();

//            $(".foot-certificate").addClass('showContent');
           },
           function () {
               $(this).removeClass("hover");
//            $(".foot-certificate").hide();
               $(".dest-city-sf").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('dest-nav-pills'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("ny")) {
							$(".dest-city-ny").show();
						} else if(e.className.includes("bos")) {
							$(".dest-city-boston").show();
						} else if(e.className.includes("dc")) {
							$(".dest-city-dc").show();
						} else if(e.className.includes("ys")) {
							$(".dest-city-ys").show();
						} else if(e.className.includes("lv")) {
							$(".dest-city-lv").show();
						} else if(e.className.includes("la")) {
							$(".dest-city-la").show();
						} else {
							$(".dest-city-sf").show();
						}
                   }
               }
           }
       );

       //车型选择
       $(".pick-car-suv").hover(
           function () {
               $(this).addClass('hover');
               $(".pick-suvs").show();

               $(".pick-ford15").hide();
               $(".pick-benz").hide();
               $(".pick-toyota").hide();
               $(".pick-star").hide();
               $(".pick-ford12").hide();

           },
           function () {
               $(this).removeClass("hover");
//             $(".foot-certificate").hide();
               $(".pick-suvs").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('car-type-list'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("suv")) {
							$(".pick-suvs").show();
						} else if(e.className.includes("ford15")) {
							$(".pick-ford15").show();
						} else if(e.className.includes("benz")) {
							$(".pick-benz").show();
						} else if(e.className.includes("toyota")) {
							$(".pick-toyota").show();
						} else if(e.className.includes("star")) {
							$(".pick-star").show();
						} else {
							$(".pick-ford12").show();
						}
                   }
               }
           }
       );

       $(".pick-cars-ford15").hover(
           function () {
               $(this).addClass('hover');
               $(".pick-suvs").hide();

               $(".pick-ford15").css({"visibility" : "visible"});
               $(".pick-ford15").show();
               $(".pick-benz").hide();
               $(".pick-toyota").hide();
               $(".pick-star").hide();
               $(".pick-ford12").hide();

           },
           function () {
               $(this).removeClass("hover");
//            $(".foot-certificate").hide();
               $(".pick-ford15").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('car-type-list'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("suv")) {
							$(".pick-suvs").show();
						} else if(e.className.includes("ford15")) {
							$(".pick-ford15").show();
						} else if(e.className.includes("benz")) {
							$(".pick-benz").show();
						} else if(e.className.includes("toyota")) {
							$(".pick-toyota").show();
						} else if(e.className.includes("star")) {
							$(".pick-star").show();
						} else {
							$(".pick-ford12").show();
						}
                   }
               }
           }
       );

       $(".pick-car-benz").hover(
           function () {
               $(this).addClass('hover');
               $(".pick-suvs").hide();
               $(".pick-ford15").hide();

               $(".pick-benz").css({"visibility" : "visible"});
               $(".pick-benz").show();
               $(".pick-toyota").hide();
               $(".pick-star").hide();
               $(".pick-ford12").hide();

           },
           function () {
               $(this).removeClass("hover");
//            $(".foot-certificate").hide();
               $(".pick-benz").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('car-type-list'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("suv")) {
							$(".pick-suvs").show();
						} else if(e.className.includes("ford15")) {
							$(".pick-ford15").show();
						} else if(e.className.includes("benz")) {
							$(".pick-benz").show();
						} else if(e.className.includes("toyota")) {
							$(".pick-toyota").show();
						} else if(e.className.includes("star")) {
							$(".pick-star").show();
						} else {
							$(".pick-ford12").show();
						}
                   }
               }
           }
       );


       $(".pick-car-toyota").hover(
           function () {
               $(this).addClass('hover');
               $(".pick-suvs").hide();
               $(".pick-ford15").hide();
               $(".pick-benz").hide();

               $(".pick-toyota").css({"visibility" : "visible"});
               $(".pick-toyota").show();
               $(".pick-star").hide();
               $(".pick-ford12").hide();

           },
           function () {
               $(this).removeClass("hover");
//            $(".foot-certificate").hide();
               $(".pick-toyota").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('car-type-list'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("suv")) {
							$(".pick-suvs").show();
						} else if(e.className.includes("ford15")) {
							$(".pick-ford15").show();
						} else if(e.className.includes("benz")) {
							$(".pick-benz").show();
						} else if(e.className.includes("toyota")) {
							$(".pick-toyota").show();
						} else if(e.className.includes("star")) {
							$(".pick-star").show();
						} else {
							$(".pick-ford12").show();
						}
                   }
               }
           }
       );


       $(".pick-car-star").hover(
           function () {
               $(this).addClass('hover');
               $(".pick-suvs").hide();
               $(".pick-ford15").hide();
               $(".pick-benz").hide();
               $(".pick-toyota").hide();

               $(".pick-star").css({"visibility" : "visible"});
               $(".pick-star").show();
               $(".pick-ford12").hide();

           },
           function () {
               $(this).removeClass("hover");
//            $(".foot-certificate").hide();
               $(".pick-star").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('car-type-list'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("suv")) {
							$(".pick-suvs").show();
						} else if(e.className.includes("ford15")) {
							$(".pick-ford15").show();
						} else if(e.className.includes("benz")) {
							$(".pick-benz").show();
						} else if(e.className.includes("toyota")) {
							$(".pick-toyota").show();
						} else if(e.className.includes("star")) {
							$(".pick-star").show();
						} else {
							$(".pick-ford12").show();
						}
                   }
               }
           }
       );


       $(".pick-car-ford12").hover(
           function () {
               $(this).addClass('hover');
               $(".pick-suvs").hide();

               $(".pick-ford15").hide();
               $(".pick-benz").hide();
               $(".pick-toyota").hide();
               $(".pick-star").hide();

               $(".pick-ford12").css({"visibility" : "visible"});
               $(".pick-ford12").show();

           },
           function () {
               $(this).removeClass("hover");
//            $(".foot-certificate").hide();
               $(".pick-ford12").hide();

				// Change image focus after move away
               var ancestor = document.getElementById('car-type-list'),
               	descendents = ancestor.getElementsByTagName('a');
               var i, e;
               for (i = 0; i < descendents.length; ++i) {
            	   e = descendents[i];
            	   if(e.className.includes("cc-active")) {
						if(e.className.includes("suv")) {
							$(".pick-suvs").show();
						} else if(e.className.includes("ford15")) {
							$(".pick-ford15").show();
						} else if(e.className.includes("benz")) {
							$(".pick-benz").show();
						} else if(e.className.includes("toyota")) {
							$(".pick-toyota").show();
						} else if(e.className.includes("star")) {
							$(".pick-star").show();
						} else {
							$(".pick-ford12").show();
						}
                   }
               }
           }
       );



   </script>
   {request "pub/footer"}


</body>
</html>
		