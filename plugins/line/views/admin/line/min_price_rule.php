<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>线路最低价规则</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,jqtransform.css'); }
    {php echo Common::getScript('config.js,jquery.jqtransform.js,jquery.colorpicker.js');}
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
</head>

<body>
<table class="content-tab">
    <tr>
        <td width="119px" class="content-lt-td"  valign="top">
            {template 'stourtravel/public/leftnav'}
            <!--右侧内容区-->
        </td>
        <td valign="top" class="content-rt-td">


            <form id="configfrm">
                <div class="w-set-con">
                    <div class="w-set-tit bom-arrow"><a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a></div>
                    <div class="w-set-nr">
                        <div class="water-mark ml-10" style="padding-top:20px">
                            <div class="rowElem">
                                <label>前台最低价显示：</label>
                                <input type="radio" name="cfg_line_minprice_rule" value="2" {if $minprice==2}checked{/if}>
                                <label>优先成人</label>
                                <input type="radio" name="cfg_line_minprice_rule" value="1" {if $minprice==1}checked{/if}>
                                <label>优先儿童</label>
                                <input type="radio" name="cfg_line_minprice_rule" value="3" {if $minprice==3}checked{/if}>
                                <label>优先老人</label>
                                <span style="padding-left: 15px; color: #999">*设置前台线路最低价格的显示规则，按照勾选的方式进行显示</span>
                            </div>
                        </div>
                        <div class="opn-btn">
                            <a class="normal-btn" href="javascript:;" id="btn_save">保存</a>
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
            Config.saveConfig(0);
            $.get(SITEURL+"line/admin/ajax_clear_minprice",function(status){

            });
        });
    })

</script>

</body>
</html>
