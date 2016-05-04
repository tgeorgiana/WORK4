<?php

namespace Utils;

use Repository\UserRepository;

class Validate {
     
    public function validateEmail($email)
    {

        if(preg_match("/^[a-zA-Z]+[0-9]*\S*\@{1}[a-zA-Z]*\.{1}[a-zA-Z]*$/", $email)===1)
        {
            return true;
        }
        
        return false;
        

    }
    
    
    
}
