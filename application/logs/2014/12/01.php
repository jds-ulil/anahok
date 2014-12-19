<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-01 09:12:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Formbootsrap' not found ~ APPPATH\views\user\login.php [ 3 ] in file:line
2014-12-01 09:12:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 09:46:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\user\login.php [ 11 ] in C:\xampp\htdocs\kohana\application\views\user\login.php:11
2014-12-01 09:46:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\user\login.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 11, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\modules\twitter-bootstrap\views\twitterbootstrap\template.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\kohana\application\classes\Controller\user.php(22): Kohana_Response->body(Object(View))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\kohana\application\views\user\login.php:11
2014-12-01 15:46:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\bootstrap.php [ 147 ] in file:line
2014-12-01 15:46:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 16:05:13 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 48335641 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 173 ] in file:line
2014-12-01 16:05:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 16:09:54 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 48335641 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 173 ] in file:line
2014-12-01 16:09:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line