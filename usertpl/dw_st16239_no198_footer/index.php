{Common::get_user_css('dw_st16239_no198_index/css/footer.css')}

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">-->

<div class="st-help">
    <div class="wm-1200">

        <div class="help-lsit">
            {st:help action="kind" row="4"}
            {loop $data $row}
            <dl>
                <dt><a href="{$row['url']}" rel="nofollow">{$row['title']}</a></dt>
                <dd>
                    {st:help action="article" row="5" kindid="$row['id']" return="list"}
                    {loop $list $r}
                    <a href="{$r['url']}" target="_blank" rel="nofollow">{$r['title']}</a>
                    {/loop}
                    {/st}

                </dd>
            </dl>
            {/loop}
            {/st}


            <div class="st-wechat">
                {if $GLOBALS['cfg_weixin_logo']}
                <img src="{$GLOBALS['cfg_weixin_logo']}" width="100" height="100" />
                <span>微信扫一扫，<br />优惠多多！</span>
                {/if}
            </div>


        </div>

    </div>
</div>
<!--帮助 扫码-->


<div class="st-help">
    <ul class="wm-1200 foot-ad">
        <ul class="foot-nav-pills" style="text-align: center">
            <li class="foot-nav-item foot-nav-item-certificate">
                企业认证
            </li>
            <li class="foot-nav-item foot-nav-item-certificate">
                |
            </li>
            <li class="foot-nav-item foot-nav-item-coop">
                合作伙伴
            </li>
            <li class="foot-nav-item foot-nav-item-certificate">
                |
            </li>
            <li class="foot-nav-item foot-nav-item-otherlinks">
                友情链接
            </li>
        </ul>

        <ul class="foot-certificate" style="text-align: center">
            <li class="foot-certificate-item" id="" >
                <img src="https://usyilu.com/uploads/2016/1130/IATA2.jpg" >
            </li>
            <li class="foot-certificate-item" id="" >
                <img src="https://usyilu.com/uploads/2016/1130/NTA.gif" >
            </li>
            <li class="foot-certificate-item" id="" >
                <img src="https://usyilu.com/uploads/2016/1130/DOT.jpg" >
            </li>
            <li class="foot-certificate-item" id="" >
                <img src="https://usyilu.com/uploads/2016/1130/CHP.jpg" >
            </li>
        </ul>

        <ul class="foot-coop" style="text-align: center">
            <li class="foot-coop-item" id="" >
                <img src="https://usyilu.com/uploads/2016/1201/中国国旅.png" >
            </li>
            <li class="foot-coop-item" id="" >
                <img src="https://usyilu.com/uploads/2016/1201/惠租车.jpg" >
            </li>
            <li class="foot-coop-item" id="" >
                <img src="https://usyilu.com/uploads/2016/1201/携程.png" >
            </li>
            <li class="foot-coop-item" id="" >
                <img src="https://usyilu.com/uploads/2016/1201/港中旅.png" >
            </li>
            <li class="foot-coop-item" id="" >
                <img src="https://usyilu.com/uploads/2016/1201/租租车.jpg" >
            </li>
            <li class="foot-coop-item" id="" >
                <img src="https://usyilu.com/uploads/2016/1201/锦江旅游.gif" >
            </li>
            <li class="foot-coop-item" id="" >
                <img src="https://usyilu.com/uploads/2016/1201/飞猪.jpg" >
            </li>
        </ul>

        <ul class="foot-otherlinks" style="text-align: center">
            <li class="foot-otherlinks-item" id="" >
                <a target="_blank"  href="https://www.gogogous.com">xxx旅行社</a>
            </li>
            <li class="foot-otherlinks-item" id="" >
                <a target="_blank" href="https://www.gogogous.com">xxx旅行社</a>
            </li>
            <li class="foot-otherlinks-item" id="" >
                <a target="_blank" href="https://www.gogogous.com">xxx旅行社</a>
            </li>
            <li class="foot-otherlinks-item" id="" >
                <a target="_blank" href="https://www.gogogous.com">xxx旅行社</a>
            </li>
        </ul>
    </div>
</div>




<div class="st-footer">
    <div class="wm-1200">
        <div class="st-foot-menu">
            {st:footnav action="pc" row="10"}
            {loop $data $row}
            <a href="{$row['url']}" target="_blank" rel="nofollow">{$row['title']}</a>
            {/loop}
            {/st}
        </div>
        <!--底部导航-->

        <div class="st-foot-edit">
            {$GLOBALS['cfg_footer']}
        </div>
        <!--网站底部介绍-->
<!--        <p>{stripslashes($GLOBALS['cfg_tongjicode'])}{$GLOBALS['cfg_html_kefu']}</p>-->
    </div>
</div>
<!--<script src="/plugins/qq_kefu/public/js/qqkefu.js"></script>-->
<!-- 编辑器内容 -->

<div class="st-link">
    <div class="wm-1200">

        <div class="st-link-list">
            <strong>友情链接：</strong>
            <div class="child">

                        {st:flink action="query" typeid="$typeid"}
                        {loop $data $row}
                        <a href="{$row['url']}" target="_blank">{$row['title']}</a>
                        {/loop}
                        {/st}

            </div>
        </div>

    </div>
</div>
<!--友情链接-->

<script>
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