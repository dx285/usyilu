<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-12 00:04:14 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (8, 1484150654, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '67', '98', '359', '0', '3', '0', '39,37,38,36,40,42,41', '38', '30,21,20,3,2,1,0,1,5,16,17,2,6,7,3,15,20,28,29,21,22,23,24,25,26,30,35,36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 00:04:14 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (8, 1484150654, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '67', '98', '359', '0', '3', '0', '39,37,38,36,40,42,41', '38', '30,21,20,3,2,1,0,1,5,16,17,2,6,7,3,15,20,28,29,21,22,23,24,25,26,30,35,36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 00:04:19 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (8, 1484150659, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '67', '98', '359', '0', '3', '0', '39,37,38,36,40,42,41', '38', '30,21,20,3,2,1,0,1,5,16,17,2,6,7,3,15,20,28,29,21,22,23,24,25,26,30,35,36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 00:04:19 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (8, 1484150659, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '67', '98', '359', '0', '3', '0', '39,37,38,36,40,42,41', '38', '30,21,20,3,2,1,0,1,5,16,17,2,6,7,3,15,20,28,29,21,22,23,24,25,26,30,35,36', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 00:06:06 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484150766, `attrid` = '30,21,20,3,2,1,0,1,5,2,6,7,3,15,20,28,29,21,22,30,35' WHERE `id` = '8' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 00:06:06 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484150766, `attrid` = '30,21,20,3,2,1,0,1,5,2,6,7,3,15,20,28,29,21,22,30,35' WHERE `id` = '8' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 00:06:19 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484150779, `attrid` = '30,21,20,3,2,1,0,1,5,2,6,7,3,15,20,28,21,22,23,24,30,35' WHERE `id` = '8' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 00:06:19 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484150779, `attrid` = '30,21,20,3,2,1,0,1,5,2,6,7,3,15,20,28,21,22,23,24,30,35' WHERE `id` = '8' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 00:06:41 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484150801, `attrid` = '30,21,20,3,2,1,0,1,5,2,6,7,3,15,20,28,21,22,30,35,36' WHERE `id` = '8' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 00:06:41 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484150801, `attrid` = '30,21,20,3,2,1,0,1,5,2,6,7,3,15,20,28,21,22,30,35,36' WHERE `id` = '8' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 00:06:44 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484150804, `attrid` = '30,21,20,3,2,1,0,1,5,2,6,7,3,15,20,28,21,22,30,35,36' WHERE `id` = '8' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 00:06:44 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484150804, `attrid` = '30,21,20,3,2,1,0,1,5,2,6,7,3,15,20,28,21,22,30,35,36' WHERE `id` = '8' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 00:07:52 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484150872, `attrid` = '30,21,20,3,2,1,0,1,5,16,17,2,6,7,3,15,20,28,21,22,30,35' WHERE `id` = '8' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 00:07:52 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484150872, `attrid` = '30,21,20,3,2,1,0,1,5,16,17,2,6,7,3,15,20,28,21,22,30,35' WHERE `id` = '8' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 00:07:55 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484150875, `attrid` = '30,21,20,3,2,1,0,1,5,16,17,2,6,7,3,15,20,28,21,22,30,35' WHERE `id` = '8' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 00:07:55 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484150875, `attrid` = '30,21,20,3,2,1,0,1,5,16,17,2,6,7,3,15,20,28,21,22,30,35' WHERE `id` = '8' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 00:10:31 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE2\x80\x8B\xE6\x8B\xBC...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('拼车小巴', '8', '​拼车小巴test', '美元', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:2:\"10\";s:6:\"profit\";s:1:\"5\";s:5:\"price\";i:15;s:9:\"starttime\";s:10:\"2017-01-11\";s:7:\"endtime\";s:10:\"2017-05-05\";s:6:\"number\";s:2:\"30\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 00:10:31 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE2\x80\x8B\xE6\x8B\xBC...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('拼车小巴', '8', '​拼车小巴test', '美元', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:2:\"10\";s:6:\"profit\";s:1:\"5\";s:5:\"price\";i:15;s:9:\"starttime\";s:10:\"2017-01-11\";s:7:\"endtime\";s:10:\"2017-05-05\";s:6:\"number\";s:2:\"30\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(659): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-12 00:14:49 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('拼车小巴', '8', '拼车小巴', '美元', '6', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:2:\"10\";s:6:\"profit\";s:1:\"5\";s:5:\"price\";i:15;s:9:\"starttime\";s:10:\"2017-01-11\";s:7:\"endtime\";s:10:\"2017-06-15\";s:6:\"number\";s:2:\"30\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 00:14:49 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('拼车小巴', '8', '拼车小巴', '美元', '6', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:2:\"10\";s:6:\"profit\";s:1:\"5\";s:5:\"price\";i:15;s:9:\"starttime\";s:10:\"2017-01-11\";s:7:\"endtime\";s:10:\"2017-06-15\";s:6:\"number\";s:2:\"30\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(659): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-12 10:38:34 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE2\x80\x8Btes...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('豪华明星保姆车', '6', '​test', '美元', '3', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"150\";s:6:\"profit\";s:2:\"23\";s:5:\"price\";i:173;s:9:\"starttime\";s:10:\"2017-01-11\";s:7:\"endtime\";s:10:\"2017-02-28\";s:6:\"number\";s:2:\"30\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 10:38:34 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE2\x80\x8Btes...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('豪华明星保姆车', '6', '​test', '美元', '3', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"150\";s:6:\"profit\";s:2:\"23\";s:5:\"price\";i:173;s:9:\"starttime\";s:10:\"2017-01-11\";s:7:\"endtime\";s:10:\"2017-02-28\";s:6:\"number\";s:2:\"30\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(659): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-12 10:55:19 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (9, 1484189719, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '100', '100', '100', '0', '3', '0', '39,37,38,36,40,42,41', '37', '37,30,21,20,3,2,1,0,1,5,2,6,3,14,20,27,21,22,30,35,37,38', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 10:55:19 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (9, 1484189719, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '100', '100', '100', '0', '3', '0', '39,37,38,36,40,42,41', '37', '37,30,21,20,3,2,1,0,1,5,2,6,3,14,20,27,21,22,30,35,37,38', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 10:55:34 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (9, 1484189734, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '100', '100', '100', '0', '3', '0', '37', '37', '37,30,21,20,3,2,1,0,1,5,2,6,3,14,20,27,21,22,30,35,37,38', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 10:55:34 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (9, 1484189734, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '100', '100', '100', '0', '3', '0', '37', '37', '37,30,21,20,3,2,1,0,1,5,2,6,3,14,20,27,21,22,30,35,37,38', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 10:55:53 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (9, 1484189753, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '100', '100', '100', '0', '3', '0', '37', '37', '37,30,21,20,3,2,1,0,1,5,2,6,3,14,20,28,21,22,30,35,37,38', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 10:55:53 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (9, 1484189753, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '100', '100', '100', '0', '3', '0', '37', '37', '37,30,21,20,3,2,1,0,1,5,2,6,3,14,20,28,21,22,30,35,37,38', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 10:56:00 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `iconlist`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (9, 1484189760, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '100', '100', '100', '0', '3', '0', '37', '37', '37,30,21,20,3,2,1,0,1,5,2,6,3,14,20,28,21,22,30,35,37,38', '1', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 10:56:00 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `iconlist`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (9, 1484189760, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '100', '100', '100', '0', '3', '0', '37', '37', '37,30,21,20,3,2,1,0,1,5,2,6,3,14,20,28,21,22,30,35,37,38', '1', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 10:56:13 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `iconlist`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (9, 1484189773, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '100', '100', '100', '0', '3', '0', '37', '37', '37,30,21,20,3,2,1,0,1,5,2,6,3,14,20,28,21,22,30,35,37,38', '1', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 10:56:13 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `iconlist`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (9, 1484189773, '拼车小巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '100', '100', '100', '0', '3', '0', '37', '37', '37,30,21,20,3,2,1,0,1,5,2,6,3,14,20,28,21,22,30,35,37,38', '1', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 10:56:27 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `iconlist`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (9, 1484189787, '拼车大巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '100', '100', '100', '0', '3', '0', '37', '37', '37,30,21,20,3,2,1,0,1,5,2,6,3,14,20,28,21,22,30,35,37,38', '1', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 10:56:27 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `iconlist`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (9, 1484189787, '拼车大巴', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '12', '11', '11', '010-80446669', '', '', '100', '100', '100', '0', '3', '0', '37', '37', '37,30,21,20,3,2,1,0,1,5,2,6,3,14,20,28,21,22,30,35,37,38', '1', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 23:17:38 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484234258, `content` = 'Travel with ease from JFK International Airport to your new york hotel by pre-booking this private arrival transfer. Don&#39;t spend extra time waiting for a taxi! This transfer service departs hourly and is available 24 hours a day, seven days a week.提前预订此项私人专车接机服务，从JFK国际机场轻松抵达您在纽约下榻的酒店。无需花费额外时间等出租车！该接送服务每小时发车，每周7天24小时全天候待命。When making a booking, you will need to advise your flight arrival details and your new york hotel details. Your transfer will be confirmed within 24 hours of booking, and you will be provided with a travel voucher to present to the driver. It&#39;s that easy!预订时，您需要备注您的航班到达详细信息和您在纽约下榻酒店的详细信息。您的预订将即时确认，确认后会提供给您行程凭证，你在乘车时出示给司机即可。就是这么简单！', `attrid` = '37,30,21,3,2,1,5,16,17,6,7,14,15,22,23,24,25,26,35,36,38,39' WHERE `id` = '7' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 23:17:38 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484234258, `content` = 'Travel with ease from JFK International Airport to your new york hotel by pre-booking this private arrival transfer. Don&#39;t spend extra time waiting for a taxi! This transfer service departs hourly and is available 24 hours a day, seven days a week.提前预订此项私人专车接机服务，从JFK国际机场轻松抵达您在纽约下榻的酒店。无需花费额外时间等出租车！该接送服务每小时发车，每周7天24小时全天候待命。When making a booking, you will need to advise your flight arrival details and your new york hotel details. Your transfer will be confirmed within 24 hours of booking, and you will be provided with a travel voucher to present to the driver. It&#39;s that easy!预订时，您需要备注您的航班到达详细信息和您在纽约下榻酒店的详细信息。您的预订将即时确认，确认后会提供给您行程凭证，你在乘车时出示给司机即可。就是这么简单！', `attrid` = '37,30,21,3,2,1,5,16,17,6,7,14,15,22,23,24,25,26,35,36,38,39' WHERE `id` = '7' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 23:17:50 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484234270, `content` = 'Travel with ease from JFK International Airport to your new york hotel by pre-booking this private arrival transfer. Don&#39;t spend extra time waiting for a taxi! This transfer service departs hourly and is available 24 hours a day, seven days a week.提前预订此项私人专车接机服务，从JFK国际机场轻松抵达您在纽约下榻的酒店。无需花费额外时间等出租车！该接送服务每小时发车，每周7天24小时全天候待命。When making a booking, you will need to advise your flight arrival details and your new york hotel details. Your transfer will be confirmed within 24 hours of booking, and you will be provided with a travel voucher to present to the driver. It&#39;s that easy!预订时，您需要备注您的航班到达详细信息和您在纽约下榻酒店的详细信息。您的预订将即时确认，确认后会提供给您行程凭证，你在乘车时出示给司机即可。就是这么简单！', `attrid` = '37,30,21,3,2,1,5,16,17,6,7,14,15,22,23,24,25,26,35,38,39' WHERE `id` = '7' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 23:17:50 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484234270, `content` = 'Travel with ease from JFK International Airport to your new york hotel by pre-booking this private arrival transfer. Don&#39;t spend extra time waiting for a taxi! This transfer service departs hourly and is available 24 hours a day, seven days a week.提前预订此项私人专车接机服务，从JFK国际机场轻松抵达您在纽约下榻的酒店。无需花费额外时间等出租车！该接送服务每小时发车，每周7天24小时全天候待命。When making a booking, you will need to advise your flight arrival details and your new york hotel details. Your transfer will be confirmed within 24 hours of booking, and you will be provided with a travel voucher to present to the driver. It&#39;s that easy!预订时，您需要备注您的航班到达详细信息和您在纽约下榻酒店的详细信息。您的预订将即时确认，确认后会提供给您行程凭证，你在乘车时出示给司机即可。就是这么简单！', `attrid` = '37,30,21,3,2,1,5,16,17,6,7,14,15,22,23,24,25,26,35,38,39' WHERE `id` = '7' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 23:42:05 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (10, 1484235725, '7座商旅车（适合1-6位客人）', '适合6位客人', '7', '6', '5', '7182165319', '', '', '1000', '90', '100000', '0', '1', '0', '39,37,38,36,40,42,41', '39', '37,30,21,20,3,2,1,5,6,7,14,27,28,29,22,23,24,25,26,35,36,38,39', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 23:42:05 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (10, 1484235725, '7座商旅车（适合1-6位客人）', '适合6位客人', '7', '6', '5', '7182165319', '', '', '1000', '90', '100000', '0', '1', '0', '39,37,38,36,40,42,41', '39', '37,30,21,20,3,2,1,5,6,7,14,27,28,29,22,23,24,25,26,35,36,38,39', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-12 23:47:40 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBA\xA7\xE8\xBD\xA6...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('7座商旅车（适合1-6位客人）套餐名称', '10', '7座车接送机套餐说明', '美元', '9', 0, 0, 0, '2', '20', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:2:\"20\";s:5:\"price\";i:120;s:9:\"starttime\";s:10:\"2017-01-12\";s:7:\"endtime\";s:10:\"2018-02-12\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:15:\"提醒自己的\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 23:47:40 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBA\xA7\xE8\xBD\xA6...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('7座商旅车（适合1-6位客人）套餐名称', '10', '7座车接送机套餐说明', '美元', '9', 0, 0, 0, '2', '20', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:2:\"20\";s:5:\"price\";i:120;s:9:\"starttime\";s:10:\"2017-01-12\";s:7:\"endtime\";s:10:\"2018-02-12\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:15:\"提醒自己的\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(659): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-12 23:50:40 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xBE\x8E\xE5\x85\x83' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('7座商旅车（适合1-6位客人）', '10', 'test', '美元', '9', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:2:\"20\";s:5:\"price\";i:120;s:9:\"starttime\";s:10:\"2017-01-19\";s:7:\"endtime\";s:10:\"2018-01-19\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:0:\"\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-12 23:50:40 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xBE\x8E\xE5\x85\x83' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('7座商旅车（适合1-6位客人）', '10', 'test', '美元', '9', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:2:\"20\";s:5:\"price\";i:120;s:9:\"starttime\";s:10:\"2017-01-19\";s:7:\"endtime\";s:10:\"2018-01-19\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:0:\"\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(659): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}