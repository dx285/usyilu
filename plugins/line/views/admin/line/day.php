<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS{$coreVersion}</title>
    {template 'stourtravel/public/public_min_js'}
    {php echo Common::getCss('style.css,base.css,base2.css'); }
</head>
<body>

<table class="content-tab">
<tr>
    <td width="119px" class="content-lt-td" valign="top">
        {template 'stourtravel/public/leftnav'}
        <!--右侧内容区-->
    </td>
    <td valign="top" class="content-rt-td" style="overflow:auto;">

            <div class="w-set-con">
                <div class="w-set-tit bom-arrow" style="float:none;">
                {template 'admin/line/kind_top'}
                    <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
                 </div>
                <div class="w-set-nr">

                    <div class="add_menu-btn">
                        <a href="javascript:;" class="add-btn-class ml-10" onclick="addRow()">添加</a>
                    </div>

                    <div class="nor-attr-list">
                     <form id="day_fm">
                        <table width="95%" border="0" cellspacing="0" cellpadding="0" id="day_tab">
                               <tr>
                                <th scope="col" width="15%" height="40" align="center">天数</th>
                                <th scope="col" width="85%">删除</th>
                               </tr>
                              {loop $list $k $v}
                               <tr>
                                <td height="40" class="dayname-td" align="center"><input type="text" id="" name="dayword[{$v['id']}]" class="text_60 center"  value="{$v['word']}"></td>
                                <td align="center"><a href="javascript:;" class="row-del-btn" onclick="delRow(this,{$v['id']})" title="删除"></a></td>
                               </tr>
                               {/loop}

                        </table>
                     </form>
                    </div>

                    <div class="opn-btn">
                        <a class="normal-btn ml-10" href="javascript:;" onclick="rowSave()">保存</a>
                    </div>
                </div>
            </div>

    </td>
</tr>
</table>

<script>
   $(".w-set-tit").find('#tb_lineday').addClass('on');


  function rowSave()
  {
      ST.Util.showMsg('保存中',6,10000);
      $.ajaxform({
          url   :  SITEURL+"line/admin/line/day/action/save",
          method  :  "POST",
          form  : "#day_fm",
          dataType  :  "html",
          success  :  function(result)
          {

              var text = result;
              if(text=='ok')
              {
                  ZENG.msgbox._hide();
                  ST.Util.showMsg("保存成功",4)
              }
              else
              {
                  ST.Util.showMsg("{__('norightmsg')}",5,1000)
              }
          }});

  }
  function addRow()
  {
	    $.ajaxform({
                  url   :  SITEURL+"line/admin/line/day/action/add",
                  method  :  "POST",
                  dataType  :  "html",
                  success  :  function(result)
                  {
                      var id = result;
                      if(id!='no')
                      {
						 var  $html='<tr><td class="dayname-td" align="center"><input type="text" class="text_60 center"  name="dayword['+id+']"  value=""></td>';
						  $html+='<td align="center"><a href="javascript:;" class="row-del-btn" onclick="delRow(this,'+id+')" title="删除"></a></td></tr>';
						  $("#day_tab").append($html);
					  }
				  }})

  }
  function delRow(dom,id)
  {
      ST.Util.confirmBox('提示','确定删除？',function(){
          if(id==0)
              $(dom).parents('tr').first().remove();
          else
          {
              $.ajaxform({
                  url   :  SITEURL+"line/admin/line/day/action/del",
                  method  :  "POST",
                  data:{id:id},
                  dataType  :  "html",
                  success  :  function(result)
                  {
                      var text = result;
                      if(text='ok')
                      {
                          $(dom).parents('tr').first().remove();
                      }
                      else
                      {

                      }
                  }});

          }


      });

  }


</script>

</body>
</html>
