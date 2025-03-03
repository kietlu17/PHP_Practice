<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header style="height: 300px; width: 100%; "></header>
    <section style="height: 300px; width: 100%;">
        <div style="border-bottom: 1px solid black;">
            <a href="index.php">Trang chủ</a>
            <a href="index.php?pages=dangKi">Đăng Ký</a>
            <a href="index.php?pages=dangNhap">Đăng Nhập</a>
        </div>
        <div>

        <?php
            if(isset($_REQUEST['pages'])){
                switch($_REQUEST['pages']){
                    case 'dangKi':  
                        // include 'model/mConnectDB.php';
                        // $p = new mConnectDB();
                        // if ($p->connectToDB())
                        //     echo 'ket noi thanh cong';
                        // else    
                        //     echo 'ket noi that bai';
                        break;
                    case 'dangNhap': include 'view/dangNhap.php'; break;
                }
            }
        ?>
        </div>
    </section>
    <footer style="height: 100px; width: 100%; background-color: black; "></footer>
</body>
</html>