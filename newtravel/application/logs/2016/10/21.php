<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-21 05:53:48 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_plugin_leftnav` SET `displayorder` = '' WHERE `id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-21 05:53:48 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_plugin_leftnav` SET `displayorder` = '' WHERE `id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_p...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/newtravel/application/classes/controller/app.php(416): Kohana_ORM->save()
#4 [internal function]: Controller_App->action_topusernav()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_App))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-21 05:55:08 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_nav` SET `displayorder` = '' WHERE `id` = '3' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-21 05:55:08 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_nav` SET `displayorder` = '' WHERE `id` = '3' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_n...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/newtravel/application/classes/controller/config.php(248): Kohana_ORM->save()
#4 [internal function]: Controller_Config->action_mainnav()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Config))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-21 05:56:18 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_nav` SET `displayorder` = '' WHERE `id` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-21 05:56:18 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_nav` SET `displayorder` = '' WHERE `id` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_n...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/newtravel/application/classes/controller/config.php(248): Kohana_ORM->save()
#4 [internal function]: Controller_Config->action_mainnav()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Config))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-21 05:56:20 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_nav` SET `displayorder` = '' WHERE `id` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-21 05:56:20 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_nav` SET `displayorder` = '' WHERE `id` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_n...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/newtravel/application/classes/controller/config.php(248): Kohana_ORM->save()
#4 [internal function]: Controller_Config->action_mainnav()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Config))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-21 05:56:54 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_nav` SET `displayorder` = '' WHERE `id` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-21 05:56:54 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'displayorder' at row 1 [ UPDATE `sline_nav` SET `displayorder` = '' WHERE `id` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_n...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /var/www/gogogous/newtravel/application/classes/controller/config.php(248): Kohana_ORM->save()
#4 [internal function]: Controller_Config->action_mainnav()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Config))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-21 05:57:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Nav::deleteClear() ~ APPPATH/classes/controller/config.php [ 236 ]
2016-10-21 05:57:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Nav::deleteClear() ~ APPPATH/classes/controller/config.php [ 236 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-10-21 05:58:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Nav::deleteClear() ~ APPPATH/classes/controller/config.php [ 236 ]
2016-10-21 05:58:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Nav::deleteClear() ~ APPPATH/classes/controller/config.php [ 236 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-10-21 06:13:30 --- ERROR: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_line' doesn't exist [ select count(*) as num  from  sline_line where id > 0   ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-21 06:13:30 --- STRACE: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_line' doesn't exist [ select count(*) as num  from  sline_line where id > 0   ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 /var/www/gogogous/newtravel/application/classes/controller/tagword.php(58): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tagword->action_index()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Tagword))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#7 {main}
2016-10-21 06:13:37 --- ERROR: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_line' doesn't exist [ select count(*) as num  from  sline_line where id > 0   ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-21 06:13:37 --- STRACE: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_line' doesn't exist [ select count(*) as num  from  sline_line where id > 0   ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 /var/www/gogogous/newtravel/application/classes/controller/keyword.php(58): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Keyword->action_index()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Keyword))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#7 {main}
2016-10-21 06:14:00 --- ERROR: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_stats' doesn't exist [ select count(*) as num from sline_stats a where a.id is not null  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-21 06:14:00 --- STRACE: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_stats' doesn't exist [ select count(*) as num from sline_stats a where a.id is not null  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 /var/www/gogogous/newtravel/application/classes/controller/visit.php(74): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Visit->action_index()
#3 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Visit))
#4 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#7 {main}