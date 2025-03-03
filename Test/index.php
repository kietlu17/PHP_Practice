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
    <header style="height: 200px; background-color: aquamarine;">banner</header>
    <section style="width: 100%;">
        <div style="float: left; width: 30%;">
                <?php
                    include 'View/menu.php';
                ?>
        </div>
        <div style="float: left; width: 70%;">
                <?php
                    if(isset($_GET['pages'])){
                        switch($_GET['pages']){
                            case 'dangKi':
                                include 'View/DangKy.php';
                                break;
                            case 'dangNhap':
                                include 'View/DangNhap.php';
                                break;                            
                            case 'upLoad':
                                    include 'View/upload.php';
                                    break;
                            case 'dangXuat':
                                include 'View/dangXuat.php';
                                break;
                        }
                    }
                    else{
                        echo 'xin chào';
                    }
             ?>
        </div>
    </section>
</body>
</html>