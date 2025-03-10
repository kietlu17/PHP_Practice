<?php
    include 'model/mUser.php';
    class cUser{
        public function login($acc, $pwd){
            $p = new mUser();
            $result = $p->ck_user($acc, $pwd);
            if( $result == false)
                echo 'lối kết nối  a';
            else if ($result->num_rows > 0){
                echo 'đăng nhập thành công';
                $_SESSION['acc'] = $acc;
            }
                
            else 
                echo 'đăng nhập thất bại';

        }

        public function regis($acc, $pwd){
            $p = new mUser();
            $result = $p->cr_user($acc, $pwd);
            if($result == true)
                echo 'đăng kí thành công';
            else if ($result == -1)
                echo 'lối kết nối';
            else 
                echo 'đăng Kí thất bại';
        }

        
        public function logout(){
            session_destroy();
        }
    }
?>