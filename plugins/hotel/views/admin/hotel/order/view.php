<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
<title>订单详情</title>
    {template 'stourtravel/public/public_min_js'}
    {php echo Common::getCss('style.css,base.css,base2.css'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,product_add.js,choose.js,imageup.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }

</head>

<body>
	<table class="content-tab">
    <tr>
    <td width="119px" class="content-lt-td"  valign="top">
     {template 'stourtravel/public/leftnav'}
    <!--右侧内容区-->
    </td>
     <td valign="top" class="content-rt-td ">

          <form method="post" id="frm" name="frm">
          <div class="manage-nr">
              <div class="w-set-tit bom-arrow" id="nav">
                  <span class="on"><s></s>基础信息</span>
                  <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
              </div>

               <!--基础信息开始-->
                  <div class="product-add-div">
                      <div class="add-class">
                          <dl class="list_dl">
                              <dt class="wid_90">产品名称：</dt>
                              <dd>
                                  {$info['productname']}
                              </dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">出发日期：</dt>
                              <dd>{$info['usedate']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">订单数量：</dt>
                              <dd>{$info['dingnum']}</dd>
                          </dl>


                          <dl class="list_dl">
                              <dt class="wid_90">订单单价：</dt>
                              <dd><input type="text" class="set-text-xh text_200 mt-4" name="price" id="price" value="{$info['price']}" ></dd>
                          </dl>

                          {if $info['usejifen']}
                          <dl class="list_dl">
                              <dt class="wid_90">积分抵现：</dt>
                              <dd>{$info['jifentprice']}</dd>
                          </dl>
                          {/if}
                          {if $info['cmoney']}
                          <dl class="list_dl">
                              <dt class="wid_90">优惠券优惠：</dt>
                              <dd>{$info['cmoney']}</dd>
                          </dl>
                          {/if}

                          <dl class="list_dl">
                              <dt class="wid_90">订单总价：</dt>
                              <dd>{$info['totalprice']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">实付金额：</dt>
                              <dd>{$info['payprice']}</dd>
                          </dl>

                          <dl class="list_dl">
                              <dt class="wid_90">支付方式：</dt>
                              <dd>{if $info['paytype']==1}
                                  <span class="fk-way">全款支付</span>

                                  {elseif $info['paytype']==2}
                                  <span class="fk-way">定金支付</span>
                                  {elseif $info['paytype']==3}
                                  <span class="fk-way">二次确认</span>
                                  {else}
                                  <span class="fk-way">线下支付</span>
                                  {/if}</dd>
                          </dl>



                          <dl class="list_dl">
                              <dt class="wid_90">客户姓名：</dt>
                              <dd>{$info['linkman']}</dd>
                          </dl>

                          <dl class="list_dl">
                              <dt class="wid_90">联系电话：</dt>
                              <dd>{$info['linktel']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">联系邮箱：</dt>
                              <dd>{$info['linkemail']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">身份证号码：</dt>
                              <dd>{$info['linkidcard']}</dd>
                          </dl>
                          {if isset($tourer)}
                          {loop $tourer $r}
                          <dl class="list_dl">
                              <dt class="wid_90">游客{$n}：</dt>
                              <dd style="height: auto">
                                  <ul>
                                      <li>姓名:{$r['tourername']}</li>
                                      <li>性别:{$r['sex']}</li>
                                      <li>手机:{$r['mobile']}</li>
                                      <li>证件:{$r['cardtype']}</li>
                                      <li>证件号码:{$r['cardnumber']}</li>
                                  </ul>

                              </dd>
                          </dl>
                          {/loop}
                          {/if}
                          <dl class="list_dl">
                              <dt class="wid_90">预订说明：</dt>
                              <dd style="height: auto"><textarea name="remark" style="width:400px;height:150px;border:1px solid #dcdcdc">{$info['remark']}</textarea></dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">订单状态：</dt>
                              <dd>

                                  {loop $orderstatus $k $v}
                                  <input name="status" type="radio" class="checkbox" value="{$k}" {if $info['status']==$k}checked="checked"{/if}  />{$v}
                                  {/loop}
                              </dd>
                          </dl>
                      </div>
                  </div>

                  <div class="opn-btn">
                      <input type="hidden" id="id" name="id" value="{$info['id']}">
                      <input type="hidden" id="typeid" name="typeid" value="{$typeid}">
                      <a class="normal-btn ml-20" id="btn_save" href="javascript:;">保存</a>
                  </div>

          </div>
        </form>
    </td>
    </tr>
    </table>

	<script>

	$(document).ready(function(){

        $("#nav").find('span').click(function(){

            Product.changeTab(this,'.product-add-div');//导航切换
        })
        $("#nav").find('span').first().trigger('click');


        $("#btn_save").click(function(){

            $.ajaxform({
                url   :  SITEURL+"hotel/admin/order/ajax_save",
                method  :  "POST",
                form  : "#frm",
                dataType:'json',
                success  :  function(data)
                {
                    if(data.status)
                    {
                        ST.Util.showMsg('保存成功!','4',2000);
                    }
                }});
        })
    });



    </script>

</body>
</html>
