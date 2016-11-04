<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-28 00:08:12 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (6, 1477584492, 'Bellagio', '3600 S Las Vegas Blvd, Las Vegas, NV 89109', '0', '', '100', '1111111', '7/24', '1AM', '', '1,2', '100', '100', '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477584492, '1', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-28 00:08:12 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'finaldestid' at row 1 [ INSERT INTO `sline_hotel` (`aid`, `addtime`, `title`, `address`, `webid`, `sellpoint`, `recommendnum`, `telephone`, `opentime`, `decoratetime`, `finaldestid`, `iconlist`, `satisfyscore`, `bookcount`, `piclist`, `ishidden`, `litpic`, `traffic`, `notice`, `equipment`, `aroundspots`, `seotitle`, `tagword`, `keyword`, `description`, `fuwu`, `modtime`, `hotelrankid`, `lng`, `lat`, `content`, `templet`) VALUES (6, 1477584492, 'Bellagio', '3600 S Las Vegas Blvd, Las Vegas, NV 89109', '0', '', '100', '1111111', '7/24', '1AM', '', '1,2', '100', '100', '', 0, NULL, '', '', '', '', '', '', '', '', '', 1477584492, '1', '', '', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/plugins/hotel/classes/controller/admin/hotel.php(461): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Hotel->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Hotel))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}