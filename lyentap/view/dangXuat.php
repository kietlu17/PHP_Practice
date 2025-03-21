<?php
if(isset($_SESSION['trangthai'])){
    session_destroy();
    echo 'ban da dang xuat';
} 


?>