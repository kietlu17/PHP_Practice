<form action="" method="post">
    <label for="">username</label>
    <input type="text" name="user" id="">
    <br>
    <label for="">password</label>
    <input type="text" name="pwd" id="">
    <br>
    <input type="submit" value="dang nhap" name="oke">
</form>

<?php
    if(isset($_POST['oke'])){
        include 'controller/cUser.php';
        $p = new cUser();
        $result = $p->login($_POST['user'], $_POST['pwd']);
        if($result)
            echo 'dang nhap thanh cong';
        else
            echo 'dang nhap that bai';
    }
?>