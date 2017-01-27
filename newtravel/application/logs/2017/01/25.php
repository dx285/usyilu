<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-25 22:53:05 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE4\xB8\xAA' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('儿童座椅', '11', '儿童座椅', '个', '12', 0, 0, 0, '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:1:\"0\";s:6:\"profit\";s:1:\"8\";s:5:\"price\";i:8;s:9:\"starttime\";s:0:\"\";s:7:\"endtime\";s:0:\"\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:0:\"\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 22:53:05 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE4\xB8\xAA' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('儿童座椅', '11', '儿童座椅', '个', '12', 0, 0, 0, '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:1:\"0\";s:6:\"profit\";s:1:\"8\";s:5:\"price\";i:8;s:9:\"starttime\";s:0:\"\";s:7:\"endtime\";s:0:\"\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:0:\"\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(698): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-25 22:53:22 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE4\xB8\xAA' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('儿童座椅', '11', '儿童座椅', '个', '12', 0, 0, 0, '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:1:\"0\";s:6:\"profit\";s:1:\"8\";s:5:\"price\";i:8;s:9:\"starttime\";s:0:\"\";s:7:\"endtime\";s:0:\"\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:0:\"\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 22:53:22 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE4\xB8\xAA' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('儿童座椅', '11', '儿童座椅', '个', '12', 0, 0, 0, '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:1:\"0\";s:6:\"profit\";s:1:\"8\";s:5:\"price\";i:8;s:9:\"starttime\";s:0:\"\";s:7:\"endtime\";s:0:\"\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:0:\"\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(698): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-25 23:47:21 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359241, `attrid` = '103,44,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,44,105,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:47:21 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359241, `attrid` = '103,44,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,44,105,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-25 23:47:27 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359247, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:47:27 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359247, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-25 23:48:03 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359283, `attrid` = '103,44,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,44,105,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:48:03 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359283, `attrid` = '103,44,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,44,105,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-25 23:48:07 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359287, `attrid` = '103,44,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,44,105,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:48:07 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359287, `attrid` = '103,44,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,44,105,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-25 23:48:12 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359292, `attrid` = '103,44,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,44,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:48:12 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359292, `attrid` = '103,44,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,44,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-25 23:48:29 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359309, `attrid` = '103,44,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,44,105,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:48:29 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359309, `attrid` = '103,44,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,44,105,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-25 23:48:41 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359321, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:48:41 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359321, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-25 23:49:13 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359353, `attrid` = '103,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:49:13 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359353, `attrid` = '103,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-25 23:50:21 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359421, `attrid` = '103,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:50:21 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359421, `attrid` = '103,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-25 23:50:43 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359443, `attrid` = '103,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:50:43 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359443, `attrid` = '103,20,3,2,1,0,49,50,51,56,57,58,14,27,28,29,103,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-25 23:51:30 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359490, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:51:30 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359490, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-25 23:52:27 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359547, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:52:27 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359547, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-25 23:52:35 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359555, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-25 23:52:35 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1485359555, `attrid` = '103,44,20,3,2,1,49,50,51,56,57,58,14,27,28,29,105,109' WHERE `id` = '23' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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