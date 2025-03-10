<?php
    session_destroy();
    echo 'bạn đã đăng xuất';
    header('refresh: 1; url=index.php');
?>