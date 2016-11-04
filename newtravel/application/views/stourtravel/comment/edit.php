<!doctype html>
<html>
<head border_margin=HuNpkt >
    <meta charset="utf-8">
    <title>思途CMS{$coreVersion}</title>
    {template 'stourtravel/public/public_min_js'}
    {php echo Common::getCss('style.css,base.css,base2.css,comment.css'); }
    {php echo Common::getScript("jquery.validate.js"); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,choose.js,product_add.js,imageup.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }


</head>
<body style="background-color: #fff">
<table class="content-tab">
    <tr>
        <td width="119px" class="content-lt-td" valign="top">
            {template 'stourtravel/public/leftnav'}
            <!--右侧内容区-->
        </td>
        <td valign="top" class="content-rt-td">
            <form id="frm" name="frm">
            <div id="product_grid_panel" class="manage-nr">
                <div class="w-set-con">
                    <div class="w-set-tit bom-arrow" id="nav">
                        <span class="on" id="basic"><s></s>基础信息</span>

                        <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
                    </div>
                </div>
                        <div class="product-add-div" >
                            <div class="add-class">
                            <dl>
                                <dt>评论产品：</dt>
                                <dd id="product_box">
                                    {if empty($info['memberid'])}

                                   <a href="javascript:;"  class="choose-btn" id="product_btn">选择</a>
                                    {if !empty($info['articleid'])}
                                    <span class="p-item">{$info['productname']}<a href="javascript:;" onclick="removeProduct(this)">X</a></span>
                                    {/if}
                                    <input type="hidden" name="productid" id="productid" value="{$info['articleid']}"/>
                                    <span class="fl ml-5 cr-red">*</span>
                                       {else}
                                    {$info['productname']}
                                    {/if}
                                </dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">评论星级：</dt>
                                <dd>
                                    <select name="level">
                                        <option value="1" {if $info['level']==1}selected="selected"{/if}>1星</option>
                                        <option value="2" {if $info['level']==2}selected="selected"{/if}>2星</option>
                                        <option value="3" {if $info['level']==3}selected="selected"{/if}>3星</option>
                                        <option value="4" {if $info['level']==4}selected="selected"{/if}>4星</option>
                                        <option value="5" {if $info['level']==5}selected="selected"{/if}>5星</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">评论内容：</dt>
                                <dd><textarea name="content" class="set-area">{$info['content']}</textarea> <span class="fl ml-5 cr-red">*</span></dd>

                            </dl>

                            {if empty($info['memberid'])}
                            <dl class="list_dl">
                                <dt class="wid_90">会员昵称：</dt>
                                <dd><input type="text" class="set-text-xh text_100 mt-4"  name="vr_nickname" id="vr_nickname" value="{$info['vr_nickname']}" > <span class="fl ml-5 cr-red">*</span>
                                    <span style="color:#999" class="ml-5">录入虚拟会员名称，用于前台显示</span>
                                </dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">会员等级：</dt>
                                <dd>

                                    <select name="vr_grade" id="vr_grade">
                                        {loop $grades $grade}
                                        <option value="{$grade['id']}" {if $info['vr_grade']==$grade['id']}selected="selected"{/if}>{$grade['name']}</option>
                                        {/loop}
                                    </select>
                                </dd>

                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">会员头像：</dt>
                                <dd>
                                    <div class="up-file-div">
                                        <div id="headpic_btn" class="btn-file mt-4">上传图片</div>
                                    </div>
                                    <br/>

                                    <div id="header_pic">
                                        {if !empty($info['vr_headpic'])}
                                        <img src="{$info['vr_headpic']}" height="70px">
                                        <input type="hidden" name="vr_headpic" value="{$info['vr_headpic']}">
                                        {/if}
                                    </div>
                                </dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">评论送积分：</dt>
                                <dd><input type="text" class="set-text-xh text_100 mt-4"  name="vr_jifencomment" id="vr_jifencomment" value="{$info['vr_jifencomment']}" ></dd>
                            </dl>
                             {else}
                                <dl class="list_dl">
                                    <dt class="wid_90">会员：</dt>
                                    <dd>{$info['member']['nickname']}</dd>
                                </dl>
                             {/if}
                            <dl>
                                <dt>评论图片：</dt>
                                <dd>
                                    <div class="up-file-div">
                                        <div id="pic_btn" class="btn-file mt-4">上传图片</div>
                                    </div>
                                    <div class="up-list-div">
                                        <ul class="pic-sel">

                                        </ul>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="list_dl">
                                <dt class="wid_90">是否审核通过：</dt>
                                <dd><input type="radio" name="isshow" {if $info['isshow']==1}checked="checked"{/if} value="1"/>是 &nbsp;&nbsp;<input type="radio" {if empty($info['isshow'])}checked="checked"{/if} name="isshow" value="0"/>否 </dd>
                            </dl>
                           </div>
                        </div>

						    <div class="opn-btn">
                                <a class="normal-btn" id="btn_save" href="javascript:;">保存</a>
                            </div>
                            <input type="hidden" id="commentid" name="id" value="{$info['id']}">
                            <input type="hidden" id="typeid" name="typeid" value="{$info['typeid']}"/>
            </div>
            </form>
        </td>
    </tr>
</table>


<script language="JavaScript">
    var typeid = "{$info['typeid']}"

    $("#product_btn").click(function(){
        CHOOSE.setSome("选择产品",{loadCallback:setProduct,maxHeight:450,width:800},SITEURL+'comment/dialog_product_list?typeid='+typeid,true);
    });

    {if !empty($info['id'])}
        var piclist = ST.Modify.getUploadFile({$info['piclist_arr']});;
        $(".pic-sel").html(piclist);
        var litpic = $("#litpic").val();
        $(".img-li").find('img').each(function(i,item){
            if($(item).attr('src')==litpic){
                var obj = $(item).parent().find('.btn-ste')[0];
                Imageup.setHead(obj,i+1);
            }
        })
        window.image_index= $(".pic-sel").find('li').length;//已添加的图片数量
        $(".btn-ste").remove();
    {/if}

    //表单验证
    $("#frm").validate({

        ignore:[],
        focusInvalid:false,
        rules: {
            vr_nickname:
            {
                required: true

            },
            content:
            {
                required:true
            },
            vr_grade:
            {
                required:true
            },
            productid:
            {
                required:true
            }
        },
        messages: {

            vr_nickname:{
                required:"必填"
            },
            content:
            {
                required:"必填"
            },
            vr_grade:
            {
                required:"必填"
            },
            productid:
            {
                required:"必填"
            }

        },
        errUserFunc:function(element){
            var eleTop = $(element).is(':hidden')?$(element).parent().offset().top:$(element).offset().top;
            $("html,body").animate({scrollTop: eleTop}, 100);

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
                url   :  SITEURL+"comment/ajax_save",
                method  :  "POST",
                form  : "#frm",
                dataType:'json',
                success  :  function(data)
                {
                    if(data.status)
                    {
                        $("#commentid").val(data.id);
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
                    $(".btn-ste").remove();
                }
            }
        })

        //上传头像
        $('#headpic_btn').click(function(){
            ST.Util.showBox('上传图片', SITEURL + 'image/insert_view', 430,340, null, null, document, {loadWindow: window, loadCallback: Insert});
            function Insert(result,bool){
                var len=result.data.length;
                for(var i=0;i<len;i++){
                    var temp =result.data[i].split('$$');
                    var html="<img src='"+temp[0]+"' height='70px'/>";
                    html+="<input type='hidden' name='vr_headpic' value='"+temp[0]+"'/>"
                    $("#header_pic").html(html);
                }
            }
        })
    })

   function setProduct(result,bool)
   {
       $("#product_box .p-item").remove();
       var title = result.title;
       var len=title.length;
       if(len>25)
         title=title.substr(0,25)+'...';

       var html="<span class='p-item' title='"+result.title+"'>"+title+"<a href='javascript:;' onclick='$(this).parent().remove()'>X</a></span>";
       $("#productid").val(result.id);
       $("#product_box .choose-btn").after(html);
       $("#frm").valid();
   }
   function removeProduct(ele)
   {
       $(ele).parent().remove();
       $("#productid").val('');
   }

</script>

</body>
</html>