<?php
include 'controller/ctrTinh.php';

    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $p = new Tinh();
    $tinh = $_REQUEST['ok'];
    switch($tinh){
        case '+':
            echo 'kết quả'. $a .'+'. $b .'='. $p->Cong($a, $b);
            break;
        case '-':
            echo 'kết quả'. $a .'-'. $b .'='. $p->Tru($a, $b);
            break;
        case '*':
            echo 'kết quả'. $a .'*'. $b .'='. $p->Nhan($a, $b);
            break;
        case '/':
            echo 'kết quả'. $a .'/'. $b .'='. $p->Chia($a, $b);
            break;
    }
?>