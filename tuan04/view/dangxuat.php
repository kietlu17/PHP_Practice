<?php
        include 'controller/cUser.php';
        $p = new cUser();
        $p->logout();
        header('refresh: 1; url = index.php');
?>