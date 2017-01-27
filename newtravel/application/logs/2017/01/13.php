<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-13 14:47:57 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (12, 1484290077, '拼车小巴qqqqqqq', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '7', '6', '6', '010-80446669', '', '', '100', '100', '100', '0', '2', '0', '39,37,38,36,40,42,41', '40', '37,32,30,21,20,3,2,1,5,16,17,6,7,14,27,28,22,23,24,25,26,35,36,33,34,38,39', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-13 14:47:57 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (12, 1484290077, '拼车小巴qqqqqqq', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '7', '6', '6', '010-80446669', '', '', '100', '100', '100', '0', '2', '0', '39,37,38,36,40,42,41', '40', '37,32,30,21,20,3,2,1,5,16,17,6,7,14,27,28,22,23,24,25,26,35,36,33,34,38,39', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-13 14:48:59 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (12, 1484290139, '拼车小巴qqqqqqq', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '7', '6', '6', '010-80446669', '', '', '100', '100', '100', '0', '2', '0', '39,37,38,36,40,42,41', '40', '37,32,30,21,20,3,2,1,5,16,17,6,7,14,28,22,23,24,25,26,35,36,33,34,38,39', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-13 14:48:59 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (12, 1484290139, '拼车小巴qqqqqqq', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '7', '6', '6', '010-80446669', '', '', '100', '100', '100', '0', '2', '0', '39,37,38,36,40,42,41', '40', '37,32,30,21,20,3,2,1,5,16,17,6,7,14,28,22,23,24,25,26,35,36,33,34,38,39', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-13 14:49:04 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (12, 1484290144, '拼车小巴qqqqqqq', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '7', '6', '6', '010-80446669', '', '', '100', '100', '100', '0', '2', '0', '39,37,38,36,40,42,41', '40', '37,32,30,21,3,2,1,5,16,17,6,7,14,22,23,24,25,26,35,36,33,34,38,39', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-13 14:49:04 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (12, 1484290144, '拼车小巴qqqqqqq', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '7', '6', '6', '010-80446669', '', '', '100', '100', '100', '0', '2', '0', '39,37,38,36,40,42,41', '40', '37,32,30,21,3,2,1,5,16,17,6,7,14,22,23,24,25,26,35,36,33,34,38,39', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-13 14:49:12 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (12, 1484290152, '拼车小巴qqqqqqq', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '7', '6', '6', '010-80446669', '', '', '100', '100', '100', '0', '2', '0', '39,37,38,36,40,42,41', '40', '37,32,30,21,3,2,1,5,16,17,6,7,14,22,24,25,26,35,36,33,34,38,39', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-13 14:49:12 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (12, 1484290152, '拼车小巴qqqqqqq', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '7', '6', '6', '010-80446669', '', '', '100', '100', '100', '0', '2', '0', '39,37,38,36,40,42,41', '40', '37,32,30,21,3,2,1,5,16,17,6,7,14,22,24,25,26,35,36,33,34,38,39', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-13 14:49:17 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (12, 1484290157, '拼车小巴qqqqqqq', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '7', '6', '6', '010-80446669', '', '', '100', '100', '100', '0', '2', '0', '39,37,38,36,40,42,41', '40', '37,32,30,21,3,2,1,5,16,17,6,7,14,22,35,36,33,34,38,39', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-13 14:49:17 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (12, 1484290157, '拼车小巴qqqqqqq', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '7', '6', '6', '010-80446669', '', '', '100', '100', '100', '0', '2', '0', '39,37,38,36,40,42,41', '40', '37,32,30,21,3,2,1,5,16,17,6,7,14,22,35,36,33,34,38,39', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-13 14:50:04 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484290204, `attrid` = '37,32,30,21,20,3,2,1,5,6,7,14,27,28,29,22,23,24,25,26,35,36,33,34,38,39' WHERE `id` = '12' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-13 14:50:04 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484290204, `attrid` = '37,32,30,21,20,3,2,1,5,6,7,14,27,28,29,22,23,24,25,26,35,36,33,34,38,39' WHERE `id` = '12' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-13 14:50:11 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484290211, `attrid` = '37,32,30,21,20,3,2,1,5,6,7,14,27,22,23,24,25,26,35,36,33,34,38,39' WHERE `id` = '12' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-13 14:50:11 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484290211, `attrid` = '37,32,30,21,20,3,2,1,5,6,7,14,27,22,23,24,25,26,35,36,33,34,38,39' WHERE `id` = '12' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-13 14:50:17 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484290217, `attrid` = '37,32,30,21,20,3,2,1,5,6,7,14,27,22,23,24,25,26,35,36,33,34,38' WHERE `id` = '12' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-13 14:50:17 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484290217, `attrid` = '37,32,30,21,20,3,2,1,5,6,7,14,27,22,23,24,25,26,35,36,33,34,38' WHERE `id` = '12' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-13 15:04:24 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (13, 1484291064, 'cheche', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '15', '12', '11', '6463068558', '', '', '100', '100', '100', '0', '1', '0', '39,37,38,36,40,42,41', '42', '32,30,21,20,3,2,0,2,6,3,14,20,27,21,22,30,35,36,32,33,34', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-13 15:04:24 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ INSERT INTO `sline_car` (`aid`, `modtime`, `title`, `sellpoint`, `seatnum`, `maxseatnum`, `usedyears`, `phone`, `content`, `notice`, `recommendnum`, `satisfyscore`, `bookcount`, `webid`, `carkindid`, `ishidden`, `kindlist`, `finaldestid`, `attrid`, `seotitle`, `tagword`, `keyword`, `description`, `templet`, `piclist`) VALUES (13, 1484291064, 'cheche', '佳晨一路集团自有产品，有车实体，百万商业保险, 车型保障，品质保证', '15', '12', '11', '6463068558', '', '', '100', '100', '100', '0', '1', '0', '39,37,38,36,40,42,41', '42', '32,30,21,20,3,2,0,2,6,3,14,20,27,21,22,30,35,36,32,33,34', '', '', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-13 15:05:30 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484291130, `attrid` = '32,30,21,20,3,2,0,2,6,7,3,14,20,27,28,21,22,23,24,30,35,36,32,33,34' WHERE `id` = '13' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-13 15:05:30 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484291130, `attrid` = '32,30,21,20,3,2,0,2,6,7,3,14,20,27,28,21,22,23,24,30,35,36,32,33,34' WHERE `id` = '13' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-13 15:15:01 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484291701, `attrid` = '32,30,21,20,3,2,0,2,6,7,3,14,20,27,28,21,22,23,24,30,35,36,32,33,34' WHERE `id` = '13' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-13 15:15:01 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484291701, `attrid` = '32,30,21,20,3,2,0,2,6,7,3,14,20,27,28,21,22,23,24,30,35,36,32,33,34' WHERE `id` = '13' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-13 15:15:16 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484291716, `attrid` = '32,30,21,20,3,2,0,6,7,3,14,27,28,22,23,24,35,36,33,34' WHERE `id` = '13' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-13 15:15:16 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484291716, `attrid` = '32,30,21,20,3,2,0,6,7,3,14,27,28,22,23,24,35,36,33,34' WHERE `id` = '13' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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