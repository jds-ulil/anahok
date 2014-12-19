<?php

class Controller_Ajax extends Controller {
    
    public function action_index () {
        $view = View::factory('twitterbootstrap/template');
        $view->body = View::factory('ajax/main');
        $view->title = "Ajax";
        $this->response->body($view);
    }
    
    public function action_create () {
        $view = View::factory('ajax/form');        
        $this->response->body($view);
    }
    
    public function action_daftar() {
        $nama       = $_POST['nama'];
        $ajaxpage   = $_POST['ajaxPage'];
                
        $ajax = Model::factory('ajax');
        
         $validation = Validation::factory($this->request->post())
            ->rule('nama', 'not_empty')            
            ->rule('nama', array($ajax, 'unique_username'))
 
            ->rule('ajaxPage', 'not_empty');
 
        if ($validation->check())
        {
            if ($ajax->register(array('nama'=>$nama, 'ajaxpage'=>$ajaxpage))) 
                return 'sukses';                
        } else {
            $errors = $validation->errors('ajax');
            echo json_encode($errors);
        }
                
    }
    public function action_complete() {
        $user = ORM::factory('ajax')       
        ->find_all()->as_array();                
        
        $view = View::factory("ajax/complete")
                ->bind('user',$user);        
        $this->response->body($view);
    }
}

