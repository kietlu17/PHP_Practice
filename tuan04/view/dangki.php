<form action="" method ='post'>
    <label for="">Tài Khoản</label> <br>
    <input type="text" name="acc"> <br>
    <label for="">Password</label> <br>
    <input type="text" name="pwd"> <br>
    <input type="submit" value="Đăng Kis" name='oke'> <br>
</form>

<?php
    if(isset($_REQUEST['oke'])){
        $acc = $_POST['acc'];
        $pwd = $_POST['pwd'];
        include 'controller/cUser.php';
        $p = new cUser();
        $p->regis($acc, $pwd);
        header('refresh: 1; url = index.php');
    }

?>