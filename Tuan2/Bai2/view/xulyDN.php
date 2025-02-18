<?php
include 'controller/ctrUser.php';
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $p = new ctrUser();
    if ($p->register($email, $pwd))
        echo 'Đăng nhập thành công';
    else
        echo 'Đăng nhập thất bại';
?>