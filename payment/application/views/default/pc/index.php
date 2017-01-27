<link href="/payment/public/css/pay.css" rel="stylesheet" media="screen" type="text/css" />
<div class="big">
    <div class="wm-1200">

        <div class="st-guide">
            <a href="/">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;在线支付
        </div><!--面包屑-->

        <div class="st-main-page">
            <div class="st-payment-way">
                <div class="payment-msg">
                    <div class="msg-tit">
                        <strong class="gfk">立即付款</strong>
                        <span>订单总额：<b><?php  echo Currency_Tool::symbol();  ?><?php echo $_GET['price'];?><?php echo $orderTotalPrice;?></b></span>
                    </div>
                    <div class="msg-list">
                        <ul>

                            <?php
                                $detailArr = explode(',', $info['remark']);
                                $orderBtn = $detailArr[2];
                                $orderairport = $detailArr[3];
                                $orderflightNum = $detailArr[4];
                                $orderzhuanpin = $detailArr[5];
                                $orderaddr = $detailArr[6];
                                $orderzipcode = $detailArr[7];
                                $orderdate = $detailArr[8];
                                $ordertime = $detailArr[9];
                                $orderCarNum = $detailArr[10];
                                $orderServiceNum = $detailArr[11];
                                $orderTotalPrice = $detailArr[12];

                            ?>
<!--                            <li><em>测试号：</em><a>--><?php //print_r(array_values($detailArr));?><!--</a></li>-->

                            <li><em>接送机选择：</em><a><?php echo $orderBtn;?></a></li>
                            <li><em>机场名称：</em><a><?php echo $orderairport;?></a></li>
                            <li><em>航班号：</em><a><?php echo $orderflightNum;?></a></li>
                            <li><em>专拼选择：</em><a><?php echo $orderzhuanpin;?></a></li>
                            <li><em>接送地址：</em><a><?php echo $orderaddr;?></a></li>
                            <li><em>接送邮编：</em><a><?php echo $orderzipcode;?></a></li>
                            <li><em>接送日期：</em><a><?php echo $orderdate;?></a></li>
                            <li><em>接送时间：</em><a><?php echo $ordertime;?></a></li>
                            <li><em>车辆数：</em><a><?php echo $orderCarNum;?></a></li>
                            <li><em>举牌接机服务数：</em><a><?php echo $orderServiceNum;?></a></li>
                            <li><em>总价：</em><a><?php echo $orderTotalPrice;?></a></li>


                            <li><em>订单号：</em><a><?php echo $info['ordersn'];?></a></li>
                            <li><em>产品名称：</em><a ><?php echo $info['productname'];?></a></li>
                            <li><em>产品编号：</em><?php echo $number;?></li>
                            <li><em>购买时间：</em><?php echo date('Y年m月d日 H:i:s')?></li>
                        </ul>
                    </div>
                </div><!-- 订单信息 -->
                <?php if(!empty($pay_method['online'])||!empty($pay_method['line'])):?>
                <div class="payment-con">
                    <h3>选择以下支付方式付款</h3>
                    <?php if(!empty($pay_method['online'])):?>
                    <div class="payment-line">
                        <dl>
                            <dt>线上支付</dt>
                            <dd>
                            <!-- 
                                <ul>
                                    <?php $i=1; foreach($pay_method['online'] as $k=>$v):?>
                                        <li data="<?php echo $v['id']; ?>" class="<?php if(isset($v['selected'])){ echo 'active';}?><?php if($i%5==0):?> mr_0<?php endif;?>">
                                            <span><img src="<?php echo $v['img'];?>" /></span>
                                            <?php if(isset($v['ext'])):?>
                                            <div class="txt"><?php echo $v['ext'];?></div>
                                            <?php endif;?>
                                        </li>
                                        <?php $i++;?>
                                    <?php endforeach;?>
                                </ul>
                                 -->
                                <form name="_xclick" action="https://www.paypal.com/uk/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="Sinousholding@gmail.com">
<input type="hidden" name="return" value="http://www.usyilu.com/payment/?ordersn=<?php echo $info['ordersn'];?>">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="item_name" value="usyilu.com Paypal - v3.0">
<input type="hidden" name="amount" value="<?php echo $_GET['price'];?>">
<input type="image" src="https://www.paypalobjects.com/zh_XC/C2/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal——最安全便捷的在线支付方式！">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>



                                 
                            </dd>
                        </dl>
                    </div>
                        <?php  endif; ?>
                        <?php if(!empty($pay_method['line'])):?>
                    <div class="payment-line">
                        <dl>
                            <dt>线下支付</dt>
                            <dd>
                                <ul>
                                    <?php foreach($pay_method['line'] as $v):?>
                                    <li data="<?php echo $v['id']; ?>" class="<?php if(isset($v['selected'])){ echo 'active';}?>"><span><img src="<?php echo $v['img'];?>" /></span></li>
                                    <?php endforeach;?>
                                </ul>
                            </dd>
                        </dl>
                    <div class="offline-sm">
                        <?php echo Common::C('cfg_pay_xianxia');?>
                    </div>
                    </div>
                    <?php  endif; ?>
                    <div class="payment-now-btn"><a  style="display: none" href="javascript:" class="error" id="st-payment-submit">立即付款</a></div>
                </div>
                <?php  endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="st-payment-back-box" id="st-payment-back-box" style="display: none">
    <div class="st-back-con">
        <h3>支付反馈<i class="close-button"></i></h3>
        <div class="payment-ts-con">
            <div class="payment-opp">
                <a href="/member/order/view?ordersn=<?php echo $info['ordersn'];?>"><dl class="cg">
                    <dt></dt>
                    <dd>查看订单详情</dd>
                </dl></a>
                <a href="javascript:" id="st-payment-back-error" class="close-button"><dl class="sb">
                    <dt></dt>
                    <dd>选择其他支付方式</dd>
                </dl></a>
            </div>
            <p class="ts">温馨提示：请您在新打开的网上银行页面进行支付，支付完成前请不要关闭该窗口。</p>
        </div>
    </div>
</div><!-- 支付返回框 -->
<script>
    var param={
        ordersn:'<?php echo $info['ordersn'];?>',
        <?php
          if($__token__){
          echo Common::C('token_name').':'."'{Common::C('token_name')}'";
          }
        ?>
    };
</script>
<script src="public/js/index.js"></script>