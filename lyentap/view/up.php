<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="f" id="">
    <input type="submit" value="upload" name="oke">
</form>

<?php
    if(isset($_REQUEST['oke'])){
        include 'controller/cFile.php';
        $p = new cFile();
        $p->upload($_FILES['f']);
    }
?>