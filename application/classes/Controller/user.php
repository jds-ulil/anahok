<?php

/*  
 * controller file for pegawai manag 
 */

class Controller_User extends Controller {    
    
    public function action_index()
    {        
        $view = View::factory('twitterbootstrap/template');
        $view->body = View::factory('user/index');;
        
        $this->response->body($view);      
    }
        
}

