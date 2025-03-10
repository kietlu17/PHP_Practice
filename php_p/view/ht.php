<?php
    include 'controller/cProducts.php';
    $p = new cProducts();
    if($_SESSION['role'] == 1){
        $p->show_all();
    }
    else {
        $p->show_id($_GET['pages']);
    }


?>