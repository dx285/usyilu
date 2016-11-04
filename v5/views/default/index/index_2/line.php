<!--旅游线路开始-->
{if $channel['line']['isopen']==1}
<div class="line_trip_box">
    <div class="trip_tit">{$channel['line']['channelname']}</div>
    <div class="product_box">
        <div class="sidle_hot">
            <h3>推荐{$channel['line']['channelname']}</h3>
            <ul>
                {st:line action="query" flag="order" row="6" return="recline"}
                {loop $recline $l}
                <li>
                    <s></s>
                    <div class="pic"><a href="{$l['url']}" target="_blank"><img class="lazyimg" src="{Product::get_lazy_img()}" st-src="{Common::img($l['litpic'],180,122)}" alt="{$l['title']}"></a></div>
                    <p class="tit"><a href="{$l['url']}" target="_blank">{$l['title']}</a></p>
                    <p class="jg">{if $l['price']>0}<i class="currency_sy">{Currency_Tool::symbol()}</i>{$l['price']}{else}电询{/if}</p>
                </li>
                    {/loop}
                    {/st}

            </ul>
        </div>
        <div class="con_list">
            <div class="st-tabnav">
                {st:dest action="query" flag="channel_nav" row="6" typeid="1" return="linedest"}
                {loop $linedest $ld}
                <span>{$ld['kindname']}</span>
                {/loop}

                <a class="more" href="{$GLOBALS['cfg_basehost']}/lines/all">更多</a>
            </div>
            {loop $linedest $ld}
            <div class="st-tabcon" style="display: block;">
                <ul>
                    {st:line action="query" flag="mdd" destid="$ld['id']" row="8" return="linelist" }
                    {php}$k=1;{/php}
                    {loop $linelist $ll}
                    <li {if $k%4==0}class="mr_0"{/if}>
                        <a class="pic" href="{$ll['url']}" target="_blank"><img class="lazyimg" src="{Product::get_lazy_img()}" st-src="{Common::img($ll['litpic'],180,122)}" alt="{$ll['title']}"></a>
                        <a class="tit" href="{$ll['url']}" target="_blank">{$ll['title']}</a>
                          <span class="price">
                               {if !empty($ll['price'])}
                                  <i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$ll['price']}</b>起
                                  {else}
                                    电询
                               {/if}
                          </span>
                    </li>
                    {php}$k++;{/php}
                    {/loop}
                </ul>
            </div>
            {/loop}

            {st:ad action="getad" name="Index2LineRightAd" pc="1" return="linead"}
            {if !empty($linead)}
            <div class="ad_img">
                <a href="{$linead['adlink']}" style="margin-bottom:10px;" class="fl clearfix" target="_blank"><img src="{Product::get_lazy_img()}" st-src="{Common::img($linead['adsrc'],200,424)}" alt="{$linead['adname']}"></a>
            </div>
            {/if}
        </div>
    </div>
</div>
{/if}
<!--旅游线路结束-->