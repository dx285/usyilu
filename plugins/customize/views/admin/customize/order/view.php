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
                              <dt class="wid_90">联系人：</dt>
                              <dd>
                                  {$info['contactname']}
                              </dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">性别：</dt>
                              <dd>{$info['sex']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">目的地：</dt>
                              <dd>{$info['dest']}</dd>
                          </dl>

                          <dl class="list_dl">
                              <dt class="wid_90">出发时间：</dt>
                              <dd>{php echo Common::myDate('Y-m-d',$info['starttime']);}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">旅游天数：</dt>
                              <dd>{$info['days']}</dd>
                          </dl>

                          <dl class="list_dl">
                              <dt class="wid_90">出发地：</dt>
                              <dd>{$info['startplace']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">成人数量：</dt>
                              <dd>{$info['adultnum']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">儿童数量：</dt>
                              <dd>{$info['childnum']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">飞行等级：</dt>
                              <dd>{$info['planerank']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">酒店等级：</dt>
                              <dd>{$info['hotelrank']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">房型：</dt>
                              <dd>{$info['room']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">用餐形式：</dt>
                              <dd>{$info['food']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">合适联系时间：</dt>
                              <dd>{$info['contacttime']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">联系电话：</dt>
                              <dd>{$info['phone']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">email：</dt>
                              <dd>{$info['email']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">地址：</dt>
                              <dd>{$info['address']}</dd>
                          </dl>
                          <dl class="list_dl">
                              <dt class="wid_90">预订说明：</dt>
                              <dd style="height: auto;margin-left:90px;">{$info['content']}</dd>
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
                url   :  SITEURL+"customize/admin/order/ajax_save",
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
