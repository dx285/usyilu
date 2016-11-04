{Common::get_user_css('dw_st16239_no198_index/css/footer.css')}
<div class="st-help">
    <div class="wm-1200">

        <div class="help-lsit">
            {st:help action="kind" row="4"}
            {loop $data $row}
            <dl>
                <dt><a href="{$row['url']}" rel="nofollow">{$row['title']}</a></dt>
                <dd>
                    {st:help action="article" row="3" kindid="$row['id']" return="list"}
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
        <p>{stripslashes($GLOBALS['cfg_tongjicode'])}{$GLOBALS['cfg_html_kefu']}</p>
    </div>
</div>
<script src="/plugins/qq_kefu/public/js/qqkefu.js"></script>
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