<?php
    $tg = $_REQUEST['tg'];
    switch($tg){
        case 'Tài':
            echo 'Xin chào Nguyễn Anh Tài- 30 tuổi';
            break;
        case 'An':
                echo 'Xin chào Nguyễn Bình An- 30 tuổi';
            break;
        default:
            echo 'không có thông tin';
    }
?>