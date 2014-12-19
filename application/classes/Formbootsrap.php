<?php defined('SYSPATH') OR die('No direct script access.');

class Formbootsrap extends Kohana_Form {
   
    
	public static function inputPasswordBt_req ($name) 
	{        
        
        $input   =  "<label for='$name' class='sr-only'>$name</label>";
        $input  .= "<input name='$name' type='password' id='inputPassword' class='form-control' placeholder='$name' required>";
                                                            
		return $input;
	}
    
	public static function inputPasswordBt_noreq ($name) 
	{        
        
        $input   =  "<label for='$name' class='sr-only'>$name</label>";
        $input  .= "<input type='password' id='inputPassword' class='form-control' placeholder='$name' required>";
                                                            
		return $input;
	}
    /**
     * 
     * @param type $a
     * @param type $b
     * @return type
     * @assert (1, 1) == 2
     * @assert (3, 3) == 6
     */
    public function add($a, $b)
    {
        return $a + $b;
    }
}
