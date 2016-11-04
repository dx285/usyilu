<?php if($conf['pos']=='right') { ?>
<?php echo Common::css('/plugins/qq_kefu/public/kf8/css/right.css',true,false);?>
<?php } else { ?>
<?php echo Common::css('/plugins/qq_kefu/public/kf8/css/left.css',true,false);?>
<?php } ?>
<div class="st-sidemenu-box-2" style="height: 234px; right: 0px;<?php echo $conf['pos'];?>:0px">
    <div class="st-sidemenu-con">
        <ul>
            <?php if(!empty($Glb['cfg_weibo_url'])) { ?>
            <li class="microblog"><a href="<?php echo $Glb['cfg_weibo_url'];?>" target="_blank">微博</a></li>
            <?php } ?>
            <?php if(!empty($Glb['cfg_weixin_logo'])) { ?>
            <li class="wechat">微信<div class="wechat-box2"><img src="<?php echo $Glb['cfg_weixin_logo'];?>"></div></li>
            <?php } ?>
            <li class="myorder"><a href="/member/" target="_blank">我的订单</a></li>
        </ul>
        <div class="st-sidemenu-bom">
            <div class="st-backTop" id="st-backTop"><a href="javascript:void(0)">TOP</a></div>
            <div class="st-sidemenu-closed"></div>
        </div>
    </div>
    <div class="st-travel-show" style="right: -100px;"></div>
</div>
<script>
    var posh="<?php echo $conf['posh'];?>";
    posh=parseInt(posh);
    getConsize();
    $(function(){
        $(window).resize(function(){
            getConsize()
        });
        //返回顶部
        $('#st-backTop').click(function(){$('html,body').animate({scrollTop: '0px'}, 500);});
    })
    //动态获取改变窗口高度
    function getConsize(){
        $('.st-sidemenu-box-2').height($(window).height());
    }
</script>
<?php if($conf['pos']=='right') { ?>
<script>
    $(function(){
        //隐藏显示侧边导航
        $('.st-sidemenu-closed').click(function(){
            $('.st-sidemenu-box-2').animate({right:'-35px'},100,function(){
                $('.st-travel-show').animate({right:0},200)
            })
        })
        $('.st-travel-show').click(function(){
            $(this).animate({right:'-100px'},100,function(){
                $('.st-sidemenu-box-2').animate({right:0},200)
            })
        })
    });
</script>
<?php } else { ?>
<script>
    $(function() {
        //隐藏显示侧边导航
        $('.st-sidemenu-closed').click(function () {
            $('.st-sidemenu-box-2').animate({
                left: '-35px'
            }, 100, function () {
                $('.st-travel-show').animate({
                    left:0
                }, 200)
            })
        })
        $('.st-travel-show').click(function () {
            $(this).animate({
                left: '-100px'
            }, 100, function () {
                $('.st-sidemenu-box-2').animate({
                    left: 0
                }, 200)
            })
        })
    });
</script>
<?php } ?>
