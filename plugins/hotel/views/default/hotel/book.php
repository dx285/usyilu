<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>预订{$info['title']}-{$GLOBALS['cfg_webname']}</title>
    {include "pub/varname"}
    {Common::css_plugin('hotel.css','hotel')}
    {Common::css('base.css,extend.css,stcalendar.css')}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,jquery.validate.js,jquery.validate.addcheck.js')}

</head>
<body>

 {request "pub/header"}

  <div class="big">
  	<div class="wm-1200">

    	<div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{$channelname}
        </div><!--面包屑-->

      <div class="st-main-page">
          <div class="order-content">
          {if empty($userInfo['mid'])}
          <div class="order-hint-msg-box">
              <p class="hint-txt">温馨提示：<a href="{$cmsurl}member/login" id="fast_login">登录</a>可享受预定送积分、积分抵现！</p>
          </div><!-- 未登录提示 -->
          {/if}
          <form id="orderfrm" method="post" action="{$cmsurl}hotel/create">
            <div class="con-order-box">
                <div class="product-msg">
                <h3 class="pm-tit"><strong class="ico01">预定信息</strong></h3>
                <dl class="pm-list">
                    <dt>产品编号：</dt>
                  <dd>{$info['series']}</dd>
                </dl>
                <dl class="pm-list">
                    <dt>产品名称：</dt>
                  <dd>{$info['title']}</dd>
                </dl>
                <dl class="pm-list">
                    <dt>产品类型：</dt>
                  <dd>{$suitInfo['roomname']}</dd>
                </dl>
                <div class="table-msg">
                  <table width="100%" border="0" class="people_info">
                    <tr>
                      <th width="25%" height="40" scope="col"><span class="l-con">入住日期</span></th>
                      <th width="25%" scope="col">离店日期</th>
                      <th width="25%" scope="col">购买数量</th>
                      <th width="25%" scope="col">总价格</th>
                    </tr>

                      <tr>
                          <td height="40">

                                <input type="text" class="inputdate" name="startdate" id="startdate"  value="">

                          </td>
                          <td>

                              <input type="text" class="inputdate" name="leavedate" id="leavedate" value="">
                          </td>
                          <td>
                              <div class="control-box">
                                  <span class="add-btn">-</span>
                                  <input type="text" id="dingnum" name="dingnum" class="number-text" value="1"/>
                                  <span class="sub-btn">+</span>
                              </div>
                          </td>
                          <td><span class="price totalprice"></span></td>
                      </tr>

                  </table>
                </div>
              </div><!--预定信息-->
              <div class="product-msg">
                <h3 class="pm-tit"><strong class="ico02">联系人信息</strong></h3>
                <dl class="pm-list">
                  <dt><span class="st-star-ico">*</span>联系人：</dt>
                  <dd><input type="text" class="linkman-text" name="linkman" value="{$userInfo['truename']}" /><span class="st-ts-text hide"></span></dd>
                </dl>
                <dl class="pm-list">
                    <dt><span class="st-star-ico">*</span>手机号码：</dt>
                  <dd><input type="text" class="linkman-text" name="linktel" value="{$userInfo['mobile']}" /><span class="st-ts-text hide"></span></dd>
                </dl>
                <dl class="pm-list">
                    <dt>电子邮箱：</dt>
                  <dd><input type="text" class="linkman-text" name="linkemail" value="{$userInfo['email']}" /></dd>
                </dl>
                <dl class="pm-list">
                    <dt>订单留言：</dt>
                  <dd><textarea class="order-remarks" name="remark" cols="" rows=""></textarea></dd>
                </dl>
              </div><!--联系人信息-->


              <!--支付方式-->

                {if !empty($userInfo)}
              <div class="product-msg">
                <h3 class="pm-tit" id="yhzc_tit"><strong class="ico08">优惠政策</strong></h3>
                  {if St_Functions::is_normal_app_install('coupon')}

                  {request 'coupon/box-'.$typeid.'-'.$info['id']}
                  {/if}
                  {if !empty($userInfo) && !empty($suitInfo['jifentprice']) && $userInfo['jifen']>$needjifen}
                  <div class="item-yh">
                      <h3>积分优惠</h3>
                      <div class="item-nr">
                                    <span class="use-jf">
                                        <label class=""><i class="ico"></i>使用{$needjifen}积分抵扣：</label>

                                    </span>
                          <span class="dk-num">- <i class="currency_sy">{Currency_Tool::symbol()}</i>{$suitInfo['jifentprice']}</span>
                          <span class="cur-jf">我当前积分：{$userInfo['jifen']}</span>
                      </div>
                  </div>
                  {/if}


              </div><!--积分优惠-->
                <script>
                    if($("#yhzc_tit").siblings().not('script,style').length==0)
                    {
                        $("#yhzc_tit").hide();
                    }
                </script>
                {/if}

              <div class="order-js-box">
                <div class="total">订单结算总额：<span class="totalprice"></span></div>
                <div class="yz">
                  <input type="button" class="tj-btn" value="提交订单" />
                  <input type="text" name="checkcode" id="checkcode" class="ma-text" />
                  <span class="pic"><img src="{$cmsurl}captcha" onClick="this.src=this.src+'?math='+ Math.random()" width="80" height="32" /></span>
                  <span class="bt">验证码：</span>

                </div>
              </div><!--提交订单-->
            </div><!--订单内容-->
            <!--隐藏域-->
            <input type="hidden" name="suitid" id="suitid" value="{$suitInfo['id']}"/>
            <input type="hidden" name="hotelid" value="{$info['id']}"/>
            <input type="hidden" name="usedate" value="{$info['usedate']}"/>
            <input type="hidden" name="webid" value="{$info['webid']}"/>
            <input type="hidden" name="frmcode" value="{$frmcode}"><!--安全校验码-->
            <input type="hidden" name="usejifen" id="usejifen" value="0"/><!--是否使用积分-->
            <input type="hidden" id="price" value="0"/>
            <input type="hidden" id="jifentprice" value="{$suitInfo['jifentprice']}"><!--积分抵现金额-->
            <input type="hidden" id="total_price" value=""/>

          </form>
      </div>
        <div class="st-sidebox">
          <div class="side-order-box">
              <div class="order-total-tit">结算信息</div>
              <div class="show-con">
                  <ul class="ul-cp">
                      <li><a class="pic" href="javascript:;"><img src="{$info['litpic']}" alt="{$info['title']}"></a></li>
                      <li>
                          <a class="txt" href="javascript:;">{$info['title']}({$suitInfo['roomname']})</a>
                          <p class="address">{$info['address']}</p>
                      </li>
                  </ul>
                  <ul class="ul-list">
                      <li>床型：{$suitInfo['roomstyle']}</li>
                      <li>宽带：{$suitInfo['computer']}</li>
                      <li>早餐：{$suitInfo['breakfirst']}</li>
                      <li>楼层：{$suitInfo['roomfloor']}</li>
                      <li>面积：{$suitInfo['roomarea']}</li>
                  </ul>
                  <div class="total-price">订单总额：<span class="totalprice"></span></div>
              </div>
          </div>

          </div>
        </div><!--订单结算信息-->
      </div>

    </div>





 {request "pub/footer"}
 {Common::js('layer/layer.js')}
 <div id="calendar"></div>
<script>


    $(function(){

        //获取可订的最小时间
        get_mindate_book();

        //入住日期与离店日期选择
        $("#startdate,#leavedate").click(function(){
            var suitid = $("#suitid").val();
            get_calendar(suitid,this);

        })

        $('.tj-btn').click(function(){
            $("#orderfrm").submit();

        })

        //表单验证

        $("#orderfrm").validate({

            submitHandler:function(form){

                var flag = check_storage();
                if(!flag){
                    layer.open({
                        content: '{__("error_no_storage")}',
                        btn: ['{__("OK")}']
                    });
                    return false;

                }else{
                    form.submit();
                }


            } ,
            errorClass:'st-ts-text',
            errorElement:'span',
            rules: {

                linkman:{
                    required: true

                },
                linktel:{
                    required:true,
                    isPhone:true

                },
                linkemail:{
                    email:true
                },
                checkcode:{
                    required:true,
                    remote:{
                        url: SITEURL+'hotel/ajax_check_code',
                        type: 'post'

                    }
                }
            },
            messages: {
                linkman:{
                    required: "请填写联系人信息"
                },
                linktel:{
                    required: "请填写联系方式"
                },
                linkemail:{
                    email:'邮箱格式错误'
                },
                checkcode:{
                    required: "",
                    remote: ""
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).attr('style','border:1px solid red');
            },
            unhighlight:function(element, errorClass){
                $(element).attr('style','');
            },
            errorPlacement:function(error,element){
                if(!element.is('#checkcode'))
                {
                   $(element).parent().append(error)
                }
                else{
                    layer.tips('验证码错误', '#checkcode', {
                        tips: 3
                    });
                }

            }



        });




        //数量减少
        $(".control-box").find('.add-btn').click(function(){

           var obj = $(this).parent().find('.number-text');
           var cur = Number(obj.val());
           if(cur>1){
               cur = cur-1;
               obj.val(cur);

           }
            get_range_price();
        })
        //数量添加
        $(".control-box").find('.sub-btn').click(function(){

            var obj = $(this).parent().find('.number-text');
            var cur = Number(obj.val());
            cur++;
            obj.val(cur);
            get_range_price();
        })

        //使用积分抵现
        $('.use-jf label i').click(function(){
            var totalprice = Number($("#price").val());
            if($('.use-jf label').attr('class')!='on'){
                var jifentprice = Number($("#jifentprice").val());
                if(jifentprice > totalprice){
                    layer.alert('{__("can_not_tprice")}',{
                        icon:5
                    })
                    return false;
                }
            }
            $(this).parent().toggleClass('on');
            get_total_price(1);

        })

        $('body').delegate('.prevmonth,.nextmonth','click',function(){

            var year = $(this).attr('data-year');
            var month = $(this).attr('data-month');
            var suitid = $(this).attr('data-suitid');
            var contain =$(this).attr('data-contain');

            get_calendar(suitid,$("#"+contain)[0],year,month);

        })

    })
    //获取可预订最小日期
    function get_mindate_book() {
        var suitid = $("#suitid").val();
        var url = SITEURL + 'hotel/ajax_mindate_book'
        $.getJSON(url, {suitid: suitid}, function (data) {

            $('#startdate').val(data.startdate);
            $('#leavedate').val(data.enddate);
            get_range_price();
        })
    }
    //获取日期范围内报价
    function get_range_price() {
        var startdate = $("#startdate").val();
        var leavedate = $("#leavedate").val();
        var suitid = $("#suitid").val();
        var dingnum = $("#dingnum").val();
        var url = SITEURL + 'hotel/ajax_range_price'
        $.getJSON(url, {startdate: startdate, leavedate: leavedate, suitid: suitid, dingnum: dingnum}, function (data) {

            $('#price').val(data.price);
            get_total_price();
        })
    }
    //检测库存

    function check_storage() {
        var startdate = $("#startdate").val();
        var enddate = $("#leavedate").val();
        var dingnum = $("#dingnum").val();
        var suitid = $("#suitid").val();
        var flag = 1;

        $.ajax({
            type: 'POST',
            url: SITEURL + 'hotel/ajax_check_storage',
            data: {startdate: startdate, enddate: enddate, dingnum: dingnum, suitid: suitid},
            async: false,
            dataType: 'json',
            success: function (data) {

                flag = data.status;
            }
        })
        return flag;

    }
    //获取总价
    function get_total_price(a=0){
        //选择积分的时候不重置优惠券
        if(!a)
        {
            $('select[name=couponid] option:first').attr('selected','selected');//优惠券重置
            $('#coupon_price').val(0);
        }
        var price = Number($("#price").val());
        var jifentprice = 0;

        //是否使用积分
        if($('.use-jf label').attr('class')=='on'){
            jifentprice = $("#jifentprice").val();
            $("#usejifen").val(1);
        }else{
            $("#usejifen").val(0);
        }
        price = price - jifentprice;
        $("#total_price").val(price);
        //设置优惠券
        var coupon_price = $('#coupon_price').val();
        if(coupon_price)
		{
			 price = price - coupon_price;
		}
       $(".totalprice").html('<i class="currency_sy">{Currency_Tool::symbol()}</i>'+price);


    }

    function show_calendar_box(){
        layer.closeAll();
        layer.open({
            type: 1,
            title:'',
            area: ['480px', '430px'],
            shadeClose: true,
            content: $('#calendar')
        });

    }

    function get_calendar(suitid,obj,year,month){

        //加载等待
        layer.open({
            type: 3,
            icon: 2

        });
        var containdiv = '';
        if(obj){
            containdiv = $(obj).attr('id');
        }


        var url = SITEURL+'hotel/dialog_calendar';

            $.post(url,{suitid:suitid,year:year,month:month,containdiv:containdiv},function(data){
                if(data){
                    $("#calendar").html(data);
                    $("#calendar").data(suitid,data);
                    show_calendar_box();

                }
            })



    }

   //选择日期
   function choose_day(day, containdiv){
       if(containdiv=='leavedate'){
            var startdate = $("#startdate").val();
            if(!date_compare(startdate,day)){
                layer.msg('{__("hotel_leavedate")}',{
                    icon:5,
                    time:1000
                });
                //layer.closeAll();
                return false;
            }
       }
       else if(containdiv=='startdate'){
           var leavedate = $("#leavedate").val();
           if(!date_compare(day,leavedate)){
               layer.msg('{__("hotel_rightdate")}',{
                   icon:5,
                   time:1000
               });
               //layer.closeAll();
               return false;
           }
       }

       $('#'+containdiv).val(day);
       layer.closeAll();
       get_range_price();

   }
   //日期比较
    function date_compare(a, b) {
        var arr = a.split("-");
        var starttime = new Date(arr[0], arr[1], arr[2]);
        var starttimes = starttime.getTime();

        var arrs = b.split("-");
        var lktime = new Date(arrs[0], arrs[1], arrs[2]);
        var lktimes = lktime.getTime();

        if(starttimes >= lktimes) {

            return false;
        }
        else
            return true;

    }
</script>
 {if empty($userInfo['mid'])}
     {Common::js('jquery.md5.js')}
     {include "member/login_fast"}
     <script>
         $('#fast_login').click(function(){
             $('#is_login_order').removeClass('hide');
             return false;
         });
     </script>
 {/if}
</body>
</html>
