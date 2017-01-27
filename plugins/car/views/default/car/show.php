<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}" />
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}" />
    {/if}
    {include "pub/varname"}
    {Common::css_plugin('car.css','car')}
    {Common::css('base.css,extend.css,stcalendar.css')}
    {Common::js('jquery.min.js,base.js,common.js')}
</head>
<body>
{request "pub/header"}
{if St_Functions::is_normal_app_install('coupon')}
{request 'coupon/float_box'}
{/if}
  <div class="big">
  	<div class="wm-1200">
      <div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&gt;<a href="/cars/">{$channelname}</a>&gt;
            {loop $predest $dest}
             <a href="/cars/{$dest['pinyin']}/">{$dest['kindname']}{$channelname}</a>&gt;
            {/loop}
            {$info['title']}
      </div><!--面包屑-->
    
      <div class="st-main-page">

      	<div class="st-car-show">
          <div class="carshow-tw">
            <div class="focus-slide">
              <div class="imgnav" id="imgnav"> 
                <div id="img">
                    {loop $info['piclist'] $pic}
                    <img src="{Common::img($pic[0],460,312)}"/>
                    {/loop}

                  <div id="front" title="上一张"><a href="javaScript:void(0)" class="pngFix"></a></div>
                  <div id="next" title="下一张"><a href="javaScript:void(0)" class="pngFix"></a></div>
                </div>
                <div id="cbtn">
                  <i class="picSildeLeft"><img src="{$GLOBALS['cfg_public_url']}images/picSlideLeft.gif"/></i>
                  <i class="picSildeRight"><img src="{$GLOBALS['cfg_public_url']}images/picSlideRight.gif"/></i>
                  <div id="cSlideUl">
                    <ul>
                        {loop $info['piclist'] $pic}
                           <li><img src="{Common::img($pic[0],90,61)}"/></li>
                        {/loop}
                    </ul>
                  </div>
                </div> 
              </div>
            </div>
            <div class="cp-show-msg">
              <div class="hs-title">
              	<h1>{$info['title']}
                    {loop $info['iconlist'] $icon}
                    <img src="{$icon['litpic']}" />
                    {/loop}
                </h1>
              </div>
              
              <div class="price">
                  {if !empty($info['price'])}
                    <span>
                    	<p class="price-lable">产品价格：</p>
                    	<i class="currency_sy">{Currency_Tool::symbol()}</i>
                    	<input type="text" readonly class="total_price" value={$info['price']} />
                    </span>
                    {loop $info['attrlist'] $attr}
                    	{if $attr['attrname'][0] == "-"}
                    		{if  $attr['attrname'][1] == "1"}
			                    <span>
			                    	<p class="price-lable">举牌接机价格：</p>
			                    	<i class="currency_sy">{Currency_Tool::symbol()}</i>
			                    	<input type="text" readonly class="total_price" value={$attr['attrname']} />
			                    </span>
			                {/if}
                    		{if  $attr['attrname'][1] == "2"}
			                    <span>
			                    	<p class="price-lable">儿童座椅价格：</p>
			                    	<i class="currency_sy">{Currency_Tool::symbol()}</i>
			                    	<input type="text" readonly class="total_price" value={$attr['attrname']} />
			                    </span>
			                {/if}
		                {/if}
                    {/loop}
                  {else}
                    <span>电询</span>
                  {/if}
              </div>
              <form  id="orderfrm" method="post" action="{$GLOBALS['cfg_basehost']}/cars/book">
	              <div class="sl">
	              	<span>销量：{$info['sellnum']}</span><s>|</s><span class="myd">满意度：{if $info['satisfyscore']}{$info['satisfyscore']}%{/if}</span><s>|</s><span>推荐：{$info['recommendnum']}</span>
	              </div>
	              <div class="sell-point"><span>推荐理由: </span>{$info['sellpoint']}</div>
	
	              <ul class="msg-ul">
	              	<li><em>产品编号：</em><p>{$info['series']}</p></li>
	                <li><em>汽车车型：</em><p>{$info['carkindname']}</p></li>
	                <li><em>乘客容量：</em><p>{$info['maxseatnum']}</p></li>
	                <li><em>行李数量：</em><p>{$info['usedyears']}</p></li>
	                <li><em>咨询电话：</em><p>{$info['phone']}</p></li>
	                <li class="mb_0"><em>付款方式：</em>
	                    <p>
	                        {php $paymethod = Product::get_paytype_list();}
	                        {loop $paymethod $method}
	                        <img src="{$GLOBALS['cfg_public_url']}images/{$method['ico']}" />
	                        {/loop}
	                    </p>
	                </li>
	              </ul>
	
	              <div class="car-info-box">
	                    <div class="car-price-box control-box">
	                        <p class="text" id="car-or-person">车辆数: </p>
	                        <!--                      <b id="carPrice" style="visibility: hidden;">{$info['price']}</b>-->
	                        <span class="add-btn">-</span>
	                        <input type="text" id="dingnum" name="dingnum" class="number-text" value="1" readonly/>
	                        <span class="sub-btn">+</span>
	                    </div>
	
						<div class="car-price-box control-box" id="jupai-control-box">
	                        <p class="text" id="car-or-person">举牌接机: </p>
	                        <!-- Slide THREE -->
							<div class="slideThree">	
								<input type="checkbox" value="None" id="slideThree" name="check" />
								<label for="slideThree"></label>
							</div>
	                    </div>
	
	                    <div class="car-extra-service-box service-control-box">
	                        <p class="text">儿童座椅: </p>
	                        <!-- <b id="jupai" >50</b> -->  
	                        <span class="add-btn">-</span> 
	                        <input type="text" id="serviceNum" name="childnum" class="child-number-text" value="0" readonly/>
	                        <!--                      <input type="checkbox" id="serviceNum" name="dingnum" class="number-text"/>-->
	                        <!-- <span class="service-sub-btn" id="service-sub-btn">+</span> -->
	
	                        <span class="sub-btn">+</span>
	                    </div>
	
	                    <div class="car-order-update-form">
	                    <!------------------------->
	                    <!-- 在这里设置各项服务的单价 -->
	                    	<input type="hidden" class=""  name="pricePerCar"  value="200" data-id="0" />
	                    	<input type="hidden" class=""  name="pricePerGuest"  value="30" data-id="0" />
	                    	<input type="hidden" class=""  name="pricePerChild"  value="8" data-id="0" />
	                    	<input type="hidden" class=""  name="pricePai"  value="20" data-id="0" />
	                    <!------------------------->
	                    <!------------------------->
	                        <input type="hidden" class=""  name="test"  value="1234"  data-id="0" />
	                        <input type="hidden" class=""  id="orderBtn" name="orderBtn"  value="<?php echo $_POST['orderBtn']; ?>"  data-id="0" />
	                        <input type="hidden" class=""  name="orderflightNum"  value={$orderflightNum} />
	                        <input type="hidden" class=""  name="orderairport"  value={$orderairport} data-id="0" />
	                        <input type="hidden" class="orderzhuanpin" id="orderzhuanpin" name="orderzhuanpin"  value={$orderzhuanpin} data-id="0" />
	                        <input type="hidden" class=""  name="orderaddr"  value={$orderaddr} data-id="0" />
	                        <input type="hidden" class=""  name="orderzipcode"  value={$orderzipcode}  data-id="0" />
	                        <input type="hidden" class=""  name="usedate"  value={$orderdate}  data-id="0" />
	                        <input type="hidden" class=""  name="orderdate"  value={$orderdate}  data-id="0" />
	                        <input type="hidden" class=""  name="ordertime"  value={$ordertime}  data-id="0" />
	                        <input type="hidden" id="productid" name="productid" value="{$info['id']}"/>
	                        <input type="hidden" id="suitid" name="suitid" value="{$suit['id']}"/>
	                        <input type="hidden"  class="total_price" id="total_price" value={$info['price']} />
	                        <input type="submit" value="预订" name="bookBtn" class="car-order-btn2" onClick="">
		                    </div>
		          </div>
              </form>
            </div>


          </div>

          <div class="carshow-con">
          	<div class="tabnav-list">
<!--            	<span class="on">套餐</span>-->
                {st:detailcontent action="get_content" pc="1" typeid="$typeid" productinfo="$info" return="carcontent"}
                    {loop $carcontent $row}
                    <span>{$row['chinesename']}</span>
                    {/loop}
                {/st}
<!--                <span>客户评价</span>-->
<!--                <span>我要咨询</span>-->
            </div><!--酒店导航-->
            <div class="tabbox-list">
            	
                <div class="tabcon-list">

                    <div class="car-typetable">
                        <table width="100%" border="0">

                           {st:car action="suit_type" row="8" productid="$info['id']" return="typelist"}
                            {loop $typelist $type}
<!---->
<!---->
<!---->
<!---->
<!--                                </tr>-->
<!--                                {st:car action="suit" row="10" productid="$info['id']" suittypeid="$type['id']" return="suitlist"}-->
<!--                                    {loop $suitlist $suit}-->
<!--                                        <tr>-->
<!--                                            <td height="40"><strong class="type-tit">{$suit['title']}</strong></td>-->
                                            <td align="center" hidden><span class="date" id="bookSuit" data-suitid="{$suit['id']}" data-productid="{$info['id']}">选择日期</span></td>
<!--                                            <td align="center">{$suit['unit']}</td>-->
<!--                                            <td align="center"><span class="price">{if !empty($suit['price'])}<i class="currency_sy">{Currency_Tool::symbol()}</i>{$suit['price']}起{else}电询{/if}</span></td>-->
<!--                                            <td>-->
<!--                                                {if $suit['paytype']==1}-->
<!--                                                    <span class="fk-way">全款支付</span>-->
<!---->
<!--                                                {elseif $suit['paytype']==2}-->
<!--                                                    <span class="fk-way">定金支付</span>-->
<!--                                                {elseif $suit['paytype']==3}-->
<!--                                                    <span class="fk-way">二次确认</span>-->
<!--                                                {/if}-->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                {if $suit['jifenbook']}-->
<!--                                                    <span class="s-jf">{$suit['jifenbook']}分<i></i></span>-->
<!--                                                {/if}-->
<!--                                                {if $suit['jifencomment']}-->
<!--                                                    <span class="p-jf">{$suit['jifencomment']}分<i></i></span>-->
<!--                                                {/if}-->
<!--                                                {if $suit['jifentprice']}-->
<!--                                                    <span class="d-jf">{$suit['jifentprice']}元<i></i></span>-->
<!--                                                {/if}-->
<!--                                            </td>-->
<!--                                            <td><a class="booking-btn is_login_order" href="javascript:;">预订</a></td>-->
<!--                                            <script >-->
<!---->
<!--                                            </script>-->
<!--<!--                                            <form id="jiejiForm" name="cusfrm" method="get" action="" >-->
<!---->
<!--<!--                                            </form>-->
<!--                                        </tr>-->
                                        <tr style="display: none">
                                            <td colspan="7">
                                                <div class="cartype-nr">
                                                    {$suit['content']}
                                                </div>
                                            </td>
                                        </tr>
                                    {/loop}
                            {/loop}
                        </table>
                    </div>


              </div>
                {loop $carcontent $hotel}
                <div class="tabcon-list">
                    <div class="list-tit"><strong>{$hotel['chinesename']}</strong></div>
                    <div class="list-txt">
                        {$hotel['content']}
                    </div>
                </div>
                {/loop}

<!--                {include "pub/comment"}-->
<!--                {include "pub/ask"}-->
              
            </div>
          </div>
        </div>
        <div class="st-sidebox">
            {st:right action="get" typeid="$typeid" data="$templetdata" pagename="show"}
        </div><!--边栏模块-->
      </div>
    
    </div>
  </div>
  <div id="calendar"></div>
  <input type="hidden" id="productid" value="{$info['id']}"/>
  <input type="hidden" id="suitid" value=""/>

{request "pub/footer"}
{request "pub/flink"}
{Common::js('floatmenu/floatmenu.js')}
{Common::css('/res/js/floatmenu/floatmenu.css',0,0)}
{Common::js('SuperSlide.min.js,template.js')}
<script src="/res/js/scorll.img.js"></script>
{Common::js('layer/layer.js')}

<script>
    var orderServiceNum = 1;

    $(document).ready(function() {

        console.log("转拼车: "+document.getElementById('orderzhuanpin').value);
        if(document.getElementById('orderzhuanpin').value.trim()=='拼车'){
            console.log("选择拼车");
            $('#car-or-person').text('人数：');
            $("#jupai-control-box").html("");
        }else{
            console.log("选择专车 不动");
        }

        // Set values 
        $("#suitid").val("{$suit['id']}");
        var orderBtn = '<?php echo $_POST['orderBtn'];?>';
        $("#orderBtn").val(orderBtn);
        

    }); 

    function showDetailPage(form){
        console.log("下订单");
        var suitid = $('#bookSuit').attr('data-suitid');
        var productid =$('#bookSuit').attr('data-productid');

        var orderflightNum = '<?php echo $_POST['orderflightNum'];?>';
        var orderairport = '<?php echo $_POST['orderairport'];?>';
        var orderzhuanpin = '<?php echo $_POST['orderzhuanpin'];?>';
        console.log("专车还是拼车？ "+orderzhuanpin);
        var orderaddr = '<?php echo $_POST['orderaddr'];?>';
        var orderzipcode = '<?php echo $_POST['orderzipcode'];?>';
        var orderdate = '<?php echo $_POST['orderdate'];?>';
        var ordertime = '<?php echo $_POST['ordertime'];?>';
        var orderBtn = '<?php echo $_POST['orderBtn'];?>';
        
        var orderDingNum = document.getElementById('dingnum').value;
        console.log("车辆数/人数: "+orderDingNum);
        var orderServiceNum = document.getElementById('serviceNum').value;
        console.log("儿童数: "+orderServiceNum);
        console.log("举牌接机？ "+jupai);

        /* 
         * 
         * 
         * 在这里设置各个服务的单价！！！！
         */
          // 包车：每辆车单价
          // 拼车：每个人单价
          // 儿童座椅单价
          // 举牌接机价格
		/*
         * 
         * 
         */  
         var price = "&="+"&pricePerChild="+pricePerChild.toString();
        if(orderzhuanpin.includes("专")) { // 专车服务 - 价格设置
            var jupai = document.getElementById("slideThree").checked;
            console.log("举牌接机? "+jupai);
			price += "&pricePerDing="+pricePerCar;
			jupai = jupai?1:0;
			price += "&pricePai="+(pricePai*jupai).toString();
        } else { // 拼车服务 - 价格设置
			price += "&pricePerDing="+pricePerGuest;
			price += "&pricePai=0";
        }

        var totalPrice = jupaiServiceChinese;
        console.log("orderTotalPrice: "+document.getElementById('total_price').value);
        var orderTotalPrice = document.getElementById('total_price').value;

        console.log("orderflightNum: "+ orderflightNum);
        $("#productid").val(productid);
        $("#suitid").val(suitid);

        var url = "{$GLOBALS['cfg_basehost']}"+'/cars/book/?productid='+productid+'&suitid='+suitid+'&usedate='+orderdate+'&orderflightNum='+orderflightNum+'&orderairport='+orderairport+'&ordertime='+ordertime+'&orderzhuanpin='+orderzhuanpin+'&orderaddr='+orderaddr+'&orderzipcode='+orderzipcode+'&orderdate='+orderdate+'&orderBtn='+orderBtn+'&orderDingNum='+orderDingNum+'&orderServiceNum='+orderServiceNum+price;
        console.log("订单url: "+url);
        window.location.href = url;

        //$(form).attr('action', url);
    }

</script>

<script>


    var p = {$info['price']};
    var servicePrice = 50;
    p = Number(p);
    console.log("p: "+p);

    //Test 
    /*
    $("#slideThree").change(function(){
		alert("举牌接机："+ document.getElementById("slideThree").checked);
    })
    */

    //数量减少
    $(".control-box").find('.add-btn').click(function(){

        var obj = $(this).parent().find('.number-text');
        var cur = Number(obj.val());
        if(document.getElementById('orderzhuanpin').value.trim()=='拼车'){
            if($("#serviceNum").val()>cur-1)
        		$("#serviceNum").val((cur-1).toString());
        }
        if(cur>1){
            cur = cur-1;
            obj.val(cur);
            get_total_price(-1);
        }

    })
    //数量添加
    $(".control-box").find('.sub-btn').click(function(){

        var obj = $(this).parent().find('.number-text');
        var cur = Number(obj.val());
        if(cur <=9){
            cur++;
            obj.val(cur);
            get_total_price(1);
        }
    })

    //儿童数量减少
    $(".service-control-box").find('.add-btn').click(function(){

        var obj = $(this).parent().find('.child-number-text');
        var cur = Number(obj.val());
        if(cur>0){
            cur = cur-1;
            obj.val(cur);
            //get_total_price(-1);
        }

    })
    //儿童数量添加
    $(".service-control-box").find('.sub-btn').click(function(){

        var obj = $(this).parent().find('.child-number-text');
        var cur = Number(obj.val());
        var max = 0;
        if(document.getElementById('orderzhuanpin').value.trim()=='拼车'){
        	max = Number($("#dingnum").val()); }
        else { max = 7; } 
        if(cur < max-1){
            cur++;
            obj.val(cur);
            //get_total_price(1);
        }
    })

    //获取总价
    function get_total_price(bool){
        //选择积分的时候不重置优惠券
        var sumBefore = Number($(".total_price").val());

        console.log('dingnum: '+document.getElementById('dingnum').value);

        //var price = Number($("#carPrice").val());
        var price = p;
        console.log('dingnum: '+document.getElementById('dingnum').value);

        var dingnum = Number($("#dingnum").val());


        //price = price * dingnum;
        console.log("总价: "+price);

        var sum = sumBefore + bool*p;
        $(".total_price").val(sum);

    }

    //是否选择举牌服务
    var jupaiServiceBool = false;
    var jupaiServiceChinese = '否';
    $('#service-sub-btn').click(function () {
        //console.log("举牌服务click");
        var jupaiPrice = Number($('#jupai').text());
        //console.log("举牌价: "+jupaiPrice);
        var sumBefore = Number($(".total_price").val());
        var sum = 0;
        if(jupaiServiceBool){
            jupaiServiceBool = false;
            //console.log("举牌服务: "+jupaiServiceBool);
            sum = sumBefore -jupaiPrice;
            jupaiServiceChinese = '否';
            $(this).text("+");
            //$(this).attr('color','#fff');
        }else{
            jupaiServiceBool = true;
            //console.log("举牌服务: "+jupaiServiceBool);
            sum = sumBefore + jupaiPrice;
            jupaiServiceChinese = '是';
            $(this).text("-");
        }
        $(".total_price").val(sum);

    });







</script>

<script type="text/javascript">


    $(document).ready(function(){
        //内容切换
        $.floatMenu({
            menuContain : '.tabnav-list',
            tabItem : 'span',
            chooseClass : 'on',
            contentContain : '.tabbox-list',
            itemClass : '.tabcon-list'
        });
        //套餐点击
        $(".type-tit").click(function(){
            $(this).parents('tr').first().next().toggle();
        })
        $(".type-tit").first().trigger('click');
        //套餐日历价格显示
        $('.date').click(function(){
//            if(!is_login_order()){
//                return false;
//            }
            var suitid = $(this).attr('data-suitid');
            var productid =$(this).attr('data-productid');
            $("#productid").val(productid);
            $("#suitid").val(suitid);
            get_calendar(suitid);
        })
        //上一月
        $('body').delegate('.prevmonth,.nextmonth','click',function(){
            var year = $(this).attr('data-year');
            var month = $(this).attr('data-month');
            var suitid = $(this).attr('data-suitid');
            get_calendar(suitid,year,month);
        })
        //预订
        $(".booking-btn").click(function(){
//            if(!is_login_order()){
//                return false;
//            }
            $(this).parents('tr').first().find('.date').trigger('click');
        })
    });
    function choose_day(day){
        var productid = $("#productid").val();
        var suitid = $("#suitid").val();
//        var url = "{$GLOBALS['cfg_basehost']}"+'/cars/book/?productid='+productid+'&suitid='+suitid+'&usedate='+day;
        var url = "{$GLOBALS['cfg_basehost']}"+'/cars/book/?productid='+productid+'&suitid='+suitid+'&usedate='+day;

        window.location.href = url;
    }
    function show_calendar_box(){
        layer.closeAll();
        layer.open({
            type: 1,
            title:'',
            area: ['480px', '430px'],
            shadeClose: true,
            content: $('#calendar')
        });
    }
    function get_calendar(suitid,year,month){
        //加载等待
        layer.open({
            type: 3,
            icon: 2
        });
        var url = SITEURL+'car/dialog_calendar';
        if($("#calendar").data(suitid)!=undefined && year==undefined){
            $("#calendar").html($("#calendar").data(suitid));
            show_calendar_box();
        }else{
            $.post(url,{suitid:suitid,year:year,month:month},function(data){
                if(data){
                    $("#calendar").html(data);
                    $("#calendar").data(suitid,data);
                    show_calendar_box();
                }
            })
        }
    }
</script>
<!--{include "member/login_order"}-->
</body>

</html>