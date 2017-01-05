<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-09 06:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL line/print/id/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-12-09 06:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL line/print/id/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2016-12-09 08:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-12-09 08:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}