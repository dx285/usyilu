<?php defined('SYSPATH') or die();?><!doctype html><html><head><meta charset="utf-8"><title>预订<?php echo $info['title'];?>-<?php echo $GLOBALS['cfg_webname'];?></title><?php echo  Stourweb_View::template("pub/varname");  ?><?php echo Common::css_plugin('car.css','car');?><?php echo Common::css('base.css,extend.css,stcalendar.css');?><?php echo Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,jquery.validate.js,jquery.validate.addcheck.js');?></head><body><?php echo Request::factory("pub/header")->execute()->body(); ?><div class="big"><div class="wm-1200"><div class="st-guide"><a href="<?php echo $cmsurl;?>"><?php echo $GLOBALS['cfg_indexname'];?></a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<?php echo $channelname;?></div><!--面包屑--><div class="st-main-page"><div class="order-content"><?php if(empty($userInfo['mid'])) { ?><div class="order-hint-msg-box"><p class="hint-txt">温馨提示：<a href="<?php echo $cmsurl;?>member/login" id="fast_login">登录</a>可享受预定送积分、积分抵现！</p></div><!-- 未登录提示 --><?php } ?><form id="orderfrm" method="post" action="<?php echo $cmsurl;?>car/create"><div class="con-order-box"><div class="product-msg"><h3 class="pm-tit"><strong class="ico01">预定信息</span></strong></h3><dl class="pm-list"><dt>产品编号：</dt><dd><?php echo $info['series'];?></dd></dl><dl class="pm-list"><dt>产品名称：</dt><dd><?php echo $info['title'];?></dd></dl><dl class="pm-list"><dt>产品类型：</dt><dd><?php echo $suitInfo['title'];?></dd></dl><div class="table-msg"><table width="100%" border="0" class="people_info" strong_margin=0eNpkt ><tr><th width="25%" height="40" scope="col"><span class="l-con">使用日期</span></th><th width="25%" height="40" scope="col"><span class="l-con">还车日期</span></th><th width="25%" scope="col">购买数量</th><th width="25%" scope="col">总价格</th></tr><tr><td height="40" ><input type="text" size="15" class="inputdate" name="startdate" id="startdate"  value="<?php echo $info['usedate'];?>"></td><td height="40"><input type="text" size="15" class="inputdate" name="leavedate" id="leavedate"  value="<?php echo $info['usedate'];?>"></td><td><div class="control-box"><span class="add-btn">-</span><input type="text" id="dingnum" name="dingnum" class="number-text" value="1"/><span class="sub-btn">+</span></div></td><td><span class="price totalprice"></span></td></tr></table></div></div><!--预定信息--><div class="product-msg"><h3 class="pm-tit"><strong class="ico02">联系人信息</strong></h3><dl class="pm-list"><dt><span class="st-star-ico">*</span>联系人：</dt><dd><input type="text" class="linkman-text" name="linkman" value="<?php echo $userInfo['truename'];?>" /><span class="st-ts-text hide"></span></dd></dl><dl class="pm-list"><dt><span class="st-star-ico">*</span>手机号码：</dt><dd><input type="text" class="linkman-text" name="linktel" value="<?php echo $userInfo['mobile'];?>" /><span class="st-ts-text hide"></span></dd></dl><dl class="pm-list"><dt>电子邮箱：</dt><dd><input type="text" class="linkman-text" name="linkemail" value="<?php echo $userInfo['email'];?>" /></dd></dl><dl class="pm-list"><dt>订单留言：</dt><dd><textarea class="order-remarks" name="remark" cols="" rows=""></textarea></dd></dl></div><!--联系人信息--><!--支付方式--><?php if(!empty($userInfo)) { ?><div class="product-msg"><h3 class="pm-tit" id="yhzc_tit"><strong class="ico08">优惠政策</strong></h3><?php if(St_Functions::is_normal_app_install('coupon')) { ?><?php echo Request::factory('coupon/box-'.$typeid.'-'.$info['id'])->execute()->body(); ?><?php } ?><?php if(!empty($userInfo) && !empty($suitInfo['jifentprice']) && $userInfo['jifen']>$needjifen) { ?><div class="item-yh"><h3>积分优惠</h3><div class="item-nr"><span class="use-jf"><label class=""><i class="ico"></i>使用<?php echo $needjifen;?>积分抵扣：</label></span><span class="dk-num">- <i class="currency_sy"><?php echo Currency_Tool::symbol();?></i><?php echo $suitInfo['jifentprice'];?></span><span class="cur-jf">我当前积分：<?php echo $userInfo['jifen'];?></span></div></div><?php } ?><script>
                  if($("#yhzc_tit").siblings().not('script,style').length==0)
                  {
                      $("#yhzc_tit").hide();
                  }
              </script></div><!--积分优惠--><?php } ?><div class="order-js-box"><div class="total">订单结算总额：<span class="totalprice"></span></div><div class="yz"><input type="button" class="tj-btn" value="提交订单" /><input type="text" name="checkcode" id="checkcode" class="ma-text" /><span class="pic"><img src="<?php echo $cmsurl;?>captcha" onClick="this.src=this.src+'?math='+ Math.random()" width="80" height="32" /></span><span class="bt">验证码：</span></div></div><!--提交订单--></div><!--订单内容--><!--隐藏域--><input type="hidden" name="suitid" id="suitid" value="<?php echo $suitInfo['id'];?>"/><input type="hidden" name="productid" id="productid" value="<?php echo $info['id'];?>"/><input type="hidden" name="usedate" value="<?php echo $info['usedate'];?>"/><input type="hidden" name="webid" value="<?php echo $info['webid'];?>"/><input type="hidden" name="frmcode" value="<?php echo $frmcode;?>"><!--安全校验码--><input type="hidden" name="usejifen" id="usejifen" value="0"/><!--是否使用积分--><input type="hidden" id="price" value="<?php echo $suitPrice['adultprice'];?>"/><input type="hidden" id="jifentprice" value="<?php echo $suitInfo['jifentprice'];?>"><!--积分抵现金额--><input type="hidden" id="total_price" value=""/></form></div><div class="st-sidebox"><div class="side-order-box"><div class="order-total-tit">结算信息</div><div class="show-con"><ul class="ul-cp"><li><a class="pic" href="javascript:;"><img src="<?php echo $info['litpic'];?>" alt="<?php echo $info['title'];?>"></a></li><li><a class="txt" href="javascript:;"><?php echo $info['title'];?></a><p class="address"><?php echo $info['address'];?></p></li></ul><ul class="ul-list"><li>产品类型：<?php echo $suitInfo['title'];?></li><li>用车日期：<?php echo $info['usedate'];?></li><li>数量：<span class="dingnum">1</span></li><li>单价：<i class="currency_sy"><?php echo Currency_Tool::symbol();?></i><?php echo $suitPrice['adultprice'];?></li></ul><div class="total-price">订单总额：<span class="totalprice"></span></div></div></div></div></div><!--订单结算信息--></div></div><?php echo Request::factory("pub/footer")->execute()->body(); ?><?php echo Common::js('layer/layer.js');?><div id="calendar"></div><script>
    //日期比较
    function date_compare(a, b) {
        var arr = a.split("-");
        var starttime = new Date(arr[0], arr[1], arr[2]);
        var starttimes = starttime.getTime();
        var arrs = b.split("-");
        var lktime = new Date(arrs[0], arrs[1], arrs[2]);
        var lktimes = lktime.getTime();
        if(starttimes > lktimes) {
            return false;
        }
        else
            return true;
    }
    //选择日期
    function choose_day(day, containdiv){
        if(containdiv=='leavedate'){
            var startdate = $("#startdate").val();
            if(!date_compare(startdate,day)){
                layer.msg('还车时间不得小于用车时间',{
                    icon:5,
                    time:1000
                });
                return false;
            }
        }
        else if(containdiv=='startdate'){
            var leavedate = $("#leavedate").val();
            if(!date_compare(day,leavedate)){
                layer.msg('用车时间不得大于还车时间',{
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
    $(function(){
        //入住日期与离店日期选择
        $("#startdate,#leavedate").click(function(){
            var suitid = $("#suitid").val();
            get_calendar(suitid,this);
        })
        function get_calendar(suitid,obj,year,month){
            //加载等待
            layer.open({
                type: 3,
                icon: 2
            });
            if(obj){
                containdiv = $(obj).attr('id');
            }
            var url = SITEURL+'car/dialog_calendar';
            $.post(url,{suitid:suitid,year:year,month:month,containdiv:containdiv},function(data){
                if(data){
                    $("#calendar").html(data);
                    $("#calendar").data(suitid,data);
                    show_calendar_box();
                }
            })
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
        $('body').delegate('.prevmonth,.nextmonth','click',function(){
            var year = $(this).attr('data-year');
            var month = $(this).attr('data-month');
            var suitid = $(this).attr('data-suitid');
            var contain =$(this).attr('data-contain');
            get_calendar(suitid,$("#"+contain)[0],year,month);
        })
        get_total_price();
        $('.tj-btn').click(function(){
            console.log("submit order")
            $("#orderfrm").submit();
        })
        //表单验证
        $("#orderfrm").validate({
            submitHandler:function(form){
                var flag = check_storage();
                if(!flag){
                    layer.open({
                        content: '<?php echo __("error_no_storage");?>',
                        btn: ['<?php echo __("OK");?>']
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
                        url: SITEURL+'pub/ajax_check_code',
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
            $('.dingnum').html(cur);
            get_total_price();
        })
        //数量添加
        $(".control-box").find('.sub-btn').click(function(){
            var obj = $(this).parent().find('.number-text');
            var cur = Number(obj.val());
            cur++;
            obj.val(cur);
            $('.dingnum').html(cur);
            get_total_price();
        })
        //使用积分抵现
        $('.use-jf label i').click(function(){
            var totalprice = Number($("#total_price").val());
            if($('.use-jf label').attr('class')!='on'){
                var jifentprice = Number($("#jifentprice").val());
                if(jifentprice > totalprice){
                    layer.alert('<?php echo __("can_not_tprice");?>',{
                        icon:5
                    })
                    return false;
                }
            }
            $(this).parent().toggleClass('on');
            get_total_price(1);
        })
    })
    //检测库存
    function check_storage() {
        var startdate = $("#startdate").val();
        var enddate = $("#leavedate").val();
        var dingnum = $("#dingnum").val();
        var suitid = $("#suitid").val();
        var flag = 1;
        $.ajax({
            type: 'POST',
            url: SITEURL + 'car/ajax_check_storage',
            data: {startdate: startdate,enddate:enddate,dingnum: dingnum, suitid: suitid},
            async: false,
            dataType: 'json',
            success: function (data) {
                flag = data.status;
            }
        })
        return flag;
    }
    //获取日期范围内报价
    function get_range_price() {
        var startdate = $("#startdate").val();
        var leavedate = $("#leavedate").val();
        var suitid = $("#suitid").val();
        var dingnum = $("#dingnum").val();
        var url = SITEURL + 'car/ajax_range_price'
        $.getJSON(url, {startdate: startdate, leavedate: leavedate, suitid: suitid, dingnum: dingnum}, function (data) {
            $('#price').val(data.price);
            get_total_price();
        })
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
        var dingnum = Number($("#dingnum").val());
        var jifentprice = 0;
        //是否使用积分
        if($('.use-jf label').attr('class')=='on'){
            jifentprice = $("#jifentprice").val();
            $("#usejifen").val(1);
        }else{
            $("#usejifen").val(0);
        }
       price = price * dingnum - jifentprice;
        $("#total_price").val(price);
        //设置优惠券
        var coupon_price = $('#coupon_price').val();
if(coupon_price)
{
 price = price - coupon_price;
}
       
       $(".totalprice").html('<i class="currency_sy"><?php echo Currency_Tool::symbol();?></i>'+price);
    }
</script><?php if(empty($userInfo['mid'])) { ?><?php echo Common::js('jquery.md5.js');?><?php echo  Stourweb_View::template("member/login_fast");  ?><script>
     $('#fast_login').click(function(){
         $('#is_login_order').removeClass('hide');
         return false;
     });
 </script><?php } ?></body></html>
