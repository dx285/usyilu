<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-24 00:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 00:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 01:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-77-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-77-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-18-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-18-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/register/ajax_send_emailcode was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/register/ajax_send_emailcode was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:32:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/register/ajax_check_email was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:32:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/register/ajax_check_email was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/register/doreg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-24 01:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/register/doreg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-27-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-27-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cars/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 01:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cars/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 01:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-18-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-18-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/register/ajax_send_msgcode was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/register/ajax_send_msgcode was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 01:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 01:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/pub/ajax_add_question was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/pub/ajax_add_question was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-81-27-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-81-27-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:36:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL servers/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:36:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL servers/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 01:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 01:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/line/ajax_date_options was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/line/ajax_date_options was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-79-18-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-79-18-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-80-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-80-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-80-18-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-80-18-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-81-18-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-81-18-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-81-27-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-81-27-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/pub/ajax_check_code was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/pub/ajax_check_code was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/login/ajax_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/login/ajax_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-78-27-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-78-27-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-27-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-27-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-78-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-78-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/lines/book was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/lines/book was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotels/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 01:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotels/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 01:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/customize/ajax_save was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-24 01:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/customize/ajax_save was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-77-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-77-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-79-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-79-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-18-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-18-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-78-18-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-78-18-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-18-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 01:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-18-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 01:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 01:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 02:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 02:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 02:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 02:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 03:17:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 03:17:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 03:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 03:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 04:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-77-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-77-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-18-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-18-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 04:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 04:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/register/ajax_check_email was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/register/ajax_check_email was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/register/ajax_send_emailcode was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/register/ajax_send_emailcode was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cars/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 04:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cars/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 04:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/register/ajax_send_msgcode was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/register/ajax_send_msgcode was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/register/doreg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-24 04:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/register/doreg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-76-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-27-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-27-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-18-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-18-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL servers/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL servers/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 04:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 04:07:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/pub/ajax_add_question was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:07:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/pub/ajax_add_question was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:08:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:08:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-75-18-1/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-81-27-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-81-27-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/login/ajax_is_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-81-18-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-81-18-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:12:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-80-27-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:12:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-80-27-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:13:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 04:13:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/index.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 04:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-81-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-81-27-1/lines/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-80-18-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/all-0-0-0-0-80-18-1/index.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/pub/ajax_check_code was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 04:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/pub/ajax_check_code was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 04:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 04:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 09:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r/z.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 09:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r/z.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 10:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 10:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 10:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 10:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 10:22:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 10:22:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 10:22:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 10:22:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 12:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 12:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 13:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clusters.jsf ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 13:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clusters.jsf ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 13:47:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rs-status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 13:47:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rs-status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 13:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL master-status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 13:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL master-status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 13:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL please_read/_search was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 13:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL please_read/_search was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 13:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dfshealth.jsp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 13:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dfshealth.jsp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 13:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hadoop/dfshealth.jsp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 13:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hadoop/dfshealth.jsp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 14:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dfshealth.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 14:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dfshealth.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 14:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 14:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 16:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 16:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 20:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 20:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2017-01-24 22:51:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 22:51:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2017-01-24 23:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-24 23:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}