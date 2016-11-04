<!doctype html>
<html>
<head html_script=vVxsEC >
<meta charset="utf-8">
<title>订单详情-{$webname}</title>
    {Common::css('user.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js')}
</head>

<body>

{request "pub/header"}

  <div class="big">
  	<div class="wm-1200">

    	<div class="st-guide">
            <a href="{$cmsurl}">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;会员中心&nbsp;&nbsp;&gt;&nbsp;&nbsp;订单详情
      </div><!--面包屑-->

      <div class="st-main-page">

        {include "member/left_menu"}

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
            {if $info['typeid'] == 1}
                {include "member/order/line_detail"}
            {elseif $info['typeid']==2}
                {include "member/order/hotel_detail"}
            {elseif $info['typeid']==3}
                {include "member/order/car_detail"}
            {elseif $info['typeid']==5}
                {include "member/order/spot_detail"}
            {elseif $info['typeid']==8}
                {include "member/order/visa_detail"}
            {elseif $info['typeid']==13}
                {include "member/order/tuan_detail"}
            {elseif empty($issystem)}
                {include "member/order/tongyong_detail"}

            {/if}



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

                {if $info['typeid']==1}
                    {include "member/order/line_detail_more"}
                {/if}
                {if $receiver_address}
                <div class="product-msg">
                    <h3 class="pm-tit"><strong class="ico05">收货地址</strong></h3>
                    <div class="fiexd-address clear">{$receiver_address}</div>
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
      </div>

    </div>
  </div>
{request "pub/footer"}
<script>
    $(function(){
        //立即付款
        $(".now-fk-btn").click(function(){
            var locateurl = "{$GLOBALS['cfg_basehost']}/member/index/pay/?ordersn={$info['ordersn']}";
            location.href = locateurl;
        })
       //立即点评
       $(".now-dp-btn").click(function(){
          var url = "{$GLOBALS['cfg_basehost']}/member/order/pinlun?ordersn={$info['ordersn']}";
          location.href = url;
       })


    })
</script>
</body>
</html>
