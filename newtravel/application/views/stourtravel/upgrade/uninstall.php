<!doctype html>
<html>
<head div_table=EVxsEC >
    <meta charset="utf-8">
    <title>思途CMS{$coreVersion}</title>
    {template 'stourtravel/public/public_min_js'}
    {php echo Common::getCss('style.css,base.css,base2.css,plist.css,mall.css,upgrade.css'); }
    {php echo Common::getScript("template.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }

</head>
<body style="background-color: #fff">

<div class="out-box-con">
    {if $error_msg!=""}
    <div class="con">
        <p class="error">{$error_msg}</p>
        <a class="sure" href="javascript: ST.Util.closeBox();">关闭</a>
    </div>
    {else}
    <div class="con" id="uninstall_info"></div>
    {/if}
</div>

</body>

<scirpt id="task_complete" type="text/html" style="display: none;">
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <p class="tiwen">成功完成{{task_count}}个卸载任务！</p>
    <a class="sure" href="javascript: ST.Util.closeBox();">关闭</a>
</scirpt>

<scirpt id="task_exec" type="text/html" style="display: none;">
    <p class="num">共需卸载<em>{{task_count}}</em>个应用，正在卸载{{current_task.name}}，第<span>{{current_task_position}}/{{task_count}}</span>个</p>
    <p class="tiwen">卸载应用{{current_task.name}}中，请稍候...</p>
    <p class="progress-bar"></p>
    <div class="notice">
        <label>
            注意：</label>
        <p>
            卸载过程中，请勿强制取消、刷新、关闭系统页面，否则会导致卸载失败！</p>
    </div>
</scirpt>

<scirpt id="task_exec_error" type="text/html" style="display: none;">
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <p class="num">共需卸载<em>{{task_count}}</em>个应用，正在卸载{{current_task.name}}，第<span>{{current_task_position}}/{{task_count}}</span>个</p>
    <p class="error">卸载应用{{current_task.name}}失败，原因：{{#uninstall_error_msg}}</p>
</scirpt>

<script language="JavaScript">
    var startup_error = '{$error_msg}';

    var task_list_json = '{$task_list}';
    var task_list = new Array();
    var current_task = null;
    var current_task_index = 0;

    $(function () {
        if (startup_error != "")
            return;

        if (task_list_json != "") {
            task_list = $.parseJSON(task_list_json);
        }

        exec_uninstall();
    })

    function exec_uninstall() {
        if (current_task_index > (task_list.length - 1)) {
            show_complete_ui();
            return;
        }

        current_task = task_list[current_task_index];
        show_task_exec_ui();

        $.ajax({
            type: 'post',
            url: SITEURL + "upgrade/ajax_exec_uninstall",
            data: {task: current_task},
            dataType: 'json',
            success: function (rs) {
                if (rs.status == 1) {
                    current_task_index++;
                    exec_uninstall();
                } else {
                    show_task_exec_error_ui(rs.msg);
                }
            }
        });
    }

    function show_complete_ui() {
        var html = template('task_complete', {task_count: task_list.length});
        $('#uninstall_info').html(html);
        clear_cache();
    }

    function show_task_exec_ui() {
        var html = template('task_exec', {
            task_count: task_list.length,
            current_task_position: current_task_index + 1,
            current_task: current_task
        });
        $('#uninstall_info').html(html);
    }

    function show_task_exec_error_ui(uninstall_error_msg) {
        var html = template('task_exec_error', {
            task_count: task_list.length,
            current_task_position: current_task_index + 1,
            uninstall_error_msg: uninstall_error_msg,
            current_task: current_task
        });
        $('#uninstall_info').html(html);
    }

    function clear_cache() {
        $.ajax(
            {
                type: "post",
                url: SITEURL + 'index/ajax_clearcache',
                beforeSend: function () {
                    ST.Util.showMsg('正在清除缓存,请稍后...', 6, 60000);
                },
                success: function (data) {
                    if (data == 'ok') {
                        ST.Util.showMsg('缓存清除成功', 4, 1000);
                    }
                }

            }
        );
    }
</script>
</html>