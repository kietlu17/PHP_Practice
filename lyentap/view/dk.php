<form action="" method="post">
    dk
    <label for="">username</label>
    <input type="text" name="user" id="">
    <br>
    <label for="">password</label>
    <input type="text" name="pwd" id="">
    <br>
    <input type="submit" value="dang ki" name="oke">
</form>

<?php
    if(isset($_POST['oke'])){
        include 'controller/cUser.php';
        $p = new cUser();
        $result = $p->regis($_POST['user'], $_POST['pwd']);
        if($result)
            echo 'dang ki thanh cong';
        else
            echo 'dang ki that bai';
    }
?>