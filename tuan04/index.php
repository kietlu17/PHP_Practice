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

    <section style="height: 200px; width: 100%">
        <div>
            <a href="index.php">Trang Chủ</a>

           
            <?php
                if(isset($_SESSION['acc'])){
                    echo '<a href="index.php?pages=dangXuat">Đăng Xuất</a>';
                }else{
                    echo '<a href="index.php?pages=dangki">Đăng Kí</a>';
                    echo' <a href="index.php?pages=dangnhap">Đăng Nhập</a>';
                }
            ?>
        </div>
        <div>
            <?php
                if(isset($_REQUEST['pages'])){
                    switch($_REQUEST['pages']){
                        case 'dangki':
                            // include 'model/mConn.php';
                            // $p = new mConn();
                            // if($p->connectDB())
                            //     echo 'thanh cong';
                            // else 
                            //     echo 'that bai';
                            include 'view/dangki.php';
                            break;
                        case 'dangnhap':
                            include 'view/dangnhap.php';
                            break;

                        case 'dangXuat':
                            include 'view/dangxuat.php';
                            break;
                    }
                }
            ?>
            

        </div>
    </section>
    <footer style="height: 200px; width: 100%   ; background-color: gray;"></footer>
</body>
</html>