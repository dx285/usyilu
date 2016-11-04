{Common::css('header.css',false)}
{Common::load_skin()}
{if $indexpage}
{st:ad action="getad" name="HeaderAd" pc="1" row="1"}
    {if !empty($data)}
    <div class="top-column-banner">
        <div class="wm-1200"><i class="top-closed"></i></div>
        <a href="{$data['adlink']}" target="_blank"><img src="{Common::img($data['adsrc'])}" title="{$data['adname']}"></a>
    </div><!--顶部广告-->
    {/if}
    <script>
        $(function(){
            $('.top-closed').click(function(){
                $(".top-column-banner").slideUp();
            })
        })
    </script>
{/if}
<div class="web-top">
    <div class="wm-1200">
        <div class="notice-txt">{$GLOBALS['cfg_gonggao']}</div>

        <div class="top-login">
            <span id="loginstatus">
            </span>
            <a class="dd" href="{$cmsurl}search/order"><i></i>订单查询</a>
            <dl class="dh">
                <dt><i></i>网站导航</dt>
                <dd>
                    {st:channel action="pc" row="20"}
                      {loop $data $row}
                       <a href="{$row['url']}">{$row['title']}</a>
                      {/loop}
                    {/st}
                </dd>
            </dl>

        </div>
        <div class="scroll-order">
            <ul>
                {st:comment action="query" flag="all" row="3"}
                {loop $data $row}
                <li>{$row['nickname']}{$row['pltime']}评论了{$row['productname']}</li>
                {/loop}
                {/st}
            </ul>
        </div>
    </div>
</div><!--顶部-->

<div class="st-header">
    <div class="wm-1200">
        <div class="st-logo">
            {if !empty($GLOBALS['cfg_logo'])}
            <a href="{$GLOBALS['cfg_logourl']}"><img src="{Common::img($GLOBALS['cfg_logo'],298,85)}" alt="{$GLOBALS['cfg_logotitle']}" /></a>
            {/if}
        </div>
        <div class="st-top-search">
            <div class="st-search-down">
                <strong id="typename"><i></i></strong>
                <ul class="st-down-select searchmodel">
                    <li data-id="0">全部</li>
                    {loop $searchmodel $m}
                        <li data-id="{$m['id']}" data-url="{$m['url']}">{$m['modulename']}</li>
                    {/loop}

                </ul>
            </div>
            <input type="text" id="st-top-search" class="st-txt searchkeyword" placeholder="输入目的地、酒店、攻略" />
            <input type="button" value="搜索" class="st-btn" />
            <span id="dt-top-search-span">
            {st:hotsearch action="hot" row="3"}
             {loop $data $row}
        	  <a href="{$row['url']}" target="_blank">{$row['title']}</a>
             {/loop}
            {/st}
            </span>
            <div class="st-hot-dest-box" id="stHotDestBox">
                <div class="block-tit"><strong>热门搜索</strong><i class="close-ico"></i></div>
                <div class="block-nr">
                    <dl>
                        <dt>热搜词</dt>
                        <dd class="clearfix">
                            {st:hotsearch action="hot" row="20" return="d"}
                                {loop $d $row}
                                <a href="{$row['url']}" target="_blank">{$row['title']}</a>
                                {/loop}
                            {/st}
                        </dd>
                    </dl>
                    <dl>
                        <dt>目的地</dt>
                        <dd class="clearfix">
                            {st:dest flag="order" action="query" row="20"}
                                {loop $data $row}
                                <a href="{$GLOBALS['cfg_basehost']}/{$row['pinyin']}/" target="_blank">{$row['kindname']}</a>
                                {/loop}
                            {/st}
                        </dd>
                    </dl>
                </div>
            </div><!--热搜框-->
            <script>
                $(function(){
                    $('#st-top-search').click(function(event){
                        $('#stHotDestBox').show();
                        event.stopPropagation();
                    });
                    $('.close-ico').click(function(event){
                        $('#stHotDestBox').hide();
                        event.stopPropagation();
                    });
                    $('body').click(function(){
                        $('#stHotDestBox').hide();
                    });
                })
            </script>
        </div>
        <div class="st-link-way">
            <img class="link-way-ico" src="{if empty($GLOBALS['cfg_kefu_icon'])}/res/images/24hours-ico.png{else}{$GLOBALS['cfg_kefu_icon']}{/if}" width="45" height="45" />
            <div class="link-way-txt">
                <em>{str_replace(array(',',';',':','，'),'<br />',$GLOBALS['cfg_phone'])}</em>
            </div>
        </div>
    </div>
</div><!--header-->

<div class="st-nav">
    <div class="wm-1200">
        {include "pub/usernav"}
        <div class="st-menu">

            <ul class="clearfix">
                <li><a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}<s></s></a></li>
                {st:channel action="pc" row="20"}
                {loop $data $row}
                <li class="nav_header_{$row['typeid']}">
                    {if $row['kind']==1}
                    <i class="st-new-ico"></i><s></s>
                    {elseif $row['kind']==2}
                    <i class="st-hot-ico"></i><s></s>
                    {elseif $row['kind']==3}
                    <i class="st-jing-ico"></i><s></s>
                    {elseif $row['kind']==4}
                    <i class="st-jian-ico"></i><s></s>
                    {/if}

                    {if !empty($row['submenu'])}
                    <i class="st-arrow-ico"></i>
                    {/if}
                    <s></s>
                    <a href="{$row['url']}" >{$row['title']}</a>
                    {if !empty($row['submenu'])}
                    <div class="down-nav">
                        <div class="sub-list">
                            {loop $row['submenu'] $submenu}
                            <a href="{$submenu['url']}">{$submenu['title']}</a>
                            {/loop}
                        </div>

                    </div>
                    {/if}
                </li>
                {/loop}


            </ul>

        </div>
    </div>
</div><!--主导航-->
{Common::js('SuperSlide.min.js')}
<script>
    var SITEURL = "{$cmsurl}";
    $(function(){
        $(".searchmodel li").click(function(){
            var typeid = $(this).attr('data-id');
            var durl = $(this).attr('data-url');
            var typename = $(this).text();
            $("#typename").html(typename+'<i></i>');
            $("#typename").attr('data-id',typeid);
            $("#typename").attr('data-url',durl);

        })
        $(".searchmodel li:first").trigger('click');
        //search
        $('.st-btn').click(function(){

            var keyword = $('.searchkeyword').val();
            if(keyword == ''){
                $('.searchkeyword').focus();
                return false;
            }
            var typeid = $("#typename").attr('data-id');
            var durl = $("#typename").attr('data-url');
            if(typeid==0 || typeid==8){
                var url = SITEURL+'search/cloudsearch?keyword='+encodeURIComponent(keyword)+"&typeid="+typeid;
            }else{
                var url = "{$GLOBALS['cfg_basehost']}"+durl+'all?keyword='+encodeURIComponent(keyword);
            }

            location.href = url;
        })
        //search focus
        var topSearch={};
        topSearch.placeholder=$('#st-top-search').attr('placeholder');
        topSearch.spanHtml=$('#dt-top-search-span').html();
        $('#st-top-search').focus(function(){
            $('#st-top-search').attr('placeholder','');
            $('#dt-top-search-span').html('');
            $(this).keyup(function(event){
                if(event.keyCode ==13){
                    $('.st-btn').click();
                }
            });
        });

        $('#st-top-search').blur(function(){
          if($(this).val()==''){
              $('#st-top-search').attr('placeholder',topSearch.placeholder);
              $('#dt-top-search-span').html(topSearch.spanHtml);
          }
        });
        //导航的选中状态
        $(".st-menu a").each(function(){
            var url= window.location.href;
            url=url.replace('index.php','');
            url=url.replace('index.html','');
            var ulink=$(this).attr("href");
            if(url==ulink)
            {
                $(this).parents("li:first").addClass('active');
            }
        })
        //登陆状态
        $.ajax({
            type:"POST",
            async:false,
            url:SITEURL+"member/login/ajax_is_login",
            dataType:'json',
            success:function(data){
                if(data.status){
                    $txt = '<a class="dl" style="padding:0" href="javascript:;">你好,</a>';
                    $txt+= '<a class="dl" href="{Common::get_main_host()}/member/">'+data.user.nickname+'</a>';
                    $txt+= '<a class="dl" href="{Common::get_main_host()}/member/login/loginout">退出</a>';
                    //$txt+= '<a class="dl" href="{$cmsurl}member">个人中心</a>';
                }else{

                    $txt = '<a class="dl" href="{Common::get_main_host()}/member/login">登录</a>';
                    $txt+= '<a class="zc" href="{Common::get_main_host()}/member/register">免费注册</a>';
                }
                $("#loginstatus").html($txt);
            }
        })

        //二级导航
        var offsetLeft = new Array();
        var windowWidth = $(window).width();

        function get_width(){
            windowWidth = $(window).width();
            //设置"down-nav"宽度为浏览器宽度
            $(".down-nav").width($(window).width());

            $(".st-menu li").hover(function(){

                var liWidth = $(this).width()/2;

                $(this).addClass("this-hover");
                offsetLeft = $(this).offset().left;
                $(this).children(".down-nav").css("left",-offsetLeft);
                offsetLeft = $(this).offset().left;
                //获取当前选中li下的sub-list宽度
                var nav_left = $(this).parents(".wm-1200:first").offset().left;
                var nav_width=$(this).parents(".wm-1200:first").width();
                var nav_right= nav_left+nav_width;
                var sub_list_width = $(this).children(".down-nav").children(".sub-list").width();

                if(sub_list_width>nav_width)
                   sub_list_width=nav_width;

                var sub_list_left=offsetLeft-sub_list_width/2+liWidth;
                var sub_list_right=sub_list_left+sub_list_width;
                $(this).children(".down-nav").children(".sub-list").css("width",sub_list_width);
                $(this).children(".down-nav").children(".sub-list").css("left",sub_list_left);



                if(sub_list_left<nav_left)
                {
                    $(this).children(".down-nav").children(".sub-list").css("left",nav_left);
                }

                if(sub_list_right>nav_right)
                {
                    $(this).children(".down-nav").children(".sub-list").css("left",nav_right-sub_list_width);
                }



               // alert(nav_left);

              /*  var offsetRight = windowWidth-offsetLeft;
                var side_width = (windowWidth - 1200)/2;

                if(sub_list_width > offsetRight){
                    $(this).children(".down-nav").children(".sub-list").css({"right":side_width,"left":offsetLeft-sub_list_width/2+liWidth,"width":"auto"});
                }

                if(side_width > offsetLeft-sub_list_width/2+liWidth){
                    $(this).children(".down-nav").children(".sub-list").css({"right":side_width,"left":side_width,"width":"auto"});
                }
                */




            },function(){
                $(this).removeClass("this-hover");
            });
        };

        $(window).resize(function(){
            get_width();
        });
        get_width();

        //选中导航
        var typeid = "{$typeid}";
        if(typeid!=''){
            $('.nav_header_'+typeid).addClass('active');
        }



    })
</script>