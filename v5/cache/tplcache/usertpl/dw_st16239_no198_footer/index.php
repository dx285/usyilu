<?php echo Common::get_user_css('dw_st16239_no198_index/css/footer.css');?><div class="st-help"><div class="wm-1200"><div class="help-lsit"><?php require_once ("/var/www/gogogous/taglib/help.php");$help_tag = new Taglib_Help();if (method_exists($help_tag, 'kind')) {$data = $help_tag->kind(array('action'=>'kind','row'=>'4',));}?><?php $n=1; if(is_array($data)) { foreach($data as $row) { ?><dl><dt><a href="<?php echo $row['url'];?>" rel="nofollow"><?php echo $row['title'];?></a></dt><dd><?php require_once ("/var/www/gogogous/taglib/help.php");$help_tag = new Taglib_Help();if (method_exists($help_tag, 'article')) {$list = $help_tag->article(array('action'=>'article','row'=>'3','kindid'=>$row['id'],'return'=>'list',));}?><?php $n=1; if(is_array($list)) { foreach($list as $r) { ?><a href="<?php echo $r['url'];?>" target="_blank" rel="nofollow"><?php echo $r['title'];?></a><?php $n++;}unset($n); } ?></dd></dl><?php $n++;}unset($n); } ?><div class="st-wechat"><?php if($GLOBALS['cfg_weixin_logo']) { ?><img src="<?php echo $GLOBALS['cfg_weixin_logo'];?>" width="100" height="100" /><span>微信扫一扫，<br />优惠多多！</span><?php } ?></div></div></div></div><!--帮助 扫码--><div class="st-footer"><div class="wm-1200"><div class="st-foot-menu"><?php require_once ("/var/www/gogogous/taglib/footnav.php");$footnav_tag = new Taglib_Footnav();if (method_exists($footnav_tag, 'pc')) {$data = $footnav_tag->pc(array('action'=>'pc','row'=>'10',));}?><?php $n=1; if(is_array($data)) { foreach($data as $row) { ?><a href="<?php echo $row['url'];?>" target="_blank" rel="nofollow"><?php echo $row['title'];?></a><?php $n++;}unset($n); } ?></div><!--底部导航--><div class="st-foot-edit"><?php echo $GLOBALS['cfg_footer'];?></div><!--网站底部介绍--><p><?php echo stripslashes($GLOBALS['cfg_tongjicode']);?><?php echo $GLOBALS['cfg_html_kefu'];?></p></div></div><script src="/plugins/qq_kefu/public/js/qqkefu.js"></script><!-- 编辑器内容 --><div class="st-link"><div class="wm-1200"><div class="st-link-list"><strong>友情链接：</strong><div class="child"><?php require_once ("/var/www/gogogous/taglib/flink.php");$flink_tag = new Taglib_Flink();if (method_exists($flink_tag, 'query')) {$data = $flink_tag->query(array('action'=>'query','typeid'=>$typeid,));}?><?php $n=1; if(is_array($data)) { foreach($data as $row) { ?><a href="<?php echo $row['url'];?>" target="_blank"><?php echo $row['title'];?></a><?php $n++;}unset($n); } ?></div></div></div></div><!--友情链接-->