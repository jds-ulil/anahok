<?php

class Model_Pegawai extends ORM {
    public function register ($array)
    {
        
        $pegawai = ORM::factory('pegawai');
        $pegawai->nama = $array['nama'];
        $pegawai->posisi = $array['posisi'];
        $pegawai->gaji = $array['gaji'];
                
        $pegawai->save();
    }
    
    
    public static function unique_nama($username)
    {
        // Check if the username already exists in the database
        return ! DB::select(array(DB::expr('COUNT(nama)'), 'total'))
            ->from('pegawais')
            ->where('nama', '=', $username)
            ->execute()
            ->get('total');
    }
}