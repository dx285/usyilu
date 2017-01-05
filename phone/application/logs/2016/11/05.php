<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-05 01:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-05 01:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2016-11-05 09:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-05 09:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}
2016-11-05 09:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL show_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-11-05 09:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL show_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#3 {main}
2016-11-05 13:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-05 13:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/phone/index.php(136): Kohana_Request->execute()
#1 {main}