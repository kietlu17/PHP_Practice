<?php
    class mConnectDb{
        public function connectToDB(){
            $host = 'localhost:3307'; //host của mySQL nếu bạn đã đổi port thì mở XAMPP để biết port và thay vào 3307
            $name = 'kiet'; //tài khoản quản trị database đúng hơn là quản trị server (ngang cấp với root)
            $password = '1'; // pass
            $db = 'qlbh'; // tên database muốn kết nối
            return mysqli_connect($host, $name, $password, $db); //true nếu kết nối thành công, false nếu thất bại
        }

        public function disconnectDB($conn){
            return $conn->close(); 
        }
    }
?>