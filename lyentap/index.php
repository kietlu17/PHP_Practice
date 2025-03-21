<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <?php
    // include 'model/mConnect.php';
    // $p = new mConnect();

    // if( $p->connectDB())
    //     echo ' thanh cong';
    // else
    //     echo ' that bai';
    // include 'view/dangNhap.php';
?> -->

<header style="width: 100%; height: 200px; background-color: bisque;"></header>
<nav>
    <a href="index.php">Trang Chu</a>
    <?php
        if(isset($_SESSION['trangthai'])){
            echo '<a href="index.php?pages=dx">dang xuat</a>';
            echo '<a href="index.php?pages=up">upload</a>';
        }else{
            echo '    <a href="index.php?pages=dn">dang nhap</a>';
            echo'    <a href="index.php?pages=dk">dang ki</a>';
        }
    ?>
</nav>
<div style="height: 500px;">
    <div style="float: left; width: 30%; background-color: blue; height: 100%;">a</div>
    <div>
<?php
    //  include 'view/dangNhap.php';
    if(isset($_REQUEST['pages'])){
        if($_REQUEST['pages'] == 'dn')
            include 'view/dangNhap.php';
        if($_REQUEST['pages'] == 'dk')
            include 'view/dangKi.php';
        if($_REQUEST['pages'] == 'dx')
            include 'view/dangXuat.php';
        if($_REQUEST['pages'] == 'up')
            include 'view/upload.php';
    }
?>
    </div>
</div>
<header style="width: 100%; height: 200px; background-color: bisque;"></header>
</body>
</html>