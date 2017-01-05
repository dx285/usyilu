<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-01 04:29:24 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_qq_kefu` SET `displayorder` = '' WHERE `id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-01 04:29:24 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_qq_kefu` SET `displayorder` = '' WHERE `id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_q...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/newtravel/application/classes/controller/kefu.php(366): Kohana_ORM->save()
#4 [internal function]: Controller_Kefu->action_qqlist()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Kefu))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}