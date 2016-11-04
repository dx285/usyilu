<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-29 03:26:33 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'vr_jifencomment' at row 1 [ INSERT INTO `sline_comment` (`articleid`, `vr_nickname`, `vr_grade`, `vr_jifencomment`, `vr_headpic`, `typeid`, `addtime`, `level`, `content`, `isshow`, `piclist`) VALUES ('1', 'test', '1', '', '/uploads/2016/1029/325ddf500efe4c3b069096259218dac7.png', '1', 1477682793, '4', 'this is a testestest', '1', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-29 03:26:33 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'vr_jifencomment' at row 1 [ INSERT INTO `sline_comment` (`articleid`, `vr_nickname`, `vr_grade`, `vr_jifencomment`, `vr_headpic`, `typeid`, `addtime`, `level`, `content`, `isshow`, `piclist`) VALUES ('1', 'test', '1', '', '/uploads/2016/1029/325ddf500efe4c3b069096259218dac7.png', '1', 1477682793, '4', 'this is a testestest', '1', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->create(NULL)
#3 /var/www/gogogous/newtravel/application/classes/controller/comment.php(196): Kohana_ORM->save()
#4 [internal function]: Controller_Comment->action_ajax_save()
#5 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Comment))
#6 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#9 {main}
2016-10-29 03:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL line/admin/ajax_clear_minprice was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-10-29 03:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL line/admin/ajax_clear_minprice was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#3 {main}