<?php
    include 'model/mUser.php';
    class cUser{
        public function login($acc, $pwd){
            $p = new mUser();
            $result = $p->ck_User($acc, $pwd);// lấy giá trị từ form để đưa vào câu select, kiểm tra user có tồn tại hay không
            if($result == false) // nếu kết quả là false thì xem lại class kết nối đến DB hoặc có thể câu truy vấn bị sai
                echo 'lỗi kết nối';
            elseif ($result->num_rows > 0) // xem bên lớp tương tác với bảng user
                echo 'đăng nhập thành công';
            else
                echo 'đăng nhập thất bại';

        }
    }
?>