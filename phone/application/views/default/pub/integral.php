
<div class="integral integral_content" id="integral" data="total:{$jifen['userjifen']},exchange:{$jifen['exchange']}">
    <p class="tl">优惠政策<span></span></p>
    {if $jifen['isopen']}
    <p class="use" id="integral_obj">使用<strong><span id="jifen-need"></span></strong>积分，抵现<strong>¥<span id="jifen-price"></span></strong><i
            class="usejifen"></i></p>
    {/if}
{if St_Functions::is_normal_app_install('coupon')}
    <p class="block-item">
                    <span class="item coupon_type">
                        <strong>优惠券</strong>
                        {if empty($couponlist)}
                            <em class="type">暂无可用优惠券</em>
                        {/if}
                    </span>
        {if !empty($couponlist)}
        <span class="more-type fr use_coupon_btn">点击选择<i class="more-ico" ></i></span>
        {/if}
    </p>
{/if}

</div>

{if $jifen['isopen']}
<script>
    $('document').ready(function () {
        exchange();
        function exchange() {
            //初始化
            $('#usejifen').val(0);
            $('.usejifen').removeClass('on');
            var money;
            if($('.book_con_box').length>0){
                //套餐报价
                if($('.book_con_box').find('li.on').length!=1){
                    money = parseFloat($('.book_con_box').find('li:eq(0)').attr('data-jftp'));
                }else{
                    money = parseFloat($('.book_con_box').find('li.on').attr('data-jftp'));
                }
            }else{
                //单一报价
                money=parseFloat($('#sample-integral').attr('data-jftp'));
            }
            var obj = $('#integral').attr('data');
            obj = eval("({" + obj + "})");
            var useJf = obj.exchange * money;
            if (obj.total > useJf) {
                var $obj = $('#integral');
                $obj.find('#jifen-need').html(useJf);
                $obj.find('#jifen-price').html(money);
                $('#integral_obj').css('display', 'block');
            }
        }
        $('.book_con_box').find('li').click(function(){
            if(!$(this).hasClass('on')){
               var money=$(this).attr('data-jftp');
                if(parseFloat(money)>0){
                    $(this).addClass('on').siblings('li').removeClass('on');
                    exchange();
                }else{
                    $('#integral_obj').css('display', 'none');
                }
            }
        });
        //积分使用
        $('.usejifen').click(function(){
            var money;
            if($('.book_con_box').length>0){
                //套餐报价
                money = parseFloat($('.book_con_box').find('li.on').attr('data-jftp'));
            }else{
                //单一报价
                money=parseFloat($('#sample-integral').attr('data-jftp'));
            }
            var total=parseFloat($('.totalprice').html());
            if($(this).hasClass('on')){
                $('#usejifen').val(0);
                $(this).removeClass('on');
                $('.totalprice').html(total+money);
                $('.totalprice').attr('data-price',total+money);
            }else{
                if(total<money){
                  return;
                }
                $('#usejifen').val(1);
                $(this).addClass('on');
                $('.totalprice').html(total-money);
                $('.totalprice').attr('data-price',total-money);
            }
        });
    });
</script>
{/if}

<script>


    /**
     * 清除优惠券
     */
    function clear_coupon()
    {
        $('#couponid').val(0);
        $('.coupon-list li i').removeClass('use-label');
        $('.coupon-list li').attr('is_check',0);
        $('.use_coupon_btn').html('点击选择<i class="more-ico" ></i>');
        {if empty($couponlist)}
            $('.coupon_type').html('<strong>优惠券</strong><em class="type">暂无可用优惠券</em>');
            {else}
            $('.coupon_type').html('<strong>优惠券</strong>');
            {/if}
    }

</script>


