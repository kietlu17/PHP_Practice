 <?php
if(isset($_SESSION['trangthai'])){
    echo '<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="f" id="">
    <input type="submit" value="up" name="btn_up">
</form>';
    if(isset($_POST['btn_up'])){
        include 'controler/cUpfile.php';
        $p = new cUpfile();
        $p->upfile($_FILES['f']);

    }
} 


?>



