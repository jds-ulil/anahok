<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-05 13:56:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\ajax\complete.php [ 37 ] in C:\xampp\htdocs\kohana\application\views\ajax\complete.php:37
2014-12-05 13:56:32 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\ajax\complete.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\ajax.php(29): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_complete()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\ajax\complete.php:37
2014-12-05 13:56:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\ajax.php [ 30 ] in file:line
2014-12-05 13:56:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 13:56:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\ajax\complete.php [ 37 ] in C:\xampp\htdocs\kohana\application\views\ajax\complete.php:37
2014-12-05 13:56:35 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\ajax\complete.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\ajax.php(29): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_complete()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\ajax\complete.php:37
2014-12-05 13:56:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\ajax.php [ 30 ] in file:line
2014-12-05 13:56:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 13:56:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\ajax\complete.php [ 37 ] in C:\xampp\htdocs\kohana\application\views\ajax\complete.php:37
2014-12-05 13:56:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\ajax\complete.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\ajax.php(29): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_complete()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\ajax\complete.php:37
2014-12-05 13:56:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\ajax.php [ 30 ] in file:line
2014-12-05 13:56:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 13:56:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\ajax\complete.php [ 37 ] in C:\xampp\htdocs\kohana\application\views\ajax\complete.php:37
2014-12-05 13:56:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\ajax\complete.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\ajax.php(29): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_complete()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\ajax\complete.php:37
2014-12-05 13:56:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\ajax.php [ 30 ] in file:line
2014-12-05 13:56:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 13:59:20 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Ajax as array ~ APPPATH\views\ajax\complete.php [ 20 ] in file:line
2014-12-05 13:59:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line