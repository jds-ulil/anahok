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
    
    public function action_login()
    {        
        $view = View::factory('twitterbootstrap/template');
        $view->body = View::factory('user/login');;
        
        if (HTTP_Request::POST == $this->request->method()) 
            {
                $remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;               
                
                $user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $remember);			
                // If successful, redirect user
                if ($user) 
                {
                    echo("<script>alert('sukses');</script>");
                } 
                else 
                {
                    echo("<script>alert('gagal');</script>");
                }
            }
        
            if(Auth::instance()->logged_in()) {
                echo("<script>alert('tes');</script>");
                    if (Auth::instance()->logged_in("login")){
                        echo("<script>alert('login');</script>"); 
                    }
                }
            
            
        $this->response->body($view);      
    }
        
}

