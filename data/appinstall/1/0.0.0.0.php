<?php define('DATAPATH', dirname(dirname(dirname(__FILE__))));
require_once(DATAPATH . "/slinesql.class.php");
//执行sql  $mysql->query
//检测数据 $mysql->check_data  bool
//检测字段 $mysql->check_column boo
//检测表   $mysql->check_table bool
//检测索引 $mysql->check_index bool
//获取错误 $mysql->error() void | string(错误信息)

delete_data();
//delete_table();
//添加核心数据
function delete_data()
{
    global $mysql;
    $sqls = array(
        //model
        'sline_model' => 'where id=1 and pinyin="line"',
        //page
        'sline_page' => 'where pagename in ("line_index","line_list","line_show") or (pid=0 and kindname="线路模块")',
        //site_page
        'sline_site_page' => 'where pagename in ("line_index","line_list","line_show") or (pid=0 and kindname="线路模块")',
        //sms_msg
        'sline_sms_msg' => 'where msgtype in("line_order_msg1","line_order_msg2","line_order_msg3","line_order_msg4")',
        //email_msg
        'sline_email_msg' => 'where msgtype in("line_order_msg1","line_order_msg2","line_order_msg3","line_order_msg4")',
        //advertise_5x
        'sline_advertise_5x' => 'where is_system="1" and prefix="line_index"',
        //sysconfig
        'sline_sysconfig' => 'where varname="cfg_line_minprice_rule"',
        //sline_menu_new
        'sline_menu_new' => 'where typeid=1',
        //sline_nav
        'sline_nav' => 'where typeid=1',
        //sline_m_nav
        'sline_m_nav' => 'where m_typeid=1'
    );
    foreach ($sqls as $k => $v)
    {
        $mysql->query("delete from {$k} {$v}");
    }
}

//卸载引导模块
define('BASEPATH', dirname(DATAPATH));
$moduleArr = array();
$moduleFile = BASEPATH . str_replace('/', DIRECTORY_SEPARATOR, '/data/module.php');
if (file_exists($moduleFile))
{
    $moduleArr = include $moduleFile;
}
if (isset($moduleArr['line']))
{
    unset($moduleArr['line']);
    file_put_contents($moduleFile, "<?php \r\n" . 'return ' . var_export($moduleArr, true) . ';');
}
//更新视图
update_view_table(1);
function update_view_table($typeid)
{
    global $mysql;
    $file = DATAPATH . '/model_search.php';
    $model = include $file;
    if (is_array($model) && isset($model[$typeid]))
    {
        unset($model[$typeid]);
    }
    else
    {
        return;
    }
    ksort($model);
    $view = ' create view sline_search (channelname,webid,aid,typeid,title,description,litpic,shownum,kindlist,attrid,headimgid,tid,ishidden)
AS ';
    $view .= empty($model) ? '' : (implode(' union ', $model) . ' union ');
    $view .= "SELECT '通用',webid,aid,typeid,title,content,litpic,shownum,kindlist,attrid,0,id,ishidden FROM sline_model_archive;";
    //删除视图
    $mysql->query('DROP VIEW IF EXISTS `sline_search`;');
    //创建视图
    $mysql->query("{$view}");
    //写入model_search
    file_put_contents($file, "<?php \r\n return " . var_export($model, true) . ';');
}