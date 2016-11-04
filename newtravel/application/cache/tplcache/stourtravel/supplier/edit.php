<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS<?php echo $coreVersion;?></title>
    <?php echo  Stourweb_View::template('stourtravel/public/public_min_js');  ?>
    <?php echo Common::getCss('style.css,base.css,base2.css'); ?>
    <?php echo Common::getScript("jquery.validate.js"); ?>
    <?php echo Common::getScript("uploadify/jquery.uploadify.min.js,choose.js,product_add.js,imageup.js"); ?>
    <?php echo Common::getCss('uploadify.css','js/uploadify/'); ?>
   <style>
        .error{
            color:red;
            padding-left:5px;
        }
        .hide{
            display: none;
        }
    </style>
</head>
<body style="background-color: #fff">
<table class="content-tab">
    <tr>
        <td width="119px" class="content-lt-td" valign="top">
            <?php echo  Stourweb_View::template('stourtravel/public/leftnav');  ?>
            <!--右侧内容区-->
        </td>
        <td valign="top" class="content-rt-td">
            <form id="frm" name="frm">
            <div id="product_grid_panel" class="manage-nr">
                <div class="w-set-con">
                    <div class="w-set-tit bom-arrow" id="nav">
                        <span class="on" id="basic"><s></s>基础信息</span>
                        <span data-id="jieshao"><s></s>介绍</span>
                        <span data-id="tupian"><s></s>图片</span>
                        <span data-id="extend"><s></s>扩展</span>
                        <?php if(!empty($qua)) { ?>
                        <span data-id="qualify"><s></s>资质验证</span>
                        <?php } ?>
                        <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
                    </div>
                </div>
                        <div class="product-add-div" >
                            <div class="add-class">
                            <dl>
                                <dt>所属分类：</dt>
                                <dd>
                                    <select name="kindid" id="">
                                        <option value="0">默认</option>
                                        <?php $n=1; if(is_array($kind)) { foreach($kind as $v) { ?>
                                        <option value="<?php echo $v['id'];?>" <?php if($v['id']==$info['kindid'] ) { ?>selected="selected"<?php } ?>
><?php echo $v['kindname'];?></option>
                                        <?php $n++;}unset($n); } ?>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt>供应商名称：</dt>
                                <dd>
                                    <input type="text" class="set-text-xh mt-4 w400" name="suppliername" id="suppliername" value="<?php echo $info['suppliername'];?>" >
                                </dd>
                            </dl>
                            <dl>
                                <dt>供应商类型：</dt>
                                <dd>
                                    <select name="suppliertype">
                                        <option value="0" <?php if($info['suppliertype']==0 ) { ?>selected="selected"<?php } ?>
>平台供应商</option>
                                        <option value="1" <?php if($info['suppliertype']==1 ) { ?>selected="selected"<?php } ?>
>第三方供应商</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">认证状态：</dt>
                                <dd>
                                    <select name="verifystatus">
                                        <option value="0" <?php if($info['verifystatus']==0) { ?>selected="selected"<?php } ?>
>未认证</option>
                                        <option value="1" <?php if($info['verifystatus']==1) { ?>selected="selected"<?php } ?>
>审核中</option>
                                        <option value="2" <?php if($info['verifystatus']==2) { ?>selected="selected"<?php } ?>
>未通过</option>
                                        <option value="3" <?php if($info['verifystatus']==3) { ?>selected="selected"<?php } ?>
>已认证</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">联系人：</dt>
                                <dd><input type="text" class="set-text-xh text_200 mt-4"  name="linkman" id="linkman" value="<?php echo $info['linkman'];?>" ></dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">座机：</dt>
                                <dd><input type="text" class="set-text-xh text_200 mt-4" name="telephone" id="telephone" value="<?php echo $info['telephone'];?>" ></dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">手机：</dt>
                                <dd><input type="text" class="set-text-xh text_200 mt-4" name="mobile" id="mobile" value="<?php echo $info['mobile'];?>" ></dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">传真：</dt>
                                <dd><input type="text" class="set-text-xh text_200 mt-4" name="fax" id="fax" value="<?php echo $info['fax'];?>" ></dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">QQ：</dt>
                                <dd><input type="text" class="set-text-xh text_200 mt-4" name="qq" id="qq" value="<?php echo $info['qq'];?>" ></dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">地址：</dt>
                                <dd><input type="text" class="set-text-xh w400 mt-4" name="address" id="address" value="<?php echo $info['address'];?>" ></dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">坐标：</dt>
                                <dd>
                                    <span class="fl">经度(Lng):</span>
                                    <input type="text" name="lng" id="lng"  class="set-text-xh text_150 mt-2 ml-10 mr-30 w300" value="<?php echo $info['lng'];?>" />
                                    <span class="fl">纬度(Lat):</span>
                                    <input type="text" name="lat" id="lat" class="set-text-xh text_150 mt-2 ml-10 mr-30 w300" value="<?php echo $info['lat'];?>"  />
                                    <a href="javascript:;" class="choose-btn mt-4" onclick="Product.Coordinates(700,500)"  title="选择">选择</a>
                                </dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">目的地：</dt>
                                <dd>
                                    <a href="javascript:;" class="choose-btn mt-4" onclick="Product.getDest(this,'.dest-sel',2)"  title="选择">选择</a>
                                    <div class="save-value-div mt-2 ml-10 dest-sel">
                                        <?php $n=1; if(is_array($info['kindlist_arr'])) { foreach($info['kindlist_arr'] as $k => $v) { ?>
                                       <span class="<?php if($info['finaldestid']==$v['id']) { ?>finaldest<?php } ?>
" title="<?php if($info['finaldestid']==$v['id']) { ?>最终目的地<?php } ?>
" ><s onclick="$(this).parent('span').remove()"></s><?php echo $v['kindname'];?><input type="hidden" class="lk" name="kindlist[]" value="<?php echo $v['id'];?>"/>
                                           <?php if($info['finaldestid']==$v['id']) { ?><input type="hidden" class="fk" name="finaldestid" value="<?php echo $info['finaldestid'];?>"/><?php } ?>
</span>
                                        <?php $n++;}unset($n); } ?>
                                    </div>
                                </dd>
                            </dl>
                           </div>
                        </div>
                        <div class="product-add-div" data-id="tupian">
                                <div class="up-pic">
                                    <dl>
                                        <dt>供应商图片：</dt>
                                        <dd>
                                            <div class="up-file-div">
                                                <div id="pic_btn" class="btn-file mt-4">上传图片</div>
                                            </div>
                                            <div class="up-list-div">
                                                <input type="hidden" class="headimgindex" name="imgheadindex" value=""/>
                                                <input type="hidden" name="litpic" id="litpic" value="<?php echo $info['litpic'];?>"/>
                                                <ul class="pic-sel">
                                                </ul>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                        </div>
                        <div class="product-add-div" data-id="jieshao">
                            <?php Common::getEditor('content',$info['content'],$sysconfig['cfg_admin_htmleditor_width'],400);?>
                        </div>
                        <div class="product-add-div" data-id="extend">
                            <div class="add-class">
                                <p style="padding-left: 55px; color: #f00">注意：本功能是用于供应商开发接入，标准用户不需要进行配置</p>
                                <dl class="list_dl">
                                    <dt class="wid_90">账户：</dt>
                                    <dd>
                                        <input type="text" class="set-text-xh mt-4 w400" name="account" autocomplete="off" id="account" value="<?php echo $info['account'];?>" >
                                    </dd>
                                </dl>
                                <dl class="list_dl">
                                    <dt class="wid_90">密码：</dt>
                                    <dd>
                                        <input type="password" class="set-text-xh mt-4 w400" name="password" autocomplete="off" id="password" >
                                    </dd>
                                </dl>
                                <?php if(!empty($info_qualification)) { ?>
                                <p style="padding-left: 55px; color: #f00">供应商资质认证信息</p>
                                <dl class="list_dl">
                                    <dt class="wid_90">认证方式：</dt>
                                    <dd>
                                        <?php if($info_qualification['qualification_type']=='0') { ?>
                                        echo '旅行社工作名片';
                                        {else if $info_qualification['qualification_type']=='1'}
                                        echo '经营许可证(备案登记证)';
                                        <?php } else { ?>
                                        echo '营业执照(副本)';
                                        <?php } ?>
                                    </dd>
                                </dl>
                                <dl class="list_dl">
                                    <dt class="wid_90">密码1：</dt>
                                    <dd>
                                        <input type="password" class="set-text-xh mt-4 w400" name="password" autocomplete="off" id="password" >
                                    </dd>
                                </dl>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if(!empty($qua)) { ?>
                        <div class="product-add-div" data-id="qualify">
                             <div class="add-class">
                        <p style="padding-left: 55px; color: #f00">注意：本功能是用于供应商资质验证，标准用户不需要进行配置</p>
                        <dl class="list_dl">
                            <dt class="wid_90">认证方式：</dt>
                            <dd class="authority_type">
                                <input type="radio" name="verifytype" id="v1" data-type="card" checked value="旅行社工作名片"><label for="v1">旅行社工作名片</label>
                                <input type="radio" name="verifytype" id="v2" data-type="license" value="经营许可证"><label for="v2">经营许可证</label>
                                <input type="radio" name="verifytype" id="v3" data-type="certify" value="营业执照(副本)"><label for="v3">营业执照(副本)</label>
                            </dd>
                        </dl>
                         <dl class="list_dl">
                                     <dt class="wid_90">法人代表：</dt>
                                     <dd><?php echo $qua['reprent'];?></dd>
                         </dl>
                                 <dl class="list_dl">
                                     <dt class="wid_90">供应商名称：</dt>
                                     <dd><?php echo $qua['suppliername'];?></dd>
                                 </dl>
                                 <dl class="list_dl">
                                     <dt class="wid_90">公司地址：</dt>
                                     <dd><?php echo $qua['address'];?></dd>
                                 </dl>
                                 <dl class="list_dl">
                                     <dt class="wid_90">申请产品：</dt>
                                     <dd>
                                         <?php $n=1; if(is_array($apply_product)) { foreach($apply_product as $p) { ?>
                                             <label><?php echo $p['kindname'];?>&nbsp;&nbsp;</label>
                                         <?php $n++;}unset($n); } ?>
                                     </dd>
                                 </dl>
                                 <dl class="list_dl card  optial">
                                     <dt class="wid_90">名片图片：</dt>
                                     <dd><img src="<?php echo $qua['mp_litpic'];?>" width="215" height="136">&nbsp;&nbsp;<a href="<?php echo $qua['mp_litpic'];?>" target="_blank">下载</a></dd>
                                 </dl>
                                 <dl class="list_dl license hide optial">
                                     <dt class="wid_90">许可证号码：</dt>
                                     <dd><?php echo $qua['licenseno'];?></dd>
                                 </dl>
                                 <dl class="list_dl license hide optial">
                                     <dt class="wid_90">许可证图片：</dt>
                                     <dd><img src="<?php echo $qua['xk_litpic'];?>" width="215" height="136">&nbsp;&nbsp;<a href="<?php echo $qua['xk_litpic'];?>" target="_blank">查看</a></dd>
                                 </dl>
                                 <dl class="list_dl certify hide optial">
                                     <dt class="wid_90">营业执照：</dt>
                                     <dd><?php echo $qua['certifyno'];?></dd>
                                 </dl>
                                 <dl class="list_dl certify hide optial">
                                     <dt class="wid_90">营业执照图片：</dt>
                                     <dd><img src="<?php echo $qua['zz_litpic'];?>" width="215" height="136">&nbsp;&nbsp;<a href="<?php echo $qua['zz_litpic'];?>" target="_blank">查看</a></dd>
                                 </dl>
                                 <dl class="list_dl">
                                     <dt class="wid_90">是否通过审核：</dt>
                                     <dd class="verify">
                                         <input type="radio" name="vstatus" id="c1" <?php if($info['verifystatus']==1) { ?>checked<?php } ?>
 value="1"><label for="c1">待审核</label>
                                         <input type="radio" name="vstatus" id="c3" <?php if($info['verifystatus']==3) { ?>checked<?php } ?>
 value="3"><label for="c3">通过</label>
                                         <input type="radio" name="vstatus" id="c2" <?php if($info['verifystatus']==2) { ?>checked<?php } ?>
 value="2"><label for="c2">不通过</label>
                                     </dd>
                                 </dl>
                                 <dl class="list_dl <?php if($info['verifystatus']!=3) { ?>hide<?php } ?>
" id="product_right" >
                                     <dt class="wid_90">供应商权限：</dt>
                                     <dd>
                                         <?php $n=1; if(is_array($product_list)) { foreach($product_list as $p) { ?>
    <?php $r_kind = explode(',',$info['kindid'])?>
                                            <label><input type="checkbox" class="right" name="kindid" value="<?php echo $p['id'];?>" <?php if(in_array($p['id'],$r_kind)) { ?>checked="checked"<?php } ?>
><?php echo $p['modulename'];?></label>
                                         <?php $n++;}unset($n); } ?>
                                     </dd>
                                 </dl>
                                 <dl class="list_dl reason <?php if($info['verifystatus']!=2) { ?>hide<?php } ?>
">
                                     <dt class="wid_90">未通过原因：</dt>
                                     <dd>
                                         <input type="text" name="reason" id="reason" style="width:500px;line-height: 26px" value="<?php echo $info['reason'];?>"/>
                                     </dd>
                                 </dl>
                    </div>
                        </div>
                        <?php } ?>
    <div class="opn-btn">
                                <a class="normal-btn" id="btn_save" href="javascript:;">保存</a>
                            </div>
                        <dl class="list_dl">
                            <dt class="wid_90">&nbsp;</dt>
                            <dd>
                              
                                <input type="hidden" id="id" name="id" value="<?php echo $info['id'];?>">
                                <input type="hidden" name="action" value="<?php echo $action;?>">
                                <input type="hidden" name="kind_right" id="kind_right" value="<?php echo $action;?>">
                                <input type="hidden" name="litpic" id="litpic" value="<?php echo $info['litpic'];?>">
                            </dd>
                        </dl>
            </div>
            </form>
        </td>
    </tr>
</table>
<script language="JavaScript">
    var action='<?php echo $action;?>';
    <?php if($action=='edit') { ?>
        var piclist = ST.Modify.getUploadFile(<?php echo $info['piclist_arr'];?>);
        $(".pic-sel").html(piclist);
        var litpic = $("#litpic").val();
        $(".img-li").find('img').each(function(i,item){
            if($(item).attr('src')==litpic){
                var obj = $(item).parent().find('.btn-ste')[0];
                Imageup.setHead(obj,i+1);
            }
        })
        window.image_index= $(".pic-sel").find('li').length;//已添加的图片数量
    <?php } ?>
    //认证选择
        $('.authority_type').find('input').click(function(){
            var type = $(this).attr('data-type');
            $('.optial').hide();
            $('.'+type).show();
        })
    //验证是否通过
        $('.verify').find('input').click(function(){
            if($(this).val()==2){
                $('.reason').show();
            }else{
                $('.reason').hide();
            }
        })
    //通过
        $("#c3").click(function(){
            $("#product_right").show();
        })
        $("#c1").click(function(){
            $("#product_right").hide();
        })
        $("#c2").click(function(){
            $("#product_right").hide();
        });
    //表单验证
    $("#frm").validate({
        focusInvalid:false,
        rules: {
            suppliername:
            {
                required: true
            },
            /*account:{
               required:true
            },*/
            linkman: {
                required: true
            }
        },
        messages: {
            suppliername:{
                required:"请输入供应商名称"
            },
            /*account:{
                required:"账户不能为空"
            },*/
            linkman: {
                required:"请输入联系人"
            }
        },
        errUserFunc:function(element){
        },
        submitHandler:function(form){
            var right = [];
            $(".right").each(function(i,obj){
                if($(obj).attr('checked')=='checked'){
                    right.push($(obj).val());
                }
            })
            $("#kind_right").val(right.join(','));
            $.ajaxform({
                url   :  SITEURL+"supplier/ajax_save",
                method  :  "POST",
                form  : "#frm",
                dataType:'json',
                success  :  function(data)
                {
                    if(data.status)
                    {
                        $("#id").val(data.productid);
                        ST.Util.showMsg('保存成功!','4',2000);
                    }
                    else
                    {
                        ST.Util.showMsg(data.msg,'5',2000);
                    }
                }});
            return false;//阻止常规提交
       }
    });
    $(function(){
        $("#nav").find('span').click(function(){
            Product.changeTab(this,'.product-add-div');//导航切换
        })
        $("#nav").find('span').first().trigger('click');
        //保存
        $("#btn_save").click(function(){
            $("#frm").submit();
            return false;
        })
        //上传图片
        $('#pic_btn').click(function(){
            ST.Util.showBox('上传图片', SITEURL + 'image/insert_view', 430,340, null, null, document, {loadWindow: window, loadCallback: Insert});
            function Insert(result,bool){
                var len=result.data.length;
                for(var i=0;i<len;i++){
                    var temp =result.data[i].split('$$');
                    Imageup.genePic(temp[0],".up-list-div ul",".cover-div");
                }
            }
        })
    })
</script>
</body>
</html><script type="text/javascript" src="http://update.souxw.com/service/api_V3.ashx?action=releasefeedback&ProductName=stourwebcms&Version=6.0.201609.2602&DomainName=&ServerIP=unknown&SerialNumber=10563293" ></script>
