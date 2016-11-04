<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>{$info['title']}预订-{$webname}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {Common::css('amazeui.css,style.css,extend.css')}
    {Common::js('jquery.min.js,amazeui.js,template.js,layer/layer.m.js')}
    {Common::css('../js/mobiscroll/css/mobiscroll.frame.css,../js/mobiscroll/css/mobiscroll.frame.android.css')}
    {Common::css('../js/mobiscroll/css/mobiscroll.scroller.css,../js/mobiscroll/css/mobiscroll.scroller.android.css')}
    {Common::js('mobiscroll/js/mobiscroll.core.js,mobiscroll/js/mobiscroll.frame.js,mobiscroll/js/mobiscroll.scroller.js')}
    {Common::js('mobiscroll/js/mobiscroll.util.datetime.js,mobiscroll/js/mobiscroll.datetimebase.js,mobiscroll/js/mobiscroll.datetime.js')}
    {Common::js('mobiscroll/js/mobiscroll.frame.android.js,mobiscroll/js/i18n/mobiscroll.i18n.zh.js')}
<script>
	$(function(){
		$('#my-st-slide').offCanvas('close');
	})
</script>
</head>

<body>

   {request "pub/header/typeid/$typeid/isbookpage/1"}
  
  <section>
    
  	<div class="mid_content">
        {if empty($userinfo['mid'])}
        <div class="order-hint-msg-box">
            <p class="hint-txt">温馨提示：<a href="/phone/member/login">登录</a>可享受预定送积分、积分抵现！</p>
        </div><!-- 未登录提示 -->
        {/if}
        <form method="post" action="{$cmsurl}{$pinyin}/create" id="orderfrm">
			<div class="confirm_order_msg">
      	<dl>
        	<dt><img src="{$info['litpic']}" /></dt>
          <dd id="min_price_tips">
              <strong class="hide"><i class="currency_sy">{Currency_Tool::symbol()}</i><b id="minprice">{$info['price']}</b>起</strong>
              <strong class="hide"><b>电询</b></strong>
          </dd>
        </dl>
      </div><!--产品简介-->
      
      <div class="book_type">
      	<h3 class="book_tit">产品类型</h3>
        <div class="book_con_box">
        	<ul id="suit_container">
               {loop $suits $row}
                 <li data-suitid="{$row['id']}" date-start="{date('Y-m-d',$row['startTime'])}" data-minprice="{$row['ourprice']}" data-storage="{$row['number']}">{$row['suitname']}</li>
               {/loop}
          </ul>
        </div>
      </div><!--产品类型-->
      
      <div class="book_type">
      	<h3 class="book_tit">选择日期</h3>
        <div class="people_num">
            <p>
                <strong>使用日期：</strong>
            <span>
            <input type="text" class="startdate usedate" id="usedate" name="usedate" style="width: 200px;border: 0;text-align: left" readonly="true" value="{date('Y-m-d')}"/>
            </span>
            <span class="usedate">&gt;</span>
            </p>

        </div>
      </div><!--选择日期-->
      
      <div class="book_type">
      	<h3 class="book_tit">购买数量</h3>
        <div class="people_num">
        	<p>
          	<strong>数量：</strong>
            <span>
            	<a class="sub" href="javascript:;">-</a>
                <input type="text" name="dingnum" value="1" id="dingnum" readonly/>
            	<a class="add" href="javascript:;">+</a>
            </span>
          </p>
            <p>单价：<em id="single_price"><i class="currency_sy">{Currency_Tool::symbol()}</i><b></b></em></p>
        </div>
      </div><!--购买数量-->
      
      <div class="book_type">
      	<h3 class="book_tit">联系人信息<a href="javascript:;" id="chooseman">选择常用联系人&gt;</a></h3>
        <div class="linkman">
        	<dl>
            <dd><strong>姓名：</strong><input type="text" name="linkman" id="linkman" class="" /><span>(必填)</span></dd>
            <dd><strong>联系电话：</strong><input type="text" name="linktel" id="linktel" class="" placeholder="手机号或固定电话" /><span>(必填)</span></dd>
            <!--<dd><strong>身份证号：</strong><input type="text" name="linkidcard" id="linkidcard" class="" placeholder="输入18位身份证号码" /></dd>-->
            <dd><strong>订单备注：</strong><textarea name="remark" cols="" rows=""></textarea></dd>
            <input type="hidden" name="suitid" id="suitid" value=""/>
            <input type="hidden" name="productid" id="productid" value="{$info['id']}"/>
            <input type="hidden" name="typeid"  value="{$typeid}"/>
            <input type="hidden" id="price" value="0">
                <!--          优惠券-->
                <input type="hidden" name="couponid" id="couponid" value="0"/>
          </dl>
        </div>
      </div><!--预定人数-->
      </form>
    </div>
      <!--常用联系人-->
      <div id="linkman_list" style="display: none">
          <div class="linkman_page">
              <h3 class="tit">选择一个联系人</h3>
              <ul class="linkman_list">
                  {st:member action="linkman" memberid="$userinfo['mid']"}
                  {loop $data $r}
                  <li>
                      <strong>{$r['linkman']}</strong>
                      <span>联系电话{$r['mobile']}</span>
                      <span>身份证号{$r['idcard']}</span>
                      <i class="lk_choose" data-linkman="{$r['linkman']}" data-mobile="{$r['mobile']}" data-idcard="{$r['idcard']}"></i>
                  </li>
                  {/loop}
                  {/st}

              </ul>
          </div><!--选择联系人-->
      </div>
      <!--日历报价-->
      <div id="js_calendar" style="display: none">

      </div>

      {request "pub/integral?typeid=$typeid&productid=".$info['id']}
      <!--选择优惠券-->
      <div id="coupon_box" style="display: none;">

          {if St_Functions::is_normal_app_install('coupon')}{request "coupon/box-$typeid-".$info['id']}{/if}
      </div>
  </section>

   <script>
       var productid="{$info['id']}";
       var price=0;
       var storage=-1;
       var currency_symbol="{Currency_Tool::symbol()}";
       $(function(){

              $(".people_num .add,.people_num .sub").click(function(){
                   var textEle=$(this).siblings("input:first");
                   var val=textEle.val();
                   val=parseInt(val);
                   val=!val?1:val;
                   if($(this).is(".add")) {
                       ++val;
                   }
                   else
                     val=val>1?--val:1;
                   textEle.val(val);
                   countPrice();
              });

             $("#suit_container li").click(function(){
                    var price= $(this).attr('data-price');
                    var storage= $(this).attr('data-storage');
                    var id= $(this).attr('data-suitid');
                    var starttime=$(this).attr('date-start');
                    var minprice = $(this).attr('data-minprice');
                     $(this).siblings("li").removeClass("on");
                     $(this).addClass("on");
                     if(parseInt(minprice)>0){
                         $('#min_price_tips').find('strong:eq(0)').removeClass('hide').siblings('strong').addClass('hide');
                         $('#minprice').text(minprice);
                     }else{
                         $('#min_price_tips').find('strong:eq(1)').removeClass('hide').siblings('strong').addClass('hide');
                         $("#single_price").text('电询');
                         $("#total_price").html("<i class='currency_sy'>"+currency_symbol+"</i><b>0</b>");
                         $(".totalprice").attr("data-price",0);
                         return;
                     }
                    $('#usedate').val(starttime);

                    onSuitChanged(id);
             });
             $("#suit_container li:first").trigger('click');
           //关闭日历
           $("body").delegate('.close_calendar','click',function(){
               hide_calendar();
           })

            $("#btn_book").click(function(){
               var lkman = $("#linkman").val();
               var lkmobile = $("#linktel").val();
               /*var linkidcard = $("#linkidcard").val();*/
               //联系人信息验证
               if(lkman==''){
                   layer.open({
                       content: '{__("error_linkman_not_empty")}',
                       btn: ['{__("OK")}']
                   });
                   return false;
               }
               //联系人手机验证
               re = /^1\d{10}$/
               if (!re.test(lkmobile)) {
                   layer.open({
                       content: '{__("error_user_phone")}',
                       btn: ['{__("OK")}']
                   });
                   return false;
               }
              /* //联系人身份证验证
               re = /^(\d{18,18}|\d{15,15}|\d{17,17}x)$/
               if(linkidcard != ''){
                   if (!re.test(linkidcard)) {
                       layer.open({
                           content: '{__("身份证不合法")}',
                           btn: ['{__("OK")}']
                       });
                       return false;
                   }
               }*/
               //订单金额验证
               var totalprice = Number($('#total_price b').text());
               if(totalprice==0){
                   layer.open({
                       content: '{__("error_no_product")}',
                       btn: ['{__("OK")}']
                   });
                   return false;
               }
               //库存验证
               var dingnum = parseInt($('#dingnum').val());
               if(storage!=-1 && (storage<dingnum)){
                   layer.open({
                       content: '{__("error_no_storage")}',
                       btn: ['{__("OK")}']
                   });
                   return false;
               }

               $("#orderfrm").submit();

           })

           //选择常用联系人开始
           $("#chooseman").click(function () {
               $.getJSON('{$cmsurl}member/login/ajax_is_login', {}, function (data) {
                   if (data.status == 1) {
                       var content = $("#linkman_list").html();
                       layer.open({
                           type: 1,
                           content: content,
                           style: 'width:80%; border:none;',
                           btn: ['{__("OK")}'],
                           yes: function () {
                               $(".linkman_list").find('.on').each(function (i, obj) {
                                   var lkman = $(obj).attr('data-linkman');
                                   var lkmobile = $(obj).attr('data-mobile');
                                   var idcard = $(obj).attr('data-idcard');
                                   $("#linkman").val(lkman);
                                   $("#linktel").val(lkmobile);
                                   $("#linkidcard").val(idcard);
                               })
                               layer.closeAll();
                           }
                       });
                   } else {
                       layer.open({
                           content: '{__("error_linktel_not_login")}',
                           btn: ['确认', '取消'],
                           shadeClose: false,
                           yes: function () {
                               window.location.href = "{$cmsurl}member/login";
                           }, no: function () {
                           }
                       });
                   }

               })
           });
       })
       function onSuitChanged(suitid)
       {
           $("#suitid").val(suitid);
           $.ajax({
              'url':SITEURL+'{$pinyin}/ajax_current_suit',
               async:false,
               type:'get',
               dataType:'json',
               data:{'suitid':suitid,'productid':productid,'usedate':$('#usedate').val()},
               success:function(data){
                  if(data.result){
                      $("#single_price b").text(data.price);
                      $("#price").val(data.price);
                  }
               }
           });
           countPrice();
       }
       function countPrice()
       {
           //清除优惠券
           clear_coupon();
           var num=$("#dingnum").val();
           var price=$("#price").val();
           num=parseInt(num);
           num=!num?0:num;
           var totalPrice=num*price;
           $("#total_price").html("<i class='currency_sy'>"+currency_symbol+"</i><b>"+totalPrice+"</b>");
           $(".totalprice").attr('data-price',totalPrice);

       }
       //
       $(".usedate").click(function () {
           var suitid = $("#suitid").val();
           var typeid = "{$typeid}";
           var productid = "{$info['id']}";

           if (suitid > 0) {
               $.ajax({
                   type: 'POST',
                   data: {typeid: typeid, suitid: suitid, productid: productid, containdiv: 'usedate'},
                   url: SITEURL + 'pub/ajax_calendar',
                   dataType: 'html',
                   success: function (data) {
                       $("#js_calendar").html(data);
                       show_calendar();
                   }
               });
           } else {
               layer.open({
                   content: '请选择产品类型',
                   btn: ['{__("OK")}']
               });
           }

       })
       //显示日历
       function show_calendar() {
           $(".mid_content").hide();
           $(".integral_content").hide();
           $("#js_calendar").show();
           $(".sys_header").hide();
           $('.foot').hide();

       }
       //隐藏日历
       function hide_calendar() {
           $("#js_calendar").hide();
           $(".mid_content").show();
           $(".integral_content").show();
           $(".sys_header").show();
           $('.foot').show();
       }
       //选择天数
       function choose_day(day, containdiv) {
           $("#" + containdiv).val(day);
           var suitid = $("#suitid").val();
           var url = SITEURL + '{$pinyin}/ajax_current_suit';
           $.getJSON(url, {'usedate':day,'suitid':suitid,'productid':productid}, function (data) {
               $("#single_price b").text(data.price);
               $("#price").val(data.price);
               countPrice();
           });
           hide_calendar();
       }

   </script>


   {request "pub/code"}
   {request "pub/footer"}
  
  <div class="bom_link_box">
    <div class="bom_fixed">
        <input type="hidden" class="totalprice" data-price="">
      <a class="price" href="javascript:;">总额：<span id="total_price"><i class="currency_sy">{Currency_Tool::symbol()}</i><b>0</b></span></a>
      <a class="on" href="javascript:;" id="btn_book">立即预定</a>
    </div>
  </div>

</body>
</html>
