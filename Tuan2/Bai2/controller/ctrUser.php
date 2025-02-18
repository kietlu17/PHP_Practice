<?php
    class ctrUser{
        public function register($email, $pwd){
            if ($email =='abc@gmail.com' && $pwd =='123456') 
                return true;
            else
                return false;
        }
    }
?>