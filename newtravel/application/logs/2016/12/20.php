<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-20 06:47:57 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xAB\x98\xE9\xA1\xB6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `dingjin`, `lastoffer`) VALUES ('高顶奔驰豪华型15座车套餐Test', '7', '套餐test', '', '1', '10', '10', '10', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-20 06:47:57 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xAB\x98\xE9\xA1\xB6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `dingjin`, `lastoffer`) VALUES ('高顶奔驰豪华型15座车套餐Test', '7', '套餐test', '', '1', '10', '10', '10', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2016-12-20 06:48:02 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xAB\x98\xE9\xA1\xB6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('高顶奔驰豪华型15座车套餐Test', '7', '套餐test', '', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-20 06:48:02 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xAB\x98\xE9\xA1\xB6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('高顶奔驰豪华型15座车套餐Test', '7', '套餐test', '', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2016-12-20 06:48:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xAB\x98\xE9\xA1\xB6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('高顶奔驰豪华型15座车套餐Test', '7', '套餐test', '', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-20 06:48:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xAB\x98\xE9\xA1\xB6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('高顶奔驰豪华型15座车套餐Test', '7', '套餐test', '', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2016-12-20 06:48:19 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xAB\x98\xE9\xA1\xB6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('高顶奔驰豪华型15座车套餐Test', '7', '套餐test', '美元', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-20 06:48:19 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xAB\x98\xE9\xA1\xB6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('高顶奔驰豪华型15座车套餐Test', '7', '套餐test', '美元', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2016-12-20 06:49:38 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xAB\x98\xE9\xA1\xB6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('高顶奔驰豪华型15座车套餐Test', '7', '套餐test', '美元', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-20 06:49:38 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xAB\x98\xE9\xA1\xB6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('高顶奔驰豪华型15座车套餐Test', '7', '套餐test', '美元', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2016-12-20 06:50:07 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xAB\x98\xE9\xA1\xB6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('高顶奔驰豪华型15座车套餐Test', '7', '套餐test', '美元', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-20 06:50:07 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xAB\x98\xE9\xA1\xB6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('高顶奔驰豪华型15座车套餐Test', '7', '套餐test', '美元', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2016-12-20 07:00:13 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xBB\x84\xE9\xA9\xAC' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('黄马', '7', 'test', '10', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-02-23\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-20 07:00:13 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\xBB\x84\xE9\xA9\xAC' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('黄马', '7', 'test', '10', '1', '10', '10', '10', '1', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2016-12-19\";s:7:\"endtime\";s:10:\"2017-02-23\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:12:\"价廉物美\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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