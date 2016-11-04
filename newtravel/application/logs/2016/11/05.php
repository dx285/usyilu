<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-05 00:20:07 --- ERROR: Database_Exception [ 1265 ]: Data truncated for column 'lng' at row 1 [ INSERT INTO `sline_supplier` (`addtime`, `suppliername`, `suppliertype`, `linkman`, `mobile`, `telephone`, `address`, `piclist`, `fax`, `qq`, `kindid`, `modtime`, `verifystatus`, `content`, `lng`, `lat`, `kindlist`, `finaldestid`) VALUES (1478276407, '酒店供应商1', '0', '张三', '2222222222', '11111111111', '', '', '', '', '0', 1478276407, '3', '', '', '', '39,37,41,38,36,40,42', '36') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-11-05 00:20:07 --- STRACE: Database_Exception [ 1265 ]: Data truncated for column 'lng' at row 1 [ INSERT INTO `sline_supplier` (`addtime`, `suppliername`, `suppliertype`, `linkman`, `mobile`, `telephone`, `address`, `piclist`, `fax`, `qq`, `kindid`, `modtime`, `verifystatus`, `content`, `lng`, `lat`, `kindlist`, `finaldestid`) VALUES (1478276407, '酒店供应商1', '0', '张三', '2222222222', '11111111111', '', '', '', '', '0', 1478276407, '3', '', '', '', '39,37,41,38,36,40,42', '36') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/gogogous/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/gogogous/core/modules/orm/classes/kohana/orm.php(1452): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/gogogous/newtravel/application/classes/controller/supplier.php(233): Kohana_ORM->create()
#3 [internal function]: Controller_Supplier->action_ajax_save()
#4 /var/www/gogogous/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Supplier))
#5 /var/www/gogogous/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/gogogous/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/gogogous/newtravel/index.php(122): Kohana_Request->execute()
#8 {main}