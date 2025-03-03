<form action="" method="post">
    <label for="">Tài Khoản</label> <br>
    <input type="text" name="acc"> <br>
    <label for="">Mật Khẩu</label> <br>
    <input type="password" name="pwd"> <br>
    <input type="submit" value="Đăng Nhập" name="oke"> 
</form>

<?php
    include 'controller/cUser.php';
    if(isset($_REQUEST['oke'])){ //kiểm tra đã nhấn nút đăng nhập chưa
        $acc = $_POST['acc'];
        $pwd = $_POST['pwd'];
        $p = new cUser();
        $p->login($acc, $pwd);
    }
    else 
        echo 'a';
?>