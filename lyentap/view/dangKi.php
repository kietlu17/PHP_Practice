<form action="" method="post">
    dang ki
    <p>Username </p>
    <input type="text" name="username" required>
    <p> Password
    </p>
    <input type="password" name="password" id="" required>
    <p> nhap lai Password
    </p>
    <input type="password" name="password2" id="" required >
    <br>
    <input type="submit" value="dang nhap" name="btn_dn">
</form>
 <?php
  if( isset($_POST['btn_dn'])){
    // include 'controler/cUser.php';
    // $p = new cUser();
    // $p->login($_POST['username'], $_POST['password']);
    if($_POST['password'] == $_POST['password2']){
        include 'controler/cUser.php';
        $p = new cUser();
        $p->regis($_POST['username'], $_POST['password']);

    }else{
        echo 'pwd khong trung';
    }
  }else
  echo ' chua nhan';
 ?>