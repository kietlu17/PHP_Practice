<?php
    class mConn{
        public function connectDB(){
            $host = 'localhost:3307';
            $name = 'kiet';
            $password = '1';
            $db = 'qlbh';
            return mysqli_connect($host, $name, $password, $db);
        }

        public function disconnectDB($conn){
            return $conn->close();
        }
    }
?>