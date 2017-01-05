<?php defined('SYSPATH') or die();?><!doctype html><html><head><meta charset="utf-8"><title><?php echo $seoinfo['seotitle'];?>-<?php echo $GLOBALS['cfg_webname'];?></title><?php if($seoinfo['keyword']) { ?><meta name="keywords" content="<?php echo $seoinfo['keyword'];?>" /><?php } ?><?php if($seoinfo['description']) { ?><meta name="description" content="<?php echo $seoinfo['description'];?>" /><?php } ?><?php echo  Stourweb_View::template("pub/varname");  ?><?php echo Common::css_plugin('lines.css','line');?><?php echo Common::css('base.css,extend.css,calendar.css');?><?php echo Common::js('jquery.min.js,base.js,common.js');?></head><body><?php echo Request::factory("pub/header")->execute()->body(); ?><?php if(St_Functions::is_normal_app_install('coupon')) { ?><?php echo Request::factory('coupon/float_box')->execute()->body(); ?><?php } ?><div class="big"><div class="wm-1200"><div class="st-guide"><a href="<?php echo $cmsurl;?>"><?php echo $GLOBALS['cfg_indexname'];?></a>&gt;<a href="/lines/"><?php echo $channelname;?></a>&gt;
            <?php $n=1; if(is_array($predest)) { foreach($predest as $dest) { ?><a href="/lines/<?php echo $dest['pinyin'];?>/"><?php echo $dest['kindname'];?></a>&gt;
            <?php $n++;}unset($n); } ?><?php echo $info['title'];?></div><!--面包屑--><div class="st-main-page"><div class="st-line-show"><div class="lineshow-tw"><div class="lw-title"><a href="/line/print/id/<?php echo $info['id'];?>" class="print-btn">打印行程</a><h1><?php echo $info['title'];?><?php $n=1; if(is_array($info['iconlist'])) { foreach($info['iconlist'] as $icon) { ?><img src="<?php echo $icon['litpic'];?>" /><?php $n++;}unset($n); } ?></h1><p><?php echo $info['sellpoint'];?></p></div><div class="focus-slide"><div class="imgnav" id="imgnav"><div id="img"><?php $n=1; if(is_array($info['piclist'])) { foreach($info['piclist'] as $pic) { ?><img src="<?php echo Common::img($pic['0'],460,312);?>"/><?php $n++;}unset($n); } ?><div id="front" title="上一张"><a href="javaScript:void(0)" class="pngFix"></a></div><div id="next" title="下一张"><a href="javaScript:void(0)" class="pngFix"></a></div></div><div id="cbtn"><i class="picSildeLeft"><img src="<?php echo $GLOBALS['cfg_public_url'];?>images/picSlideLeft.gif"/></i><i class="picSildeRight"><img src="<?php echo $GLOBALS['cfg_public_url'];?>images/picSlideRight.gif"/></i><div id="cSlideUl"><ul><?php $n=1; if(is_array($info['piclist'])) { foreach($info['piclist'] as $pic) { ?><li><img src="<?php echo Common::img($pic['0'],90,61);?>"/></li><?php $n++;}unset($n); } ?></ul></div></div></div></div><div class="cp-show-msg"><div class="jg" id="min_price_tips"><span class="hide">优惠价：<i class="currency_sy"><?php echo Currency_Tool::symbol();?></i><b id="minprice"><?php echo $info['price'];?></b>起</span><span class="hide">优惠价：<b>电询</b></span><?php if($info['sellprice']) { ?><del>原价：<i class="currency_sy"><?php echo Currency_Tool::symbol();?></i>$info['sellprice']</del><?php } ?></div><div class="sl"><span>销量：<?php echo $info['sellnum'];?></span><s>|</s><span class="myd">满意度：<?php echo $info['score'];?></span></div><dl class="tc"><dt>套餐类型：</dt><dd class="type suitlist"><?php $line_tag = new Taglib_Line();if (method_exists($line_tag, 'suit')) {$data = $line_tag->suit(array('action'=>'suit','productid'=>$info['id'],));}?><?php $n=1; if(is_array($data)) { foreach($data as $s) { ?><a href="javascript:;" data-suitid="<?php echo $s['id'];?>" data-minprice="<?php echo $s['minprice'];?>" data-jifentprice="<?php echo $s['jifentprice'];?>" data-jifenbook="<?php echo $s['jifenbook'];?>"><?php echo $s['title'];?></a><?php $n++;}unset($n); } ?></dd><dd class="select-bj"><span>出发日期：</span><select class="bj-list date-list"></select></dd><dd class="yd-btn"><a href="javascript:;" class="btn-yd gobook">立即预订</a></dd></dl><ul class="msg-ul"><li><em>线路编号：</em><p><?php echo $info['series'];?></p></li><li><em>积分优惠：</em><p><span class="fan jifentprice"><i></i></span><span class="song jifenbook"><i></i></span></p></li><li><em>往返交通：</em><p><?php echo $info['transport'];?></p></li><li><em>提前报名：</em><p><?php echo $info['linebefore'];?>天以上</p></li><li class="mb_0"><em>付款方式：</em><p><?php $paymethod = Product::get_paytype_list();?><?php $n=1; if(is_array($paymethod)) { foreach($paymethod as $method) { ?><img src="<?php echo $GLOBALS['cfg_public_url'];?>images/<?php echo $method['ico'];?>" /><?php $n++;}unset($n); } ?></p></li></ul></div></div><div class="lineshow-con"><div class="tabnav-list"><span class="on">在线预订</span><?php require_once ("/var/www/gogogous/taglib/detailcontent.php");$detailcontent_tag = new Taglib_Detailcontent();if (method_exists($detailcontent_tag, 'get_content')) {$linecontent = $detailcontent_tag->get_content(array('action'=>'get_content','pc'=>'1','typeid'=>$typeid,'productinfo'=>$info,'return'=>'linecontent',));}?><?php $n=1; if(is_array($linecontent)) { foreach($linecontent as $row) { ?><span><?php echo $row['chinesename'];?></span><?php $n++;}unset($n); } ?><span>客户评价</span><span>我要咨询</span><a class="yd-btn yd-btn-menu hide gobook btn-yd"  href="javascript:;">立即预订</a></div><!--线路导航--><div class="tabbox-list"><div class="tabcon-list" id="calendar"></div><?php $n=1; if(is_array($linecontent)) { foreach($linecontent as $line) { ?><?php if(preg_match('/^\d+$/',$line['content']) && $line['columnname']=='jieshao') { ?><div class="tabcon-list"><div class="list-tit"><strong><?php echo $line['chinesename'];?></strong></div><?php if($info['isstyle']==2) { ?><div class="eachday"><?php $indexkey = 1;?><?php $n=1; if(is_array(Model_Line_Jieshao::detail($line['content'],$info['lineday']))) { foreach(Model_Line_Jieshao::detail($line['content'],$info['lineday']) as $v) { ?><div class="day-con part" id="day_c_<?php echo $indexkey;?>"><div class="day-num"><i class="sz"><?php echo $v['day'];?></i></div><div class="day-tit"><strong>第<?php echo Common::daxie($v['day']);?>天</strong><p><?php echo $v['title'];?></p></div><table class="day-tb" width="100%" border="0" bgcolor="#f9f8f8"><?php if($info['showrepast']==1) { ?><tr><th width="110" scope="row"><span class="yc">用餐情况：</span></th><td width="237"><?php if($v['breakfirsthas']) { ?><?php if(!empty($v['breakfirst'])) { ?>
                                      早餐：<?php echo $v['breakfirst'];?><?php } else { ?>
                                      早餐：含
                                    <?php } ?><?php } else { ?>
                                    早餐：不含
                                <?php } ?></td><td width="237"><?php if($v['lunchhas']) { ?><?php if(!empty($v['lunch'])) { ?>
                                            午餐：<?php echo $v['lunch'];?><?php } else { ?>
                                            午餐：含
                                        <?php } ?><?php } else { ?>
                                    午餐：不含
                                <?php } ?></td><td width="237"><?php if($v['supperhas']) { ?><?php if(!empty($v['supper'])) { ?>
                                      晚餐：<?php echo $v['supper'];?><?php } else { ?>
                                      晚餐:含
                                    <?php } ?><?php } else { ?>
                                    晚餐:不含
                                <?php } ?></td></tr><?php } ?><tr><th width="110" scope="row"><span class="zs">住宿情况：</span></th><td colspan="3"><?php echo $v['hotel'];?></td></tr><tr class="bor_0"><th width="110" scope="row"><span class="gj">交通工具：</span></th><td colspan="3"><?php $n=1; if(is_array(explode(',',$v['transport']))) { foreach(explode(',',$v['transport']) as $t) { ?><?php echo $t;?><?php $n++;}unset($n); } ?></td></tr></table><div class="txt"><?php echo $v['jieshao'];?></div><?php if(St_Functions::is_system_app_install(5)) { ?><ul class="jd-lsit"><?php $line_tag = new Taglib_Line();if (method_exists($line_tag, 'line_spot')) {$spotlist = $line_tag->line_spot(array('action'=>'line_spot','day'=>$v['day'],'productid'=>$v['lineid'],'return'=>'spotlist',));}?><?php $sindex=1;?><?php $n=1; if(is_array($spotlist)) { foreach($spotlist as $spot) { ?><li <?php if($sindex%3==0) { ?>class="mr_0"<?php } ?>
><a class="pic" href="<?php echo $spot['url'];?>" target="_blank"><img src="<?php echo Common::img($spot['litpic'],240,162);?>" alt="<?php echo $spot['title'];?>" /></a><a class="tit" href="<?php echo $spot['url'];?>" target="_blank"><?php echo $spot['title'];?></a></li><?php $sindex++;?><?php $n++;}unset($n); } ?></ul><?php } ?></div><?php $indexkey++;?><?php $n++;}unset($n); } ?><div class="day-leftnav" id="day-leftNav"><ul class="day-navlist"><?php 
                                     for($index=1;$index<=$info['lineday'];$index++)
                                     {
                                        $str.= '<li><a href="#day_c_'.$index.'" class="">DAY'.$index.'</a></li>';
                                     }
                                     echo $str;
                                   ?></ul></div><div class="end"></div></div><?php } else { ?><div class="list-txt"><?php echo $info['jieshao'];?></div><?php } ?></div><?php } else if($line['columnname']=='linedoc') { ?><a name="download"></a><div class="tabcon-list"><div class="list-tit"><strong><?php echo $line['chinesename'];?></strong></div><div class="list-txt"><ol class="attachment" id="attachment"><?php $n=1; if(is_array($info['linedoc']['path'])) { foreach($info['linedoc']['path'] as $k => $v) { ?><li><a href="/pub/download/?file=<?php echo $v;?>&name=<?php echo $info['linedoc']['name'][$k];?>" title="<?php echo $info['linedoc']['name'][$k];?> 下载" class="name"><?php echo $info['linedoc']['name'][$k];?></a></li><?php $n++;}unset($n); } ?></ol></div></div><?php } else { ?><div class="tabcon-list"><div class="list-tit"><strong><?php echo $line['chinesename'];?></strong></div><div class="list-txt"><?php if($line['columnname'] == 'payment' && empty($line['content'])) { ?><?php echo $GLOBALS['cfg_payment'];?><?php } else { ?><?php echo $line['content'];?><?php } ?></div></div><?php } ?><?php $n++;}unset($n); } ?><?php echo  Stourweb_View::template("pub/comment");  ?><?php echo  Stourweb_View::template("pub/ask");  ?></div></div></div><!--详情主体--><div class="st-sidebox"><?php require_once ("/var/www/gogogous/taglib/right.php");$right_tag = new Taglib_Right();if (method_exists($right_tag, 'get')) {$data = $right_tag->get(array('action'=>'get','typeid'=>$typeid,'data'=>$templetdata,'pagename'=>'show',));}?></div><!--边栏模块--></div></div></div><?php echo Request::factory("pub/footer")->execute()->body(); ?><?php echo Request::factory("pub/flink")->execute()->body(); ?><?php echo Common::js('floatmenu/floatmenu.js');?><?php echo Common::js('SuperSlide.min.js,template.js,date.js,calendar.js,scorll.img.js');?><?php echo Common::css('/res/js/floatmenu/floatmenu.css',0,0);?><!--隐藏域--><input type="hidden" id="suitid" value=""/><input type="hidden" id="lineid" value="<?php echo $info['id'];?>"/><script type="text/javascript">
$(document).ready(function(){
    var topHeight = $('.tabnav-list').offset().top;
    $(window).scroll(function(){
        if($(document).scrollTop() >= topHeight){
            $(".yd-btn-menu").show()
        }else{
            $(".yd-btn-menu").hide();
        }
    });
    //线路内容切换
    $.floatMenu({
        menuContain : '.tabnav-list',
        tabItem : 'span',
        chooseClass : 'on',
        contentContain : '.tabbox-list',
        itemClass : '.tabcon-list'});
    //套餐选择
    $('.suitlist').find('a').click(function(){
        var minprice=$(this).attr('data-minprice');
        if(parseInt(minprice)>0){
            $('#min_price_tips').find('span:eq(0)').removeClass('hide').siblings('span').addClass('hide');
            $('#minprice').text(minprice);
        }else{
            $('#min_price_tips').find('span:eq(1)').removeClass('hide').siblings('span').addClass('hide');
        }
        var suitid = $(this).attr('data-suitid');
        var jifentprice = $(this).attr('data-jifentprice');
        var jifenbook = $(this).attr('data-jifenbook');
        if(jifentprice){
            $('.jifentprice').html(jifentprice+'元<i></i>')
        }else{
            $('.jifentprice').hide();
        }
        if(jifenbook){
            $('.jifenbook').html(jifenbook+'分<i></i>')
        }else{
            $('.jifenbook').hide();
        }
        $("#suitid").val(suitid);
        $(this).addClass('on').siblings().removeClass('on');
        var lineid = $("#lineid").val();
        get_calendar(suitid,lineid);
        get_date_list(suitid,lineid);
    })
    //选中第一个
    $('.suitlist').find('a').first().trigger('click');
    //预订页面
    $('body').delegate('.gobook','click',function(){
        var usedate = $('.date-list').val();
        var suitid = $('#suitid').val();
        var lineid = $('#lineid').val();
        if(usedate == null){
            return false;
        }
        var url = "<?php echo $GLOBALS['cfg_basehost'];?>/lines/book/?usedate="+usedate+'&suitid='+suitid+"&lineid="+lineid;
        window.location.href = url;
    })

    
    //获取日历报价
    function get_calendar(suitid,lineid)
    {
        showCalendar('calendar',suitid,function(){$(".calendar:first").css("margin-right","15px")},lineid);
    }
    //获取日历下拉列表
    function get_date_list(suitid,lineid){
        $.ajax({
            type:'POST',
            url:SITEURL+'line/ajax_date_options',
            data:{suitid:suitid,lineid:lineid},
            dataType:'json',
            success:function(data){
                $('.date-list').empty();
                var html = '';
                if(data.list!=''){
                    $.each(data.list,function(i,row){
var people = '';
                        if(row.adultprice>0){
                            people+='<?php echo Currency_Tool::symbol();?>'+row.adultprice+'/双人间/人 ';
                        }
                        if(row.childprice>0){
                            people+='<?php echo Currency_Tool::symbol();?>'+row.childprice+'/三人间/人 ';
                        }
                        if(row.oldprice>0){
                            people+='<?php echo Currency_Tool::symbol();?>'+row.oldprice+'/单人间/人 ';
                        }
                        html+='<option value="'+row.useday+'">'+row.shortdate+'('+row.weekday+')'+people+'</option>';
                        $(".btn-yd").text('立即预订');
                        $(".btn-yd").attr('style','background:#ff8a00');
                        $(".btn-yd").addClass('gobook');
                    })
                }
                else{
                    html+='<option value="0">请选择日期</option>';
                    $(".btn-yd").text('不可预订');
                    $(".btn-yd").attr('style','background:#ccc');
                    $(".btn-yd").removeClass('gobook');
                }
                $('.date-list').append(html);
            }
        })
    }

});
//预订产品
  function setBeginTime(y,m,d,price,lineid,suitid)
  {
      if(!is_login_order()){
          return false;
      }
      var udate = y+'-'+m+'-'+d;
      var url = SITEURL+"lines/book/?usedate="+udate+"&lineid="+lineid+"&suitid="+suitid;
      window.location.href = url;
  }
</script><?php echo  Stourweb_View::template("member/login_order");  ?></body></html><script>
  $(document).ready(function(){
    $(window).onload = pageScroll();
    $(window).bind('scroll', pageScroll);
    $(".day-navlist li").click(function (e) {
        //$(window).unbind("scroll");
        var index = $(this).index(),
            offset = $('.part').eq(index).offset().top,
            scrollTop = $(window).scrollTop();
        $(".day-navlist a").removeClass("cur");
        $(this).find("a").addClass("cur");
        $("html, body").animate({
            scrollTop: offset
        }, "slow", function () {
            $(window).bind('scroll', pageScroll);
        });
        e.preventDefault();
    })
    function pageScroll() {
        var scrollTop = $(window).scrollTop();
        var size = $(".day-navlist a").size();
        var listTop = $(".part").eq(0).offset().top;
        if (size != null) {
            for (var i = 0; i < size; i++) {
                var firstOffset = $(".part").eq(0).offset().top,
                    edge = $(".part").eq(size - 1).offset().top + $(".part").eq(size - 1).height(),
                    offset = $(".part").eq(i).offset().top;
                if (scrollTop < firstOffset || scrollTop > edge) {
                    $(".day-navlist a").removeClass("cur");
                    $("#day-leftNav").hide();
                } else if (scrollTop >= offset && scrollTop <= edge) {
                    $(".day-navlist a").removeClass("cur");
                    $(".day-navlist a").eq(i).addClass("cur");
                    $("#day-leftNav").show();
                }
            }
        }
    
    }
  })
</script>