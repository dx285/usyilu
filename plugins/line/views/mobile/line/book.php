<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head ul_float=iyhh-j >
<meta charset="utf-8">
<title>{$info['title']}预订-{$webname}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {Common::css('amazeui.css,style.css,extend.css')}
    {Common::js('jquery.min.js,common.js,amazeui.js,template.js,layer/layer.m.js')}

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
	   <div class="confirm_order_msg">
      	<dl>
        	<dt><img src="{$info['litpic']}" /></dt>
          <dd id="min_price_tips">
          	<span>{$info['title']}</span>
            <strong class="hide"><i class="currency_sy">{Currency_Tool::symbol()}</i><b id="minprice">{$info['price']}</b>起</strong>
            <strong class="hide"><b>电询</b></strong>
          </dd>
        </dl>
      </div><!--产品简介-->
      
      <div class="book_type">
      	<h3 class="book_tit">产品类型</h3>
        <div class="book_con_box">
        	<ul>
            {st:line action="suit" productid="$info['id']"}
              {loop $data $r}
               <li data-suitid="{$r['id']}" data-jftp="{$r['jifentprice']}" data-minprice="{$r['minprice']}">{$r['title']}</li>
              {/loop}
            {/st}
          </ul>
        </div>
      </div><!--产品类型-->

      <form action="{$cmsurl}line/create" id="orderfrm" method="post">
      <div class="book_type">
      	<h3 class="book_tit">预定日期</h3>
        <div class="people_num">
          <p class="startdate">
          	<strong>使用日期：</strong>
            <span>

               <input type="text"readonly="readonly" style="  width: 200px;border: 0;text-align: left; vertical-align:middle; margin-top:-3px" name="startdate" id="startdate" value=""/>

            </span>
            <i class="fr">&gt;</i>
          </p>

            <p id="adult_div" style="display: none">
                <strong>成人数量：</strong>
              <span>
                <a class="sub" href="javascript:;">-</a>
                 <input type="text" name="dingnum" id="adultnum" class="order-num" value="1" />
                 <a class="add" href="javascript:;">+</a>
              </span>
                成人价：<em><i class="currency_sy">{Currency_Tool::symbol()}</i><b class="adultprice"></b></em>

            </p>
            <p id="old_div" style="display: none">
                <strong>老人数量：</strong>
                  <span>
                    <a class="sub" href="javascript:;">-</a>
                     <input type="text" name="oldnum" id="oldnum" class="order-num" value="0" />
                     <a class="add" href="javascript:;">+</a>
                  </span>
                    老人价：<em><i class="currency_sy">{Currency_Tool::symbol()}</i><b class="oldprice"></b></em>
            </p>
            <p id="child_div" style="display: none">
                <strong>小孩数量：</strong>
               <span>
                     <a class="sub" href="javascript:;">-</a>
                     <input type="text" name="childnum" class="order-num" id="childnum" value="0" />
                     <a class="add" href="javascript:;">+</a>
                  </span>
                小孩价：<em><i class="currency_sy">{Currency_Tool::symbol()}</i><b class="childprice"></b></em>
            </p>


        </div>
      </div>


      <div class="book_type">
          <h3 class="book_tit">联系人信息</h3>
          <div class="linkman">
              <dl>
                  <dd><strong>姓名：</strong><input type="text" id="linkman" name="linkman" placeholder="预订联系人姓名" class="" value="{$member['truename']}" /><span>(必填)</span></dd>
                  <dd><strong>联系电话：</strong><input type="text" id="linktel" name="linktel" class="" placeholder="手机号或固定电话" value="{$member['mobile']}" /><span>(必填)</span></dd>
                  <!-- <dd><strong>身份证号：</strong><input type="text" id="linkidcard" name="linkidcard" class="" placeholder="输入18位身份证号码" value="{$member['cardid']}" /></dd>-->
                  <dd><strong>订单备注：</strong><textarea name="remark"></textarea></dd>
              </dl>
          </div>
      </div><!--联系人信息-->


      <div class="book_type">

          {if $GLOBALS['cfg_write_tourer']==1}
      	  <h3 class="book_tit">游客信息<a href="javascript:;" id="chooseman">选择常用游客&gt;</a></h3>
          <div class="linkman" id="tourer_list">



          </div>
        {/if}
      </div>


     <div class="book_type" id="balance_container" style="display: none;">
              <h3 class="book_tit">单房差</h3>
              <div class="select-payway">
                  付款方式：
                  <select name="roombalance_paytype" id="balance_paytype">
                      <option value="1">预付款</option>
                      <option value="2">到店付款</option>
                  </select>
              </div>
              <div class="people_num">
                  <p class="clearfix">
                      <span class="yf">单房差：<b class="balance-price"><i class="currency_sy">{Currency_Tool::symbol()}</i>100</b>/人</span>
                        <span class="fr">
                            <strong>数量：</strong>
                            <span>
                                <a class="sub" href="javascript:;">-</a>
                                <input type="text" class="order-num" id="balance_num" name="roombalancenum" value="0">
                                <a class="add" href="javascript:;">+</a>
                            </span>
                        </span>
                  </p>
              </div>
              <input type="hidden" id="balance_has" value="0"/>
              <input type="hidden" id="balance_price" value="0"/>
          </div><!--单房差-->
          <!--隐藏域-->
          <input type="hidden" name="suitid" id="suitid" value=""/>
          <input type="hidden" name="productid" id="productid" value="{$info['id']}"/>
          <input type="hidden" name="typeid"  value="{$typeid}"/>
          <input type="hidden" name="deposite" id="deposit" value="">
          <input type="hidden" name="storage" id="storage" value=""/>
          <input type="hidden" name="usejifen" id="usejifen" value="0"/>
<!--          优惠券-->
          <input type="hidden" name="couponid" id="couponid" value="0"/>


          <input type="hidden" id="hasadult" value="0"/>
          <input type="hidden" id="haschild" value="0"/>
          <input type="hidden" id="hasold" value="0"/>

      </form>

    </div>
    <!--常用联系人-->
     <div id="linkman_list" style="display: none">
         <div class="linkman_page">
             <h3 class="tit">选择联系人</h3>
             <ul class="linkman_list">
                 {st:member action="linkman" memberid="$userinfo['mid']"}
                  {loop $data $r}
                     <li class="cursor">
                         <strong>{$r['linkman']}</strong>
                         <span>性别：{if $r['sex']==1}男{else}女{/if}</span>
                         <span>联系电话：{$r['mobile']}</span>
                         <span>身份证号：{$r['idcard']}</span>
                         <i class="lk_choose" data-linkman="{$r['linkman']}" data-sex="{$r['sex']}" data-mobile="{$r['mobile']}" data-idcard="{$r['idcard']}"></i>
                     </li>
                 {/loop}
                {/st}

             </ul>
         </div><!--选择联系人-->
     </div>

      {request "pub/integral?typeid=$typeid&productid=".$info['id']}
      </div><!--预定人数-->
      <div id="js_calendar" style="display: none">

      </div>

      <!--选择优惠券-->
      <div id="coupon_box" style="display: none;">
          {if St_Functions::is_normal_app_install('coupon')}{request "coupon/box-$typeid-".$info['id']}{/if}
      </div>
  </section>
  {request "pub/code"}
  {request "pub/footer"}
  <div class="bom_link_box">
    <div class="bom_fixed">
      <a class="price" href="javascript:;">总额：<span><i class="currency_sy">{Currency_Tool::symbol()}</i><b class="totalprice" data-price=""></b></span></a>
      <a class="on btn_book" href="javascript:;">立即预定</a>
    </div>
  </div>
  <script>
      var currency_symbol = "{Currency_Tool::symbol()}";
      $(function(){



          //套餐选择
          $(".book_con_box").find('li').click(function(){

                var suitid = $(this).attr('data-suitid');
                var minprice = $(this).attr('data-minprice');
                $("#suitid").val(suitid);
              if(parseInt(minprice)>0){
                  $('#min_price_tips').find('strong:eq(0)').removeClass('hide').siblings('strong').addClass('hide');
                  $('#minprice').text(minprice);
              }else{
                  $('#min_price_tips').find('strong:eq(1)').removeClass('hide').siblings('strong').addClass('hide');
              }
                $(this).addClass('on').siblings().removeClass('on');
                get_people_group(suitid);
          })
          $(".book_con_box").find('li').first().trigger('click');

          $("#balance_paytype").change(function(){
              get_total_price();
          });
          //开始日期
          $(".startdate").click(function(){
              var suitid = $("#suitid").val();
              var typeid = "{$typeid}";
              var productid = "{$info['id']}";
              if(suitid > 0){
                  $.ajax({
                      type:'POST',
                      data:{typeid:typeid,suitid:suitid,productid:productid,containdiv:'startdate'},
                      url:SITEURL+'pub/ajax_calendar',
                      dataType:'html',
                      success:function(data){
                          $("#js_calendar").html(data);
                          show_calendar();
                      }
                  });
              }else{
                  layer.open({
                      content: '请选择产品类型',
                      btn: ['{__("OK")}']
                  });
              }

          })
          //减少人数
          $('.sub').click(function(){
              var num=0;
              $('.people_num').find('.order-num').each(function(){
                  num+=parseInt($(this).val());
              });
              if(num<2){
                  return false;
              }
              var dingnum = $(this).parent().find('.order-num');
              var peopelnum = dingnum.val();
              if(peopelnum>=1){
                  dingnum.val(parseInt(dingnum.val())-1);
              }
              get_total_price();
          });

          //添加人数
          $('.add').click(function(){

              var dingnum = $(this).parent().find('.order-num');
              dingnum.val(parseInt(dingnum.val())+1);
              get_total_price();

          });
          //输入人数
          $('.order-num').each(function(){
            $(this).change(function(){
                var val=$(this).val();
                if(val<1){
                    $(this).val(0);
                    return false;
                }
                get_total_price();
            });
          });



          //关闭日历
          $("body").delegate('.close_calendar','click',function(){
              hide_calendar();
          })
          //常用联系人选择事件
          $("body").delegate('.linkman_list li','click',function(){
              $(this).find('i').toggleClass('on');
          })

          //常用联系人选择
          $("#chooseman").click(function(){
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
                                  var sex = $(obj).attr('data-sex');
                                  var lkmobile = $(obj).attr('data-mobile');
                                  var idcard = $(obj).attr('data-idcard');
                                  $("#tourer_list").find('dl').each(function (k, t) {
                                      if ($(t).find('input').val() == '') {
                                          $(t).find('.tourman').val(lkman);
                                          if(sex == 1){
                                              $(t).find('.toursex').val('男');
                                              $($(t).find('a').get(0)).addClass('on');
                                              $($(t).find('a').get(1)).removeClass('on');
                                          }else{
                                              $(t).find('.toursex').val('女');
                                              $($(t).find('a').get(1)).addClass('on');
                                              $($(t).find('a').get(0)).removeClass('on');
                                          }
                                          $(t).find('.tourmobile').val(lkmobile);
                                          $(t).find('.tourcard').val(idcard);
                                          return false;
                                      }
                                  })
                              })
                              layer.closeAll();
                          }
                      });
                  }else {
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
              });
          });

          //提交订单
          $(".btn_book").click(function(){
              //检测购买数量
              $num=0;
              $('.people_num').find('p[id]').each(function(){
                  var isshow=$(this).css('display')!='none'?true:false;
                  if(!isshow){
                      return true;
                  }
                  $num+=parseInt($(this).find('input').val());
              });
              if($num<1){
                  layer.open({
                      content: '请选择预订数量！',
                      btn: ['{__("OK")}']
                  });
                  return false;
              }
              $validate = requireCheck();
              if($validate){
                  var lkman = $("#linkman").val();
                  var lkmobile = $("#linktel").val();
				  var linkidcard = $("#linkidcard").val();
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
				  //联系人身份证验证
                /*    re = /^(\d{18,18}|\d{15,15}|\d{17,17}x)$/
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
                  var totalprice = Number($('.totalprice').first().text());
                  if(totalprice==0){
                      layer.open({
                          content: '{__("error_no_product")}',
                          btn: ['{__("OK")}']
                      });
                      return false;
                  }
                  //库存验证
                  var storage = $("#storage").val();
                  var manNum = parseInt($('#adultnum').val());
                  var childNum = parseInt($('#childnum').val());
                  var oldNum = parseInt($('#oldnum').val());
                  var totalNum = manNum + childNum + oldNum;

                  if(storage!=-1 && (storage<totalNum)){
                      layer.open({
                          content: '{__("error_no_storage")}',
                          btn: ['{__("OK")}']
                      });
                      return false;
                  }
                  $("#orderfrm").submit();
              }
          });
      });

      //require 检测
      function requireCheck()
      {
          $flag = true;
          $('.require').each(function(i,obj){

              if($(obj).val()==''){
                  layer.open({
                      content: '请您填写游客信息',
                      btn: ['{__("OK")}']
                  })
                  $flag = false;                }
          })
          return $flag;
      }

      //重新计算价格
      function get_total_price()
      {
          //清除优惠券
          clear_coupon();
          var hasadult = $("#hasadult").val();
          var haschild = $("#haschild").val();
          var hasold = $("#hasold").val();

          var balance_paytype=$("#balance_paytype").val();
          var balance_price = parseFloat($("#balance_price").val());
          var balance_has = parseInt($("#balance_has").val());
          var balance_num = parseInt($("#balance_num").val())

          var money=0;
          var manprice=0;
          var childprice=0;
          var oldprice=0;

          var manNum = Number($('#adultnum').val());
          var childNum = Number($('#childnum').val());
          var oldNum = Number($('#oldnum').val());
          if(hasadult==1)manprice = Number($('.adultprice').html());

          if(haschild==1) childprice = Number($('.childprice').html());
          if(hasold==1)  oldprice = Number($('.oldprice').html());

          var total =ST.Math.mul(manNum,manprice);

          total=ST.Math.add(total, ST.Math.mul(childNum,childprice));
          total=ST.Math.add(total, ST.Math.mul(oldNum,oldprice));

          //积分抵现
          if($('#usejifen').val()>0 && total>0){
              money=-(parseFloat($('#jifen-price').html()));
          }

          var balance_total=0;
          if(balance_paytype==1 && balance_has==1)
          {
              balance_total = balance_num*balance_price;
          }


          //计算总价格
          $('.totalprice').html(total+money+balance_total);
          $('.totalprice').attr('data-price',total+money+balance_total);
          manNum = isNaN(manNum) ? 0 : manNum;
          childNum = isNaN(childNum) ? 0 : childNum;
          oldNum = isNaN(oldNum) ? 0 : oldNum;

          var totalnum = 0 ;
          if(hasadult==1) totalnum+=parseInt(manNum);
          if(haschild==1) totalnum+=parseInt(childNum);
          if(hasold==1) totalnum+=parseInt(oldNum);


          gen_tourer(totalnum);


      }

      //生成游客信息
      function gen_tourer(num)
      {

          var list=$('#tourer_list').find('dl').length+1;
          if(list>num){
               $('#tourer_list').find('dl:gt('+(num-1)+')').remove();
          }else{
              var out = '';
              for(var i=list;i<=num;i++){
               out+=' <dl class="radio">';
               out+='   <dt>游客'+i+'</dt>';
               out+='    <dd><strong>姓名：</strong><input type="text"  name="tourname[]" placeholder="游客姓名" class="tourman require" /><span>(必填)</span></dd>';
               out+='    <dd><strong>性别：</strong><input type="hidden" name="toursex[]" class="toursex require" value="男"><a data-value="男" href="javascript:;" class="on">男</a><a data-value="女" href="javascript:;">女</a><span>(必填)</span></dd>';
               out+='    <dd><strong>联系电话：</strong><input type="text"  name="tourmobile[]" class="tourmobile require" placeholder="手机号或固定电话" />';
               out+='    <span>(必填)</span></dd>';
               out+='    <dd><strong>身份证号：</strong><input type="text"  name="touridcard[]" class="tourcard require" placeholder="输入18位身份证号码" /><span>(必填)</span></dd>';
               out+=' </dl>';
              }
              $("#tourer_list").append(out);

              //第一个游客设置
              var truename = "{$member['truename']}";
              var truemobile = "{$member['mobile']}";
              var truecardid = "{$member['cardid']}";

              var obj = $("#tourer_list").find('dl').first();
              obj.find('.tourman').val(truename);
              obj.find('.tourmobile').val(truemobile);
              obj.find('.tourcard').val(truecardid);
          }
      }
      $("body").delegate(".radio a", 'click', function () {
          $(this).siblings().removeClass('on');
          $(this).addClass('on');
          $(this).parent().children('input').val($(this).attr('data-value'));
      });


      //显示日历
      function show_calendar()
      {
          $(".mid_content").hide();
          $(".integral_content").hide();
          $("#js_calendar").show();
          $(".sys_header").hide();
					$(".foot").hide();
					$(".bom_fixed").hide()

      }
      //隐藏日历
      function hide_calendar()
      {
          $("#js_calendar").hide();
          $(".mid_content").show();
          $(".integral_content").show();
          $(".sys_header").show();
					$(".foot").show();
					$(".bom_fixed").show()
      }

      //选择天数
      function choose_day(day,containdiv)
      {
        $("#"+containdiv).val(day);
        hide_calendar();
        get_day_price();

      }
      //日期添加
      function add_date(date,days)
      {
          var d=new Date(date);
          d.setDate(d.getDate()+days);
          var m=d.getMonth()+1;
          return d.getFullYear()+'-'+m+'-'+d.getDate();
      }




      //按套餐获取人群
      function get_people_group(suitid)
      {
          var url = SITEURL+'line/ajax_suit_people';
          $.getJSON(url,{suitid:suitid},function(data){

              if(data.useday){
                  $("#startdate").val(data.useday);

              }
              if(data.storage){
                  $("#storage").val(data.storage);
              }
              if(data.haschild){
                  $("#child_div").show();
                  $('.childprice').html(data.childprice);
                  $("#haschild").val(1);
                  if(!data.hasadult && !data.hasold){
                      $('#childnum').val(1);
                  }

              }
              else{
                  $("#child_div").hide();
                  $("#haschild").val(0);
              }
              if(data.hasadult){
                  $("#adult_div").show();
                  $('.adultprice').html(data.adultprice);
                  $("#hasadult").val(1);
              }else{
                  $("#adult_div").hide();
                  $("#hasadult").val(0);
              }
              if(data.hasold){
                  $("#old_div").show();
                  $('.oldprice').html(data.oldprice);
                  $("#hasold").val(1);
              }else{
                  $("#old_div").hide();
                  $("#hasold").val(0);
              }
              //订金
              if(data.dingjin){
                  $("#deposit").val(data.dingjin);
              }
              get_day_price();
              get_total_price();


          })
      }

      //获取按天数获取价格
      function get_day_price()
      {
          var suitid = $("#suitid").val();
          var useday = $("#startdate").val();
          var url = SITEURL+'line/ajax_price_day';
          $.getJSON(url,{suitid:suitid,useday:useday},function(data){


              $('.childprice').html(data.childprice);
              $('.adultprice').html(data.adultprice);
              $('.oldprice').html(data.oldprice);
              $('#storage').html(data.number);

              $("#balance_price").val(data.roombalance);
              $(".balance-price").html("<i class='currency_sy'>"+currency_symbol+"</i>"+data.roombalance);
              if(data.roombalance!=0)
              {
                  $("#balance_has").val(1);
                  $("#balance_container").show();
              }
              else
              {
                  $("#balance_has").val(0);
                  $("#balance_container").hide();
              }
              get_total_price();
          })


      }



  </script>

</body>
</html>
