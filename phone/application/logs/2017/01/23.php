<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-23 00:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/picSlideRight.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-23 00:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/picSlideRight.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-23 00:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/pay_yl.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-23 00:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/pay_yl.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-23 04:23:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1485100800 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1485100800 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-23 04:23:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1485100800 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1485100800 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT MIN(adul...', false, Array)
#1 /var/www/gogogous/plugins/car/classes/model/car.php(295): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/controller/mobile/car.php(148): Model_Car::get_minprice(NULL, Array)
#3 [internal function]: Controller_Mobile_Car->action_show()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Car))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#8 {main}
2017-01-23 09:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-23 09:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-23 11:24:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1485100800 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1485100800 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-23 11:24:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1485100800 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1485100800 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT MIN(adul...', false, Array)
#1 /var/www/gogogous/plugins/car/classes/model/car.php(295): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/controller/mobile/car.php(148): Model_Car::get_minprice(NULL, Array)
#3 [internal function]: Controller_Mobile_Car->action_show()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Car))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#8 {main}
2017-01-23 14:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/loading.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-23 14:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/loading.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-23 14:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobile/lines was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-23 14:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobile/lines was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-23 19:29:55 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1485100800 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1485100800 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-23 19:29:55 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1485100800 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1485100800 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT MIN(adul...', false, Array)
#1 /var/www/gogogous/plugins/car/classes/model/car.php(295): Kohana_Database_Query->execute()
#2 /var/www/gogogous/plugins/car/classes/controller/mobile/car.php(148): Model_Car::get_minprice(NULL, Array)
#3 [internal function]: Controller_Mobile_Car->action_show()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Car))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#8 {main}
2017-01-23 21:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-23 21:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}