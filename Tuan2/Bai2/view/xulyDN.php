<?php
include 'controller/ctrUser.php';
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $p = new ctrUser();
    $ok = $_POST['ok'];
    if($ok == 'Đăng nhập'){
        if ($p->register($email, $pwd))
        echo 'Đăng nhập thành công';
        else
        echo 'Đăng nhập thất bại';
    }
        

?>