<?php
mysqli_report(MYSQLI_REPORT_OFF); 
    class mConnect{
        public function connectDB(){
            $host= 'mysql_db';
            $username = 'kiet';
            $pass = '1';
            $db = 'qlbh';
            return mysqli_connect($host, $username, $pass, $db);
        }

        public function disconnectDB($conn){
            return $conn->close();
        }
    }
?>