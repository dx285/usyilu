<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-26 05:12:32 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485378752, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:12:32 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485378752, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:14:00 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485378840, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:14:00 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485378840, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:14:58 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485378898, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:14:58 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485378898, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:20:54 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485379254, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:20:54 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485379254, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:21:54 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485379314, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:21:54 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485379314, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:23:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by id desc' at line 1 [ select max(aid) as aid from sline_car where webid= order by id desc ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:23:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by id desc' at line 1 [ select max(aid) as aid from sline_car where webid= order by id desc ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select max(aid)...', false, Array)
#1 /var/www/gogogous/newtravel/application/classes/common.php(208): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(507): Common::getLastAid('sline_car', NULL)
#3 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#8 {main}
2017-01-26 05:28:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by id desc' at line 1 [ select max(aid) as aid from sline_car where webid= order by id desc ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:28:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by id desc' at line 1 [ select max(aid) as aid from sline_car where webid= order by id desc ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select max(aid)...', false, Array)
#1 /var/www/gogogous/newtravel/application/classes/common.php(208): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(507): Common::getLastAid('sline_car', NULL)
#3 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#8 {main}
2017-01-26 05:29:33 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485379773, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:29:33 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485379773, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:29:47 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485379787, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:29:47 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485379787, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:32:24 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485379944, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:32:24 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485379944, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:32:38 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485379958, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:32:38 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485379958, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:40:01 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485380401, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:40:01 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485380401, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:56:06 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485381366, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:56:06 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485381366, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:57:18 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485381438, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:57:18 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485381438, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:58:58 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485381538, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:58:58 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485381538, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 05:59:43 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485381583, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 05:59:43 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485381583, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:00:34 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485381634, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:00:34 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485381634, `attrid` = '111,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,112' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:04:15 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485381855, `attrid` = '113,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,113,116,117' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:04:15 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485381855, `attrid` = '113,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,113,116,117' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:09:21 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382161, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '20' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:09:21 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382161, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '20' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:09:29 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382169, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '20' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:09:29 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382169, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '20' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:09:33 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382173, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116' WHERE `id` = '20' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:09:33 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382173, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116' WHERE `id` = '20' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:09:48 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382188, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,117' WHERE `id` = '20' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:09:48 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382188, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,117' WHERE `id` = '20' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:10:34 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382234, `title` = '奔驰高顶 v2', `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '20' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:10:34 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382234, `title` = '奔驰高顶 v2', `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '20' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:11:00 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382260, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '19' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:11:00 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382260, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '19' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:11:22 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382282, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '18' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:11:22 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382282, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '18' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:12:01 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382321, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '19' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:12:01 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382321, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '19' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:13:16 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382396, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '18' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:13:16 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382396, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,29,116,117' WHERE `id` = '18' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:13:40 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382420, `attrid` = '113,21,20,3,2,1,41,7,14,15,27,28,29,22,23,24,25,26,117' WHERE `id` = '17' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:13:40 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382420, `attrid` = '113,21,20,3,2,1,41,7,14,15,27,28,29,22,23,24,25,26,117' WHERE `id` = '17' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:14:50 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382490, `attrid` = '113,21,20,3,2,1,5,16,17,41,42,6,7,43,14,27,22,23,24,116,117' WHERE `id` = '14' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:14:50 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382490, `attrid` = '113,21,20,3,2,1,5,16,17,41,42,6,7,43,14,27,22,23,24,116,117' WHERE `id` = '14' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:17:53 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382673, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,116,117' WHERE `id` = '20' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:17:53 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382673, `attrid` = '113,20,3,2,1,45,46,47,48,52,53,54,55,14,27,28,116,117' WHERE `id` = '20' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:23:05 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382985, `attrid` = '113,21,20,3,2,1,41,7,14,27,28,29,22,23,24,25,26,117' WHERE `id` = '17' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:23:05 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485382985, `attrid` = '113,21,20,3,2,1,41,7,14,27,28,29,22,23,24,25,26,117' WHERE `id` = '17' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:23:46 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485383026, `attrid` = '113,21,20,3,2,1,41,84,7,15,28,29,22,23,24,25,26,117' WHERE `id` = '17' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:23:46 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485383026, `attrid` = '113,21,20,3,2,1,41,84,7,15,28,29,22,23,24,25,26,117' WHERE `id` = '17' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-26 06:30:33 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485383433, `attrid` = '113,21,20,3,2,1,5,16,17,41,42,6,7,43,88,89,90,91,14,27,22,23,24,116,117' WHERE `id` = '14' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-26 06:30:33 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485383433, `attrid` = '113,21,20,3,2,1,5,16,17,41,42,6,7,43,88,89,90,91,14,27,22,23,24,116,117' WHERE `id` = '14' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(514): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_carsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}