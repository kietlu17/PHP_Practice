<?php
    if ($_POST['ok']== 'Đăng Ký'){
        echo'<h2> Thông tin đăng kí</h2>';
        $email = $_POST['email'];
        echo '<p>Email: </p>'. $email;
        $password = $_POST['pwd'];
        echo '<p>Password: </p>'. $password;
        $txt = $_POST['txt'];
        echo '<p>Thông tin cá nhân: </p>', $txt;
        $name = $_POST['name'];
        echo '<p>Họ và tên: </p>'.$name;
        $que = $_POST['que'];
        echo '<p>Quê quán: </p>'. $que;
        $sdt = $_POST['sdt'];
        echo '<p>Điện thoại: </p>'. $sdt;
        $sex = $_POST['sex'];
        echo '<p>Giới tính: </p>'. $sex;
        $st = $_POST['st'];
        echo '<p>Sở thích: </p>';
        foreach($st as $a){
            echo $a;
        }

    }

    
?>