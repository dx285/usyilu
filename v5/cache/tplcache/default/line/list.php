<?php defined('SYSPATH') or die();?><!doctype html><html><head><meta charset="utf-8"><!-- Di   --><title><?php if(!empty($destinfo['seotitle'])) { ?><?php echo $destinfo['seotitle'];?><?php } else { ?><?php echo $searchtitle;?><?php } ?>
-<?php echo $GLOBALS['cfg_webname'];?></title><!--    <title><?php if(!empty($destinfo['seotitle'])) { ?><?php echo $destinfo['seotitle'];?><?php } else { ?><?php echo $searchtitle;?><?php } ?>
-<?php echo $GLOBALS['cfg_webname'];?></title>--><?php echo $destinfo['keyword'];?><?php echo $destinfo['description'];?><?php echo  Stourweb_View::template("pub/varname");  ?><?php echo Common::css_plugin('lines.css','line');?><?php echo Common::css('base.css,extend.css');?><?php echo Common::js('jquery.min.js,base.js,common.js,delayLoading.min.js');?></head><body><?php echo Request::factory("pub/header")->execute()->body(); ?><?php $choose_district;  ?><?php $choose_xiaotuan;  ?><?php $choose_oneDayTrip;  ?><div class="big"><div class="wm-1200"><div class="st-guide"><!--      <a href="<?php echo $cmsurl;?>"><?php echo $GLOBALS['cfg_indexname'];?></a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php echo $cmsurl;?>lines/"><?php echo $channelname;?></a>--><!--            <?php $n=1; if(is_array($predest)) { foreach($predest as $pre) { ?>--><!--               &gt;&nbsp;&nbsp;<a href="<?php echo $cmsurl;?>lines/<?php echo $pre['pinyin'];?>/"><?php echo $pre['kindname'];?></a>--><!--            <?php $n++;}unset($n); } ?>--></div><!--面包屑--><div class="st-main-page"><?php require_once ("/var/www/gogogous/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$grouplist = $attr_tag->query(array('action'=>'query','flag'=>'grouplist','typeid'=>$typeid,'return'=>'grouplist',));}?><?php $actual_link = $_SERVER['REQUEST_URI'];
            $tmp = substr($actual_link, -4, 2);
          $tmp2 = substr($actual_link, -2, 2);
                ?><?php if($tmp == '27' or $tmp == '18') { ?><?php $n=1; if(is_array($grouplist)) { foreach($grouplist as $group) { ?><dl class="customizeNav"><?php if($group['attrname'] == '旅行方式') { ?><?php require_once ("/var/www/gogogous/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$attrlist = $attr_tag->query(array('action'=>'query','flag'=>'childitem','typeid'=>$typeid,'groupid'=>$group['id'],'return'=>'attrlist',));}?><?php $n=1; if(is_array($attrlist)) { foreach($attrlist as $attr) { ?><?php if($attr['attrname'] == '小团' or $attr['attrname'] == '一日游') { ?> 
                                    <div class="item">  <a href="<?php echo Model_Line::get_search_url($attr['id'],'attrid',$param);?>" <?php if(Common::check_in_attr($param['attrid'],$attr['id'])!==false) { ?>class="on"<?php } ?>
><?php echo $attr['attrname'];?></a>
                                       
                                    </div>
                                   <?php } ?><?php $n++;}unset($n); } ?><?php } ?></dl><?php $n++;}unset($n); } ?><?php } else if($tmp2 == '-1') { ?><?php $n=1; if(is_array($grouplist)) { foreach($grouplist as $group) { ?><dl class="customizeNav"><?php if($group['attrname'] == '旅行方式') { ?><?php require_once ("/var/www/gogogous/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$attrlist = $attr_tag->query(array('action'=>'query','flag'=>'childitem','typeid'=>$typeid,'groupid'=>$group['id'],'return'=>'attrlist',));}?><?php $n=1; if(is_array($attrlist)) { foreach($attrlist as $attr) { ?><?php if($attr['attrname'] == '自由自驾' or $attr['attrname'] == '团队自驾' or $attr['attrname'] == '定制自驾') { ?> 
                                <div class="item">  <a href="<?php echo Model_Line::get_search_url($attr['id'],'attrid',$param);?>" <?php if(Common::check_in_attr($param['attrid'],$attr['id'])!==false) { ?>class="on"<?php } ?>
><?php echo $attr['attrname'];?></a>
                                     
                                </div>
                             <?php } ?><?php $n++;}unset($n); } ?><?php } ?></dl><?php $n++;}unset($n); } ?><?php } ?><div class="st-linelist-box"><div class="st-list-search"><div class="been-tj" <?php if(count($chooseitem)<1) { ?>style="display:none"<?php } ?>
><strong>已选条件：</strong><p class="chooseitems"><?php $n=1; if(is_array($chooseitem)) { foreach($chooseitem as $item) { ?><?php
                    if ($item['itemname'] == "东海岸" or $item['itemname'] == "西海岸" or $item['itemname'] == "黄石"){
                      $choose_district = $item['itemname'];
                    }
                  if ($item['itemname'] == "小团"){
                      $choose_xiaotuan = $item['itemname'];
                  }
                  if ($item['itemname'] == "一日游"){
                      $choose_oneDayTrip = $item['itemname'];
                  }
                  ?><span class="chooseitem" data-url="<?php echo $item['url'];?>"><?php echo $item['itemname'];?><i></i></span><?php $n++;}unset($n); } ?><a href="javascript:;" class="clearc">清空筛选条件 </a></p></div><div class="line-search-tj"><?php require_once ("/var/www/gogogous/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$grouplist = $attr_tag->query(array('action'=>'query','flag'=>'grouplist','typeid'=>$typeid,'return'=>'grouplist',));}?><?php $n=1; if(is_array($grouplist)) { foreach($grouplist as $group) { ?><dl class="type"><?php if($group['attrname'] == '选择区域') { ?><dt><?php echo $group['attrname'];?>：</dt><dd><p><?php require_once ("/var/www/gogogous/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$attrlist = $attr_tag->query(array('action'=>'query','flag'=>'childitem','typeid'=>$typeid,'groupid'=>$group['id'],'return'=>'attrlist',));}?><?php $n=1; if(is_array($attrlist)) { foreach($attrlist as $attr) { ?><a href="<?php echo Model_Line::get_search_url($attr['id'],'attrid',$param);?>" <?php if(Common::check_in_attr($param['attrid'],$attr['id'])!==false) { ?>class="on"<?php } ?>
><?php echo $attr['attrname'];?></a><?php $n++;}unset($n); } ?></p></dd><?php } ?></dl><?php $n++;}unset($n); } ?><!--出发城市开始--><?php if($GLOBALS['cfg_startcity_open']) { ?><dl class="type"><dt>出发城市：</dt><dd><p><?php require_once ("/var/www/gogogous/taglib/startplace.php");$startplace_tag = new Taglib_Startplace();if (method_exists($startplace_tag, 'city')) {$startcitylist = $startplace_tag->city(array('action'=>'city','row'=>'10','return'=>'startcitylist',));}?><?php $n=1; if(is_array($startcitylist)) { foreach($startcitylist as $city) { ?><?php if($choose_xiaotuan == '小团' or $choose_oneDayTrip == '一日游') { ?><?php if(($choose_district == '东海岸') ) { ?>
                                         <?php if($city['title'] == '纽约' or $city['title'] == '波士顿' or $city['title'] == '华盛顿') { ?> 
                                        <a <?php if($param['startcityid']==$city['id']) { ?>class="on"<?php } ?>
 href="<?php echo Model_Line::get_search_url($city['id'],'startcityid',$param);?>"><?php echo $city['title'];?></a> 
                                        <?php } ?><?php } else if(($choose_district == '西海岸')) { ?><?php if($city['title'] == '旧金山' or $city['title'] == '洛杉矶' or $city['title'] == '拉斯维加斯') { ?> 
                                        <a <?php if($param['startcityid']==$city['id']) { ?>class="on"<?php } ?>
 href="<?php echo Model_Line::get_search_url($city['id'],'startcityid',$param);?>"><?php echo $city['title'];?></a> 
                                        <?php } ?><?php } else if(($choose_district == '黄石')) { ?><?php if($city['title'] == '黄石' ) { ?> 
                                        <a <?php if($param['startcityid']==$city['id']) { ?>class="on"<?php } ?>
 href="<?php echo Model_Line::get_search_url($city['id'],'startcityid',$param);?>"><?php echo $city['title'];?></a> 
                                        <?php } ?><?php } else { ?><a <?php if($param['startcityid']==$city['id']) { ?>class="on"<?php } ?>
 href="<?php echo Model_Line::get_search_url($city['id'],'startcityid',$param);?>"><?php echo $city['title'];?></a> 
                                     <?php } ?><?php } else { ?><a <?php if($param['startcityid']==$city['id']) { ?>class="on"<?php } ?>
 href="<?php echo Model_Line::get_search_url($city['id'],'startcityid',$param);?>"><?php echo $city['title'];?></a> 
                                <?php } ?><?php $n++;}unset($n); } ?></p><?php if(count($startcitylist)>10) { ?><em><b>收起</b><i class='up'></i></em><?php } ?></dd></dl><?php } ?><!--出发城市结束--><dl class="type"><!-- Di change displayed text --><dt>结束城市：</dt><dd><p><?php require_once ("/var/www/gogogous/taglib/dest.php");$dest_tag = new Taglib_Dest();if (method_exists($dest_tag, 'query')) {$destlist = $dest_tag->query(array('action'=>'query','typeid'=>$typeid,'flag'=>'nextsame','row'=>'100','pid'=>$destid,'return'=>'destlist',));}?><?php $n=1; if(is_array($destlist)) { foreach($destlist as $dest) { ?><?php if($choose_xiaotuan == '小团' or $choose_oneDayTrip == '一日游') { ?><?php if(($choose_district == '东海岸') ) { ?>
                                     <?php if($dest['kindname'] == '纽约' or $dest['kindname'] == '波士顿' or $dest['kindname'] == '华盛顿') { ?> 
                                    <a <?php if($param['destpy']==$dest['pinyin']) { ?>class="on"<?php } ?>
 href="<?php echo Model_Line::get_search_url($dest['pinyin'],'destpy',$param);?>"><?php echo $dest['kindname'];?></a><?php } ?><?php } else if(($choose_district == '西海岸')) { ?><?php if($dest['kindname'] == '旧金山' or $dest['kindname'] == '洛杉矶' or $dest['kindname'] == '拉斯维加斯') { ?> 
                                    <a <?php if($param['destpy']==$dest['pinyin']) { ?>class="on"<?php } ?>
 href="<?php echo Model_Line::get_search_url($dest['pinyin'],'destpy',$param);?>"><?php echo $dest['kindname'];?></a><?php } ?><?php } else if(($choose_district == '黄石')) { ?><?php if($dest['kindname'] == '黄石' ) { ?> 
                                    <a <?php if($param['destpy']==$dest['pinyin']) { ?>class="on"<?php } ?>
 href="<?php echo Model_Line::get_search_url($dest['pinyin'],'destpy',$param);?>"><?php echo $dest['kindname'];?></a><?php } ?><?php } else { ?><a <?php if($param['destpy']==$dest['pinyin']) { ?>class="on"<?php } ?>
 href="<?php echo Model_Line::get_search_url($dest['pinyin'],'destpy',$param);?>"><?php echo $dest['kindname'];?></a><?php } ?><?php } else { ?><a <?php if($param['destpy']==$dest['pinyin']) { ?>class="on"<?php } ?>
 href="<?php echo Model_Line::get_search_url($dest['pinyin'],'destpy',$param);?>"><?php echo $dest['kindname'];?></a> 
                            <?php } ?><?php $n++;}unset($n); } ?></p><?php if(count($destlist)>10) { ?><em><b>收起</b><i class='up'></i></em><?php } ?></dd></dl><!--属性组读取--><!--                <?php $n=1; if(is_array($chooseitem)) { foreach($chooseitem as $item) { ?>--><!--                <span class="chooseitem" data-url="<?php echo $item['url'];?>"><?php echo $item['itemname'];?><i></i></span>--><!--                <?php $n++;}unset($n); } ?>--><?php require_once ("/var/www/gogogous/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$grouplist = $attr_tag->query(array('action'=>'query','flag'=>'grouplist','typeid'=>$typeid,'return'=>'grouplist',));}?><?php $n=1; if(is_array($grouplist)) { foreach($grouplist as $group) { ?><dl class="type"><?php if($group['attrname'] == '车型选择') { ?><?php if($choose_xiaotuan != '小团' and $choose_oneDayTrip != '一日游' ) { ?><dt><?php echo $group['attrname'];?>：</dt><dd><p><?php require_once ("/var/www/gogogous/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$attrlist = $attr_tag->query(array('action'=>'query','flag'=>'childitem','typeid'=>$typeid,'groupid'=>$group['id'],'return'=>'attrlist',));}?><?php $n=1; if(is_array($attrlist)) { foreach($attrlist as $attr) { ?><!-- 加各种团条件 --><a href="<?php echo Model_Line::get_search_url($attr['id'],'attrid',$param);?>" <?php if(Common::check_in_attr($param['attrid'],$attr['id'])!==false) { ?>class="on"<?php } ?>
><?php echo $attr['attrname'];?></a><?php $n++;}unset($n); } ?></p></dd><?php } ?><?php } else if($group['attrname'] != '旅行方式' and $group['attrname'] != '选择区域') { ?><dt><?php echo $group['attrname'];?>：</dt><dd><p><?php require_once ("/var/www/gogogous/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$attrlist = $attr_tag->query(array('action'=>'query','flag'=>'childitem','typeid'=>$typeid,'groupid'=>$group['id'],'return'=>'attrlist',));}?><?php $n=1; if(is_array($attrlist)) { foreach($attrlist as $attr) { ?><a href="<?php echo Model_Line::get_search_url($attr['id'],'attrid',$param);?>" <?php if(Common::check_in_attr($param['attrid'],$attr['id'])!==false) { ?>class="on"<?php } ?>
><?php echo $choose_xiaotuan;?><?php echo $attr['attrname'];?></a><?php $n++;}unset($n); } ?></p></dd><?php } ?></dl><?php $n++;}unset($n); } ?><?php if($choose_oneDayTrip != '一日游' ) { ?><dl class="type"><dt>出游天数：</dt><dd><p><?php $line_tag = new Taglib_Line();if (method_exists($line_tag, 'day_list')) {$data = $line_tag->day_list(array('action'=>'day_list',));}?><?php $n=1; if(is_array($data)) { foreach($data as $r) { ?><a <?php if($param['dayid']==$r['word']) { ?>class="on"<?php } ?>
 href="<?php echo Model_Line::get_search_url($r['word'],'dayid',$param);?>"><?php echo $r['title'];?></a><?php $n++;}unset($n); } ?></p></dd></dl><?php } ?><dl class="type"><dt>价格区间：</dt><dd><p><?php $line_tag = new Taglib_Line();if (method_exists($line_tag, 'price_list')) {$data = $line_tag->price_list(array('action'=>'price_list',));}?><?php $n=1; if(is_array($data)) { foreach($data as $r) { ?><a <?php if($param['priceid']==$r['id']) { ?>class="on"<?php } ?>
 href="<?php echo Model_Line::get_search_url($r['id'],'priceid',$param);?>"><?php echo $r['title'];?></a><?php $n++;}unset($n); } ?></p></dd></dl></div></div><!--条件搜索--><div class="st-linelist-con"><div class="st-sort-menu"><span class="sort-sum"><a href="javascript:;">综合排序</a><a href="javascript:;">价格
                    <?php if($param['sorttype']!=1 && $param['sorttype']!=2) { ?><i class="jg-default" data-url="<?php echo Model_Line::get_search_url(1,'sorttype',$param);?>"></i><?php } ?><?php if($param['sorttype']==1) { ?><i class="jg-up" data-url="<?php echo Model_Line::get_search_url(2,'sorttype',$param);?>"></i><?php } ?><?php if($param['sorttype']==2) { ?><i class="jg-down" data-url="<?php echo Model_Line::get_search_url(0,'sorttype',$param);?>"></i></a><?php } ?><a href="javascript:;">销量
                    <?php if($param['sorttype']!=3) { ?><i class="xl-default" data-url="<?php echo Model_Line::get_search_url(3,'sorttype',$param);?>"></i><?php } ?><?php if($param['sorttype']==3) { ?><i class="xl-down" data-url="<?php echo Model_Line::get_search_url(0,'sorttype',$param);?>"></i><?php } ?></a><a href="javascript:;">推荐
                    <?php if($param['sorttype']!=4) { ?><i class="tj-default" data-url="<?php echo Model_Line::get_search_url(4,'sorttype',$param);?>"></i><?php } ?><?php if($param['sorttype']==4) { ?><i class="tj-down" data-url="<?php echo Model_Line::get_search_url(0,'sorttype',$param);?>"></i><?php } ?></a></span><span class="switch-show"><a <?php if($param['displaytype']==0) { ?> class="on" <?php } ?>
 href="<?php echo Model_Line::get_search_url(0,'displaytype',$param,$currentpage);?>"><i class="lt"></i>列表模式</a><a <?php if($param['displaytype']==1) { ?> class="on" <?php } ?>
 href="<?php echo Model_Line::get_search_url(1,'displaytype',$param,$currentpage);?>"><i class="pic"></i>图片模式</a></span><!--切换模式--></div><?php $strongPoints; ?><?php if(!empty($list)) { ?><?php if($param['displaytype']==0) { ?><div class="txt-line-list"><ul><?php $n=1; if(is_array($list)) { foreach($list as $line) { ?><li><div class="pic"><a href="<?php echo $line['url'];?>"><img src="<?php echo Product::get_lazy_img();?>" st-src="<?php echo Common::img($line['litpic'],265,180);?>" alt="<?php echo $line['title'];?>"/></a></div><div class="txt"><p class="bt"><a href="<?php echo $line['url'];?>" target="_blank"><?php echo $line['title'];?><?php $n=1; if(is_array($line['iconlist'])) { foreach($line['iconlist'] as $icon) { ?><img src="<?php echo $icon['litpic'];?>" /><?php $n++;}unset($n); } ?></a></p><p class="data"><span>销量：<?php echo $line['sellnum'];?></span><s>|</s><span>满意度：<?php echo $line['score'];?></span><s>|</s><span>推荐：<?php echo $line['recommendnum'];?></span></p><?php $strongPoints = explode(",",$line['sellpoint']); ?><!--                        <p class="ts">特色：<?php echo $line['sellpoint'];?><?php echo $strongPoints;?></p>--><p class="ts strongPoints">特色：
                            <?php $n=1; if(is_array($strongPoints)) { foreach($strongPoints as $strongPoint) { ?><p class="strongPoint"><?php echo $strongPoint;?></p><?php $n++;}unset($n); } ?></p><p class="msg"><span><?php if(!empty($line['startcity'])) { ?>
                                 [<?php echo $line['startcity'];?>出发]
                                <?php } ?></span><span>行程：<?php echo $line['lineday'];?> 天</span><span>出团日期：<?php echo $line['startdate'];?></span></p></div><div class="booking"><span class="yh"><?php if(!empty($line['price'])) { ?><i class="currency_sy"><?php echo Currency_Tool::symbol();?></i><b><?php echo $line['price'];?></b>起
                            <?php } else { ?>
                             电询
                            <?php } ?></span><span class="yj"><?php if(!empty($line['storeprice'])) { ?>原价：<del><i class="currency_sy"><?php echo Currency_Tool::symbol();?></i><?php echo $line['storeprice'];?></del><?php } ?></span><a href="<?php echo $line['url'];?>" target="_blank">立即预订</a></div></li><?php $n++;}unset($n); } ?></ul><div class="main_mod_page clear"><?php echo $pageinfo;?></div></div><!--搜索列表--><?php } ?><?php if($param['displaytype']==1) { ?><div class="pic-line-list"><ul><?php $k=1;?><?php $n=1; if(is_array($list)) { foreach($list as $line) { ?><li <?php if($k%3==0) { ?>class="mr_0"<?php } ?>
><div class="pic"><img class="fl" src="<?php echo Common::img($line['litpic'],285,194);?>" alt="<?php echo $line['title'];?>"/><div class="buy"><a href="<?php echo $line['url'];?>" target="_blank">立即预订</a></div></div><div class="js"><a class="tit" href="<?php echo $line['url'];?>" target="_blank"><?php echo $line['title'];?></a><p class="attr"><?php $n=1; if(is_array($line['iconlist'])) { foreach($line['iconlist'] as $icon) { ?><img src="<?php echo $icon['litpic'];?>" /><?php $n++;}unset($n); } ?></p><p class="num"><?php if(!empty($line['storeprice'])) { ?><del>原价：<i class="currency_sy"><?php echo Currency_Tool::symbol();?></i><?php echo $line['storeprice'];?></del><?php } ?><?php if(!empty($line['price'])) { ?><span><b><i class="currency_sy"><?php echo Currency_Tool::symbol();?></i><?php echo $line['price'];?></b>起</span><?php } else { ?><span><b>电询</b></span><?php } ?></p></div></li><?php $k++?><?php $n++;}unset($n); } ?></ul><div class="main_mod_page clear"><?php echo $pageinfo;?></div></div><?php } ?><?php } else { ?><div class="no-content"><p><i></i>抱歉，没有找到符合条件的产品！<a href="/lines/all">查看全部产品</a></p></div><?php } ?></div></div><!--列表主体--><div class="st-sidebox"><?php require_once ("/var/www/gogogous/taglib/right.php");$right_tag = new Taglib_Right();if (method_exists($right_tag, 'get')) {$data = $right_tag->get(array('action'=>'get','typeid'=>$typeid,'data'=>$templetdata,'pagename'=>'search',));}?></div><!--边栏模块--></div></div></div><?php echo Request::factory("pub/footer")->execute()->body(); ?><?php echo Request::factory("pub/flink")->execute()->body(); ?><script>
        $(function(){
            //线路搜索条件去掉最后一条边框
            $('.line-search-tj').find('dl').last().addClass('bor_0')
            $(".line-search-tj dl dd em").toggle(function(){
                $(this).prev().height('24px');
                $(this).children('b').text('展开');
                $(this).children('i').removeClass('up')
            },function(){
                $(this).prev().height('auto');
                $(this).children('b').text('收起');
                $(this).children('i').addClass('up')
            });
            //排序方式点击
            $('.sort-sum').find('a').click(function(){
                var url = $(this).find('i').attr('data-url');
                if(url==undefined){
                    url = location.href;
                }
                window.location.href = url;
            })
            //删除已选
            $(".chooseitem").find('i').click(function(){
                var url = $(this).parent().attr('data-url');
                window.location.href = url;
            })
            //清空筛选条件
            $('.clearc').click(function(){
                var url = SITEURL+'lines/all/';
                window.location.href = url;
            })
            //隐藏没有属性下级分类
            $(".type").each(function(i,obj){
                var len = $(obj).find('dd p a').length;
                if(len<1){
                    $(obj).hide();
                }
            })
            $(".customizeNav").next(".item").click(function(){
                $(this).css({"background-color" : "#24ccff"});
            })
        })
    </script></body></html>
