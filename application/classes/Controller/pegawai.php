<?php

/*  
 * controller file for pegawai manag 
 */

class Controller_Pegawai extends Controller {    
    
    public function action_index()
    {        
        $view = View::factory('twitterbootstrap/template');       
        $this->response->body($view);
    }
    
    /**
     * create function 
     * pegawai
     */
    public function action_create()
    {                    
            $pegawai = Model::factory('pegawai');
            $post = $this->request->post();
            $validation = Validation::factory($this->request->post())
                ->rule('nama', 'not_empty')
                ->rule('nama', 'regex', array(':value', '/^[a-z_.]++$/iD'))
                ->rule('nama', array($pegawai, 'unique_nama'))
                
                ->rule('gaji', 'not_empty');
            
            if(isset($_POST['nama']))
                if ($validation->check())
                    {
                        $pegawai->register($this->request->post());
             
                        $this->redirect('');
                    }  
            $errors = $validation->errors('pegawai');
            
            $view = View::factory('pegawai/create')                    
                    ->bind('errors', $errors)
                    ->bind('post', $post);                     
            

            $this->response->body($view);        	
    }
}

