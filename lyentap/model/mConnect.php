<?php
mysqli_report(MYSQLI_REPORT_OFF);
 class mConnect{
    public function connectDB(){
        $host = 'localhost:3307';
        $user = 'NguyenThanhKiet';
        $pwd = '22653331';
        $db = 'ktra';
        return mysqli_connect($host, $user, $pwd, $db);
    }

    public function disconnectDB($conn){
        $conn->close();
    }
 }
?>