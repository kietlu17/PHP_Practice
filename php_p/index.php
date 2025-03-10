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


    <header style="height: 200px; width: 100%; background-color: gray;"></header>
    <nav>
        <a href="index.php">Trang Chủ</a>
        <?php
                if(isset($_SESSION['role'])){
                    echo '<a href="index.php?pages=dx">Đăng Xuất</a>';
                }
                else {
                    echo '<a href="index.php?pages=dn">Đăng Nhập</a>';
                    echo '<a href="index.php?pages=dk">Đăng Ký</a>';
                }
            ?>
  
    </nav>
    <section style="width: 100%;">
        <div style="float: left; width: 30%;">
        <?php
        if(isset($_SESSION['role'])){
                if($_SESSION['role']==1){
                    echo '<a href="index.php?pages=show_all">Tất cả sản phẩm</a>';
                }
                else {// show_ all loại sp
                    // echo '<a href="index.php?pages=dn">GIẢI KHÁT</a>';
                    include 'view/ht_loai.php';
                    // echo '<a href="index.php?pages=dk">Đăng Ký</a>';
                }}

            ?>  
        </div>
        <div style="float: left; width: 70%;">
        <?php
            if (isset($_REQUEST['pages'])){
                switch($_REQUEST['pages']){
                    case 'dn':
                        include 'view/dangNhap.php';
                        break;
                    case 'dk':
                        include 'view/dangKi.php';
                        break;

                    case 'dx':
                        include 'view/dangXuat.php';
                        break;
                    case 1:
                    case 2:
                        // echo 'adf';
                        print_r(get_included_files());
                        include 'view/ht.php';
                        break;  

                    case 'show_all':
                        print_r(get_included_files());
                        include 'view/ht.php';
                        break;  
                    default:
                        echo'xin chào';
                }
            }
        ?>
        </div>
    </section>
</body>
</html>