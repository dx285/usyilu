<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-10 00:54:42 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xA7\x9F\xE8\xBD\xA6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('租车test', '7', 'test', '美元', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2016-12-17\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-10 00:54:42 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xA7\x9F\xE8\xBD\xA6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('租车test', '7', 'test', '美元', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2016-12-17\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2016-12-10 00:59:51 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xBE\x8E\xE5\x85\x83' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('aaaaaaa', '7', 'test', '美元', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2017-01-06\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-10 00:59:51 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xBE\x8E\xE5\x85\x83' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('aaaaaaa', '7', 'test', '美元', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2017-01-06\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2016-12-10 01:00:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xBE\x8E\xE5\x85\x83' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('aaaaaaa', '7', 'test', '美元', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2017-01-06\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-10 01:00:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xBE\x8E\xE5\x85\x83' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('aaaaaaa', '7', 'test', '美元', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2017-01-06\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2016-12-10 01:07:24 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE2\x80\x8Btes...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('safsafasfasfsaf', '7', '​test', '99', '2', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2017-01-27\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"jia\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-10 01:07:24 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE2\x80\x8Btes...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('safsafasfasfsaf', '7', '​test', '99', '2', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2017-01-27\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"jia\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2016-12-10 01:17:40 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE4\xBB\xB7\xE5\xBB\x89...' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('kkkkk', '6', 'kkkkkkk', '', '3', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2016-12-18\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-10 01:17:40 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE4\xBB\xB7\xE5\xBB\x89...' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('kkkkk', '6', 'kkkkkkk', '', '3', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2016-12-18\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2016-12-10 01:17:44 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE4\xBB\xB7\xE5\xBB\x89...' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('kkkkk', '6', 'kkkkkkk', '', '3', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2016-12-18\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-10 01:17:44 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE4\xBB\xB7\xE5\xBB\x89...' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('kkkkk', '6', 'kkkkkkk', '', '3', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2016-12-18\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2016-12-10 01:17:47 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE4\xBB\xB7\xE5\xBB\x89...' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('kkkkk', '6', 'kkkkkkk', '', '3', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2016-12-18\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-10 01:17:47 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE4\xBB\xB7\xE5\xBB\x89...' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('kkkkk', '6', 'kkkkkkk', '', '3', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-09\";s:7:\"endtime\";s:10:\"2016-12-18\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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