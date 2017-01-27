<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-10 01:29:05 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x85\x85\xE7\x94\xB5...' for column 'content' at row 1 [ UPDATE `sline_car_suit` SET `content` = 'wifi &nbsp;充电 &nbsp;举牌接机' WHERE `id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:29:05 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x85\x85\xE7\x94\xB5...' for column 'content' at row 1 [ UPDATE `sline_car_suit` SET `content` = 'wifi &nbsp;充电 &nbsp;举牌接机' WHERE `id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(659): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-10 01:29:48 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x85\x85\xE7\x94\xB5...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('wifi  充电  举牌接机', '7', 'wifi &nbsp;充电 &nbsp;举牌接机', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:29:48 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x85\x85\xE7\x94\xB5...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('wifi  充电  举牌接机', '7', 'wifi &nbsp;充电 &nbsp;举牌接机', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-10 01:30:18 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x85\x85\xE7\x94\xB5...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('wifi  充电  举牌接机', '7', 'wifi &nbsp;充电 &nbsp;举牌接机', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:30:18 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x85\x85\xE7\x94\xB5...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('wifi  充电  举牌接机', '7', 'wifi &nbsp;充电 &nbsp;举牌接机', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-10 01:33:39 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x85\x85\xE7\x94\xB5' for column 'suitname' at row 1 [ UPDATE `sline_car_suit` SET `suitname` = 'WIFI 充电' WHERE `id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:33:39 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x85\x85\xE7\x94\xB5' for column 'suitname' at row 1 [ UPDATE `sline_car_suit` SET `suitname` = 'WIFI 充电' WHERE `id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(659): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-10 01:33:45 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x85\x85\xE7\x94\xB5' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('WIFI 充电', '7', 'jjjjjj', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:33:45 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x85\x85\xE7\x94\xB5' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('WIFI 充电', '7', 'jjjjjj', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-10 01:44:11 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xEF\xBC\x8C\xE5\x85\x85...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('WIFI，充电，举牌接机', '7', 'jjjjjj', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:44:11 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xEF\xBC\x8C\xE5\x85\x85...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('WIFI，充电，举牌接机', '7', 'jjjjjj', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-10 01:44:40 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x95\xA6\xE5\x95\xA6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('WIFI啦啦啦啦啦啦啦啦', '7', 'jjjjjj', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:44:40 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x95\xA6\xE5\x95\xA6...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('WIFI啦啦啦啦啦啦啦啦', '7', 'jjjjjj', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-10 01:45:05 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xEF\xBC\x8C\xE5\x85\x85...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('WIFI，充电，举牌接机', '7', 'jjjjjj', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:45:05 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xEF\xBC\x8C\xE5\x85\x85...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('WIFI，充电，举牌接机', '7', 'jjjjjj', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-10 01:46:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\x98\xBF\xE6\x96\xAF...' for column 'suitname' at row 1 [ UPDATE `sline_car_suit` SET `suitname` = 'WIFI阿斯顿发生的发顺丰' WHERE `id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:46:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE9\x98\xBF\xE6\x96\xAF...' for column 'suitname' at row 1 [ UPDATE `sline_car_suit` SET `suitname` = 'WIFI阿斯顿发生的发顺丰' WHERE `id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(659): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-10 01:48:49 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE6\x89\x93\xE5\xBE\x97...' for column 'suitname' at row 1 [ UPDATE `sline_car_suit` SET `suitname` = 'WI打得过谁发的发布' WHERE `id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:48:49 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE6\x89\x93\xE5\xBE\x97...' for column 'suitname' at row 1 [ UPDATE `sline_car_suit` SET `suitname` = 'WI打得过谁发的发布' WHERE `id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/plugins/car/classes/controller/admin/car.php(659): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Car->action_ajax_suitsave()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Car))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2017-01-10 01:50:10 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE8\xB1\xAA\xE5\x8D\x8E...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('豪华豪华豪华豪华', '7', 'jjjjjj', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:50:10 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE8\xB1\xAA\xE5\x8D\x8E...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('豪华豪华豪华豪华', '7', 'jjjjjj', 'jjj', '1', '99', '11', '99', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:2:\"99\";s:5:\"price\";i:1098;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"999\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-10 01:51:49 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE8\xB1\xAA\xE5\x8D\x8E...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('豪华豪华豪华豪华', '7', 'jjjjjj即可很快会比较好', 'jjj', '1', '998', '1190', '998', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:3:\"997\";s:5:\"price\";i:1996;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"10\";s:11:\"description\";s:2:\"99\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:51:49 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE8\xB1\xAA\xE5\x8D\x8E...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('豪华豪华豪华豪华', '7', 'jjjjjj即可很快会比较好', 'jjj', '1', '998', '1190', '998', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:3:\"997\";s:5:\"price\";i:1996;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"10\";s:11:\"description\";s:2:\"99\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-10 01:53:42 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xEF\xBC\x8C\xE5\x85\x85...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('wifi，充电，举牌接机', '7', '测试测试测试测试', '美元', '1', '100', '100', '100', '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-25\";s:7:\"endtime\";s:10:\"2017-04-27\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"100\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:53:42 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xEF\xBC\x8C\xE5\x85\x85...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('wifi，充电，举牌接机', '7', '测试测试测试测试', '美元', '1', '100', '100', '100', '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-25\";s:7:\"endtime\";s:10:\"2017-04-27\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"100\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-10 01:55:45 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xEF\xBC\x8C\xE5\x85\x85...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('wifi，充电，举牌接机', '7', '测试测试测试测试', '美元', '1', '100', '100', '100', '2', 0, 'a:8:{s:9:\"pricerule\";s:4:\"week\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-25\";s:7:\"endtime\";s:10:\"2017-04-27\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"100\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 01:55:45 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xEF\xBC\x8C\xE5\x85\x85...' for column 'suitname' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('wifi，充电，举牌接机', '7', '测试测试测试测试', '美元', '1', '100', '100', '100', '2', 0, 'a:8:{s:9:\"pricerule\";s:4:\"week\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-25\";s:7:\"endtime\";s:10:\"2017-04-27\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"100\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-10 02:21:29 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE6\xB5\x8B\xE8\xAF\x95...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('wifi，充电，举牌接机', '7', '测试测试测试测试', '美元', '1', '100', '100', '100', '2', 0, 'a:8:{s:9:\"pricerule\";s:4:\"week\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-25\";s:7:\"endtime\";s:10:\"2017-04-27\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"100\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 02:21:29 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE6\xB5\x8B\xE8\xAF\x95...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('wifi，充电，举牌接机', '7', '测试测试测试测试', '美元', '1', '100', '100', '100', '2', 0, 'a:8:{s:9:\"pricerule\";s:4:\"week\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-25\";s:7:\"endtime\";s:10:\"2017-04-27\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:3:\"100\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-10 02:22:11 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x8D\xB3\xE5\x8F\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('qwqwqw', '7', 'jjjjjj即可很快会比较好', 'jjj', '1', '998', '1190', '998', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:3:\"997\";s:5:\"price\";i:1996;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"10\";s:11:\"description\";s:2:\"99\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-10 02:22:11 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x8D\xB3\xE5\x8F\xAF...' for column 'content' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('qwqwqw', '7', 'jjjjjj即可很快会比较好', 'jjj', '1', '998', '1190', '998', '2', '111', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"999\";s:6:\"profit\";s:3:\"997\";s:5:\"price\";i:1996;s:9:\"starttime\";s:10:\"2016-12-20\";s:7:\"endtime\";s:10:\"2017-01-31\";s:6:\"number\";s:2:\"10\";s:11:\"description\";s:2:\"99\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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