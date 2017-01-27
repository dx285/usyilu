<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-21 00:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 00:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 00:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 00:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 00:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tools/js/skin/layer.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 00:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tools/js/skin/layer.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 00:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tools/js/skin/layer.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 00:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tools/js/skin/layer.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 00:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tools/js/skin/layer.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 00:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tools/js/skin/layer.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 01:27:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and linkman='Zhaofei' LIMIT 1' at line 1 [ SELECT `sline_member_linkman`.`id` AS `id`, `sline_member_linkman`.`memberid` AS `memberid`, `sline_member_linkman`.`linkman` AS `linkman`, `sline_member_linkman`.`mobile` AS `mobile`, `sline_member_linkman`.`idcard` AS `idcard`, `sline_member_linkman`.`cardtype` AS `cardtype`, `sline_member_linkman`.`sex` AS `sex` FROM `sline_member_linkman` AS `sline_member_linkman` WHERE memberid= and linkman='Zhaofei' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-21 01:27:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and linkman='Zhaofei' LIMIT 1' at line 1 [ SELECT `sline_member_linkman`.`id` AS `id`, `sline_member_linkman`.`memberid` AS `memberid`, `sline_member_linkman`.`linkman` AS `linkman`, `sline_member_linkman`.`mobile` AS `mobile`, `sline_member_linkman`.`idcard` AS `idcard`, `sline_member_linkman`.`cardtype` AS `cardtype`, `sline_member_linkman`.`sex` AS `sex` FROM `sline_member_linkman` AS `sline_member_linkman` WHERE memberid= and linkman='Zhaofei' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_m...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /var/www/gogogous/tools/classes/model/member/linkman.php(19): Kohana_ORM->find()
#4 /var/www/gogogous/tools/classes/model/member/order/tourer.php(34): Model_Member_Linkman::add_tourer_to_linkman(Array, NULL)
#5 /var/www/gogogous/v5/cache/tplcache/default/line/login.php(58): Model_Member_Order_Tourer::add_tourer_pc(NULL, Array, NULL)
#6 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#7 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#8 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#9 /var/www/gogogous/plugins/line/classes/controller/pc/line.php(453): Stourweb_Controller->display('line/login')
#10 [internal function]: Controller_Pc_Line->action_createrev()
#11 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Line))
#12 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#15 {main}
2017-01-21 02:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 02:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 02:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 02:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 03:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 03:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 03:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 03:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 03:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 03:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 04:06:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 04:06:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 04:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 04:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 04:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 04:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 05:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cars/all-0-0-27-1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 05:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cars/all-0-0-27-1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 05:36:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-21 05:36:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT pid FROM...', false, Array)
#1 /var/www/gogogous/v5/classes/product.php(982): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/model/car.php(546): Product::get_attr_parent('_27', 3)
#3 /var/www/gogogous/v5/cache/tplcache/default/car/list.php(42): Model_Car::get_search_url('27', 'attrid', Array)
#4 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#5 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#6 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#7 /var/www/gogogous/plugins/car/classes/controller/pc/car.php(375): Stourweb_Controller->display('car/list')
#8 [internal function]: Controller_Pc_Car->action_list()
#9 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Car))
#10 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#13 {main}
2017-01-21 05:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cars/all-0-27-27-1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 05:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cars/all-0-27-27-1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 05:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cars/all_27 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 05:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cars/all_27 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 05:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cars/all_27 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 05:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cars/all_27 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 05:40:22 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-21 05:40:22 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT pid FROM...', false, Array)
#1 /var/www/gogogous/v5/classes/product.php(982): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/model/car.php(546): Product::get_attr_parent('_27', 3)
#3 /var/www/gogogous/v5/cache/tplcache/default/car/list.php(42): Model_Car::get_search_url('27', 'attrid', Array)
#4 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#5 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#6 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#7 /var/www/gogogous/plugins/car/classes/controller/pc/car.php(375): Stourweb_Controller->display('car/list')
#8 [internal function]: Controller_Pc_Car->action_list()
#9 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Car))
#10 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#13 {main}
2017-01-21 05:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cars/all-0-1-0-1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 05:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cars/all-0-1-0-1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 05:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cars/all-0-4-6_0_14_27-1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 05:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cars/all-0-4-6_0_14_27-1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 06:28:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 06:28:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 06:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cars/sanfrancisco-1-0-0-1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 06:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cars/sanfrancisco-1-0-0-1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 06:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 06:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 07:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cars/all-undefined-6_0_14 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 07:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cars/all-undefined-6_0_14 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 07:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cars/all-undefined-7_0_14 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 07:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cars/all-undefined-7_0_14 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 07:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 07:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 07:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 07:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 07:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 07:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 07:41:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/default/car/book.php [ 292 ]
2017-01-21 07:41:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/default/car/book.php [ 292 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-01-21 07:42:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/default/car/book.php [ 292 ]
2017-01-21 07:42:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/default/car/book.php [ 292 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-01-21 07:42:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/default/car/book.php [ 292 ]
2017-01-21 07:42:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/default/car/book.php [ 292 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-01-21 07:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 07:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 07:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 07:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 10:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 10:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 10:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 10:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 10:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 10:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 10:32:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 10:32:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 10:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 10:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 10:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 10:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 10:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 10:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 11:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tools/js/skin/layer.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 11:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tools/js/skin/layer.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 11:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/register/doreg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-21 11:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/register/doreg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 12:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL please_read/_search was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 12:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL please_read/_search was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 12:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL master-status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 12:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL master-status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-21 12:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clusters.jsf ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 12:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clusters.jsf ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 15:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 15:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-21 23:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 23:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}