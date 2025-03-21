<?php
include 'model/mUser.php';
    class cUser{
        public function login($user, $pwd){
            $p = new mUser();
            $result = $p->select_user($user, $pwd);
             // true or false
            if($result->num_rows >0){
                echo 'dang nhap thanh cong';
                $_SESSION['trangthai'] = true;
            }

            else    
                echo 'dang nhap that bai';
        }

        public function regis($user, $pwd){
            $p = new mUser();
            $result = $p->insert_user($user, $pwd);
             // true or false
            if($result)
                echo 'dang ky thanh cong';
            else    
                echo 'dang ky that bai';
        }
    }
?>