<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-02 14:19:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\Controller\user.php [ 28 ] in C:\xampp\htdocs\kohana\application\classes\Controller\user.php:28
2014-12-02 14:19:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\user.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\user.php:28