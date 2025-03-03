<?php
    include 'mConnectDB.php';

    class mUser{
        public function ck_User($acc, $pwd){
            $sql = "select * from user where username ='$acc' and password = '$pwd'";
            $p = new mConnectDb();
            $conn = $p->connectToDB();
            if($conn) // mẹo để viết if else nhanh, nếu câu lệnh chỉ có 1 dòng thì không cần {}
                return $conn->query($sql);
            else
                return false;

            $p->disconnectToDB($conn); // cái này chưa tối ưu. Vì nếu kết nối thất bại thì cần gì phải đóng kết nối

        }
    }

        // lớp này có vai trò là tương tác với bảng User để đăng nhập bằng cách xem user đó có tồn tại trong database không thông qua
        // câu truy vấn
        // để truy vần thì phải kết nối đến db (dùng class khác để kết nối)
        // chạy truy vấn
        // đóng kết nối
        // chúng ta chỉ cần kết quả câu truy vấn trả về là bảng có bao nhiêu dòng thôi (0 dòng 0 tồn tại user/ 1 dòng là có user đó)
?>
