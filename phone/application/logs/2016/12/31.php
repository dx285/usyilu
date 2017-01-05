<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-31 02:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-31 02:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2016-12-31 02:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL show_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-12-31 02:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL show_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2016-12-31 02:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-31 02:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2016-12-31 08:55:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-31 08:55:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT adultpri...', false, Array)
#1 /var/www/gogogous/plugins/car/classes/model/car.php(212): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/controller/mobile/car.php(192): Model_Car::suit_range_price(0, '', '', 1)
#3 [internal function]: Controller_Mobile_Car->action_ajax_range_price()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Car))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#8 {main}
2016-12-31 10:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/pay_yl.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-12-31 10:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/pay_yl.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2016-12-31 14:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-31 14:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2016-12-31 15:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/picSlideLeft.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-12-31 15:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/picSlideLeft.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2016-12-31 20:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL line/print/id/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-12-31 20:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL line/print/id/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2016-12-31 20:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/grey.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-12-31 20:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/grey.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}