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
    <header style="width: 100%; height: 200px; background-color: antiquewhite;"></header>
    <nav>
    <a href="index.php">Trang chu</a>
        <?php
            if(isset($_SESSION['login'])){
                echo '        <a href="index.php?pages=dx">dang xuat</a>';
                echo '        <a href="index.php?pages=up">upload</a>';
            }else{
                echo '        <a href="index.php?pages=dn">dang nhap</a>';
                echo '     <a href="index.php?pages=dk">dang ki</a>';
            }
        ?>


   
    </nav>
    <div style="width: 100%; height: 500px;">
        <div style="width: 30%; float: left;"><?php
        if(isset($_SESSION['login'])){
            include 'view\ht.php';
        }
        ?></div>
        <div style="width: 70%;float: right;">
            <?php
             if(isset($_REQUEST['pages'])){
                switch ($_REQUEST['pages']){
                    case 'dk':
                        include 'view/dk.php';
                        break;
                    case 'dn':
                        include 'view/dn.php';
                        break;
                    case 'dx':
                        if(isset($_SESSION['login'])){
                            include 'view/dx.php';
                            }

                        break;   
                    case 'up':
                        if(isset($_SESSION['login']))
                            include 'view/up.php';
                                
    
                         break;    
                }
             }
            ?>
        </div>
    </div>
    <header style="width: 100%; height: 200px; background-color: antiquewhite;"></header>
</body>
</html>