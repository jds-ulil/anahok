<?php

class Model_Ajax extends ORM {
    public function register ($array)
        {
            $ajax = ORM::factory('ajax');
            $ajax->nama = $array['nama'];
            $ajax->ajaxpage = $array['ajaxpage'];            

            if ($ajax->save()){
                echo 'sukses';
            } else {
                echo 'gagal';
            };
        }
        
    public static function unique_username($username)
        {
            // Check if the username already exists in the database
            $total = DB::select(array(DB::expr('COUNT(nama)'), 'total'))
                ->from('ajaxes')
                ->where('nama', '=', $username)
                ->execute()
                ->get('total');
            $xx = ! DB::select(array(DB::expr('COUNT(nama)'), 'total'))
                ->from('ajaxes')
                ->where('nama', '=', $username)
                ->execute()
                ->get('total');        
            if($total > 0){
                return false;
            } else {
                return true;
            }
        }
}
