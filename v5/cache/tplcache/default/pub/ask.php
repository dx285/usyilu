<?php echo Common::js('layer/layer.js');?><div class="tabcon-list"><div class="list-tit"><strong>我要咨询</strong></div><div class="st-consult"><ul><?php require_once ("/var/www/gogogous/taglib/question.php");$question_tag = new Taglib_Question();if (method_exists($question_tag, 'query')) {$quelist = $question_tag->query(array('action'=>'query','productid'=>$info['id'],'typeid'=>$typeid,'return'=>'quelist',));}?><?php $n=1; if(is_array($quelist)) { foreach($quelist as $que) { ?><li><dl class="ask"><dt>咨询问题</dt><dd><p class="bt"><?php echo $que['content'];?></p><p class="name"><span><?php echo $que['nickname'];?></span><span><?php echo Common::mydate('Y-m-d',$que['addtime']);?></span><span><?php echo Common::mydate('H:i',$que['addtime']);?></span></p></dd></dl><dl class="answer"><dt>客服回复</dt><dd><p class="txt"><?php echo $que['replycontent'];?></p></dd></dl></li><?php $n++;}unset($n); } ?></ul><div class="pagediv" style="text-align: center;display: none" data-quecount="<?php echo $row['plcount'];?>"  id="page"></div><div class="st-tj-question"><textarea name="question" id="question" cols="" placeholder="请填写你的问题" rows=""></textarea><div class="msg"><a class="tj-btn" href="javascript:;" data-productid="<?php echo $info['id'];?>" data-typeid="<?php echo $typeid;?>">提交</a><span><em>验证码：</em><input type="text" id="checkcode" style="padding-left: 5px" /><img src="<?php echo $cmsurl;?>captcha"  onClick="this.src=this.src+'?math='+ Math.random()" width="80" height="30" /></span><span><em>昵称：</em><span id="_c_u" style="line-height: 30px;height: 30px"></span></span></div></div></div></div><script>
    //提交问答
    $(".tj-btn").click(function(){
        var question = $("#question").val();
        var checkcode = $("#checkcode").val();
        var productid = $(this).attr('data-productid');
        var typeid = $(this).attr('data-typeid');
        var nickname = $("#nickname").val();
        if(question.length<5){
            layer.alert('<?php echo __("question_empty");?>', {
                icon: 5,
                title: '<?php echo __("notice");?>'
            })
            return false;
        }
        if(checkcode==''){
            layer.alert('<?php echo __("checkcode_empty");?>', {
                icon: 5,
                title: '<?php echo __("notice");?>'
            })
            return false;
        }
        $.ajax({
            type:'POST',
            url:SITEURL+'pub/ajax_add_question',
            data:{
                productid:productid,
                content:question,
                checkcode:checkcode,
                nickname:nickname,
                typeid:typeid,
                questype:0
            },
            success:function(data){
                if(data==1){
                    layer.alert('<?php echo __("checkcode_error");?>', {
                        icon: 5,
                        title: '<?php echo __("notice");?>'
                    })
                    //重新加载验证码
                    $("#imgcheckcode").attr('src',"<?php echo $cmsurl;?>captcha?"+Math.random());
                }else if(data==3){
                    layer.msg('<?php echo __("question_success");?>',{
                        icon:6,
                        time:1500
                    });
                    location.reload();
                }else{
                    layer.alert('<?php echo __("question_failure");?>', {
                        icon: 5,
                        title: '<?php echo __("notice");?>'
                    })
                }
            }
        })
    })
    //登陆状态
    $.ajax({
        type:"POST",
        url:SITEURL+"member/login/ajax_is_login",
        dataType:'json',
        success:function(data){
            if(data.status){
                $txt = '<span>'+data.user.nickname+'</span><input type="hidden" value="'+data.user.nickname+'" name="nickname" id="nickname" />';
            }else{
                $txt = '<input type="text" name="nickname" id="nickname" /><a href="<?php echo $cmsurl;?>member/login/">登录</a>';
            }
            $("#_c_u").html($txt);
        }
    })
</script>