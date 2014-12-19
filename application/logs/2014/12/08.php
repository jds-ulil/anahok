<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-08 14:01:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\ajax.php [ 25 ] in C:\xampp\htdocs\kohana\application\classes\Controller\ajax.php:25
2014-12-08 14:01:32 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\ajax.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_daftar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\ajax.php:25
2014-12-08 14:16:36 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Ajax' does not have a method 'unique_username' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2014-12-08 14:16:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\xampp\htdocs...', 377, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\ajax.php(29): Kohana_Validation->check()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_daftar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 14:22:53 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.ajax' doesn't exist [ SELECT COUNT(username) AS `total` FROM `ajax` WHERE `nama` = 'Ulil' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-12-08 14:22:53 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(us...', false, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\ajax.php(23): Kohana_Database_Query->execute()
#2 [internal function]: Model_Ajax->unique_username('Ulil')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\xampp\htdocs\kohana\application\classes\Controller\ajax.php(29): Kohana_Validation->check()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_daftar()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-12-08 14:23:17 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.ajax' doesn't exist [ SELECT COUNT(nama) AS `total` FROM `ajax` WHERE `nama` = 'Ulil' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-12-08 14:23:17 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(na...', false, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\ajax.php(23): Kohana_Database_Query->execute()
#2 [internal function]: Model_Ajax->unique_username('Ulil')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\xampp\htdocs\kohana\application\classes\Controller\ajax.php(29): Kohana_Validation->check()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_daftar()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-12-08 14:59:43 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in C:\xampp\htdocs\kohana\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Arr.php:30
2014-12-08 14:59:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Core.php(960): Kohana_Arr::merge(Array, 1)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php(564): Kohana_Core::message('ajax', 'nama.unique_use...')
#4 C:\xampp\htdocs\kohana\application\classes\Controller\ajax.php(34): Kohana_Validation->errors('ajax')
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_daftar()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Arr.php:30
2014-12-08 15:39:43 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\ajax.php [ 35 ] in file:line
2014-12-08 15:39:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\xampp\htdocs...', 35, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\ajax.php(35): json_decode(Array)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_daftar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line