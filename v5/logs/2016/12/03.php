<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-03 00:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 00:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 00:58:44 --- ERROR: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1480780800','纽约','2016-12-07','1','2','飞机','三星级',
 '单人','自理','先生','sadfsaf','1234567899','teset@qq.com','9:00-12:00','1480697924','','kakakaak') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-03 00:58:44 --- STRACE: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1480780800','纽约','2016-12-07','1','2','飞机','三星级',
 '单人','自理','先生','sadfsaf','1234567899','teset@qq.com','9:00-12:00','1480697924','','kakakaak') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2016-12-03 00:58:50 --- ERROR: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1480780800','纽约','2016-12-07','1','2','飞机','三星级',
 '单人','自理','先生','sadfsaf','1234567899','teset@qq.com','9:00-12:00','1480697930','test','kakakaak') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-03 00:58:50 --- STRACE: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1480780800','纽约','2016-12-07','1','2','飞机','三星级',
 '单人','自理','先生','sadfsaf','1234567899','teset@qq.com','9:00-12:00','1480697930','test','kakakaak') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2016-12-03 01:02:31 --- ERROR: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'kkk','1480608000','kkk','2016-12-22','9','9','飞机','三星级',
 '单人','自理','先生','jjjj','1111111111111','test@qq.com','9:00-12:00','1480698151','test','jjj') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-03 01:02:31 --- STRACE: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'kkk','1480608000','kkk','2016-12-22','9','9','飞机','三星级',
 '单人','自理','先生','jjjj','1111111111111','test@qq.com','9:00-12:00','1480698151','test','jjj') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2016-12-03 01:06:11 --- ERROR: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'iii','1480953600','jjj','2016-12-14','9','8','飞机','三星级',
 '单人','自理','先生','iiiii','888888888888888','test@qq.com','9:00-12:00','1480698371','','kkk') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-03 01:06:11 --- STRACE: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'iii','1480953600','jjj','2016-12-14','9','8','飞机','三星级',
 '单人','自理','先生','iiiii','888888888888888','test@qq.com','9:00-12:00','1480698371','','kkk') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2016-12-03 01:15:25 --- ERROR: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'mmm','1480953600','mmm','2016-12-14','7','7','飞机','三星级',
 '单人','自理','先生','mmm','888888888888','mmm@qq.com','9:00-12:00','1480698925','','mmm') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-03 01:15:25 --- STRACE: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'mmm','1480953600','mmm','2016-12-14','7','7','飞机','三星级',
 '单人','自理','先生','mmm','888888888888','mmm@qq.com','9:00-12:00','1480698925','','mmm') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2016-12-03 01:24:06 --- ERROR: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'bbb','1482076800','bbb','2016-12-31','6','6','飞机','三星级',
 '单人','自理','先生','ttt','66666666666666','qq@qq.com','9:00-12:00','1480699446','test','ttt') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-03 01:24:06 --- STRACE: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'bbb','1482076800','bbb','2016-12-31','6','6','飞机','三星级',
 '单人','自理','先生','ttt','66666666666666','qq@qq.com','9:00-12:00','1480699446','test','ttt') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2016-12-03 01:29:11 --- ERROR: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'fff','1480953600','ttt','2016-12-27','5','6','飞机','三星级',
 '单人','自理','先生','ttt','6666666666','ee@qq.com','9:00-12:00','1480699751','','ttt') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-03 01:29:11 --- STRACE: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'fff','1480953600','ttt','2016-12-27','5','6','飞机','三星级',
 '单人','自理','先生','ttt','6666666666','ee@qq.com','9:00-12:00','1480699751','','ttt') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2016-12-03 01:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-12-03 01:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2016-12-03 01:36:59 --- ERROR: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'ggg','1480780800','ggg','2016-12-22','8','1','飞机','三星级',
 '单人','自理','先生','ggg','3333333333333','22@qq.com','9:00-12:00','1480700219','test','ggg') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-03 01:36:59 --- STRACE: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'ggg','1480780800','ggg','2016-12-22','8','1','飞机','三星级',
 '单人','自理','先生','ggg','3333333333333','22@qq.com','9:00-12:00','1480700219','test','ggg') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2016-12-03 01:37:23 --- ERROR: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'ggg','1480780800','ggg','2016-12-22','8','1','飞机','三星级',
 '单人','自理','先生','ggg','3333333333333','22@qq.com','9:00-12:00','1480700243','test','ggg') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-03 01:37:23 --- STRACE: Database_Exception [ 1265 ]: Data truncated for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 'ggg','1480780800','ggg','2016-12-22','8','1','飞机','三星级',
 '单人','自理','先生','ggg','3333333333333','22@qq.com','9:00-12:00','1480700243','test','ggg') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2016-12-03 01:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 01:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 01:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-12-03 01:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2016-12-03 01:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-12-03 01:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2016-12-03 01:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-12-03 01:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2016-12-03 01:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmin/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-12-03 01:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmin/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2016-12-03 03:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 03:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 03:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 03:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 05:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 05:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 05:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 05:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 07:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 07:32:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 07:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 07:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 10:17:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-12-03 10:17:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2016-12-03 10:17:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-12-03 10:17:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2016-12-03 10:17:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysqladmin/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-12-03 10:17:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysqladmin/scripts/setup.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2016-12-03 11:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 11:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 11:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 11:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 11:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 11:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 12:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 12:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 12:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 12:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 12:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 12:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 13:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 13:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 16:06:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 16:06:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 20:22:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 20:22:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 20:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 20:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 20:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yzbdgvclac.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 20:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yzbdgvclac.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 22:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 22:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-12-03 23:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-03 23:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}