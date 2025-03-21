<form action="" method="post">
    <p>Username </p>
    <input type="text" name="username">
    <p> Password
    </p>
    <input type="password" name="password" id="">
    <br>
    <input type="submit" value="dang nhap" name="btn_dn">
</form>
 <?php
  if( isset($_POST['btn_dn'])){
    include 'controler/cUser.php';
    $p = new cUser();
    $p->login($_POST['username'], $_POST['password']);
  }else
  echo ' chua nhan';
 ?>