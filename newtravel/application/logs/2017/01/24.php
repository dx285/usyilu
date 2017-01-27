<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-24 08:06:06 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE2\x80\x8B\xE5\xAF\xB9...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford', '17', '​对对对', 'usd', '17', '12', '10', '8', '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:1:\"3\";s:6:\"profit\";s:1:\"0\";s:5:\"price\";i:3;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2018-02-01\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:9:\"急急急\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 08:06:06 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE2\x80\x8B\xE5\xAF\xB9...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford', '17', '​对对对', 'usd', '17', '12', '10', '8', '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:1:\"3\";s:6:\"profit\";s:1:\"0\";s:5:\"price\";i:3;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2018-02-01\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:9:\"急急急\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-24 08:07:30 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford', '17', 'ford', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:2:\"30\";s:6:\"profit\";s:2:\"20\";s:5:\"price\";i:50;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2017-05-25\";s:6:\"number\";s:2:\"10\";s:11:\"description\";s:0:\"\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 08:07:30 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford', '17', 'ford', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:2:\"30\";s:6:\"profit\";s:2:\"20\";s:5:\"price\";i:50;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2017-05-25\";s:6:\"number\";s:2:\"10\";s:11:\"description\";s:0:\"\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-24 08:09:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford', '17', 'ford', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:2:\"10\";s:6:\"profit\";s:2:\"10\";s:5:\"price\";i:20;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2017-05-26\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:5:\"asdsa\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 08:09:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford', '17', 'ford', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:2:\"10\";s:6:\"profit\";s:2:\"10\";s:5:\"price\";i:20;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2017-05-26\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:5:\"asdsa\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-24 08:10:19 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford', '17', 'ford', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:2:\"10\";s:6:\"profit\";s:2:\"10\";s:5:\"price\";i:20;s:9:\"starttime\";s:10:\"2017-01-26\";s:7:\"endtime\";s:10:\"2017-06-09\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"kjkl\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 08:10:19 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford', '17', 'ford', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:2:\"10\";s:6:\"profit\";s:2:\"10\";s:5:\"price\";i:20;s:9:\"starttime\";s:10:\"2017-01-26\";s:7:\"endtime\";s:10:\"2017-06-09\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"kjkl\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-24 11:36:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', 'ford中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-23\";s:7:\"endtime\";s:10:\"2017-04-28\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"safs\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 11:36:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', 'ford中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-23\";s:7:\"endtime\";s:10:\"2017-04-28\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"safs\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-24 11:49:40 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', 'ford中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-23\";s:7:\"endtime\";s:10:\"2017-04-28\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"safs\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 11:49:40 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', 'ford中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-23\";s:7:\"endtime\";s:10:\"2017-04-28\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"safs\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-24 11:54:06 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', 'ford中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2017-06-03\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"hjlh\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 11:54:06 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', 'ford中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2017-06-03\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"hjlh\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(662): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-24 11:59:50 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', 'ford中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2017-06-03\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"hjlh\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 11:59:50 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', 'ford中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2017-06-03\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"hjlh\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(664): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-24 12:04:12 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', 'ford中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2017-06-03\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"hjlh\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 12:04:12 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', 'ford中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2017-06-03\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"hjlh\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(688): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-24 12:07:22 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', '​中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2017-06-03\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"hjlh\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 12:07:22 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', '​中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-24\";s:7:\"endtime\";s:10:\"2017-06-03\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:4:\"hjlh\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(688): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-24 12:16:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', 'ford中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-23\";s:7:\"endtime\";s:10:\"2017-05-06\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:7:\"kljklkl\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 12:16:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', 'ford中文', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-23\";s:7:\"endtime\";s:10:\"2017-05-06\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:7:\"kljklkl\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(688): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-24 12:17:32 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', '中文', 'usd', '17', '100', '100', '100', '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-23\";s:7:\"endtime\";s:10:\"2017-06-10\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:6:\"hjkgjh\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 12:17:32 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\xBE\xAE\xE8\xBD\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('ford中文', '17', '中文', 'usd', '17', '100', '100', '100', '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-23\";s:7:\"endtime\";s:10:\"2017-06-10\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:6:\"hjkgjh\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(688): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-24 12:41:37 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE6\xB2\xA1";}' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('gfkjhgjhg', '17', 'jhkjkjh', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-23\";s:7:\"endtime\";s:10:\"2017-06-08\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"没\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 12:41:37 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE6\xB2\xA1";}' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('gfkjhgjhg', '17', 'jhkjkjh', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-23\";s:7:\"endtime\";s:10:\"2017-06-08\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"没\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-24 12:46:55 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE6\xB2\xA1";}' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('gfkjhgjhg', '17', 'jhkjkjh', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-23\";s:7:\"endtime\";s:10:\"2017-06-08\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"没\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 12:46:55 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE6\xB2\xA1";}' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('gfkjhgjhg', '17', 'jhkjkjh', 'usd', '17', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-23\";s:7:\"endtime\";s:10:\"2017-06-08\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"没\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-24 23:41:47 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE4\xB8\xAD\xE6\x96\x87...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('test2', '18', '中文测试', 'usd', '18', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-25\";s:7:\"endtime\";s:10:\"2017-04-08\";s:6:\"number\";s:2:\"10\";s:11:\"description\";s:12:\"hdjskfhajksd\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-24 23:41:47 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE4\xB8\xAD\xE6\x96\x87...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('test2', '18', '中文测试', 'usd', '18', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-25\";s:7:\"endtime\";s:10:\"2017-04-08\";s:6:\"number\";s:2:\"10\";s:11:\"description\";s:12:\"hdjskfhajksd\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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