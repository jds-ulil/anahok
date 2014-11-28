<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-26 13:42:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\pegawai.php [ 20 ] in file:line
2014-11-26 13:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 13:46:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\pegawai.php [ 33 ] in file:line
2014-11-26 13:46:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 13:55:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\pegawai.php [ 34 ] in file:line
2014-11-26 13:55:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 13:55:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\pegawai.php [ 33 ] in file:line
2014-11-26 13:55:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 13:55:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\pegawai.php [ 33 ] in file:line
2014-11-26 13:55:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:01:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\pegawai.php [ 33 ] in file:line
2014-11-26 14:01:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:02:00 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\pegawai.php [ 33 ] in file:line
2014-11-26 14:02:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:02:02 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\pegawai.php [ 33 ] in file:line
2014-11-26 14:02:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:02:02 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\pegawai.php [ 33 ] in file:line
2014-11-26 14:02:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:02:02 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\pegawai.php [ 33 ] in file:line
2014-11-26 14:02:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:02:02 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\pegawai.php [ 33 ] in file:line
2014-11-26 14:02:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:02:03 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\pegawai.php [ 33 ] in file:line
2014-11-26 14:02:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:02:43 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\pegawai.php [ 33 ] in C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php:33
2014-11-26 14:02:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(33): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php:33
2014-11-26 14:16:20 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\pegawai.php [ 39 ] in C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php:39
2014-11-26 14:16:20 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(39): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php:39
2014-11-26 14:16:24 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\pegawai.php [ 39 ] in C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php:39
2014-11-26 14:16:24 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(39): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php:39
2014-11-26 14:18:59 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Pegawai' does not have a method 'unique_nama' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2014-11-26 14:18:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\xampp\htdocs...', 377, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(30): Kohana_Validation->check()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-11-26 14:30:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\pegawai\create.php [ 5 ] in C:\xampp\htdocs\kohana\application\views\pegawai\create.php:5
2014-11-26 14:30:29 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\pegawai\create.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(37): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\pegawai\create.php:5
2014-11-26 14:30:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\pegawai.php [ 38 ] in file:line
2014-11-26 14:30:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:35:06 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\pegawai.php [ 38 ] in C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php:38
2014-11-26 14:35:06 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(38): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 38, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php:38
2014-11-26 14:36:22 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Request::$method ~ APPPATH\classes\Controller\pegawai.php [ 29 ] in file:line
2014-11-26 14:36:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 15:21:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nama ~ SYSPATH\classes\Kohana\Validation.php [ 102 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php:102
2014-11-26 15:21:58 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 102, Array)
#1 C:\xampp\htdocs\kohana\application\views\pegawai\create.php(14): Kohana_Validation->offsetGet('nama')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(41): Kohana_Response->body(Object(View))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php:102
2014-11-26 15:22:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nama ~ SYSPATH\classes\Kohana\Validation.php [ 102 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php:102
2014-11-26 15:22:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 102, Array)
#1 C:\xampp\htdocs\kohana\application\views\pegawai\create.php(14): Kohana_Validation->offsetGet('nama')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(41): Kohana_Response->body(Object(View))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php:102
2014-11-26 15:23:31 --- CRITICAL: ErrorException [ 4096 ]: Object of class Validation could not be converted to string ~ SYSPATH\classes\Kohana\HTML.php [ 71 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php:71
2014-11-26 15:23:31 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php(71): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 71, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php(338): Kohana_HTML::chars(Object(Validation))
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Form.php(107): Kohana_HTML::attributes(Array)
#3 C:\xampp\htdocs\kohana\application\views\pegawai\create.php(14): Kohana_Form::input('nama', Object(Validation), Array)
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(41): Kohana_Response->body(Object(View))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php:71
2014-11-26 15:24:15 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Pegawai' does not have a method 'unique_nama' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2014-11-26 15:24:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\xampp\htdocs...', 377, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(30): Kohana_Validation->check()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-11-26 15:24:23 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Pegawai' does not have a method 'unique_nama' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2014-11-26 15:24:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\xampp\htdocs...', 377, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(30): Kohana_Validation->check()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-11-26 15:27:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\Controller\pegawai.php [ 22 ] in file:line
2014-11-26 15:27:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 15:28:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nama ~ APPPATH\views\pegawai\create.php [ 14 ] in C:\xampp\htdocs\kohana\application\views\pegawai\create.php:14
2014-11-26 15:28:47 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\pegawai\create.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(41): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\pegawai\create.php:14
2014-11-26 15:30:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function emtpy() ~ APPPATH\classes\Controller\pegawai.php [ 21 ] in file:line
2014-11-26 15:30:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 15:31:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function emtpy() ~ APPPATH\classes\Controller\pegawai.php [ 21 ] in file:line
2014-11-26 15:31:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 15:31:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nama ~ APPPATH\views\pegawai\create.php [ 14 ] in C:\xampp\htdocs\kohana\application\views\pegawai\create.php:14
2014-11-26 15:31:54 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\pegawai\create.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(41): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\pegawai\create.php:14
2014-11-26 15:44:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Pegawai::save() ~ APPPATH\classes\Model\pegawai.php [ 12 ] in file:line
2014-11-26 15:44:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 15:46:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Pegawai::save() ~ APPPATH\classes\Model\pegawai.php [ 12 ] in file:line
2014-11-26 15:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 15:48:14 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.pegawais' doesn't exist [ SHOW FULL COLUMNS FROM `pegawais` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-11-26 15:48:14 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('pegawais')
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\kohana\application\classes\Controller\pegawai.php(20): Kohana_Model::factory('pegawai')
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Pegawai->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pegawai))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-11-26 15:49:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\pegawai.php [ 34 ] in file:line
2014-11-26 15:49:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 15:49:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\pegawai.php [ 34 ] in file:line
2014-11-26 15:49:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line