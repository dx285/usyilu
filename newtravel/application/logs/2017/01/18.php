<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-18 02:24:06 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xBE\x8E\xE5\x85\x83' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('福特商务车', '4', 'test', '美元', '5', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-17\";s:7:\"endtime\";s:10:\"2018-01-17\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:6:\"合理\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-18 02:24:06 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xBE\x8E\xE5\x85\x83' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('福特商务车', '4', 'test', '美元', '5', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-17\";s:7:\"endtime\";s:10:\"2018-01-17\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:6:\"合理\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-18 02:26:41 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xBE\x8E\xE5\x85\x83' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('福特商务车', '4', 'test&nbsp;&nbsp;', '美元', '5', 0, 0, 0, '2', '100', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-17\";s:7:\"endtime\";s:10:\"2018-01-06\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:6:\"合理\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-18 02:26:41 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xBE\x8E\xE5\x85\x83' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('福特商务车', '4', 'test&nbsp;&nbsp;', '美元', '5', 0, 0, 0, '2', '100', 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-17\";s:7:\"endtime\";s:10:\"2018-01-06\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:6:\"合理\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-18 02:33:33 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xBE\x8E\xE5\x85\x83' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('福特商务车suv', '14', 'test', '美元', '15', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-17\";s:7:\"endtime\";s:10:\"2018-01-13\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:6:\"合理\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-18 02:33:33 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE7\xBE\x8E\xE5\x85\x83' for column 'unit' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('福特商务车suv', '14', 'test', '美元', '15', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-17\";s:7:\"endtime\";s:10:\"2018-01-13\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:6:\"合理\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-18 02:36:13 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x90\x88\xE7\x90\x86...' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('福特商务车', '4', 'test', 'usd', '5', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-18\";s:7:\"endtime\";s:10:\"2018-01-17\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:6:\"合理\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-18 02:36:13 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x90\x88\xE7\x90\x86...' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('福特商务车', '4', 'test', 'usd', '5', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:3:\"100\";s:5:\"price\";i:200;s:9:\"starttime\";s:10:\"2017-01-18\";s:7:\"endtime\";s:10:\"2018-01-17\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:6:\"合理\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-18 02:38:07 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x90\x88\xE7\x90\x86...' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('福特商务车', '4', 'test', 'usd', '5', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:2:\"20\";s:5:\"price\";i:120;s:9:\"starttime\";s:10:\"2017-01-17\";s:7:\"endtime\";s:10:\"2018-01-06\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:6:\"合理\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-18 02:38:07 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE5\x90\x88\xE7\x90\x86...' for column 'lastoffer' at row 1 [ INSERT INTO `sline_car_suit` (`suitname`, `carid`, `content`, `unit`, `suittypeid`, `jifentprice`, `jifenbook`, `jifencomment`, `paytype`, `dingjin`, `lastoffer`) VALUES ('福特商务车', '4', 'test', 'usd', '5', 0, 0, 0, '2', 0, 'a:8:{s:9:\"pricerule\";s:3:\"all\";s:10:\"basicprice\";s:3:\"100\";s:6:\"profit\";s:2:\"20\";s:5:\"price\";i:120;s:9:\"starttime\";s:10:\"2017-01-17\";s:7:\"endtime\";s:10:\"2018-01-06\";s:6:\"number\";s:2:\"-1\";s:11:\"description\";s:6:\"合理\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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