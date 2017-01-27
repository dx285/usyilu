<!doctype html> <html> <head border_font=jW73Hk > <meta charset="utf-8"> <title><?php echo $info['kindname'];?>-<?php echo $GLOBALS['cfg_webname'];?></title> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> <?php echo Common::css('amazeui.css,style.css,extend.css');?> <?php echo Common::js('jquery.min.js,amazeui.js,template.js,delayLoading.min.js');?> <script>
        $(function(){
            $('#my-st-slide').offCanvas('close');
        })
    </script> </head> <body> <?php echo Request::factory("pub/header/typeid/0/isshowpage/1/definetitle/".urlencode($channel))->execute()->body(); ?> <section> <div class="mid_content"> <div class="st-help-block"> <h3><?php echo $info['kindname'];?></h3> <ul id="help_list"> </ul> <a class="more-link" id="btn_more" href="javascript:;">查看更多</a> </div> </div> </section> <?php echo Request::factory("pub/footer")->execute()->body(); ?> <script>
    var kindid = "<?php echo $info['id'];?>";
    var page=1;
    $(function(){
        $("#btn_more").click(function(){
            get_list(page+1);
        });
        get_list(1);
    });
    function get_list(curpage)
    {
        var url= SITEURL+'help/ajax_help_list'
        $.ajax({
            type: 'POST',
            url: url ,
            data: {kindid:kindid,page:curpage},
            dataType: 'json',
            success:function(result)
            {
                var html='';
                for(var i in result.list)
                {
                    var row=result.list[i];
                    html+='<li><a href="'+row['url']+'">'+row['title']+'</a><i class="ico"></i></li>';
                }
                $("#help_list").append(html);
                if(!result.hasmore)
                {
                    $("#btn_more").hide();
                }
                if(html!='')
                {
                    page=curpage;
                }
            }
        });
    }
</script> </body> </html>
