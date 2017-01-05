<?php echo Common::get_user_css('dw_st16239_no198_index/css/footer.css');?><!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">--><div class="st-help"><div class="wm-1200"><div class="help-lsit"><?php require_once ("/var/www/gogogous/taglib/help.php");$help_tag = new Taglib_Help();if (method_exists($help_tag, 'kind')) {$data = $help_tag->kind(array('action'=>'kind','row'=>'4',));}?><?php $n=1; if(is_array($data)) { foreach($data as $row) { ?><dl><dt><a href="<?php echo $row['url'];?>" rel="nofollow"><?php echo $row['title'];?></a></dt><dd><?php require_once ("/var/www/gogogous/taglib/help.php");$help_tag = new Taglib_Help();if (method_exists($help_tag, 'article')) {$list = $help_tag->article(array('action'=>'article','row'=>'5','kindid'=>$row['id'],'return'=>'list',));}?><?php $n=1; if(is_array($list)) { foreach($list as $r) { ?><a href="<?php echo $r['url'];?>" target="_blank" rel="nofollow"><?php echo $r['title'];?></a><?php $n++;}unset($n); } ?></dd></dl><?php $n++;}unset($n); } ?><div class="st-wechat"><?php if($GLOBALS['cfg_weixin_logo']) { ?><img src="<?php echo $GLOBALS['cfg_weixin_logo'];?>" width="100" height="100" /><span>微信扫一扫，<br />优惠多多！</span><?php } ?></div></div></div></div><!--帮助 扫码--><div class="st-help"><ul class="wm-1200 foot-ad"><ul class="foot-nav-pills" style="text-align: center"><li class="foot-nav-item foot-nav-item-certificate">
                企业认证
            </li><li class="foot-nav-item foot-nav-item-certificate">
                |
            </li><li class="foot-nav-item foot-nav-item-coop">
                合作伙伴
            </li><li class="foot-nav-item foot-nav-item-certificate">
                |
            </li><li class="foot-nav-item foot-nav-item-otherlinks">
                友情链接
            </li></ul><ul class="foot-certificate" style="text-align: center"><li class="foot-certificate-item" id="" ><img src="http://usyilu.com/uploads/2016/1130/IATA2.jpg" ></li><li class="foot-certificate-item" id="" ><img src="http://usyilu.com/uploads/2016/1130/NTA.gif" ></li><li class="foot-certificate-item" id="" ><img src="http://usyilu.com/uploads/2016/1130/DOT.jpg" ></li><li class="foot-certificate-item" id="" ><img src="http://usyilu.com/uploads/2016/1130/CHP.jpg" ></li></ul><ul class="foot-coop" style="text-align: center"><li class="foot-coop-item" id="" ><img src="http://usyilu.com/uploads/2016/1201/中国国旅.png" ></li><li class="foot-coop-item" id="" ><img src="http://usyilu.com/uploads/2016/1201/惠租车.jpg" ></li><li class="foot-coop-item" id="" ><img src="http://usyilu.com/uploads/2016/1201/携程.png" ></li><li class="foot-coop-item" id="" ><img src="http://usyilu.com/uploads/2016/1201/港中旅.png" ></li><li class="foot-coop-item" id="" ><img src="http://usyilu.com/uploads/2016/1201/租租车.jpg" ></li><li class="foot-coop-item" id="" ><img src="http://usyilu.com/uploads/2016/1201/锦江旅游.gif" ></li><li class="foot-coop-item" id="" ><img src="http://usyilu.com/uploads/2016/1201/飞猪.jpg" ></li></ul><ul class="foot-otherlinks" style="text-align: center"><li class="foot-otherlinks-item" id="" ><a target="_blank"  href="http://www.gogogous.com">xxx旅行社</a></li><li class="foot-otherlinks-item" id="" ><a target="_blank" href="http://www.gogogous.com">xxx旅行社</a></li><li class="foot-otherlinks-item" id="" ><a target="_blank" href="http://www.gogogous.com">xxx旅行社</a></li><li class="foot-otherlinks-item" id="" ><a target="_blank" href="http://www.gogogous.com">xxx旅行社</a></li></ul></div></div><div class="st-footer"><div class="wm-1200"><div class="st-foot-menu"><?php require_once ("/var/www/gogogous/taglib/footnav.php");$footnav_tag = new Taglib_Footnav();if (method_exists($footnav_tag, 'pc')) {$data = $footnav_tag->pc(array('action'=>'pc','row'=>'10',));}?><?php $n=1; if(is_array($data)) { foreach($data as $row) { ?><a href="<?php echo $row['url'];?>" target="_blank" rel="nofollow"><?php echo $row['title'];?></a><?php $n++;}unset($n); } ?></div><!--底部导航--><div class="st-foot-edit"><?php echo $GLOBALS['cfg_footer'];?></div><!--网站底部介绍--><p><?php echo stripslashes($GLOBALS['cfg_tongjicode']);?><?php echo $GLOBALS['cfg_html_kefu'];?></p></div></div><script src="/plugins/qq_kefu/public/js/qqkefu.js"></script><!-- 编辑器内容 --><div class="st-link"><div class="wm-1200"><div class="st-link-list"><strong>友情链接：</strong><div class="child"><?php require_once ("/var/www/gogogous/taglib/flink.php");$flink_tag = new Taglib_Flink();if (method_exists($flink_tag, 'query')) {$data = $flink_tag->query(array('action'=>'query','typeid'=>$typeid,));}?><?php $n=1; if(is_array($data)) { foreach($data as $row) { ?><a href="<?php echo $row['url'];?>" target="_blank"><?php echo $row['title'];?></a><?php $n++;}unset($n); } ?></div></div></div></div><!--友情链接--><script>
    $(".foot-nav-item-certificate").hover(
        function () {
            $(this).addClass('hover');
//            $("foot-certificate-item").addClass('showContent');
//            $(".foot-certificate").css({"background-color": "yellow"});
            $(".foot-certificate").show();
            $(".foot-coop").hide();
            $(".foot-otherlinks").hide();
//            $(".foot-certificate").addClass('showContent');
        },
        function () {
            $(this).removeClass("hover");
//            $(".foot-certificate").hide();
        }
    );
    $(".foot-nav-item-coop").hover(
        function () {
            $(this).addClass('hover');
//            $("foot-certificate-item").addClass('showContent');
//            $(".foot-certificate").css({"background-color": "yellow"});
            $(".foot-certificate").hide();
            $(".foot-coop").show();
            $(".foot-coop").css({"visibility" : "visible"});
            $(".foot-otherlinks").hide();
//            $(".foot-certificate").addClass('showContent');
        },
        function () {
            $(this).removeClass("hover");
//            $(".foot-certificate").hide();
        }
    );
    $(".foot-nav-item-otherlinks").hover(
        function () {
            $(this).addClass('hover');
//            $("foot-certificate-item").addClass('showContent');
//            $(".foot-certificate").css({"background-color": "yellow"});
            $(".foot-certificate").hide();
            $(".foot-coop").hide();
            $(".foot-otherlinks").css({"visibility" : "visible"});
            $(".foot-otherlinks").show();
//            $(".foot-certificate").addClass('showContent');
        },
        function () {
            $(this).removeClass("hover");
//            $(".foot-certificate").hide();
        }
    );
    $(".foot-otherlinks-item").click(function() {
        $(this).css('color', '#fff');
    });
</script>