<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-07 00:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-07 00:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-07 02:29:36 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1485360000','纽约','','3','0','凯迪拉克SUV','三星级',
 '单人','自理','先生','','1367574894','zhaofei.qin@gmail.com','9:00-12:00','1483727376','','sefwsfd') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 02:29:36 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1485360000','纽约','','3','0','凯迪拉克SUV','三星级',
 '单人','自理','先生','','1367574894','zhaofei.qin@gmail.com','9:00-12:00','1483727376','','sefwsfd') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2017-01-07 03:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menuBcm.js ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-07 03:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menuBcm.js ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-07 03:27:22 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1484668800','纽约','','123','0','凯迪拉克SUV','三星级',
 '单人','自理','先生','','12345','ceed','9:00-12:00','1483730842','','sdce') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 03:27:22 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1484668800','纽约','','123','0','凯迪拉克SUV','三星级',
 '单人','自理','先生','','12345','ceed','9:00-12:00','1483730842','','sdce') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2017-01-07 03:33:54 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1484582400','纽约','','12','0','凯迪拉克SUV','三星级',
 '单人','自理','先生','','123456','fasdfm','9:00-12:00','1483731234','','fasee3') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 03:33:54 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1484582400','纽约','','12','0','凯迪拉克SUV','三星级',
 '单人','自理','先生','','123456','fasdfm','9:00-12:00','1483731234','','fasee3') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2017-01-07 03:41:07 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1485360000','纽约','','3','0','凯迪拉克SUV','三星级',
 '单人','自理','先生','','3152782312','zhaofei.qin@gmail.com','9:00-12:00','1483731667','','Zhaofei Qin') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 03:41:07 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1485360000','纽约','','3','0','凯迪拉克SUV','三星级',
 '单人','自理','先生','','3152782312','zhaofei.qin@gmail.com','9:00-12:00','1483731667','','Zhaofei Qin') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2017-01-07 04:06:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 04:06:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT pid FROM...', false, Array)
#1 /var/www/gogogous/v5/classes/product.php(982): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/model/car.php(546): Product::get_attr_parent('0_0_0_0_0__0_0_...', 3)
#3 /var/www/gogogous/v5/cache/tplcache/default/car/list.php(7): Model_Car::get_search_url('27', 'attrid', Array)
#4 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#5 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#6 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#7 /var/www/gogogous/plugins/car/classes/controller/pc/car.php(203): Stourweb_Controller->display('car/list')
#8 [internal function]: Controller_Pc_Car->action_list()
#9 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Car))
#10 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#13 {main}
2017-01-07 04:08:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 04:08:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT pid FROM...', false, Array)
#1 /var/www/gogogous/v5/classes/product.php(982): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/model/car.php(546): Product::get_attr_parent('0_0_0_0_0__0_0_...', 3)
#3 /var/www/gogogous/v5/cache/tplcache/default/car/list.php(7): Model_Car::get_search_url('27', 'attrid', Array)
#4 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#5 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#6 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#7 /var/www/gogogous/plugins/car/classes/controller/pc/car.php(203): Stourweb_Controller->display('car/list')
#8 [internal function]: Controller_Pc_Car->action_list()
#9 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Car))
#10 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#13 {main}
2017-01-07 04:17:54 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 04:17:54 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT pid FROM...', false, Array)
#1 /var/www/gogogous/v5/classes/product.php(982): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/model/car.php(546): Product::get_attr_parent('0_6_0_0_0__0_0_...', 3)
#3 /var/www/gogogous/v5/cache/tplcache/default/car/list.php(7): Model_Car::get_search_url('27', 'attrid', Array)
#4 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#5 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#6 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#7 /var/www/gogogous/plugins/car/classes/controller/pc/car.php(203): Stourweb_Controller->display('car/list')
#8 [internal function]: Controller_Pc_Car->action_list()
#9 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Car))
#10 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#13 {main}
2017-01-07 04:20:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 04:20:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT pid FROM...', false, Array)
#1 /var/www/gogogous/v5/classes/product.php(982): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/model/car.php(546): Product::get_attr_parent('0_6_0_0_0__0_0_...', 3)
#3 /var/www/gogogous/v5/cache/tplcache/default/car/list.php(7): Model_Car::get_search_url('27', 'attrid', Array)
#4 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#5 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#6 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#7 /var/www/gogogous/plugins/car/classes/controller/pc/car.php(203): Stourweb_Controller->display('car/list')
#8 [internal function]: Controller_Pc_Car->action_list()
#9 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Car))
#10 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#13 {main}
2017-01-07 04:21:19 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1485360000','纽约','','45','0','凯迪拉克SUV','三星级',
 '单人','自理','先生','','3152782312','zhaofei.qin@gmail.com','14：00-18：00','1483734079','','Zhaofei Qin') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 04:21:19 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'days' at row 1 [ insert into sline_customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '纽约','1485360000','纽约','','45','0','凯迪拉克SUV','三星级',
 '单人','自理','先生','','3152782312','zhaofei.qin@gmail.com','14：00-18：00','1483734079','','Zhaofei Qin') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'insert into sli...', false, Array)
#1 /var/www/gogogous/plugins/customize/classes/controller/pc/customize.php(71): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Pc_Customize->action_ajax_save()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Customize))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#7 {main}
2017-01-07 04:22:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 04:22:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT pid FROM...', false, Array)
#1 /var/www/gogogous/v5/classes/product.php(982): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/model/car.php(546): Product::get_attr_parent('0_6_0_0_0__0_0_...', 3)
#3 /var/www/gogogous/v5/cache/tplcache/default/car/list.php(7): Model_Car::get_search_url('27', 'attrid', Array)
#4 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#5 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#6 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#7 /var/www/gogogous/plugins/car/classes/controller/pc/car.php(203): Stourweb_Controller->display('car/list')
#8 [internal function]: Controller_Pc_Car->action_list()
#9 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Car))
#10 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#13 {main}
2017-01-07 04:24:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 04:24:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT pid FROM...', false, Array)
#1 /var/www/gogogous/v5/classes/product.php(982): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/model/car.php(546): Product::get_attr_parent('0_6_0_0_0__0_0_...', 3)
#3 /var/www/gogogous/v5/cache/tplcache/default/car/list.php(7): Model_Car::get_search_url('27', 'attrid', Array)
#4 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#5 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#6 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#7 /var/www/gogogous/plugins/car/classes/controller/pc/car.php(203): Stourweb_Controller->display('car/list')
#8 [internal function]: Controller_Pc_Car->action_list()
#9 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Car))
#10 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#13 {main}
2017-01-07 04:26:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 04:26:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT pid FROM...', false, Array)
#1 /var/www/gogogous/v5/classes/product.php(982): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/model/car.php(546): Product::get_attr_parent('0_0_0_0_0__0_0_...', 3)
#3 /var/www/gogogous/v5/cache/tplcache/default/car/list.php(7): Model_Car::get_search_url('27', 'attrid', Array)
#4 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#5 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#6 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#7 /var/www/gogogous/plugins/car/classes/controller/pc/car.php(203): Stourweb_Controller->display('car/list')
#8 [internal function]: Controller_Pc_Car->action_list()
#9 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Car))
#10 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#13 {main}
2017-01-07 04:28:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 04:28:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT pid FROM...', false, Array)
#1 /var/www/gogogous/v5/classes/product.php(982): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/model/car.php(546): Product::get_attr_parent('0_0_0_0_0__0_0_...', 3)
#3 /var/www/gogogous/v5/cache/tplcache/default/car/list.php(7): Model_Car::get_search_url('27', 'attrid', Array)
#4 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#5 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#6 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#7 /var/www/gogogous/plugins/car/classes/controller/pc/car.php(203): Stourweb_Controller->display('car/list')
#8 [internal function]: Controller_Pc_Car->action_list()
#9 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Car))
#10 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#13 {main}
2017-01-07 04:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-07 04:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-07 04:33:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-07 04:33:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT pid FROM `sline_car_attr` WHERE id = ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT pid FROM...', false, Array)
#1 /var/www/gogogous/v5/classes/product.php(982): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/model/car.php(546): Product::get_attr_parent('0_0_0_0_0__0_0_...', 3)
#3 /var/www/gogogous/v5/cache/tplcache/default/car/list.php(7): Model_Car::get_search_url('27', 'attrid', Array)
#4 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#5 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#6 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#7 /var/www/gogogous/plugins/car/classes/controller/pc/car.php(203): Stourweb_Controller->display('car/list')
#8 [internal function]: Controller_Pc_Car->action_list()
#9 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Car))
#10 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#13 {main}
2017-01-07 04:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-07 04:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-07 05:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-07 05:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-07 05:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-07 05:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-07 06:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-07 06:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-07 06:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-07 06:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-07 09:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-07 09:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-07 10:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-07 10:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-07 18:06:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-07 18:06:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}