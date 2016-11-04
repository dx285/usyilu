<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>系统参数</title>
    {template 'stourtravel/public/public_min_js'}
    {php echo Common::getCss('style.css,base.css,jqtransform.css'); }
    {php echo Common::getScript('config.js');}

</head>
<body top_padding=zgMpkt >
	<table class="content-tab">
    <tr>
    <td width="119px" class="content-lt-td"  valign="top">
     {template 'stourtravel/public/leftnav'}
    <!--右侧内容区-->
    </td>
     <td valign="top" class="content-rt-td">

        <form id="configfrm">
         <div class="w-set-con">
        	<div class="w-set-tit bom-arrow"><span class="on"><s></s>注册协议</span><a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a></div>
          <div class="w-set-nr">
              <div class="water-mark ml-10" style="padding-top:20px">
                  <div class="rowElem">
                      <label >协议状态：</label>
                      <input type="radio" name="cfg_member_agreement_open" value="1" {if $config['cfg_member_agreement_open']==1}checked{/if}>
                      <label>开启</label>
                      <input type="radio" name="cfg_member_agreement_open" value="0" {if $config['cfg_member_agreement_open']==0}checked{/if}>
                      <label>关闭</label>
                      <span style="padding-left: 15px; color: #999">*开启网站服务协议，用户在前端注册时必须同意该协议才能进行注册，如果关闭，则在注册页面不会显示网站服务协议。</span>
                  </div>
                  <div class="rowElem" style="margin-top: 20px;">
                      <label>协议标题：</label>
                      <input type="text" name="cfg_member_agreement_title" id="cfg_member_agreement_title" class="set-text-xh text_200" style="float: none;" value="{$config['cfg_member_agreement_title']}">
                  </div>
                  <div class="rowElem" style="margin-top: 20px;">
                      <label class="fl">协议内容：</label>
                      <div style="width: 900px;float:left">
                          {php Common::getEditor('cfg_member_agreement',$config['cfg_member_agreement'],$sysconfig['cfg_admin_htmleditor_width'],300);}
                      </div>
                  </div>

              </div>

            <div class="opn-btn">
            	<a class="normal-btn" href="javascript:;" id="btn_save">保存</a>
             <!-- <a class="cancel" href="#">取消</a>-->
                <input type="hidden" name="webid" id="webid" value="0">


            </div>


          </div>
        </div>
        </form>
  </td>
  </tr>
  </table>

  
  
	<script>

	$(document).ready(function(){



        //配置信息保存
        $("#btn_save").click(function(){

            var open = parseInt($("input[name='cfg_member_agreement_open']").val());
            if(open == 1){
                var title = $('#cfg_member_agreement_title').val();
                var agreement = cfg_member_agreementEditor.getContent();
                if(title==''){
                    ST.Util.showMsg('协议标题必须填写',5,1500);
                    return false;
                }
                if(agreement == ''){
                    ST.Util.showMsg('协议内容必须填写',5,1500);
                    return false;
                }
            }

            Config.saveConfig(0);


        });



    })












    </script>

</body>
</html>
