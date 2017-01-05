<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS<?php echo $coreVersion;?></title>
    <?php echo  Stourweb_View::template('stourtravel/public/public_min_js');  ?>
    <?php echo Common::getScript("uploadify/jquery.uploadify.min.js,listimageup.js"); ?>
    <?php echo Common::getCss('uploadify.css','js/uploadify/'); ?>
    <?php echo Common::getCss('base.css,style.css,user_dialog_edit.css'); ?>
    <?php echo Common::getScript('jquery.validate.js');?>
    <?php echo Common::getScript("imageup.js"); ?>
</head>
<body style="background: white" >
<div class="s-main">
    <form action="user/ajax_save" method="post" id="product_fm">
    <div class="basic-con">
        <table>
            <tr><td class="tit">用户名：</td><td><?php if(empty($info)) { ?><input class="set-text-xh text_250" name="username" value=""/><label class="un-blank">*</label><?php } else { ?><?php echo $info['username'];?><?php } ?>
<input type="hidden" name="id" value="<?php echo $info['id'];?>"/></td></tr>
            <tr><td class="tit">密码：</td><td><input class="set-text-xh text_250" type="password" name="password"/><label class="un-blank">*</label></td></tr>
            <tr><td class="tit">权限：</td><td><select name="roleid">
                        <?php $n=1; if(is_array($roles)) { foreach($roles as $role) { ?>
                          <option value="<?php echo $role['roleid'];?>" <?php if($info['roleid']==$role['roleid']) { ?>selected="selected"<?php } ?>
><?php echo $role['rolename'];?></option>
                        <?php $n++;}unset($n); } ?>
                    </select></td></tr>
            <tr><td class="tit">备注：</td><td><textarea class="des" name="beizu"><?php echo $info['beizu'];?></textarea></td></tr>
            <tr>
                <td class="tit">头像：</td>
                <td>
                    <div id="pic_btn" class="btn-file mt-4">上传图片</div>
                    <img id="pic_upload" width="100px" height="100px" src="<?php echo $info['litpic'];?>"/>
                    <input id="hid_pic_upload" type="hidden" name="pic_upload">
                </td>
            </tr>
        </table>
    </div>
    <div class="save-con">
        <a href="javascript:;" class="confirm-btn">确定</a>
    </div>
    </form>
</div>
<script>
    var id="<?php echo $id;?>";
    $(function() {
        $("#product_fm").validate({
            rules:{
                'username':{
                    required:true
                },
                'password':{
                    required:true,
                    rangelength: [6, 16]
                }
            },
            messages:
            {
                'username':{
                    required:'必填'
                },
                'password':{
                    required:'必填',
                    rangelength:"密码长度为6-16位"
                }
            },
            submitHandler:function(form)
            {
                $.ajaxform({
                    url   :  SITEURL+"user/ajax_save",
                    method  :  "POST",
                    form  : "#product_fm",
                    dataType  :  "json",
                    success  :  function(data)
                    {
                        if(data.status)
                        {
                            ST.Util.responseDialog({},true);
                        }
                        else
                        {
                            ST.Util.showMsg('保存错误',5);
                        }
                    }});
            }
        });
        $(document).on('click','.confirm-btn',function(){
              $("#product_fm").submit();
        })
    })
        $('#pic_btn').click(function(){
            ST.Util.showBox('上传图片', SITEURL + 'image/insert_view', 430,340, null, null, document, {loadWindow: window, loadCallback: Insert});
            function Insert(result,bool){
                var len=result.data.length;
                for(var i=0;i<len;i++){
                    var temp =result.data[i].split('$$');
                    //Imageup.genePic(temp[0],"#pic_upload",".cover-div");
                    $('#pic_upload').attr('src',temp[0]);
                    $('#hid_pic_upload').val(temp[0]);
                }
            }
        });
</script>
</body>
</html>
