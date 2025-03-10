<?php
mysqli_report(MYSQLI_REPORT_OFF); 
    class mConnect{
        public function connectDB(){
            $host= 'localhost:3307';
            $username = 'kiet';
            $pass = '1';
            $db = 'php_p';
            return mysqli_connect($host, $username, $pass, $db);
        }

        public function disconnectDB($conn){
            return $conn->close();
        }
    }
?>