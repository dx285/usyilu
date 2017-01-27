<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-21 04:23:51 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484943831, `attrid` = '21,20,3,2,1,0,5,16,17,41,42,6,7,43,14,20,27,22,23,24' WHERE `id` = '14' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-21 04:23:51 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'attrid' at row 1 [ UPDATE `sline_car` SET `addtime` = 1484943831, `attrid` = '21,20,3,2,1,0,5,16,17,41,42,6,7,43,14,20,27,22,23,24' WHERE `id` = '14' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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