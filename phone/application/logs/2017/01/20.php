<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-20 02:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 02:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 03:06:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484841600 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484841600 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-20 03:06:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484841600 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484841600 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-20 03:06:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484841600 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484841600 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-20 03:06:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day>=1484841600 AND (number>0 OR number=-1)' at line 1 [ SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE adultprice > 0 and carid= AND day>=1484841600 AND (number>0 OR number=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-01-20 06:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 06:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 07:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL line/print/id/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-20 07:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL line/print/id/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/menu-current-arrow.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/menu-current-arrow.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL install/images/default/top1_r.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL install/images/default/top1_r.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/default/hd_a1.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/default/hd_a1.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/200812/20081230023106860.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/200812/20081230023106860.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Images/Mlogin/Bitmap02.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Images/Mlogin/Bitmap02.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/image/menu_h4.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/image/menu_h4.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/list_bg.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/list_bg.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL theme/theme/default/images/bg_bnt_user_base_over.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL theme/theme/default/images/bg_bnt_user_base_over.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lib/images/vtip_arrow.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lib/images/vtip_arrow.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dede/img/button_bg1.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dede/img/button_bg1.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL plus/img/topsearch_submit.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL plus/img/topsearch_submit.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL include/dialog/img/sp_bg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL include/dialog/img/sp_bg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/topbanner_bg.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/topbanner_bg.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/images/lnk/system.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/images/lnk/system.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/confirm_close.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/confirm_close.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/images/must.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/images/must.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:38 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_template ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2017-01-20 11:42:38 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_template ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/page_code.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/page_code.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editors/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editors/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/samples/4_small.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/samples/4_small.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/templates/classic/images/stars_5.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/templates/classic/images/stars_5.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/templates/template_default/images/always-free-shipping.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/templates/template_default/images/always-free-shipping.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/templates/template_default/buttons/english/button_tell_a_friend.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/templates/template_default/buttons/english/button_tell_a_friend.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/zttit02.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/zttit02.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Admin/Images/GoogleSiteMaplogo.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Admin/Images/GoogleSiteMaplogo.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:41 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_template ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2017-01-20 11:42:41 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_template ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/admintitlebg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/admintitlebg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/gengtie.jpg ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/gengtie.jpg ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL core/themes/stable/images/core/menu-collapsed-rtl.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL core/themes/stable/images/core/menu-collapsed-rtl.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/menu-expanded.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/menu-expanded.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Admin/Images/icon_lpdhjl.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Admin/Images/icon_lpdhjl.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL store/Images/hdfk.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL store/Images/hdfk.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL skins/doccms_model_1/images/bg_contact_a.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL skins/doccms_model_1/images/bg_contact_a.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admini/images/s_managehtml/icon_refresh.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admini/images/s_managehtml/icon_refresh.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Admin/Images/Icon-Nav-Close-over.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Admin/Images/Icon-Nav-Close-over.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/menu_righttop.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/menu_righttop.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/resource/images/coupon-hd-bg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/resource/images/coupon-hd-bg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web/resource/images/bg_repno.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web/resource/images/bg_repno.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resource/image/bg_repno.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resource/image/bg_repno.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/abg2.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/abg2.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: face/5.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: face/5.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xin/btn_regis.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xin/btn_regis.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global/banklist_hnapay.jpg ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global/banklist_hnapay.jpg ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Public/lottery/roulette/images/b0-2.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Public/lottery/roulette/images/b0-2.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL m/_/images/fileicon/jpg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL m/_/images/fileicon/jpg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/images/tab_17.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/images/tab_17.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/tab_17.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/tab_17.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/top_tt_bg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/top_tt_bg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Public/img/fotorama.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Public/img/fotorama.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL data/system/kaixin001.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL data/system/kaixin001.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL data/captcha/gif/Small_Fonts/3.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL data/captcha/gif/Small_Fonts/3.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL inc_img/vote/vote2_1.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL inc_img/vote/vote2_1.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/login/login_submit.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/login/login_submit.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL i5808/images/menu_reduce.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL i5808/images/menu_reduce.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL skins/images/ico_catalogue.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL skins/images/ico_catalogue.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logout1.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logout1.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL forum/images/logout1.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL forum/images/logout1.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/common/online_admin.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/common/online_admin.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/rank/soso.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/rank/soso.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console/images/bg11.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console/images/bg11.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console/images/login.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console/images/login.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Admincp/images/login_r2_c2_r1_c4.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Admincp/images/login_r2_c2_r1_c4.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: statics/delivertitle.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: statics/delivertitle.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/default/shopexstorelogo.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/default/shopexstorelogo.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/netgather_com.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/netgather_com.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cn/images/banner_page_bg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cn/images/banner_page_bg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/image/common/addicn.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/image/common/addicn.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/space/t1/images/title.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/space/t1/images/title.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL themes/forum/default/images/forum/lock.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL themes/forum/default/images/forum/lock.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/select_arrow_over.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/select_arrow_over.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/images/buttons_40.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/images/buttons_40.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL include/image/dui_r.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL include/image/dui_r.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:55 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_template ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2017-01-20 11:42:55 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_template ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL skin/default/image/add_job.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL skin/default/image/add_job.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/Tpl/main/fanwe/images/fanwe_ui/ui-buttonbg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/Tpl/main/fanwe/images/fanwe_ui/ui-buttonbg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL views/images/admin/closex.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL views/images/admin/closex.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:56 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_template ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2017-01-20 11:42:56 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_template ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL inc/images/captcha_bg.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL inc/images/captcha_bg.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL inc/templates/manage/images/cross_grey_small.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL inc/templates/manage/images/cross_grey_small.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL content/plugins/tips/icon_tips.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL content/plugins/tips/icon_tips.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL content/templates/default/images/weibe_button.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL content/templates/default/images/weibe_button.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/templates/met/images/logosmall.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/templates/met/images/logosmall.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL job/templates/met/css/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL job/templates/met/css/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wap/templates/met/images/listico.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wap/templates/met/images/listico.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/icon_view.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/icon_view.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL install/images/install-step1-en_us.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL install/images/install-step1-en_us.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/admina/logo.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/admina/logo.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/admina/sitmap0.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/admina/sitmap0.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/Tpl/fanwe/images/fancybox_loading.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/Tpl/fanwe/images/fancybox_loading.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/side_bg_r2_c1.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/side_bg_r2_c1.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL e/install/images/noadd.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL e/install/images/noadd.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL d/js/acmsd/close_o.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL d/js/acmsd/close_o.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/login/index_hz02.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/login/index_hz02.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/showsp/areabg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/showsp/areabg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SiteServer/Pic/Company/login.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SiteServer/Pic/Company/login.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Pic/Company/login.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Pic/Company/login.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SiteServer/Pic/tree/itemContainer.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SiteServer/Pic/tree/itemContainer.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Pic/tree/itemContainer.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Pic/tree/itemContainer.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Images/Silder/sldr3h_sl.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Images/Silder/sldr3h_sl.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Admin/Images/LoginImages/logyh.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Admin/Images/LoginImages/logyh.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/xueli_1.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/xueli_1.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL statics/images/admin_img/arrowhead-y.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL statics/images/admin_img/arrowhead-y.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpsso_server/statics/images/msg_img/chrome_s_1.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpsso_server/statics/images/msg_img/chrome_s_1.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/buddies.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/buddies.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/valid_formdata.js ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/valid_formdata.js ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/templates/images/subTypeBg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/templates/images/subTypeBg.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/templates/images/filestate.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/templates/images/filestate.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/ad_location_middle_center1.jpg ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/ad_location_middle_center1.jpg ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL theme/t1/themebg_preview.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL theme/t1/themebg_preview.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/table_bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/table_bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/ext/midi.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/ext/midi.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/images/icon-pointer-flag.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/images/icon-pointer-flag.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/images/yes.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/images/yes.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/js/farbtastic.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/js/farbtastic.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/swfupload/plugins/swfupload.queue.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/swfupload/plugins/swfupload.queue.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/comment_alert.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/comment_alert.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL data/avatar/no_photo.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL data/avatar/no_photo.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL views/default/skin/blue/images/front/buying.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL views/default/skin/blue/images/front/buying.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL install/images/guide_1.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL install/images/guide_1.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/2011/11/30/20111130113535527.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/2011/11/30/20111130113535527.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL plus/weather/icon/a_12.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL plus/weather/icon/a_12.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL question/images/face/images/ico_face_arrow.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-20 11:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL question/images/face/images/ico_face_arrow.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/movienr_right01.jpg ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/movienr_right01.jpg ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Admin/Images/RectNoColor.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Admin/Images/RectNoColor.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL base/admin/images/linksup.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL base/admin/images/linksup.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL base/templates/images/2.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL base/templates/images/2.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL zb_users/AVATAR/0.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL zb_users/AVATAR/0.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL zb_users/avatar/0.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL zb_users/avatar/0.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/skins/images/ads_set3.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/skins/images/ads_set3.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/forum_readme.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/forum_readme.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL img/images/commentLoad.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL img/images/commentLoad.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL install/images/bg-cmstop.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL install/images/bg-cmstop.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/Tpl/fanwe/images/icon_arrowdouble.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/Tpl/fanwe/images/icon_arrowdouble.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/loadingAnimation.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/loadingAnimation.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/modmenu_li_hover_bg.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/modmenu_li_hover_bg.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/templates/system/images/calendar.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/templates/system/images/calendar.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/banners/shop-ad-books.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/banners/shop-ad-books.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Images/Sort_Folder_Close.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Images/Sort_Folder_Close.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Images/arrow_04.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Images/arrow_04.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL e/install/images/bg_1.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL e/install/images/bg_1.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/public/hr_tijiao.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/public/hr_tijiao.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:15 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_template ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2017-01-20 11:43:15 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_template ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL inc/image/bj.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL inc/image/bj.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/style.css ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/style.css ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/arrow_right_8x8.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/arrow_right_8x8.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/common/topic-min-img.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/common/topic-min-img.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL image/admin/add.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL image/admin/add.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL image/cflag/ad.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL image/cflag/ad.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Admin/images/install_lines.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Admin/images/install_lines.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Utility/pics/status-green.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Utility/pics/status-green.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/i_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/i_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL product/waterimage/200x200.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL product/waterimage/200x200.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL install/images/header-corners.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL install/images/header-corners.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/gif_47_106.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/gif_47_106.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/ayacms.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/ayacms.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL media/xmlconnect/system/ok.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL media/xmlconnect/system/ok.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: LICENSE.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: LICENSE.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL skin/frontend/base/default/favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL skin/frontend/base/default/favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/qq/qqkf2/Kf_bg03_03.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/qq/qqkf2/Kf_bg03_03.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/close.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/close.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bbs/css/images/add_category_hover.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bbs/css/images/add_category_hover.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL celive/admin/live/loading.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL celive/admin/live/loading.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL views/admin/images/arrowhead-y.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL views/admin/images/arrowhead-y.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL extensions/kindeditor/themes/default/default.png) was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL extensions/kindeditor/themes/default/default.png) was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL style/default/hdwiki.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL style/default/hdwiki.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL style/default/fujian_top_bg.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL style/default/fujian_top_bg.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL style/default/index_login_bg.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL style/default/index_login_bg.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL style/default/style/bg_title.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL style/default/style/bg_title.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL style/default/login_bg.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL style/default/login_bg.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CN/nite/images/title.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CN/nite/images/title.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Images/dialog_closebtn_over.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Images/dialog_closebtn_over.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL App_Themes/AdminDefaultTheme/DateTheme/bgteuw.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL App_Themes/AdminDefaultTheme/DateTheme/bgteuw.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Images/Microblog/dialog_rt.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Images/Microblog/dialog_rt.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/li_4.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/li_4.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/default/listico.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/default/listico.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/default/images/button_plain_hover.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/default/images/button_plain_hover.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/tpl/images/welcome_h1.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/tpl/images/welcome_h1.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/bg-pay-return-success.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/bg-pay-return-success.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:26 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_template ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2017-01-20 11:43:26 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_template ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adfile/ad9.js ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adfile/ad9.js ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/login_06.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/images/login_06.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL extmail/default/images/lastpg.d.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL extmail/default/images/lastpg.d.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/view/image/flags/wales.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/view/image/flags/wales.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/view/image/checkmark.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/view/image/checkmark.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminsoft/templates/images/bullet_blue.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminsoft/templates/images/bullet_blue.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/plug/shipplug/exp04.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/plug/shipplug/exp04.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/admin/logo.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/admin/logo.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/admin/sprites.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/admin/sprites.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ACT_inc/ItemBg.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ACT_inc/ItemBg.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ACT_inc/share/minusbottom.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ACT_inc/share/minusbottom.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Admin/Images/bg_admin.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-20 11:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Admin/Images/bg_admin.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2017-01-20 11:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/act_1.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/act_1.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 11:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/reg.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 11:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/reg.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 13:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 13:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 13:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 13:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 13:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 13:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 14:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 14:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 14:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 14:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2017-01-20 18:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-20 18:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}