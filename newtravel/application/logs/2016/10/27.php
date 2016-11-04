<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-27 04:06:29 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_startplace` SET `displayorder` = '' WHERE `id` = '76' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 04:06:29 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_startplace` SET `displayorder` = '' WHERE `id` = '76' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_s...', false, Array)
#1 /var/www/gogogous/newtravel/application/classes/controller/startplace.php(168): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Startplace->action_index()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Startplace))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#7 {main}
2016-10-27 04:14:15 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (4, 1477512855, 0, '旧金山三日游', '买二送一', '40', '40', '3', '3', 0, '', '10', '9000', '', 'line_new/line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477512855, 2, '1', '', '', '', '', '', '', '', '', '', '81', '飞机', '2', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 04:14:15 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (4, 1477512855, 0, '旧金山三日游', '买二送一', '40', '40', '3', '3', 0, '', '10', '9000', '', 'line_new/line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477512855, 2, '1', '', '', '', '', '', '', '', '', '', '81', '飞机', '2', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 04:14:45 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (4, 1477512885, 0, '旧金山三日游', '买二送一', '40', '40', '3', '3', 0, '', '10', '9000', '', 'line_new/line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477512885, 2, '1', '', '', '', '', '', '', '', '', '', '81', '飞机', '2', '', '/uploads/2016/1027/4ddb50a42e73561ae98fc533d04bd71b.jpg', '/uploads/2016/1027/4ddb50a42e73561ae98fc533d04bd71b.jpg||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 04:14:45 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (4, 1477512885, 0, '旧金山三日游', '买二送一', '40', '40', '3', '3', 0, '', '10', '9000', '', 'line_new/line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477512885, 2, '1', '', '', '', '', '', '', '', '', '', '81', '飞机', '2', '', '/uploads/2016/1027/4ddb50a42e73561ae98fc533d04bd71b.jpg', '/uploads/2016/1027/4ddb50a42e73561ae98fc533d04bd71b.jpg||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 04:16:24 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (4, 1477512984, 0, '旧金山三日游', '买二送一', '40', '40', '3', '3', 0, '', '20', '9999', '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477512984, 2, '1', '', '', '', '', '', '', '', '', '', '75', '飞机', '2', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 04:16:24 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (4, 1477512984, 0, '旧金山三日游', '买二送一', '40', '40', '3', '3', 0, '', '20', '9999', '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477512984, 2, '1', '', '', '', '', '', '', '', '', '', '75', '飞机', '2', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 04:18:44 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (4, 1477513124, 0, '旧金山三日游', '买二送一', '40', '40', '3', '3', 0, '', '20', '9999', '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477513124, 2, '1', '', '', '', '', '', '', '', '', '', '81', '飞机', '2', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 04:18:44 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (4, 1477513124, 0, '旧金山三日游', '买二送一', '40', '40', '3', '3', 0, '', '20', '9999', '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477513124, 2, '1', '', '', '', '', '', '', '', '', '', '81', '飞机', '2', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 04:19:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (4, 1477513154, 0, '旧金山三日游', '买二送一', '40', '40', '3', '3', 0, '', '20', '9999', '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477513154, 2, '1', '', '', '', '', '', '', '', '', '', '81', '飞机', '2', '', '/uploads/2016/1027/4ddb50a42e73561ae98fc533d04bd71b.jpg', '/uploads/2016/1027/4ddb50a42e73561ae98fc533d04bd71b.jpg||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 04:19:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `litpic`, `piclist`, `linedoc`, `adminid`) VALUES (4, 1477513154, 0, '旧金山三日游', '买二送一', '40', '40', '3', '3', 0, '', '20', '9999', '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477513154, 2, '1', '', '', '', '', '', '', '', '', '', '81', '飞机', '2', '', '/uploads/2016/1027/4ddb50a42e73561ae98fc533d04bd71b.jpg', '/uploads/2016/1027/4ddb50a42e73561ae98fc533d04bd71b.jpg||', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 04:22:49 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (4, 1477513369, 0, '洛杉矶二日游', '买二送一', '38', '38', '2', '2', 0, '', '10', '9999', '', 'line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477513369, 2, '1', '', '', '', '', '', '', '', '', '', '80', '飞机', '1', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 04:22:49 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (4, 1477513369, 0, '洛杉矶二日游', '买二送一', '38', '38', '2', '2', 0, '', '10', '9999', '', 'line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477513369, 2, '1', '', '', '', '', '', '', '', '', '', '80', '飞机', '1', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 04:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/js/uploadify/btn_subon.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-10-27 04:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/js/uploadify/btn_subon.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#3 {main}
2016-10-27 04:57:03 --- ERROR: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_stats' doesn't exist [ select count(*) as num from sline_stats a where a.id is not null  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 04:57:03 --- STRACE: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_stats' doesn't exist [ select count(*) as num from sline_stats a where a.id is not null  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 /var/www/gogogous/newtravel/application/classes/controller/visit.php(74): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Visit->action_index()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Visit))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#7 {main}
2016-10-27 05:04:37 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477515877, '凯迪拉克', '', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:04:37 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477515877, '凯迪拉克', '', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:08:33 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516113, '凯迪拉克', '', 0, 0, 0, 0, '', '', '', 90, 0, '0', '2', '0', '', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:08:33 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516113, '凯迪拉克', '', 0, 0, 0, 0, '', '', '', 90, 0, '0', '2', '0', '', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:09:07 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516147, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:09:07 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516147, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:11:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477516274, '万豪', '3151 Broadway, New York, NY, USA', '0', '买二送一', '', '', '', '', '', '4', 0, 0, '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477516274, '3', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:11:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477516274, '万豪', '3151 Broadway, New York, NY, USA', '0', '买二送一', '', '', '', '', '', '4', 0, 0, '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477516274, '3', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/hotel/classes/controller/admin/hotel.php(461): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Hotel->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Hotel))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:11:19 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477516279, '万豪', '3151 Broadway, New York, NY, USA', '0', '买二送一', '', '', '', '', '', '4', 0, 0, '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477516279, '3', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:11:19 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477516279, '万豪', '3151 Broadway, New York, NY, USA', '0', '买二送一', '', '', '', '', '', '4', 0, 0, '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477516279, '3', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/hotel/classes/controller/admin/hotel.php(461): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Hotel->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Hotel))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:11:21 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477516281, '万豪', '3151 Broadway, New York, NY, USA', '0', '买二送一', '', '', '', '', '', '4', 0, 0, '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477516281, '3', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:11:21 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477516281, '万豪', '3151 Broadway, New York, NY, USA', '0', '买二送一', '', '', '', '', '', '4', 0, 0, '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477516281, '3', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/hotel/classes/controller/admin/hotel.php(461): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Hotel->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Hotel))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:11:21 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477516281, '万豪', '3151 Broadway, New York, NY, USA', '0', '买二送一', '', '', '', '', '', '4', 0, 0, '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477516281, '3', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:11:21 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477516281, '万豪', '3151 Broadway, New York, NY, USA', '0', '买二送一', '', '', '', '', '', '4', 0, 0, '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477516281, '3', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/hotel/classes/controller/admin/hotel.php(461): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Hotel->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Hotel))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:15:17 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477516517, '万豪', '3151 Broadway, New York, NY, USA', '0', '买二送一', '', '', '', '', '', '4', 0, 0, '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477516517, '3', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:15:17 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477516517, '万豪', '3151 Broadway, New York, NY, USA', '0', '买二送一', '', '', '', '', '', '4', 0, 0, '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477516517, '3', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/hotel/classes/controller/admin/hotel.php(461): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Hotel->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Hotel))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:15:23 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516523, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:15:23 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516523, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:17:08 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516628, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:17:08 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516628, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:17:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516634, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:17:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516634, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:17:57 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516677, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:17:57 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516677, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:18:02 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516682, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:18:02 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516682, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 05:19:01 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516741, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 05:19:01 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (1, 1477516741, '凯迪拉克', '买二送一', '10', '8', '10', '1111111111', '', '', '', 90, 0, '0', '2', '0', '36', '36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 06:07:46 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519666, 0, '黄石', '', '', '', '3', 0, 0, '', 0, 0, '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477519666, 2, '1', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 06:07:46 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519666, 0, '黄石', '', '', '', '3', 0, 0, '', 0, 0, '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477519666, 2, '1', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 06:08:13 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519693, 0, '黄石', '', '', '', '3', 0, 0, '', 0, 0, '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477519693, 2, '1', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 06:08:13 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519693, 0, '黄石', '', '', '', '3', 0, 0, '', 0, 0, '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477519693, 2, '1', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 06:08:51 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519731, 0, '黄石', '买二送一', '41', '41', '3', '2', 0, '', 0, 0, '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477519731, 2, '1', '', '', '', '', '', '', '', '', '', '78', '', '3', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 06:08:51 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519731, 0, '黄石', '买二送一', '41', '41', '3', '2', 0, '', 0, 0, '', 'line_show.htm', '', 0, 0, 0, '', '', '', '', 1477519731, 2, '1', '', '', '', '', '', '', '', '', '', '78', '', '3', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 06:09:12 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519752, 0, '黄石', '买二送一', '41', '41', '3', '2', 0, '', 0, 0, '', 'line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477519752, 2, '1', '', '', '', '', '', '', '', '', '', '78', '', '3', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 06:09:12 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519752, 0, '黄石', '买二送一', '41', '41', '3', '2', 0, '', 0, 0, '', 'line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477519752, 2, '1', '', '', '', '', '', '', '', '', '', '78', '', '3', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 06:09:35 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519775, 0, '黄石', '买二送一', '41', '41', '3', '2', 0, '', '20', 0, '', 'line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477519775, 2, '1', '', '', '', '', '', '', '', '', '', '78', '', '3', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 06:09:35 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519775, 0, '黄石', '买二送一', '41', '41', '3', '2', 0, '', '20', 0, '', 'line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477519775, 2, '1', '', '', '', '', '', '', '', '', '', '78', '', '3', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 06:12:35 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519955, 0, '黄石', '买二送一', '41', '41', '3', '2', 0, '', '20', '9999', '', 'line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477519955, 2, '1', '', '', '', '', '', '', '', '', '', '78', '', '3', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 06:12:35 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519955, 0, '黄石', '买二送一', '41', '41', '3', '2', 0, '', '20', '9999', '', 'line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477519955, 2, '1', '', '', '', '', '', '', '', '', '', '78', '', '3', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 06:13:19 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519999, 0, '黄石', '买二送一', '41', '41', '3', '2', 0, '', '20', '9999', '', 'line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477519999, 2, '1', '', '', '', '', '', '', '', '', '', '78', '飞机', '3', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 06:13:19 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'recommendnum' at row 1 [ INSERT INTO `sline_line` (`aid`, `addtime`, `webid`, `title`, `sellpoint`, `kindlist`, `finaldestid`, `lineday`, `linenight`, `islinebefore`, `recommendnum`, `linebefore`, `storeprice`, `childrule`, `templet`, `color`, `satisfyscore`, `bookcount`, `ishidden`, `seotitle`, `keyword`, `tagword`, `description`, `modtime`, `isstyle`, `showrepast`, `jieshao`, `biaozhun`, `beizu`, `payment`, `feeinclude`, `features`, `reserved1`, `reserved2`, `reserved3`, `startcity`, `transport`, `iconlist`, `insuranceids`, `piclist`, `linedoc`, `adminid`) VALUES (6, 1477519999, 0, '黄石', '买二送一', '41', '41', '3', '2', 0, '', '20', '9999', '', 'line_show.htm', '#FFFFFF', 0, 0, 0, '', '', '', '', 1477519999, 2, '1', '', '', '', '', '', '', '', '', '', '78', '飞机', '3', '', '', 's:0:\"\";', '1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/line/classes/controller/admin/line.php(576): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Line->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Line))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 23:31:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477582274, '万豪', '1535 Broadway, New York, NY 10036', '0', '买二送一', '100', '1111111', '7/24', '0', '', '4', '100', '100', '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477582274, '4', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 23:31:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477582274, '万豪', '1535 Broadway, New York, NY 10036', '0', '买二送一', '100', '1111111', '7/24', '0', '', '4', '100', '100', '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477582274, '4', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/hotel/classes/controller/admin/hotel.php(461): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Hotel->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Hotel))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 23:31:19 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477582279, '万豪', '1535 Broadway, New York, NY 10036', '0', '买二送一', '100', '1111111', '7/24', '0', '', '4', '100', '100', '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477582279, '4', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 23:31:19 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477582279, '万豪', '1535 Broadway, New York, NY 10036', '0', '买二送一', '100', '1111111', '7/24', '0', '', '4', '100', '100', '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477582279, '4', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/hotel/classes/controller/admin/hotel.php(461): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Hotel->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Hotel))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 23:31:28 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477582288, '万豪', '1535 Broadway, New York, NY 10036', '0', '买二送一', '100', '1111111', '7/24', '1AM', '', '4', '100', '100', '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477582288, '4', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 23:31:28 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477582288, '万豪', '1535 Broadway, New York, NY 10036', '0', '买二送一', '100', '1111111', '7/24', '1AM', '', '4', '100', '100', '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477582288, '4', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/hotel/classes/controller/admin/hotel.php(461): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Hotel->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Hotel))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 23:32:20 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477582340, '万豪', '1535 Broadway, New York, NY 10036', '0', '买二送一', '100', '1111111', '7/24', '1AM', '', '4', '100', '100', '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477582340, '4', '', '', '酒店详细test', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 23:32:20 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477582340, '万豪', '1535 Broadway, New York, NY 10036', '0', '买二送一', '100', '1111111', '7/24', '1AM', '', '4', '100', '100', '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477582340, '4', '', '', '酒店详细test', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/hotel/classes/controller/admin/hotel.php(461): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Hotel->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Hotel))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-27 23:33:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477582384, '万豪', '1535 Broadway, New York, NY 10036', '0', '买二送一', '100', '1111111', '7/24', '1AM', '', '4', '100', '100', '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477582384, '4', '', '', '酒店详细test', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-27 23:33:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (1, 1477582384, '万豪', '1535 Broadway, New York, NY 10036', '0', '买二送一', '100', '1111111', '7/24', '1AM', '', '4', '100', '100', '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477582384, '4', '', '', '酒店详细test', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/hotel/classes/controller/admin/hotel.php(461): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Hotel->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Hotel))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}