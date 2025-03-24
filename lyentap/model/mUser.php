<?php
include_once "mConnect.php";
    class mUser{
        public function select_usr($acc, $pwd){
            $p = new mConnect();
            $conn = $p->connectDB();
            $sql = "select * from user where username = '$acc' and password ='$pwd'";
            $result = $conn->query($sql);
            $p->disconnectDB($conn);
            return $result;
        }

        public function insert_usr($acc, $pwd){
            $p = new mConnect();
            $conn = $p->connectDB();
            $sql = "insert into user (username, password) values( '$acc','$pwd')";
            $result = $conn->query($sql);
            $p->disconnectDB($conn);
            return $result;
        }

        public function select_usrn($acc){
            $p = new mConnect();
            $conn = $p->connectDB();
            $sql = "select * from user where username = '$acc'";
            $result = $conn->query($sql);
            $p->disconnectDB($conn);
            return $result;
        }
    }
?>