<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-09 00:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-09 00:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2016-11-09 09:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL line/print/id/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-11-09 09:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL line/print/id/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2016-11-09 10:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-09 10:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2016-11-09 22:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-09 22:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}