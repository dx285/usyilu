<?php defined('SYSPATH') or die();?><!doctype html><html><head><meta charset="utf-8"><title><?php echo $seoinfo['seotitle'];?>-<?php echo $GLOBALS['cfg_webname'];?></title><?php if($seoinfo['keyword']) { ?><meta name="keywords" content="<?php echo $seoinfo['keyword'];?>" /><?php } ?><?php if($seoinfo['description']) { ?><meta name="description" content="<?php echo $seoinfo['description'];?>" /><?php } ?><?php echo  Stourweb_View::template("pub/varname");  ?><?php echo Common::css_plugin('car.css','car');?><?php echo Common::css('base.css,extend.css,stcalendar.css');?><?php echo Common::js('jquery.min.js,base.js,common.js');?></head><body><?php echo Request::factory("pub/header")->execute()->body(); ?><?php if(St_Functions::is_normal_app_install('coupon')) { ?><?php echo Request::factory('coupon/float_box')->execute()->body(); ?><?php } ?><div class="big"><div class="wm-1200"><div class="st-guide"><a href="<?php echo $cmsurl;?>"><?php echo $GLOBALS['cfg_indexname'];?></a>&gt;<a href="/cars/"><?php echo $channelname;?></a>&gt;
            <?php $n=1; if(is_array($predest)) { foreach($predest as $dest) { ?><a href="/cars/<?php echo $dest['pinyin'];?>/"><?php echo $dest['kindname'];?><?php echo $channelname;?></a>&gt;
            <?php $n++;}unset($n); } ?><?php echo $info['title'];?></div><!--面包屑--><div class="st-main-page"><div class="st-car-show"><div class="carshow-tw"><div class="focus-slide"><div class="imgnav" id="imgnav"><div id="img"><?php $n=1; if(is_array($info['piclist'])) { foreach($info['piclist'] as $pic) { ?><img src="<?php echo Common::img($pic['0'],460,312);?>"/><?php $n++;}unset($n); } ?><div id="front" title="上一张"><a href="javaScript:void(0)" class="pngFix"></a></div><div id="next" title="下一张"><a href="javaScript:void(0)" class="pngFix"></a></div></div><div id="cbtn"><i class="picSildeLeft"><img src="<?php echo $GLOBALS['cfg_public_url'];?>images/picSlideLeft.gif"/></i><i class="picSildeRight"><img src="<?php echo $GLOBALS['cfg_public_url'];?>images/picSlideRight.gif"/></i><div id="cSlideUl"><ul><?php $n=1; if(is_array($info['piclist'])) { foreach($info['piclist'] as $pic) { ?><li><img src="<?php echo Common::img($pic['0'],90,61);?>"/></li><?php $n++;}unset($n); } ?></ul></div></div></div></div><div class="cp-show-msg"><div class="hs-title"><h1><?php echo $info['title'];?><?php $n=1; if(is_array($info['iconlist'])) { foreach($info['iconlist'] as $icon) { ?><img src="<?php echo $icon['litpic'];?>" /><?php $n++;}unset($n); } ?></h1></div><div class="price"><?php if(!empty($info['price'])) { ?><span><i class="currency_sy"><?php echo Currency_Tool::symbol();?></i><b><?php echo $info['price'];?></b>起</span></span><?php } else { ?><span>电询</span><?php } ?></div><div class="sl"><span>销量：<?php echo $info['sellnum'];?></span><s>|</s><span class="myd">满意度：<?php if($info['satisfyscore']) { ?><?php echo $info['satisfyscore'];?>%<?php } ?></span><s>|</s><span>推荐：<?php echo $info['recommendnum'];?></span></div><div class="sell-point"><span>推荐理由</span><?php echo $info['sellpoint'];?></div><ul class="msg-ul"><li><em>产品编号：</em><p><?php echo $info['series'];?></p></li><li><em>汽车车型：</em><p><?php echo $info['carkindname'];?></p></li><li><em>乘客座位：</em><p><?php echo $info['seatnum'];?></p></li><li><em>咨询电话：</em><p><?php echo $info['phone'];?></p></li><li class="mb_0"><em>付款方式：</em><p><?php $paymethod = Product::get_paytype_list();?><?php $n=1; if(is_array($paymethod)) { foreach($paymethod as $method) { ?><img src="<?php echo $GLOBALS['cfg_public_url'];?>images/<?php echo $method['ico'];?>" /><?php $n++;}unset($n); } ?></p></li></ul></div></div><div class="carshow-con"><div class="tabnav-list"><span class="on">套餐</span><?php require_once ("/var/www/gogogous/taglib/detailcontent.php");$detailcontent_tag = new Taglib_Detailcontent();if (method_exists($detailcontent_tag, 'get_content')) {$carcontent = $detailcontent_tag->get_content(array('action'=>'get_content','pc'=>'1','typeid'=>$typeid,'productinfo'=>$info,'return'=>'carcontent',));}?><?php $n=1; if(is_array($carcontent)) { foreach($carcontent as $row) { ?><span><?php echo $row['chinesename'];?></span><?php $n++;}unset($n); } ?><span>客户评价</span><span>我要咨询</span></div><!--酒店导航--><div class="tabbox-list"><div class="tabcon-list"><div class="car-typetable"><table width="100%" border="0"><?php $car_tag = new Taglib_Car();if (method_exists($car_tag, 'suit_type')) {$typelist = $car_tag->suit_type(array('action'=>'suit_type','row'=>'8','productid'=>$info['id'],'return'=>'typelist',));}?><?php $n=1; if(is_array($typelist)) { foreach($typelist as $type) { ?><tr><th width="240" height="40" scope="col"><span class="pl20"><?php echo $type['title'];?></span></th><th width="70" align="center" scope="col">用车日期</th><th width="70" scope="col">单位</th><th width="70" align="center" scope="col">优惠价</th><th width="80" scope="col">支付方式</th><th width="250" scope="col">&nbsp;</th><th scope="col" width="83">&nbsp;</th></tr><?php $car_tag = new Taglib_Car();if (method_exists($car_tag, 'suit')) {$suitlist = $car_tag->suit(array('action'=>'suit','row'=>'10','productid'=>$info['id'],'suittypeid'=>$type['id'],'return'=>'suitlist',));}?><?php $n=1; if(is_array($suitlist)) { foreach($suitlist as $suit) { ?><tr><td height="40"><strong class="type-tit"><?php echo $suit['title'];?></strong></td><td align="center"><span class="date" data-suitid="<?php echo $suit['id'];?>" data-productid="<?php echo $info['id'];?>">选择日期</span></td><td align="center"><?php echo $suit['unit'];?></td><td align="center"><span class="price"><?php if(!empty($suit['price'])) { ?><i class="currency_sy"><?php echo Currency_Tool::symbol();?></i><?php echo $suit['price'];?>起<?php } else { ?>电询<?php } ?></span></td><td><?php if($suit['paytype']==1) { ?><span class="fk-way">全款支付</span><?php } else if($suit['paytype']==2) { ?><span class="fk-way">定金支付</span><?php } else if($suit['paytype']==3) { ?><span class="fk-way">二次确认</span><?php } ?></td><td><?php if($suit['jifenbook']) { ?><span class="s-jf"><?php echo $suit['jifenbook'];?>分<i></i></span><?php } ?><?php if($suit['jifencomment']) { ?><span class="p-jf"><?php echo $suit['jifencomment'];?>分<i></i></span><?php } ?><?php if($suit['jifentprice']) { ?><span class="d-jf"><?php echo $suit['jifentprice'];?>元<i></i></span><?php } ?></td><td><a class="booking-btn is_login_order" href="javascript:;">预订</a></td></tr><tr style="display: none"><td colspan="7"><div class="cartype-nr"><?php echo $suit['content'];?></div></td></tr><?php $n++;}unset($n); } ?><?php $n++;}unset($n); } ?></table></div></div><?php $n=1; if(is_array($carcontent)) { foreach($carcontent as $hotel) { ?><div class="tabcon-list"><div class="list-tit"><strong><?php echo $hotel['chinesename'];?></strong></div><div class="list-txt"><?php echo $hotel['content'];?></div></div><?php $n++;}unset($n); } ?><?php echo  Stourweb_View::template("pub/comment");  ?><?php echo  Stourweb_View::template("pub/ask");  ?></div></div></div><div class="st-sidebox"><?php require_once ("/var/www/gogogous/taglib/right.php");$right_tag = new Taglib_Right();if (method_exists($right_tag, 'get')) {$data = $right_tag->get(array('action'=>'get','typeid'=>$typeid,'data'=>$templetdata,'pagename'=>'show',));}?></div><!--边栏模块--></div></div></div><div id="calendar"></div><input type="hidden" id="productid" value="<?php echo $info['id'];?>"/><input type="hidden" id="suitid" value=""/><?php echo Request::factory("pub/footer")->execute()->body(); ?><?php echo Request::factory("pub/flink")->execute()->body(); ?><?php echo Common::js('floatmenu/floatmenu.js');?><?php echo Common::css('/res/js/floatmenu/floatmenu.css',0,0);?><?php echo Common::js('SuperSlide.min.js,template.js');?><script src="/res/js/scorll.img.js"></script><?php echo Common::js('layer/layer.js');?><script type="text/javascript">
$(document).ready(function(){
    //内容切换
    $.floatMenu({
        menuContain : '.tabnav-list',
        tabItem : 'span',
        chooseClass : 'on',
        contentContain : '.tabbox-list',
        itemClass : '.tabcon-list'
    });
    //套餐点击
    $(".type-tit").click(function(){
        $(this).parents('tr').first().next().toggle();
    })
    $(".type-tit").first().trigger('click');
    //套餐日历价格显示
    $('.date').click(function(){
        if(!is_login_order()){
            return false;
        }
        var suitid = $(this).attr('data-suitid');
        var productid =$(this).attr('data-productid');
        $("#productid").val(productid);
        $("#suitid").val(suitid);
        get_calendar(suitid);
    })
    //上一月
    $('body').delegate('.prevmonth,.nextmonth','click',function(){
        var year = $(this).attr('data-year');
        var month = $(this).attr('data-month');
        var suitid = $(this).attr('data-suitid');
        get_calendar(suitid,year,month);
    })
    //预订
    $(".booking-btn").click(function(){
        if(!is_login_order()){
            return false;
        }
        $(this).parents('tr').first().find('.date').trigger('click');
    })
});
 function choose_day(day){
     var productid = $("#productid").val();
     var suitid = $("#suitid").val();
     var url = "<?php echo $GLOBALS['cfg_basehost'];?>"+'/cars/book/?productid='+productid+'&suitid='+suitid+'&usedate='+day;
     window.location.href = url;
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
 function get_calendar(suitid,year,month){
     //加载等待
     layer.open({
         type: 3,
         icon: 2
     });
     var url = SITEURL+'car/dialog_calendar';
     if($("#calendar").data(suitid)!=undefined && year==undefined){
         $("#calendar").html($("#calendar").data(suitid));
         show_calendar_box();
     }else{
         $.post(url,{suitid:suitid,year:year,month:month},function(data){
             if(data){
                 $("#calendar").html(data);
                 $("#calendar").data(suitid,data);
                 show_calendar_box();
             }
         })
     }
 }
</script><?php echo  Stourweb_View::template("member/login_order");  ?></body></html>