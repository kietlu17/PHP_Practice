<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header style="background-color: antiquewhite; height: 200px;">BANER WEBSITE</header>
    <div style="display: flex;">
        <div style="width: 200px;">
        <ul>
            <li>Trang Chủ</li>
            <li> Đăng Kí</li>
            <li><a href="index.php?pages=dangnhap">Đăng Nhập</a></li>
        </ul></div>
        <div>
            <?php
            if (isset($_REQUEST['pages'])){
                    switch ($_REQUEST['pages']){
                        case 'dangnhap': 
                            include 'view/dangNhap.php';
                            break;
                        case 'xulyDN': 
                            include 'view/xulyDN.php';
                            break;
                        default:
                            echo 'Xin chào';
                    }
                }
            else
            echo 'xin chào';
            ?>
        </div>
    </div>
</body>
</html>