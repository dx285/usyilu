<div class="st_search"> <div class="st_search_box"> <input type="text" class="st_home_txt" id="keyword" placeholder="请输入关键词" value="<?php echo $keyword;?>" /> <input type="button" class="st_home_btn btn_search" value="搜索" /> </div><!--搜索--> </div> <div class="tabnav"> <ul> <li><a href="javascript:;" id="destname" data-py="<?php echo $destpy;?>"><?php echo $destname;?><i class="am-icon-caret-down"></i></a></li> <li><a href="javascript:;">综合排序<i class="am-icon-caret-down"></i></a></li> <li><a href="javascript:;">筛选<i class="am-icon-caret-down"></i></a></li> </ul> </div> <div class="tabcon"> <div class="tablist"> <div class="dest-mbx-dh" id="dest_nav" > <a data-id="0">目的地</a>&gt;
        </div> <ul id="dest_content"> </ul> </div> <div class="tablist"> <!--这里可根据typeid添加相应的排序规则--> <ul id="list-reorder"> <li data-id="0" <?php if($sorttype==0) { ?>class="on"<?php } ?>
 data-type="sorttype">默认</li> <?php if($typeid == "4" || $typeid == "6") { ?> <li data-id="1" <?php if($sorttype==1) { ?>class="on"<?php } ?>
 data-type="sorttype">点击量最高</li> <?php } else { ?> <li data-id="1" <?php if($sorttype==1) { ?>class="on"<?php } ?>
 data-type="sorttype">价格从低到高</li> <li data-id="2" <?php if($sorttype==2) { ?>class="on"<?php } ?>
 data-type="sorttype">价格从高到低</li> <li data-id="3" <?php if($sorttype==3) { ?>class="on"<?php } ?>
 data-type="sorttype">销量最高</li> <li data-id="4" <?php if($sorttype==4) { ?>class="on"<?php } ?>
 data-type="sorttype">产品推荐</li> <?php } ?> </ul> </div> <div class="tablist"> <ul id="list-way"> <!--这里添加对应栏目的标识--> <?php if($cfg_startcity_open==1&&$typeid==1) { ?> <li data-id="city" class="city"  data-child="city" data-type="city">出发地</li> <?php } ?> <?php if($typeid==1) { ?> <li  data-id="0" data-flag="rank" data-child="gday" data-ajax-div="lsit-child">行程天数</li> <li  data-id="0" data-flag="lineprice" data-child="gprice" data-ajax-div="lsit-child">价格</li> <?php } ?> <?php if($typeid==2) { ?> <li  data-id="0" data-flag="rank" data-child="grank" data-ajax-div="lsit-child">星级</li> <li  data-id="0" data-flag="hotelprice" data-child="gprice" data-ajax-div="lsit-child">价格</li> <?php } ?> <?php if($typeid==3) { ?> <li  data-id="0" data-flag="kind" data-child="gkind" data-ajax-div="lsit-child">车型</li> <?php } ?> <?php if($typeid==5) { ?> <li  data-id="0" data-flag="spotprice" data-child="gprice" data-ajax-div="lsit-child">价格</li> <?php } ?> <?php $n=1; if(is_array($attrlist)) { foreach($attrlist as $attr) { ?> <li  data-id="<?php echo $attr['id'];?>" data-flag="attr" data-child="gattr<?php echo $attr['id'];?>" data-ajax-div="lsit-child"><?php echo $attr['attrname'];?></li> <?php $n++;}unset($n); } ?> <?php if($typeid==13) { ?> <li  data-id="0" data-flag="status" data-child="tuanstatus" data-ajax-div="lsit-child">团购状态</li> <?php } ?> </ul> <ul id="lsit-child"> <!--根据typeid来添加相应的参数--> <?php if($typeid==1) { ?> <li data-id="0" class="gday" data-type="dayid">全部</li> <?php $line_tag = new Taglib_Line();if (method_exists($line_tag, 'day_list')) {$data = $line_tag->day_list(array('action'=>'day_list',));}?> <?php $n=1; if(is_array($data)) { foreach($data as $r) { ?> <li  data-id="<?php echo $r['id'];?>" class="gday <?php if($dayid==$r['id']) { ?>on<?php } ?>
"  data-type="dayid" ><?php echo $r['title'];?></li> <?php $n++;}unset($n); } ?> <li data-id="0" class="gprice" data-type="priceid">全部</li> <?php $line_tag = new Taglib_Line();if (method_exists($line_tag, 'price_list')) {$data = $line_tag->price_list(array('action'=>'price_list',));}?> <?php $n=1; if(is_array($data)) { foreach($data as $r) { ?> <li  data-id="<?php echo $r['id'];?>" class="gprice <?php if($priceid==$r['id']) { ?>on<?php } ?>
"  data-type="priceid" ><?php echo $r['title'];?></li> <?php $n++;}unset($n); } ?> <?php } ?> <?php if($typeid==2) { ?> <li data-id="0" class="grank" data-type="rankid">全部</li> <?php $hotel_tag = new Taglib_Hotel();if (method_exists($hotel_tag, 'rank_list')) {$data = $hotel_tag->rank_list(array('action'=>'rank_list',));}?> <?php $n=1; if(is_array($data)) { foreach($data as $r) { ?> <li  data-id="<?php echo $r['id'];?>" class="grank <?php if($rankid==$r['id']) { ?>on<?php } ?>
"   data-type="rankid" ><?php echo $r['title'];?></li> <?php $n++;}unset($n); } ?> <li data-id="0" class="gprice" data-type="priceid">全部</li> <?php $hotel_tag = new Taglib_Hotel();if (method_exists($hotel_tag, 'price_list')) {$data = $hotel_tag->price_list(array('action'=>'price_list',));}?> <?php $n=1; if(is_array($data)) { foreach($data as $r) { ?> <li  data-id="<?php echo $r['id'];?>" class="gprice <?php if($priceid==$r['id']) { ?>on<?php } ?>
"  data-type="priceid" ><?php echo $r['title'];?></li> <?php $n++;}unset($n); } ?> <?php } ?> <?php if($typeid==3) { ?> <li data-id="0" class="gkind" data-type="kindid">全部</li> <?php $car_tag = new Taglib_Car();if (method_exists($car_tag, 'kind_list')) {$data = $car_tag->kind_list(array('action'=>'kind_list',));}?> <?php $n=1; if(is_array($data)) { foreach($data as $r) { ?> <li  data-id="<?php echo $r['id'];?>" class="gkind <?php if($kindid==$r['id']) { ?>on<?php } ?>
"   data-type="kindid" ><?php echo $r['title'];?></li> <?php $n++;}unset($n); } ?> <?php } ?> <!--景点价格筛选--> <?php if($typeid==5) { ?> <li data-id="0" class="gprice" data-type="priceid">全部</li> <?php ?> <?php $n=1; if(is_array($data)) { foreach($data as $r) { ?> <li  data-id="<?php echo $r['id'];?>" class="gprice <?php if($priceid==$r['id']) { ?>on<?php } ?>
"  data-type="priceid" ><?php echo $r['title'];?></li> <?php $n++;}unset($n); } ?> <?php } ?> <?php if($typeid==13) { ?> <li data-id="0" class="tuanstatus <?php if($status==0) { ?>on<?php } ?>
" data-type="status">进行中</li> <li data-id="1" class="tuanstatus <?php if($status==1) { ?>on<?php } ?>
" data-type="status">未开始</li> <?php } ?> <!--属性组--> <?php $n=1; if(is_array($attrlist)) { foreach($attrlist as $attr) { ?> <li data-id="0" class="gattr<?php echo $attr['id'];?>" data-type="attrid">全部</li> <?php $attrArr =!empty($attrid) ? explode('_',$attrid) : array();?> <?php require_once ("/var/www/gogogous/phone/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$data = $attr_tag->query(array('action'=>'query','flag'=>'childitem','typeid'=>$typeid,'groupid'=>$attr['id'],));}?> <?php $n=1; if(is_array($data)) { foreach($data as $r) { ?> <li  data-id="<?php echo $r['id'];?>"  class="gattr<?php echo $attr['id'];?> <?php if(in_array($r['id'],$attrArr)) { ?>on<?php } ?>
" data-type="attrid" ><?php echo $r['attrname'];?></li> <?php $n++;}unset($n); } ?> <?php $n++;}unset($n); } ?> <?php if($cfg_startcity_open==1&&$typeid==1) { ?> <?php $n=1; if(is_array($startcitylist)) { foreach($startcitylist as $citylist) { ?> <li  data-id="<?php echo $citylist['id'];?>"  class="city <?php if($startcityid==$citylist['id']) { ?> on <?php } ?>
 " data-type="startcityid"  ><?php echo $citylist['cityname'];?></li> <?php $n++;}unset($n); } ?> <?php } ?> </ul> </div> </div> <div class="tab_bottom_btn"> <a class="cancel_btn" href="javascript:;">取消</a> <a class="sure_btn" href="javascript:;">确定</a> </div> <input type="hidden" id="destpy" value="<?php echo $destpy;?>"/> <input type="hidden" id="destname" value="<?php echo $destname;?>"/> <input type="hidden" id="sorttype" value="<?php echo $sorttype;?>"/> <input type="hidden" id="attrid" value="<?php echo $attrid;?>"/> <?php if($typeid==1) { ?> <input type="hidden" id="priceid" value="<?php echo $priceid;?>"/> <input type="hidden" id="dayid" value="<?php echo $dayid;?>"/> <input type="hidden" id="startcityid" value="<?php echo $startcityid;?>"/> <?php } ?> <?php if($typeid==2) { ?> <input type="hidden" id="rankid" value="<?php echo $rankid;?>"/> <input type="hidden" id="priceid" value="<?php echo $priceid;?>"/> <?php } ?> <?php if($typeid==3) { ?> <input type="hidden" id="kindid" value="<?php echo $kindid;?>"/> <?php } ?> <?php if($typeid==5) { ?> <input type="hidden" id="priceid" value="<?php echo $priceid;?>"/> <?php } ?> <script>
    var py = '<?php echo $destpy;?>';
    var curdestpy='<?php echo $curdestpy;?>';
    var typeid = '<?php echo $typeid;?>';
    function DestaddClass(py,typeid,curdestpy){
        $.getJSON(SITEURL+'pub/ajax_get_destall',{destpy:py,'curdest':curdestpy,typeid:typeid},function(data){
            var navLen=data['nav'].length;
            var destLen=data['list'].length;
            var navHtml='';
            var destHtml='';
            for(var i=0;i<navLen;i++){
                if(i+1!=navLen){
                    navHtml+='<a class="dest_load" href="javascript:void(0)" data-py="'+data['nav'][i]['pinyin']+'">'+data['nav'][i]['kindname']+'</a> &gt;'
                }else{
                    navHtml+='<span>'+data['nav'][i]['kindname']+'</span>';
                }
            }
            $('#dest_nav').html(navHtml);
            for(var i=0;i<destLen;i++){
                if(data['list'][i]['haschild']){
                    destHtml+='<li class="dest_load" data-py="'+data['list'][i]['pinyin']+'">'+data['list'][i]['kindname']+'<i class="icon-right"></i></li>';
                }else{
                    var selected='';console.log(data['curDest'],data['list'][i]['pinyin']);
                    if(data['curDest']==data['list'][i]['pinyin']){
                        selected='class="icon-pitch-on"'
                    }
                    destHtml+='<li data-id="'+data['list'][i]['id']+'" class="hasnext" data-py="'+data['list'][i]['pinyin']+'" data-flag="dest">'+data['list'][i]['kindname']+'<i '+selected+'></i></li>';
                }
            }
            $('#dest_content').html(destHtml);
        })
    }
    $(function(){
        if($("#list-province li.on").length==0){
            $("#hot_dest").addClass('on');
        }
        var typeid = '<?php echo $typeid;?>';
        //选中上次选中的
        DestaddClass(py,typeid,curdestpy);
        //栏目下拉
        var $tabli = $('.tabnav ul li');
        var $tablist = $('.tablist');
        $tabli.click(function(){
            $('body').css('overflow','hidden')
            var $hg = $(window).height();
            $('.tablist ul').css('height',$hg-161)
            $('.tab_bottom_btn').css('display','-webkit-box')
            var index = $($tabli).index(this)
            $(this).addClass('on').siblings().removeClass('on')
            $($tablist).parent('.tabcon').show()
            $($tablist).eq(index).show().siblings().hide()
        })
        //绑定获取下级事件.
        $("body").delegate(".hasnext",'click',function(){
            $("#destpy").val(py);
        });
       $("body").delegate('.dest_load','click',function(){
           var py=$(this).attr('data-py');
           $("#destpy").val(py);
           DestaddClass(py,typeid)
       });
        //热门目的地事件绑定
        $("body").delegate('#dest_content li,#dest_nav a','click',function(){
            var py = $(this).attr('data-py');
            $("#destpy").val(py);
            $(this).addClass('on').siblings().removeClass('on').find('i').removeClass('icon-pitch-on');
            $(this).find('i').not('.icon-right').addClass('icon-pitch-on');
        })
        //属性组点击事件.
        $("body").delegate("#lsit-child li",'click',function(){
            var datatype = $(this).attr('data-type');
            var id = $(this).attr('data-id');
            var childclass = $(this).attr('class')
            if(datatype == 'attr'){
                $('#'+datatype).val()
            }
            $('#'+datatype).val(id);
            $(this).addClass('on').siblings('.'+childclass).removeClass('on');
        })
        //排序子项点击Q
        $('#list-reorder').children('li').click(function(){
            var datatype = $(this).attr('data-type');
            var id = $(this).attr('data-id');
            $('#'+datatype).val(id);
            $(this).addClass('on').siblings().removeClass('on');
        })
        //隐藏属性筛选
        $("#lsit-child").find('li').hide();
        $("#list-way").find('li').click(function(){
           var childclass = $(this).attr('data-child');
           $("#lsit-child").find('li').hide();
           $('#lsit-child').find('.'+childclass).show();
           $(this).addClass('on').siblings().removeClass('on');
        })
       //取消选择
        $('.cancel_btn').click(function(){
            $('.tabcon').hide();
            $('.tab_bottom_btn').hide();
        })
        //默认选中第一个
        if($("#destpy").val() == '0' || $("#destpy").val() == '' || $("#destpy").val() == 'all'){
            $($(".tablist").get(0)).find('li').first().trigger('click');
        }
        //设定第3列属性的选中状态
        var firstChildChoosed=$("#lsit-child li.on:first");
        if(firstChildChoosed.length>=1)
        {
            var childCls = firstChildChoosed.attr('class');
            childCls= $.trim(childCls.replace('on',''));
            var childClsArr=childCls.split(' ');
            for(var i in childClsArr)
            {
                childClsArr[i]= $.trim(childClsArr[i]);
            }
            var hasFound=false;
            $("#list-way li").each(function(index,ele){
                   if(!hasFound)
                   {
                       var dataFlag = $(this).data('child');
                       if($.inArray(dataFlag,childClsArr)!=-1)
                       {
                           $(this).trigger('click');
                           hasFound=true;
                       }
                   }
            });
        }
        else
        {
            $("#list-way li:first").trigger('click');
        }
    })
 </script> <script type="text/html" id="tpl_li_item"> <li class="{{liclass}}" data-id="all" data-py="all" data-flag="{{flag}}" data-type="{{type}}">全部</li>
    {{each list as value i }}
    <li class="{{liclass}}" data-id="{{value.id}}" data-py="{{value.pinyin}}" data-flag="{{flag}}" data-type="{{type}}" data-ajax-div="{{ajaxdiv}}">{{value.kindname}}</li>
    {{/each}}
</script>
