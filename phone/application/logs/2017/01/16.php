<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-16 03:11:02 --- ERROR: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-16 03:11:02 --- STRACE: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 /var/www/gogogous/phone/application/classes/common.php(969): Kohana_Database_Query->execute()
#2 /var/www/gogogous/phone/application/classes/controller/pub.php(139): Common::cookie_domain()
#3 [internal function]: Controller_Pub->action_header()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/application/cache/tplcache/default/pub/404.php(1): Kohana_Request->execute()
#8 /var/www/gogogous/phone/application/classes/stourweb/view.php(75): include('/var/www/gogogo...')
#9 /var/www/gogogous/phone/application/classes/stourweb/view.php(383): Stourweb_View->capture('/var/www/gogogo...', Array)
#10 /var/www/gogogous/phone/application/classes/stourweb/controller.php(75): Stourweb_View->render()
#11 /var/www/gogogous/phone/application/classes/controller/pub.php(1141): Stourweb_Controller->display('pub/404')
#12 [internal function]: Controller_Pub->action_404()
#13 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#14 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#17 {main}
2017-01-16 03:11:02 --- ERROR: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-16 03:11:02 --- STRACE: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 /var/www/gogogous/phone/application/classes/common.php(969): Kohana_Database_Query->execute()
#2 /var/www/gogogous/phone/application/classes/controller/pub.php(139): Common::cookie_domain()
#3 [internal function]: Controller_Pub->action_header()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/application/cache/tplcache/default/pub/404.php(1): Kohana_Request->execute()
#8 /var/www/gogogous/phone/application/classes/stourweb/view.php(75): include('/var/www/gogogo...')
#9 /var/www/gogogous/phone/application/classes/stourweb/view.php(383): Stourweb_View->capture('/var/www/gogogo...', Array)
#10 /var/www/gogogous/phone/application/classes/stourweb/controller.php(75): Stourweb_View->render()
#11 /var/www/gogogous/phone/application/classes/controller/pub.php(1141): Stourweb_Controller->display('pub/404')
#12 [internal function]: Controller_Pub->action_404()
#13 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#14 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#17 {main}
2017-01-16 03:11:02 --- ERROR: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-16 03:11:02 --- STRACE: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 /var/www/gogogous/phone/application/classes/common.php(969): Kohana_Database_Query->execute()
#2 /var/www/gogogous/phone/application/classes/controller/pub.php(139): Common::cookie_domain()
#3 [internal function]: Controller_Pub->action_header()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/application/cache/tplcache/default/pub/404.php(1): Kohana_Request->execute()
#8 /var/www/gogogous/phone/application/classes/stourweb/view.php(75): include('/var/www/gogogo...')
#9 /var/www/gogogous/phone/application/classes/stourweb/view.php(383): Stourweb_View->capture('/var/www/gogogo...', Array)
#10 /var/www/gogogous/phone/application/classes/stourweb/controller.php(75): Stourweb_View->render()
#11 /var/www/gogogous/phone/application/classes/controller/pub.php(1141): Stourweb_Controller->display('pub/404')
#12 [internal function]: Controller_Pub->action_404()
#13 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#14 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#17 {main}
2017-01-16 03:11:02 --- ERROR: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-16 03:11:02 --- STRACE: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 /var/www/gogogous/phone/application/classes/common.php(969): Kohana_Database_Query->execute()
#2 /var/www/gogogous/phone/application/classes/controller/pub.php(139): Common::cookie_domain()
#3 [internal function]: Controller_Pub->action_header()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/application/cache/tplcache/default/pub/404.php(1): Kohana_Request->execute()
#8 /var/www/gogogous/phone/application/classes/stourweb/view.php(75): include('/var/www/gogogo...')
#9 /var/www/gogogous/phone/application/classes/stourweb/view.php(383): Stourweb_View->capture('/var/www/gogogo...', Array)
#10 /var/www/gogogous/phone/application/classes/stourweb/controller.php(75): Stourweb_View->render()
#11 /var/www/gogogous/phone/application/classes/controller/pub.php(1141): Stourweb_Controller->display('pub/404')
#12 [internal function]: Controller_Pub->action_404()
#13 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#14 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#17 {main}
2017-01-16 03:11:02 --- ERROR: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-16 03:11:02 --- STRACE: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 /var/www/gogogous/phone/application/classes/common.php(969): Kohana_Database_Query->execute()
#2 /var/www/gogogous/phone/application/classes/controller/pub.php(139): Common::cookie_domain()
#3 [internal function]: Controller_Pub->action_header()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/application/cache/tplcache/default/pub/404.php(1): Kohana_Request->execute()
#8 /var/www/gogogous/phone/application/classes/stourweb/view.php(75): include('/var/www/gogogo...')
#9 /var/www/gogogous/phone/application/classes/stourweb/view.php(383): Stourweb_View->capture('/var/www/gogogo...', Array)
#10 /var/www/gogogous/phone/application/classes/stourweb/controller.php(75): Stourweb_View->render()
#11 /var/www/gogogous/phone/application/classes/controller/pub.php(1141): Stourweb_Controller->display('pub/404')
#12 [internal function]: Controller_Pub->action_404()
#13 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#14 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#17 {main}
2017-01-16 03:11:02 --- ERROR: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-16 03:11:02 --- STRACE: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 /var/www/gogogous/phone/application/classes/common.php(969): Kohana_Database_Query->execute()
#2 /var/www/gogogous/phone/application/classes/controller/pub.php(139): Common::cookie_domain()
#3 [internal function]: Controller_Pub->action_header()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/application/cache/tplcache/default/pub/404.php(1): Kohana_Request->execute()
#8 /var/www/gogogous/phone/application/classes/stourweb/view.php(75): include('/var/www/gogogo...')
#9 /var/www/gogogous/phone/application/classes/stourweb/view.php(383): Stourweb_View->capture('/var/www/gogogo...', Array)
#10 /var/www/gogogous/phone/application/classes/stourweb/controller.php(75): Stourweb_View->render()
#11 /var/www/gogogous/phone/application/classes/controller/pub.php(1141): Stourweb_Controller->display('pub/404')
#12 [internal function]: Controller_Pub->action_404()
#13 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#14 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#17 {main}
2017-01-16 03:11:02 --- ERROR: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-16 03:11:02 --- STRACE: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 /var/www/gogogous/phone/application/classes/common.php(969): Kohana_Database_Query->execute()
#2 /var/www/gogogous/phone/application/classes/controller/pub.php(139): Common::cookie_domain()
#3 [internal function]: Controller_Pub->action_header()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/application/cache/tplcache/default/pub/404.php(1): Kohana_Request->execute()
#8 /var/www/gogogous/phone/application/classes/stourweb/view.php(75): include('/var/www/gogogo...')
#9 /var/www/gogogous/phone/application/classes/stourweb/view.php(383): Stourweb_View->capture('/var/www/gogogo...', Array)
#10 /var/www/gogogous/phone/application/classes/stourweb/controller.php(75): Stourweb_View->render()
#11 /var/www/gogogous/phone/application/classes/controller/pub.php(1141): Stourweb_Controller->display('pub/404')
#12 [internal function]: Controller_Pub->action_404()
#13 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#14 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#17 {main}
2017-01-16 03:11:02 --- ERROR: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-16 03:11:02 --- STRACE: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 /var/www/gogogous/phone/application/classes/common.php(969): Kohana_Database_Query->execute()
#2 /var/www/gogogous/phone/application/classes/controller/pub.php(139): Common::cookie_domain()
#3 [internal function]: Controller_Pub->action_header()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/application/cache/tplcache/default/pub/404.php(1): Kohana_Request->execute()
#8 /var/www/gogogous/phone/application/classes/stourweb/view.php(75): include('/var/www/gogogo...')
#9 /var/www/gogogous/phone/application/classes/stourweb/view.php(383): Stourweb_View->capture('/var/www/gogogo...', Array)
#10 /var/www/gogogous/phone/application/classes/stourweb/controller.php(75): Stourweb_View->render()
#11 /var/www/gogogous/phone/application/classes/controller/pub.php(1141): Stourweb_Controller->display('pub/404')
#12 [internal function]: Controller_Pub->action_404()
#13 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#14 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#17 {main}
2017-01-16 03:11:02 --- ERROR: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-16 03:11:02 --- STRACE: Database_Exception [ 2006 ]: MySQL server has gone away [ select * from sline_weblist where webid=0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 /var/www/gogogous/phone/application/classes/common.php(969): Kohana_Database_Query->execute()
#2 /var/www/gogogous/phone/application/classes/controller/pub.php(139): Common::cookie_domain()
#3 [internal function]: Controller_Pub->action_header()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/application/cache/tplcache/default/pub/404.php(1): Kohana_Request->execute()
#8 /var/www/gogogous/phone/application/classes/stourweb/view.php(75): include('/var/www/gogogo...')
#9 /var/www/gogogous/phone/application/classes/stourweb/view.php(383): Stourweb_View->capture('/var/www/gogogo...', Array)
#10 /var/www/gogogous/phone/application/classes/stourweb/controller.php(75): Stourweb_View->render()
#11 /var/www/gogogous/phone/application/classes/controller/pub.php(1141): Stourweb_Controller->display('pub/404')
#12 [internal function]: Controller_Pub->action_404()
#13 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#14 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#17 {main}
2017-01-16 03:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-16 03:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-16 09:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/picSlideLeft.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 09:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/picSlideLeft.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 11:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 11:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 11:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 11:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 11:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 11:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 11:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 11:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 11:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 11:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 11:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 11:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 11:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 11:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 11:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 11:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 11:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 11:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 12:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-unpay was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 12:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 12:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 14:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-16 14:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-16 15:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-16 15:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-16 16:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/index/myquestion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/index/myquestion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/index/myquestion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:18:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/index/myquestion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-uncomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-uncomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/index/myquestion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/index/myquestion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/index/myquestion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/index/myquestion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/index/myquestion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/index/myquestion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-uncomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-uncomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-uncomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-uncomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/plugin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-uncomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-uncomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-uncomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all-uncomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/confirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-16 16:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:19:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:19:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 16:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-16 16:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-16 21:05:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-16 21:05:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-16 22:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-16 22:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}