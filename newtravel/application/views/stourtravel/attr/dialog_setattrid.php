<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS{$coreVersion}</title>
    {template 'stourtravel/public/public_min_js'}
    {php echo Common::getCss('base.css,attrid_dialog_setattrid.css'); }
</head>
<body >
   <div class="s-main">
       <div class="attr-list">
        {loop $attridList $list}
           {if !empty($list['children'])}
            <div class="con-row">
                <div class="con-tit">
                     {$list['attrname']}
                </div>
                <div class="con-list">
                    <ul>
                        <li>
                            {loop $list['children'] $key $row}
                            <span class="item"><input type="checkbox" name="attrid" pid="{$list['id']}" pname="{$list['attrname']}" class="i-box" {if in_array($row['id'],$attrids)}checked="checked"{/if} value="{$row['id']}"/><label class="i-lb">{$row['attrname']}</label></span>
                            {/loop}
                            <div class="clear-both"></div>
                        </li>
                    </ul>
                </div>
            </div>
           {/if}
        {/loop}
       </div>
       <div class="save-con">
           <a href="javascript:;" class="confirm-btn">确定</a>
       </div>
   </div>
<script>
     var id="{$id}";
     var selector="{$selector}"
     $(function(){

         window.setTimeout(function(){
             ST.Util.resizeDialog('.s-main');
         },0);

           $(document).on('click','.confirm-btn',function(){
                  var attrs=[];
                  var pids=[];



                  $('.item .i-box:checked').each(function(index,element){

                         var pid=$(element).attr('pid');
                         var pname=$(element).attr('pname');
                         if($.inArray(pid,pids)==-1)
                         {
                             if($(element).attr('pname') !='邮编' && $(element).attr('pname') !='机场' && $(element).attr('pname') !='专拼' && $(element).attr('pname') !='优势服务' && $(element).attr('pname') !='航班' && $(element).attr('pname') !='额外属性') {

                                 attrs.push({id: pid, attrname: pname});
                                 console.log("attrname: " + pname);
                                 pids.push(pid);
                             }
                         }
                         var attrname=$(element).siblings('.i-lb:first').text();
                         var id=$(element).val();
                         attrs.push({id:id,attrname:attrname});
                         console.log("out attrname: "+attrname);

                  });

                 ST.Util.responseDialog({id:id,data:attrs,selector:selector},true);
           })






     })
</script>

</body>
</html>
