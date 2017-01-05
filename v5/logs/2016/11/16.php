<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-16 00:04:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_index/index.php [ 39 ]
2016-11-16 00:04:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_index/index.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 00:04:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_index/index.php [ 39 ]
2016-11-16 00:04:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_index/index.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 00:04:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_index/index.php [ 39 ]
2016-11-16 00:04:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_index/index.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 00:05:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_index/index.php [ 39 ]
2016-11-16 00:05:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_index/index.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 00:05:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_index/index.php [ 39 ]
2016-11-16 00:05:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_index/index.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 00:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 00:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 00:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 00:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 00:15:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 00:15:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 00:34:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '? and `adultprice`>0 and day>=1479225600 and (`number` >0 or `number`=-1)' at line 1 [ SELECT MIN(`adultprice`) as price FROM sline_line_suit_price WHERE `lineid`=æ and `adultprice`>0 and day>=1479225600 and (`number` >0 or `number`=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-11-16 00:34:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '? and `adultprice`>0 and day>=1479225600 and (`number` >0 or `number`=-1)' at line 1 [ SELECT MIN(`adultprice`) as price FROM sline_line_suit_price WHERE `lineid`=æ and `adultprice`>0 and day>=1479225600 and (`number` >0 or `number`=-1)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT MIN(`adu...', false, Array)
#1 /var/www/gogogous/plugins/line/classes/model/line.php(75): Kohana_Database_Query->execute()
#2 /var/www/gogogous/usertpl/dw_st16239_no198_index/taglib/line.php(48): Model_Line::get_minprice('?', Array)
#3 /var/www/gogogous/v5/cache/tplcache/usertpl/dw_st16239_no198_index/index.php(1): Taglib_Line::query(Array)
#4 /var/www/gogogous/v5/classes/stourweb/view.php(77): include('/var/www/gogogo...')
#5 /var/www/gogogous/v5/classes/stourweb/view.php(420): Stourweb_View->capture('/var/www/gogogo...', Array)
#6 /var/www/gogogous/v5/classes/stourweb/controller.php(65): Stourweb_View->render()
#7 /var/www/gogogous/v5/classes/controller/index.php(43): Stourweb_Controller->display('usertpl/dw_st16...')
#8 [internal function]: Controller_Index->action_index()
#9 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#10 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#13 {main}
2016-11-16 00:49:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/common.php [ 594 ]
2016-11-16 00:49:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/common.php [ 594 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 00:55:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/common.php [ 594 ]
2016-11-16 00:55:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/common.php [ 594 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 00:58:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH/classes/common.php [ 1415 ]
2016-11-16 00:58:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH/classes/common.php [ 1415 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 01:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 01:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 01:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 01:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 02:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 02:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 02:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-11-16 02:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2016-11-16 02:37:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:37:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:37:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:37:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:38:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:38:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:39:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:39:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:40:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:40:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:40:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:40:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:40:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:40:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:40:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:40:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:40:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:40:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:40:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:40:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:41:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:41:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:41:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:41:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:41:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:41:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:41:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:41:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:41:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:41:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:41:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:41:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:42:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:42:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:42:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:42:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:42:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:42:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:42:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:42:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:43:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:43:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:43:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:43:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:43:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:43:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:43:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:43:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:44:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:44:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:44:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:44:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:44:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:44:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:44:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:44:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:44:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:44:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:44:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:44:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:44:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:44:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:44:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:44:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:45:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:45:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:45:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:45:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:45:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:45:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:45:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
2016-11-16 02:45:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/cache/tplcache/usertpl/dw_st16239_no198_header/index.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-16 02:47:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-11-16 02:47:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2016-11-16 04:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 04:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 04:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 04:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 04:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 04:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 04:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 04:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: abc.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: abc.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: abc.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: abc.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flashfxp.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flashfxp.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flashfxp.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flashfxp.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HYTop.mdb ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HYTop.mdb ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ÐÂ½¨ÎÄ¼þ¼Ð.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ÐÂ½¨ÎÄ¼þ¼Ð.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ÐÂ½¨ÎÄ¼þ¼Ð.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ÐÂ½¨ÎÄ¼þ¼Ð.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HYTop.mdb ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HYTop.mdb ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Packet.mdb ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Packet.mdb ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mc.mdb ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mc.mdb ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ToMdb.mdb ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ToMdb.mdb ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unpack.mdb ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unpack.mdb ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HUOHU.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HUOHU.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 47.90.15.0.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 47.90.15.0.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 47.90.15.0.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 47.90.15.0.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 47_90_15_0.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 47_90_15_0.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 47_90_15_0.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 47_90_15_0.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4790150.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4790150.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4790150.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4790150.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 15.0.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 15.0.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 15.0.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 15.0.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 15.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 15.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 15.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 15.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 15_0.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 15_0.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 15_0.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 15_0.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 47_90_15_0.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 47_90_15_0.rar ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 47_90_15_0.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 47_90_15_0.zip ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 07:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 07:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 08:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 08:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 09:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 09:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 10:12:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 10:12:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 10:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 10:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 10:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 10:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 12:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 12:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 14:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redirect.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 14:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redirect.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 15:17:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-11-16 15:17:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2016-11-16 17:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 17:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 19:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 19:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 21:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 21:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azenv.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 21:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 21:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 21:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 21:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 21:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 21:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 21:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL customize/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-11-16 21:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL customize/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}
2016-11-16 22:12:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 22:12:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 22:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 22:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 23:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 23:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 23:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 23:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 23:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-11-16 23:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#1 {main}
2016-11-16 23:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-11-16 23:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/index.php(135): Kohana_Request->execute()
#3 {main}