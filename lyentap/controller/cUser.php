<?php
    include 'model/mUser.php';
    class cUser{
        public function login($acc, $pwd){
            $p = new mUser();
            $pwd = md5($pwd);
            $result = $p->select_usr($acc, $pwd);
            if($result->num_rows >0){
                $_SESSION['login'] = $acc;
                return true;
            }
            else 
                return false;
        }

        public function regis($acc, $pwd){
            $p = new mUser();
            $pwd = md5($pwd);
            $result = $p->insert_usr($acc, $pwd);
            if($result){
                return true;
            }
            else 
                return false;
        }

        public function view($acc){
            $p = new mUser();
            $result = $p->select_usrn($acc);
            if($result->num_rows >0){
                return $result;
            }
            else 
                return false;
        }

    }
?>