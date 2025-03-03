<?php
    include 'connect.php';
    class modelUser{
        public function mLogin($email, $pwd){
            $s_login = "select * from user where username ='$email' and password = '$pwd'";
            $p = new connect();
            $conn = $p->connect_db();
            if($conn)
                return $conn->query($s_login);
            else    
                return false;
            $p->disconnect_db($conn);
        }
    }
?>