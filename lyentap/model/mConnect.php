<?php
mysqli_report(MYSQLI_REPORT_OFF);
    class mConnect{
        public function connectDB(){
            $host = 'localhost:3307';
            $username ='vinh';
            $pwd = '1';
            $db ='vinh_db';
            return mysqli_connect($host, $username, $pwd, $db); // true khi ket noi thanh cong false khi that bai
        }

        public function disconnectDB($conn){
            $conn->close();
        }
    }
?>