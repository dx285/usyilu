<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>我的应用-思途CMS{$coreVersion}</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css,plist.css'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,jquery.buttonbox.js,choose.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
    <style>
        .cursor{ cursor: pointer}
        .mall .pro-search{ float: left; margin: 3px 0 0 5px;}
    </style>
</head>
<body style="overflow:hidden" class="mall">
<table class="content-tab">
    <tr>
        <td width="119px" class="content-lt-td" valign="top">
            {template 'stourtravel/public/leftnav'}
            <!--右侧内容区-->
        </td>
        <td valign="top" class="content-rt-td" style="overflow:hidden">
            <div class="list-top-set">
                <div class="list-web-pad"></div>
                <div class="list-web-ct">
                    <table class="list-head-tb">
                        <tr>
                            <td class="pro-search head-td-lt">
                                <select id="app_type" name="app_type" class="set-text-xh" style="height: 26px">
                                    <option value=''>应用类型</option>
                                    <?php
                                    foreach($app_type_list as $app_type)
                                    {
                                        echo "<option value='{$app_type->id}'>{$app_type->typename}</option>";
                                    }
                                    ?>
                                </select>
                                <select id="app_status" name="app_status" class="set-text-xh" style="height: 26px">
                                    <option value=''>应用状态</option>
                                    <?php
                                    foreach($app_status_list as $app_status_id=> $app_status)
                                    {
                                        echo "<option value='$app_status_id'>$app_status</option>";
                                    }
                                    ?>
                                </select>

                                <input type="text" id="searchkey" name="searchkey" value="应用关键字" datadef="应用关键字"
                                       class="sty-txt1 set-text-xh wid_200">
                                <a href="javascript:;" class="head-search-btn" onclick="javascript:searchmyapp()"></a>
                            </td>
                            <td class="head-td-rt">
                                <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="product_grid_panel" class="content-nrt">

            </div>
        </td>
    </tr>
</table>
</body>
<script>
    function searchmyapp() {
        var keyword = $.trim($("#searchkey").val());
        keyword = $("#searchkey").attr('datadef') == keyword ? '' : keyword;
        var app_type = $("#app_type").val();
        var app_status = $("#app_status").val();

        window.product_store.getProxy().setExtraParam('searchkey', keyword);
        window.product_store.getProxy().setExtraParam('app_type', app_type);
        window.product_store.getProxy().setExtraParam('app_status', app_status);
        window.product_store.loadPage();
    }

    Ext.onReady(
        function () {
            Ext.tip.QuickTipManager.init();

            $("#searchkey").focusEffect();

            //产品store
            window.product_store = Ext.create('Ext.data.Store', {

                fields: [
                    'id','name','appType','appStatus','appStatusName','number','summary','tag','version','author','modtime','backstageVersion','code'
                ],

                proxy: {
                    type: 'ajax',
                    api: {
                        read: SITEURL + 'mall/ajax_app_read'
                    },
                    reader: {
                        type: 'json',   //获取数据的格式
                        root: 'app'
                        //totalProperty: 'total'
                    }
                },
                remoteSort: false,
                autoLoad: true,
                //pageSize: 30,
                listeners: {
                    load: function (store, records, successful, eOpts) {
                        if (!successful) {
                            ST.Util.showMsg("查找应用信息失败", 5, 3000);
                            return;
                        }

                        window.product_grid.doLayout();
                    }
                }

            });

            //产品列表
            window.product_grid = Ext.create('Ext.grid.Panel', {
                store: product_store,
                renderTo: 'product_grid_panel',
                border: 0,
                bodyBorder: 0,
                bodyStyle: 'border-width:0px',
                scroll: 'vertical', //只要垂直滚动条
                bbar: Ext.create('Ext.toolbar.Toolbar', {
                    store: product_store,  //这个和grid用的store一样
                    displayInfo: true,
                    emptyMsg: "",
                    items: [

                    ],
                    listeners: {
                        single: true,
                        render: function (bar) {
                            var items = this.items;
                            //bar.down('tbfill').hide();

                            bar.insert(0, Ext.create('Ext.panel.Panel', {border: 0, html: '<div class="panel_bar"><a class="abtn" href="javascript:void(0);" onclick="CHOOSE.chooseAll()">全选</a><a class="abtn" href="javascript:void(0);" onclick="CHOOSE.chooseDiff()">反选</a></div>'}));
                            bar.insert(1,Ext.create('Ext.panel.Panel',{border:0,items:[{
                                xtype:'button',
                                cls:'my-extjs-btn',
                                text:'批量处理',
                                menu: {
                                    cls:'menu-no-icon',
                                    width:"82px",
                                    shadow:false,
                                    items:[
                                        {
                                                text: '安装', handler: function () {
                                                    install(get_selected_record());
                                            }
                                        },
                                        {
                                                text: '卸载', handler: function () {
                                                    uninstall(get_selected_record());
                                            }
                                        },
                                        {
                                                text: '正式升级', handler: function () {
                                                    do_upgrade(get_selected_record(),0);
                                            }
                                        },
                                        {
                                                text: '公测升级', handler: function () {
                                                    do_upgrade(get_selected_record(),1);
                                        }
                                        }
                                    ]
                                }

                            }]}));
                            bar.insert(2, Ext.create('Ext.toolbar.Fill'));
                            //items.add(Ext.create('Ext.toolbar.Fill'));
                        }
                    }
                }),
                columns: [
                    {
                        text: '选择',
                        width: '5%',
                        // xtype:'templatecolumn',
                        tdCls: 'product-ch',
                        align: 'center',
                        dataIndex: 'number',
                        border: 0,
                        menuDisabled: true,
                        renderer: function (value, metadata, record) {
                            return  "<input type='checkbox' class='product_check' id='box_" + value + "' style='cursor:pointer' value='" + value + "' data-record-index='" + metadata.recordIndex + "'/>";
                        }
                    },
                    {
                        text: '应用名称',
                        width: '15%',
                        align: 'center',
                        border: 0,
                        dataIndex: 'name',
                        menuDisabled: true,
                        renderer: function (value, metadata, record, rowIndex, colIndex) {
                            var infourl = SITEURL+"mall/info/menuid/193/number/"+record.get("number");
                            return "<a href=\"javascript:;\" onclick=\"javascript:ST.Util.addTab('应用详情', '"+infourl+"');\">" + value + "</a>";
                        }


                    },
                    {
                        text: '应用类型',
                        width: '10%',
                        align: 'center',
                        border: 0,
                        dataIndex: 'appType',
                        menuDisabled: true,
                        renderer: function (value, metadata, record, rowIndex, colIndex) {
                            return value;
                        }


                    },
                    {
                        text: '应用状态',
                        width: '10%',
                        align: 'center',
                        border: 0,
                        dataIndex: 'appStatus',
                        menuDisabled: true,
                        renderer: function (value, metadata, record, rowIndex, colIndex) {
                            var color="#009933";
                            if(value == 0)
                                color="#FF9966";
                            if(value==1)
                                color="#0099CC";
                            if(value==2)
                                color="#FF99CC";
                            if(value==3||value==4)
                                color="red";

                            return "<font color="+color+">"+record.get("appStatusName")+"</font>";
                        }


                    },
                    {
                        text: '应用描述',
                        width: '20%',
                        align: 'center',
                        border: 0,
                        dataIndex: 'summary',
                        menuDisabled: true,
                        renderer: function (value, metadata, record, rowIndex, colIndex) {
                            return value;
                        }


                    },
                    {
                        text: '版本',
                        width: '5%',
                        align: 'center',
                        border: 0,
                        dataIndex: 'version',
                        menuDisabled: true,
                        renderer: function (value, metadata, record, rowIndex, colIndex) {
                            return value;
                        }


                    },
                    {
                        text: '作者',
                        width: '5%',
                        align: 'center',
                        border: 0,
                        dataIndex: 'author',
                        menuDisabled: true,
                        renderer: function (value, metadata, record, rowIndex, colIndex) {
                            return value;
                        }


                    },
                    {
                        text: '最新发布',
                        width: '10%',
                        align: 'center',
                        border: 0,
                        dataIndex: 'modtime',
                        menuDisabled: true,
                        renderer: function (value, metadata, record, rowIndex, colIndex) {
                            return value;
                        }


                    },
                    {
                        text: '版本依赖',
                        width: '8%',
                        align: 'center',
                        border: 0,
                        dataIndex: 'backstageVersion',
                        menuDisabled: true,
                        renderer: function (value, metadata, record, rowIndex, colIndex) {
                            return value;
                        }


                    },
                    {
                        text: '管理',
                        width: '12%',
                        align: 'center',
                        border: 0,
                        dataIndex: 'appStatus',
                        menuDisabled: true,
                        renderer: function (value, metadata, record, rowIndex, colIndex) {
                            var infourl = SITEURL+"mall/info/menuid/193/number/"+record.get("number");
                            var appdetaillink = "<a href=\"javascript:;\" onclick=\"javascript:ST.Util.addTab('应用详情', '"+infourl+"');\">详情</a>";
                            var installlink = "<a href=\"javascript:;\" onclick=\"javascript:install(new Array(get_record("+metadata.recordIndex+")));\">安装</a>";
                            var uninstalllink = "<a href=\"javascript:;\" onclick=\"javascript:uninstall(new Array(get_record("+metadata.recordIndex+")));\">卸载</a>";
                            var enableupgradelink="<a href=\"javascript:;\" onclick=\"javascript:is_upgrade_set(get_record("+metadata.recordIndex+"),1);\">允许升级</a>";
                            var disableupgradelink="<a href=\"javascript:;\" onclick=\"javascript:is_upgrade_set(get_record("+metadata.recordIndex+"),0);\">禁止升级</a>";
                            var doupgradelink="<a href=\"javascript:;\" onclick=\"javascript:do_upgrade(new Array(get_record("+metadata.recordIndex+")),0);\">升级</a>";
                            var dobetaupgradelink="<a href=\"javascript:;\" onclick=\"javascript:do_upgrade(new Array(get_record("+metadata.recordIndex+")),1);\">升级</a>";

                            if(value==0)
                                return appdetaillink+"&nbsp;&nbsp;"+installlink;

                            if(value==1)
                                return appdetaillink+"&nbsp;&nbsp;"+uninstalllink+"&nbsp;&nbsp;"+disableupgradelink

                            if(value==2)
                                return appdetaillink+"&nbsp;&nbsp;"+uninstalllink+"&nbsp;&nbsp;"+enableupgradelink;

                            if(value==3)
                                return appdetaillink+"&nbsp;&nbsp;"+uninstalllink+"&nbsp;&nbsp;"+disableupgradelink+"&nbsp;&nbsp;"+dobetaupgradelink;

                            if(value==4)
                                return appdetaillink+"&nbsp;&nbsp;"+uninstalllink+"&nbsp;&nbsp;"+disableupgradelink+"&nbsp;&nbsp;"+doupgradelink;

                            if(value==5)
                                return appdetaillink+"&nbsp;&nbsp;"+uninstalllink+"&nbsp;&nbsp;"+disableupgradelink;

                            }
                        }

                ],
                listeners: {
                    boxready: function () {


                        var height = Ext.dom.Element.getViewportHeight();
                        this.maxHeight = height - 106;
                        this.doLayout();
                    },
                    afterlayout: function (grid) {

                        var data_height = 0;
                        try {
                            data_height = grid.getView().getEl().down('.x-grid-table').getHeight();
                        } catch (e) {
                        }
                        var height = Ext.dom.Element.getViewportHeight();

                        if (data_height > height - 106) {
                            window.has_biged = true;
                            grid.height = height - 106;
                        }
                        else if (data_height < height - 106) {
                            if (window.has_biged) {


                                window.has_biged = false;
                                grid.doLayout();
                            }
                        }
                    }
                },
                plugins: [

                ],
                viewConfig: {
                    //enableTextSelection:true
                }
            });

        }
    )

    //实现动态窗口大小
    Ext.EventManager.onWindowResize(function () {
        var height = Ext.dom.Element.getViewportHeight();
        var data_height = window.product_grid.getView().getEl().down('.x-grid-table').getHeight();
        if (data_height > height - 106)
            window.product_grid.height = (height - 106);
        else
            delete window.product_grid.height;
        window.product_grid.doLayout();


    })

    function get_selected_record() {
        var check_cmp = Ext.select('.product_check:checked');

        var records = new Array();
        for (var i = 0; i < check_cmp.elements.length; i++) {
            var check_cmp_obj = $(check_cmp.elements[i]);
            records.push(get_record(check_cmp_obj.attr("data-record-index")));
        }

        return records;
    }

    function get_record(record_index) {
        return window.product_store.data.items[record_index].data;
    }

    function to_upgrade_task(upgrade_records) {
        var upgrade_task_list = new Array();

        for (var i = 0; i < upgrade_records.length; i++) {
            var upgrade_task = {
                system_part_code: upgrade_records[i].id,
                name: upgrade_records[i].name,
                upgrade_code: upgrade_records[i].code,
                app_number: upgrade_records[i].number,
                system_part_type: "2"
            };

            upgrade_task_list.push(upgrade_task);
        }

        return upgrade_task_list;
    }

    //安装应用
    function install(records) {
        var upgrade_records = new Array();
        for (var index in records) {
            if (records[index].appStatus == 0)
                upgrade_records.push(records[index]);
        }

        if (upgrade_records.length <= 0) {
            ST.Util.showMsg("没有可执行安装的应用", 5, 3000);
            return;
        }

        ST.Util.confirmBox('应用安装', '确定对' + upgrade_records.length + "个应用执行安装?", function () {
            ST.Util.showMsg("正在准备执行应用安装...", 6, 1000000);
            $.ajax({
                type: 'post',
                url: SITEURL + "upgrade/ajax_ready_upgrade",
                data: {upgrade_task_list: to_upgrade_task(upgrade_records)},
                dataType: 'json',
                success: function (rs) {
                    ST.Util.hideMsgBox();
                    if (rs.status === 1) {
                        var url = SITEURL + "upgrade/install";
                        ST.Util.showBox("应用安装", url, 450, 300, function () {
                            searchmyapp()
                        });
                    } else {
                        ST.Util.showMsg(rs.msg, 5, 3000);
                    }
                }
            });
        });
    }
    //卸载应用
    function uninstall(records) {
        var upgrade_records = new Array();
        for (var index in records) {
            if (records[index].appStatus != 0)
                upgrade_records.push(records[index]);
        }

        if (upgrade_records.length <= 0) {
            ST.Util.showMsg("没有可执行卸载的应用", 5, 3000);
            return;
        }

        ST.Util.confirmBox('应用卸载', '确定对' + upgrade_records.length + "个应用执行卸载?", function () {
            ST.Util.showMsg("正在准备执行应用卸载...", 6, 1000000);
            $.ajax({
                type: 'post',
                url: SITEURL + "upgrade/ajax_ready_upgrade",
                data: {upgrade_task_list: to_upgrade_task(upgrade_records)},
                dataType: 'json',
                success: function (rs) {
                    ST.Util.hideMsgBox();
                    if (rs.status === 1) {
                        var url = SITEURL + "upgrade/uninstall";
                        ST.Util.showBox("应用卸载", url, 450, 300, function () {
                            searchmyapp()
                        });
                    } else {
                        ST.Util.showMsg(rs.msg, 5, 3000);
                    }
                }
            });
        });
    }
    //升级应用
    function do_upgrade(records, is_beta) {
        var upgrade_records = new Array();
        for (var index in records) {
            var app_status = (is_beta == 1 ? 3 : 4);
            if (records[index].appStatus == app_status)
                upgrade_records.push(records[index]);
        }

        var upgrade_action_name = (is_beta == 1 ? "公测升级" : "正式升级");
        var upgrade_action = (is_beta == 1 ? "betaupgrade" : "upgrade");
        if (upgrade_records.length <= 0) {
            ST.Util.showMsg("没有可执行" + upgrade_action_name + "的应用", 5, 3000);
            return;
        }

        ST.Util.confirmBox('应用' + upgrade_action_name, '确定对' + upgrade_records.length + "个应用执行" + upgrade_action_name + '?', function () {
            ST.Util.showMsg("正在准备执行应用" + upgrade_action_name + "...", 6, 1000000);
            $.ajax({
                type: 'post',
                url: SITEURL + "upgrade/ajax_ready_upgrade",
                data: {upgrade_task_list: to_upgrade_task(upgrade_records)},
                dataType: 'json',
                success: function (rs) {
                    ST.Util.hideMsgBox();
                    if (rs.status === 1) {
                        var url = SITEURL + "upgrade/" + upgrade_action;
                        ST.Util.showBox("应用" + upgrade_action_name, url, 450, 300, function () {
                            searchmyapp()
                        });
                    } else {
                        ST.Util.showMsg(rs.msg, 5, 3000);
                    }
                }
            });
        });
    }
    //设置应用升级状态
    function is_upgrade_set(record, status) {
        ST.Util.confirmBox('应用升级状态', '确定' + (status == 0 ? '禁止' : '允许') + record.name + '升级?', function () {
            ST.Util.showMsg('正在设置应用升级状态...', 6, 1000000);
            $.ajax({
                type: 'post',
                url: SITEURL + "mall/is_upgrade_set",
                data: {appid: record.id, status: status},
                dataType: 'json',
                success: function (rs) {
                    ST.Util.hideMsgBox();
                    var showTime = 1000;
                    if (rs.status === 1) {
                        ST.Util.showMsg(rs.msg, 4, showTime);
                        setTimeout(function () {
                            searchmyapp();
                        }, showTime);
                    } else {
                        ST.Util.showMsg(rs.msg, 5, 3000);
                    }
                }
            });
        });
    }

</script>
</html>