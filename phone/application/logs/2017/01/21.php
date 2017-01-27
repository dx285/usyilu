<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-21 00:51:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-21 00:51:26 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-21 05:45:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ /var/www/gogogous/plugins/car/classes/model/car.php [ 233 ]
2017-01-21 05:45:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ /var/www/gogogous/plugins/car/classes/model/car.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-01-21 06:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 06:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-21 07:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/picSlideRight.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 07:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/picSlideRight.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-21 09:26:29 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-21 09:26:29 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-21 09:27:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-21 09:27:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-21 09:28:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-21 09:28:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-21 09:55:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-21 09:55:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-21 09:55:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-21 09:55:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-21 10:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/pay_yl.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-21 10:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/pay_yl.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-21 10:15:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL line/print/id/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-21 10:15:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL line/print/id/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-21 11:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 11:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-21 13:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 13:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-21 19:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-21 19:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-21 23:18:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-21 23:18:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484928000 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484928000 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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