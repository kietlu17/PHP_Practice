<?php
include 'controller/cUser.php';
    $p = new cUser();
    $r = $p->view($_SESSION['login']);
    while($row = $r->fetch_assoc()){
        echo $row['username'];
    }

?>