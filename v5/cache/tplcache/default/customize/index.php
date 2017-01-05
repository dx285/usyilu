<?php defined('SYSPATH') or die();?><!doctype html><html><head><meta charset="utf-8"><meta charset="utf-8"><title><?php echo $seoinfo['seotitle'];?>-<?php echo $GLOBALS['cfg_webname'];?></title><?php if($seoinfo['keyword']) { ?><meta name="keywords" content="<?php echo $seoinfo['keyword'];?>" /><?php } ?><?php if($seoinfo['description']) { ?><meta name="description" content="<?php echo $seoinfo['description'];?>" /><?php } ?><?php echo  Stourweb_View::template("pub/varname");  ?><?php echo Common::css('base.css,extend.css');?><?php echo Common::js('jquery.min.js,base.js,common.js,delayLoading.min.js');?><?php echo Common::css_plugin('customize.css','customize');?></head><body><?php echo Request::factory("pub/header")->execute()->body(); ?><div class="dz-banner-box"><?php require_once ("/var/www/gogogous/taglib/ad.php");$ad_tag = new Taglib_Ad();if (method_exists($ad_tag, 'getad')) {$ad = $ad_tag->getad(array('action'=>'getad','name'=>'s_customize_index_1','pc'=>'1','return'=>'ad',));}?><?php if(!empty($ad)) { ?><a href="<?php if(empty($ad['adlink'])) { ?>javascript:;<?php } else { ?><?php echo $ad['adlink'];?><?php } ?>
" target="_blank"><img  src="<?php echo Product::get_lazy_img();?>" st-src="<?php echo Common::img($ad['adsrc'],1920,386);?>" alt="<?php echo $ad['adname'];?>"></a><?php } else { ?><a href="javascript:;" target="_blank"><img src="<?php echo $GLOBALS['cfg_plugin_customize_public_url'];?>images/siren-dz-banner.jpg" width="1920" height="386"></a><?php } ?></div><!-- banner --><div class="big"><div class="wm-1200"><div class="custom-super"><ul><li class="sm"><strong>私密</strong><span>家庭成员、亲密好友<br>独立成团、随时出发</span></li><li class="sx"><strong>省心</strong><span>交通、酒店、导游<br>全程服务设计安排</span></li><li class="zs"><strong>专属</strong><span>“一对一”路线订制<br>打造独一无二专属旅行</span></li><li class="ld"><strong>灵动</strong><span>告别每日既定式行程<br>路线景点随心安排</span></li></ul></div></div></div><!-- 个性化 --><div class="big custom-content"><div class="wm-1200"><div class="custom-bt"><h3><strong>我们能为您做的更多！</strong>Because of you!</h3><p>为更好的了解您的旅行计划，为您提供完美的订制服务，请完善以下资料。</p></div><form id="cusfrm" method="post" action="<?php echo $cmsurl;?>customize/ajax_save"><div class="custom-block"><h3>step1&nbsp;&nbsp;您的旅行计划</h3><div class="block-content"><ul><li class="full-li"><em class="item">出发地点：</em><div class="con dest-nav-pills"><input type="hidden" name="startplace" value="纽约"/><a class="custom-child-item cc-active  dest-nav-city-ny" href="javascript:void(0)">纽约</a><a class="custom-child-item dest-nav-city-boston" href="javascript:void(0)">波士顿</a><a class="custom-child-item dest-nav-city-dc" href="javascript:void(0)">华盛顿</a><a class="custom-child-item dest-nav-city-ys" href="javascript:void(0)">黄石</a><a class="custom-child-item dest-nav-city-lv" href="javascript:void(0)">拉斯维加斯</a><a class="custom-child-item dest-nav-city-la" href="javascript:void(0)">洛杉矶</a><a class="custom-child-item dest-nav-city-sf" href="javascript:void(0)">旧金山</a></div></li><!--            new york--><ul class="dest-city-ny" ><li class="foot-certificate-item" id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/NY图.jpg"></li><li class="foot-certificate-item" id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/NY文字.jpg"></li></ul><!--            boston--><ul class="dest-city-boston" ><li class="foot-coop-item " id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/NY图.jpg"></li><li class="foot-coop-item " id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/NY文字.jpg"></li></ul><!--            washington DC--><ul class="dest-city-dc" ><li class="foot-otherlinks-item " id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/DC图.jpg"></li><li class="foot-otherlinks-item " id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/DC文字.jpg"></li></ul><!--            yellow stone--><ul class="dest-city-ys" ><li class="foot-otherlinks-item " id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/DC图.jpg"></li><li class="foot-otherlinks-item " id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/DC文字.jpg"></li></ul><!--            las vegas--><ul class="dest-city-lv" ><li class="foot-otherlinks-item " id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/SF图.jpg"></li><li class="foot-otherlinks-item " id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/SF文字.jpg"></li></ul><!--            Los angeles--><ul class="dest-city-la" ><li class="foot-otherlinks-item " id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/LA图.jpg"></li><li class="foot-otherlinks-item " id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/LA文字.jpg"></li></ul><!--            San Francisco--><ul class="dest-city-sf" ><li class="foot-otherlinks-item " id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/SF图.jpg"></li><li class="foot-otherlinks-item " id=""><img class="destPicSize" src="http://usyilu.com/uploads/2016/1203/SF文字.jpg"></li></ul><li class="full-li"><em class="item">结束地点：</em><div class="con"><input type="hidden" name="dest" value="纽约"/><a class="custom-child-item cc-active" href="javascript:void(0)">纽约</a><a class="custom-child-item" href="javascript:void(0)">波士顿</a><a class="custom-child-item" href="javascript:void(0)">华盛顿</a><a class="custom-child-item" href="javascript:void(0)">黄石</a><a class="custom-child-item" href="javascript:void(0)">拉斯维加斯</a><a class="custom-child-item" href="javascript:void(0)">洛杉矶</a><a class="custom-child-item" href="javascript:void(0)">旧金山</a></div></li><li class="half-li"><em class="item">结束时间：</em><div class="con"><input type="text" class="custom-default-text w270 noblank endtime" name="days" /></div></li><li class="half-li"><em class="item">出发时间：</em><div class="con"><input type="text" class="custom-default-text w270 noblank starttime" name="starttime" /></div></li><li class="half-li"><em class="item">成人数：</em><div class="con"><input type="text" class="custom-default-text w270 noblank" name="adultnum" /></div></li><li class="half-li"><em class="item">儿童座位：</em><div class="con"><input type="text" class="custom-default-text w270"  name="childnum" value="0"/></div></li><li class="full-li"><em class="item">车型选择：</em><div class="con"><input type="hidden" name="planerank" value="凯迪拉克SUV"/><a class="custom-child-item pick-car-suv cc-active" href="javascript:void(0)">凯迪拉克SUV</a><a class="custom-child-item pick-cars-ford15" href="javascript:void(0)">美国福特15座</a><a class="custom-child-item pick-car-benz" href="javascript:void(0)">高顶奔驰15座</a><a class="custom-child-item pick-car-toyota" href="javascript:void(0)">丰田商务8座</a><a class="custom-child-item pick-car-star" href="javascript:void(0)">明星保姆9座</a><a class="custom-child-item pick-car-ford12" href="javascript:void(0)">福特12座商旅车</a></div></li><!-- add car pic--><ul class="pick-suvs" ><li class="pick-car-suvPic" id=""><img class="carPicSize" src="http://usyilu.com/uploads/2017/0105/凯迪拉克SUV.jpg"></li></ul><ul class="pick-ford15" ><li class="custom-car-ford15Pic" id=""><img class="carPicSize" src="http://usyilu.com/uploads/2017/0105/福特15座.jpg"></li></ul><ul class="pick-benz" ><li class="custom-car-benzPic" id=""><img class="carPicSize" src="http://usyilu.com/uploads/2017/0105/高顶奔驰15座.png"></li></ul><ul class="pick-toyota" ><li class="custom-car-toyotaPic" id=""><img class="carPicSize" src="http://usyilu.com/uploads/2017/0105/丰田商务8座.jpg"></li></ul><ul class="pick-star" ><li class="custom-car-starPic" id=""><img class="carPicSize" src="http://www.usyilu.com/uploads/2017/0105/明星保姆9座.jpg"></li></ul><ul class="pick-ford12" ><li class="custom-car-ford12Pic" id=""><img class="carPicSize" src="http://usyilu.com/uploads/2017/0105/福特12座商旅车.jpg"></li></ul><li class="full-li"><em class="item">酒店星级：</em><div class="con"><input type="hidden" name="hotelrank" value="三星级"/><a class="custom-child-item cc-active" href="javascript:void(0)">三星级</a><a class="custom-child-item" href="javascript:void(0)">四星级</a><a class="custom-child-item" href="javascript:void(0)">五星级</a><a class="custom-child-item" href="javascript:void(0)">五星级以上</a><a class="custom-child-item" href="javascript:void(0)">快捷经济型</a><a class="custom-child-item" href="javascript:void(0)">其他</a></div></li><li class="full-li"><em class="item">需要房型：</em><div class="con"><input type="hidden" name="room" value="单人"/><a class="custom-child-item cc-active" href="javascript:void(0)">单人</a><a class="custom-child-item" href="javascript:void(0)">双人大床房</a><a class="custom-child-item" href="javascript:void(0)">双人分床房</a><a class="custom-child-item" href="javascript:void(0)">套间</a><a class="custom-child-item" href="javascript:void(0)">海景房</a><a class="custom-child-item" href="javascript:void(0)">其他</a></div></li><li class="full-li"><em class="item">用餐形式：</em><div class="con"><input type="hidden" name="food" value="自理"/><a class="custom-child-item cc-active" href="javascript:void(0)">自理</a><a class="custom-child-item" href="javascript:void(0)">部分自理</a><a class="custom-child-item" href="javascript:void(0)">全面用餐</a></div></li></ul></div></div><div class="custom-block"><h3>step2&nbsp;&nbsp;您的联系方式</h3><div class="block-content"><ul><li class="half-li"><em class="item">您的称呼：</em><div class="con"><input type="text" class="custom-default-text w270 noblank" name="contactname" /></div></li><li class="half-li"><em class="item">您的性别：</em><div class="con"><input type="hidden" name="sex" value="先生"/><a class="custom-child-item cc-active" href="javascript:void(0)">先生</a><a class="custom-child-item" href="javascript:void(0)">女士</a></div></li><li class="half-li"><em class="item">联系电话：</em><div class="con"><input type="text" class="custom-default-text w270 noblank" name="phone" /></div></li><li class="half-li"><em class="item">电子邮箱：</em><div class="con"><input type="text" class="custom-default-text w270" name="email" /></div></li><!--          <li class="full-li">--><!--            <em class="item">所在地点：</em>--><!--              <div class="con"><input type="text" class="custom-default-text w790 noblank" name="address" /></div>--><!--            </li>--><li class="full-li"><em class="item">合适的联系时间：</em><div class="con"><input type="hidden" name="contacttime" value="9:00-12:00"/><a class="custom-child-item cc-active" href="javascript:void(0)">9：00-12：00</a><a class="custom-child-item" href="javascript:void(0)">14：00-18：00</a><a class="custom-child-item" href="javascript:void(0)">19：00-22：00</a></div></li><li class="full-li"><em class="item">其他备注：</em><div class="con"><textarea cols="" rows="" class="remarks-textarea w790" name="content"></textarea></div></li></ul></div></div><input type="hidden" name="frmcode" value="<?php echo $frmcode;?>"/><div class="custom-submit-block"><a href="javascript:;" class="custom-submit-btn" onClick="checkForm()">提交定制</a></div></form></div></div><script src="/tools/js/DatePicker/WdatePicker.js"></script><?php echo Common::js('layer/layer.js',0);?><script>
       $("li .con a").click(function(e) {
           $(this).siblings("input:hidden").val($(this).text());
           $(this).siblings("a").removeClass("cc-active");
           $(this).addClass("cc-active");
       });
       //日历选择
       $(".starttime").click(function(){
           WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d'});
           console.log("start time pick");
       })
       //结束时间
       $(".endtime").click(function(){
           WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d'})
           console.log("end time pick");
       })
       $(".custom-submit-btn").click(function(){
           $("#cusfm").submit();
       })
//
//       $(".custom-submit-btn").click(function(){
//           $("#cusfm").submit();
//       })
       function checkForm()
       {
           var isvalidate=true;
           $(".noblank").each(function(index, element) {
               var val=$(element).val();
               console.log("val: " + val);
               val=$.trim(val);
               console.log("after trim val: " + val);
               if(!val)
               {
                   var offset=$(element).offset();
                   $(window).scrollTop(offset.top-100);
                   $(element).css("border","1px solid red");
                   isvalidate=false;
                   return false;
               }
               else
               {
                   $(element).css("border","1px solid #dcdcdc");
               }
           });
           if(isvalidate){
               console.log("valid")
               $("#cusfm").submit();
               $.ajax({
                   type:'POST',
                   url:SITEURL+'customize/ajax_save',
                   data:$("#cusfrm").serialize(),
                   dataType:'json',
                   success:function(data){
                       if(data.status){
                           layer.alert("提交成功", {
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
           }
               //$("#cusfm").submit();
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
//            $(".foot-certificate").hide();
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
           }
       );
   </script><?php echo Request::factory("pub/footer")->execute()->body(); ?></body></html>
