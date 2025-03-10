<?php
    include 'mConn.php';
    class mUser{
        public function ck_user($acc, $pwd){
            // $pwd = md5($pwd);
            $sql = "select * from user where username = '$acc' and password ='$pwd' ";
            $p = new mConn();
            $conn = $p->connectDB();
            if($conn)
                return $conn->query($sql);
            else    
                return false;

            $p->disconnectDB($conn);
        }

        public function cr_user($acc, $pwd){
            $pwd = md5($pwd);
            $sql = "INSERT INTO user (id_, username, password) VALUES (NULL, '$acc', '$pwd')";
            $p = new mConn();
            $conn = $p->connectDB();
            if($conn)
                return $conn->query($sql); // true or false
            else    
                return -1;

            $p->disconnectDB($conn);
    }
}
?>