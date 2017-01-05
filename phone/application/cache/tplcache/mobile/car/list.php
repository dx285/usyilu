<?php defined('SYSPATH') or die();?> <!doctype html> <html> <head> <meta charset="utf-8"> <title><?php echo $seoinfo['seotitle'];?>-<?php echo $webname;?></title> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> <?php echo Common::css('amazeui.css,style.css,extend.css');?> <?php echo Common::js('jquery.min.js,amazeui.js,template.js');?> </head> <body> <?php echo Request::factory("pub/header/typeid/$typeid")->execute()->body(); ?> <section> <div class="mid_content"> <div class="term-list"> <?php echo Request::factory("pub/select/typeid/$typeid/destid/$destid")->execute()->body(); ?> </div> <!--栏目筛选--> <div class="st_list_line" id="list-content"> <ul id="result_list"> </ul> <div class="tuan_more" id="btn_getmore"><a class="cursor">加载更多</a></div> </div> <!--没有相关信息--> <div class="no-content" id="no-content" style="display: none"> <img src="<?php echo $GLOBALS['cfg_public_url'];?>images/nocon.png"/> <p>啊哦，暂时没有相关信息</p> </div> </div> <input type="hidden" id="keyword" value="<?php echo $keyword;?>"/> <input type="hidden" id="page" value="<?php echo $page;?>"/> </section> <script type="text/html" id="tpl_list_item">
    {{each list as value i}}
    <li> <a href="{{value.url}}"> <div class="pic"> <img src="{{value.litpic}}" alt="{{value.title}}"/> </div> <div class="txt"> <p class="bt">{{value.title}}</p> <p class="myd_type"> <span>
                        {{each value.attrlist as attr j }}
                            {{attr.attrname}}
                        {{/each}}
                    </span> </p> <p class="myd_type"><span>{{value.kindname}}</span></p> <p class="price">
                    {{ if value.price>0}}
                    <span><i class="currency_sy"><?php echo Currency_Tool::symbol();?></i><b>{{value.price}}</b>起</span>
                    {{ else}}
                    <span>电询</span>
                    {{/if}}
                </p> </div> </a> </li>
    {{/each}}
</script> <?php echo Common::js('layer/layer.m.js');?> <script>
    //搜索
    $(".btn_search").click(function(){
        var keyword = $('#keyword').val();
        var url = SITEURL+'cars/all';
        if(keyword!='')
        {
            url += '?keyword='+encodeURIComponent(keyword);
        }
        window.location.href = url;
    })
    //初始页码
    var initpage = '<?php echo $page;?>';
    $(function () {
        if(initpage !=  $("#page").val()){
            $("#page").val(initpage);
        }
        //pub/select 确定选择点击事件在这里重写.
        $('.sure_btn').click(function () {
            $("#page").val(1);
            $('.tabcon').hide();
            $('.tab_bottom_btn').hide();
            var url = SITEURL + 'cars/' + get_url();
            window.location.href = url;
        })
        //获取更新数据
        $('#btn_getmore').click(function () {
            get_data();
        })
        //第一次加载数据
        get_data();
    })
    //获取list地址
    function get_url() {
        //获取选中的目的地
        var pinyin = $("#destpy").val();
        var url = pinyin;
        //获取attrid
        var attrid = $("#attrid").val();
        //获取kindid
        var kindid = $("#kindid").val();
        //获取选中的属性
        var attr = [];
        $('#lsit-child').find("li[class^='gattr']").each(function (i, obj) {
            if ($(obj).attr('data-type') == 'attrid' && $(this).hasClass('on')) {
                attr.push($(this).attr('data-id'));
            }
        })
        var attrid = $("#attrid").val();
        if (attr.length > 0) {
            attrid = attr.join('_');
        }
        //排序规则
        var sorttype = $("#sorttype").val();
        //搜索名称
        var keyword = $('#keyword').val();
        //当前页 page
        var page = $("#page").val();
        page = page == '' ? 1 : page;
        url += '-' + kindid + '-' + sorttype + '-' + attrid + '-' + page + '?keyword=' + encodeURIComponent(keyword);
        return url;
    }
    //ajax获取数据
    var contentNum = 0;
    function get_data() {
        var paramUrl = get_url();
        var url = SITEURL + 'car/ajax_car_more/' + paramUrl;
        layer.open({
            type: 2,
            content: '',
            time: 20
        });
        $.getJSON(url, {}, function (data) {
            if (data.list.length > 0) {
                var itemHtml = template('tpl_list_item', data);
                $("#result_list").append(itemHtml);
                contentNum++;
            }
            //设置分页
            if (data.page != -1) {
                $("#page").val(data.page);
            } else {
                $("#btn_getmore").hide();
            }
            //设置内内容显示
            if (contentNum == 0) {
                $('#list-content').hide();
                $("#no-content").show();
            }
            layer.closeAll();
        });
    }
</script> <?php echo Request::factory('pub/code')->execute()->body(); ?> <?php echo Request::factory('pub/footer')->execute()->body(); ?> </body> </html>
