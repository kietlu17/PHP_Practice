<?php
    class connect{
        public function connect_db(){
            $host = 'localhost:3307';
            $user_name = 'kiet';
            $password = '1';
            $db = 'qlbh';
            return mysqli_connect($host, $user_name, $password, $db);
        }

        public function disconnect_db($conn){
            $conn->close();
        }
    }
?>