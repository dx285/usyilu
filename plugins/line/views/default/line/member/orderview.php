<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    {template "pub/varname"}
    {Common::css('base.css,user.css')}
    {Common::load_skin()}
    {Common::js('jquery.min.js')}
</head>
<body>
<div class="user-cont-box">
    <div class="user-order-show">
    {if $info['status']=='0'}
    <div class="flow-path first"></div>
    {elseif $info['status']=='1' }
    <div class="flow-path second"></div>
    {elseif  $info['status']=='2' && $info['ispinlun']==0}
    <div class="flow-path third"></div>
    {elseif $info['status']=='5' && $info['ispinlun']==0}
    <div class="flow-path fourth"></div>
    {elseif $info['status']=='5' && $info['ispinlun']==1}
    <div class="flow-path fifth"></div>
    {/if}
        <div class="product-msg">
            <h3 class="pm-tit"><strong class="ico01">预定信息</strong></h3>
            <dl class="pm-list">
                <dt>线路名称：</dt>
                <dd>{$info['productname']}</dd>
            </dl>
            <dl class="pm-list">
                <dt>订单号：</dt>
                <dd>{$info['ordersn']}</dd>
            </dl>
            <dl class="pm-list">
                <dt>订单状态：</dt>
                <dd>
                    {if $info['status']=='0'}
                    <span class="zt-dcl">{$info['statusname']}</span>
                    {elseif $info['status']=='1'}
                    <span class="zt-nfk">{$info['statusname']}</span>
                    {elseif $info['status']=='3'}
                    <span class="zt-dcl">{$info['statusname']}</span>
                    {elseif $info['status']=='5'}
                    <span class="zt-end">{$info['statusname']}</span>
                    {elseif $info['status']=='4'}
                    <span class="zt-end">{$info['statusname']}</span>
                    {elseif $info['status']=='2'}
                    <span class="zt-end">{$info['statusname']}</span>
                    {elseif empty($info['ispinlun'])}
                    <span class="zt-dp">未点评</span>
                    {/if}
                </dd>
            </dl>
            <dl class="pm-list">
                <dt>下单时间：</dt>
                <dd>{date('Y-m-d H:i:s',$info['addtime'])}</dd>
            </dl>

        </div><!--预定信息-->

        <div class="product-msg">
            <div class="table-msg">
                <table width="100%" border="0">
                    <tr>
                        <th width="45%" height="40" scope="col"><span class="l-con">产品名称</span></th>
                        <th width="10%" scope="col">类型</th>
                        <th width="15%" scope="col">出行日期</th>
                        <th width="10%" scope="col">单价</th>
                        <th width="10%" scope="col">人数</th>
                        <th width="10%" scope="col">总价</th>
                    </tr>
                    {if !empty($info['price']) && !empty($info['dingnum'])}
                    <tr>
                        <td height="40"><span class="l-con">{$info['productname']}</span></td>
                        <td>成人</td>
                        <td>{$info['usedate']}</td>
                        <td>{$info['price']}</td>
                        <td>{$info['dingnum']}</td>
                        <td><i class="currency_sy">{Currency_Tool::symbol()}</i>{php}echo intval($info['price']) * intval($info['dingnum']);{/php}</td>

                    </tr>
                    {/if}
                    {if !empty($info['childprice']) && !empty($info['childnum'])}
                    <tr>
                        <td height="40"><span class="l-con">{$info['productname']}</span></td>
                        <td>儿童</td>
                        <td>{$info['usedate']}</td>
                        <td>{$info['childprice']}</td>
                        <td>{$info['childnum']}</td>
                        <td><i class="currency_sy">{Currency_Tool::symbol()}</i>{php}echo intval($info['childprice']) * intval($info['childnum']);{/php}</td>

                    </tr>
                    {/if}

                    {if !empty($info['oldprice']) && !empty($info['oldnum'])}
                    <tr>
                        <td height="40"><span class="l-con">{$info['productname']}</span></td>
                        <td>老人</td>
                        <td>{$info['usedate']}</td>
                        <td>{$info['oldprice']}</td>
                        <td>{$info['oldnum']}</td>
                        <td><i class="currency_sy">{Currency_Tool::symbol()}</i>{php}echo intval($info['oldprice']) * intval($info['oldnum']);{/php}</td>

                    </tr>
                    {/if}

                </table>
            </div>
        </div>

        <div class="product-msg">
            <h3 class="pm-tit"><strong class="ico02">联系人信息</strong></h3>
            <dl class="pm-list">
                <dt>联系人姓名：</dt>
                <dd>{$info['linkman']}</dd>
            </dl>
            <dl class="pm-list">
                <dt>手机号码：</dt>
                <dd>{$info['linktel']}</dd>
            </dl>
            {if !empty($info['linkemail'])}
            <dl class="pm-list">
                <dt>电子邮箱：</dt>
                <dd>{$info['linkemail']}</dd>
            </dl>
            {/if}
            <!--<dl class="pm-list">
                <dt>最晚到店时间：</dt>
              <dd>20:00</dd>
            </dl>-->
            {if !empty($info['remark'])}
            <dl class="pm-list">
                <dt>备注留言：</dt>
                <dd>{$info['remark']}</dd>
            </dl>
            {/if}
        </div><!--联系人信息-->
        {st:member action="order_tourer" orderid="$info['id']" return="tourer"}
        {if !empty($tourer) && $GLOBALS['cfg_write_tourer']==1}
        <div class="product-msg">
            <h3 class="pm-tit"><strong class="ico03">游客信息</strong></h3>
            <div class="table-msg">
                <table width="100%" border="0">
                    <tr>
                        <th width="30%" height="40" scope="col"><span class="l-con">姓名</span></th>
                        <th width="30%" scope="col">手机号</th>
                        <th width="40%" scope="col">证件号</th>

                    </tr>

                    {loop $tourer $t}
                    <tr>
                        <td height="40"><span class="l-con">{$t['tourername']}</span></td>
                        <td>{$t['mobile']}</td>
                        <td>{$t['cardnumber']}({$t['cardtype']})</td>

                    </tr>
                    {/loop}
                    {/st}

                </table>
            </div>
        </div>
        {/if}
        {if !empty($info['roombalancenum'])}
        <div class="product-msg">
            <h3 class="pm-tit"><strong class="ico04">单房差</strong></h3>
            <div class="table-msg">
                <table width="100%" border="0">
                    <tr>
                        <th width="30%" height="40" scope="col"><span class="l-con">单房差</span></th>
                        <th width="20%" scope="col">购买数量</th>
                        <th width="30%" scope="col">支付方式</th>
                        <th width="20%" scope="col">金额</th>
                    </tr>
                    <tr>
                        <td height="40">单房差</td>
                        <td height="40">{$info['roombalancenum']}</td>
                        <td>
                            {if $info['roombalance_paytype']==1}
                            预付
                            {else}
                            到店付
                            {/if}
                        </td>
                        <td><i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['roombalance']}</td>
                    </tr>


                </table>
            </div>
        </div>
        {/if}
        {st:member action="order_insurance" ordersn="$info['ordersn']" return="insurance"}
        {if !empty($insurance)}
        <div class="product-msg">
            <h3 class="pm-tit"><strong class="ico05">保险方案</strong></h3>
            <div class="table-msg">
                <table width="100%" border="0">
                    <tr>
                        <th width="30%" height="40" scope="col">保险名称</th>
                        <th width="10%" scope="col">保险期限</th>
                        <th width="10%" scope="col">单价</th>
                        <th width="25%" scope="col">数量</th>
                        <th width="25%" scope="col">总价</th>
                    </tr>

                    {loop $insurance $ins}
                    <tr>
                        <td height="40">{$ins['productname']}</td>
                        <td>
                            {$ins['period']}
                        </td>
                        <td>
                            {$ins['productprice']}
                        </td>
                        <td>{$ins['insurednum']}</td>
                        <td>
                            {$ins['payprice']}
                        </td>
                    </tr>
                    {/loop}


                </table>
            </div>
        </div>
        {/if}
        {st:member action="order_bill" orderid="$info['id']" return="bill"}
        {if !empty($bill)}
        <div class="product-msg">
            <h3 class="pm-tit"><strong class="ico06">发票信息</strong></h3>
            <div class="table-msg">
                <table width="100%" border="0">
                    <tr>
                        <th width="20%" height="40" scope="col">发票抬头</th>
                        <th width="20" scope="col">接收人</th>
                        <th width="20%" scope="col">发票明细</th>
                        <th width="40%" scope="col">邮寄地址</th>
                    </tr>

                    <tr>
                        <td height="40">{$bill['title']}</td>
                        <td>
                            {$bill['receiver']}
                        </td>
                        <td>
                            旅游费
                        </td>
                        <td>{$bill['province']} {$bill['city']} {$bill['address']}</td>

                    </tr>



                </table>
            </div>
        </div>
        {/if}



        <div class="product-msg">
            {if !empty($info['jifentprice']) || !empty($info['jifenbook']) || !empty($info['jifencomment'])}
            <h3 class="pm-tit"><strong class="ico03">积分优惠</strong></h3>
            {/if}



                {if !empty($info['jifentprice']) && $info['usejifen']}
                <dl class="pm-list">
                    <dt>积分抵现：</dt>
                    <dd>
                        <span class="pj"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['jifentprice']}</span>
                    </dd>
                </dl>
                {/if}

                {if !empty($info['jifenbook'])}
                <dl class="pm-list">
                    <dt>预订送分：</dt>
                    <dd>
                        <span class="pj">{$info['jifenbook']}</span>
                    </dd>
                </dl>
                {/if}
                {if !empty($info['jifencomment'])}
                    <dl class="pm-list">
                        <dt>评论送分：</dt>
                        <dd>
                            <span class="pj">{$info['jifencomment']}</span>
                        </dd>
                    </dl>
                {/if}


            {if $info['dingjin']>0}
            <dl class="pm-list">
                <dt>定金支付：</dt>

                <dd>
                    <span class="zj"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['payprice']}</span>

                </dd>
            </dl>
            {/if}



            <!--优惠券-->
            {if !empty($info['iscoupon'])}
            <dl class="pm-list">
                <dt>优惠券：</dt>
                <dd>
                    <span class="pj">-{Currency_Tool::symbol()}{$info['iscoupon']['cmoney']}（{$info['iscoupon']['name']}）</span>
                </dd>
            </dl>
            {/if}

            {if $info['usejifen']}
            <dl class="pm-list">
                <dt>使用积分：</dt>
                <dd>
                    <span class="nj">{$info['needjifen']}</span>
                    <span class="pj">-<i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['jifentprice']}</span>
                </dd>
            </dl>
            {/if}
        </div><!--积分优惠-->

        {if !empty($info['eticketno']) && Product::is_app_install('stourwebcms_app_supplierverifyorder')}
        <div class="product-msg">
            <h3 class="pm-tit"><strong class="ico04">消费码</strong></h3>
            <div class="consume-box">
                <div class="consume-num">短信消费码：<span>{$info['eticketno']}</span></div>
                <div class="consume-pic"><img src="/res/vendor/qrcode/make.php?param={$info['eticketno']}"></div>
            </div>
        </div>
        {/if}
        <div class="order-settle">
            {if $info['status']=='0'}
            <input type="button" class="load-btn" value="{$info['statusname']}" />
            {/if}
            {if $info['status']=='3'}
            <input type="button" class="cancel-dd-btn" value="{$info['statusname']}" />
            {/if}
            {if $info['status']=='4'}
            <input type="button" class="cancel-dd-btn" value="{$info['statusname']}" />
            {/if}
            {if $info['status']=='1'}
            <input type="button" class="now-fk-btn" value="{$info['statusname']}" />
            {/if}
            {if $info['status']=='2'}
            <input type="button" class="load-btn" value="{$info['statusname']}" />
            {/if}
            {if $info['status']=='5' && $info['ispinlun']!=1}
            <input type="button" class="now-dp-btn" value="立即点评" />
            {/if}
            <span>订单结算总额：<strong><i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['payprice']}</strong></span>
        </div>
    </div>
</div>
<script>
    $(function(){
        //立即付款
        $(".now-fk-btn").click(function(){
            var locateurl = "{$GLOBALS['cfg_basehost']}/member/index/pay/?ordersn={$info['ordersn']}";
            top.location.href = locateurl;
        })
        //立即点评
        $(".now-dp-btn").click(function(){
            var url = "{$GLOBALS['cfg_basehost']}/member/order/pinlun?ordersn={$info['ordersn']}";
            top.location.href = url;
        })
    });
</script>
</body>
</html>