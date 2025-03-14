<?php
    class mConnect{
        public function connectDB(){
            $host = 'localhost:3307';
            $name = 'kiet';
            $pwd = '1';
            $db = 'qlsv';
            return mysqli_connect($host, $name, $pwd, $db);
        }

        public function disconnectDB($conn){
            return $conn->close();
        }
    }

?>