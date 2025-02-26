
<form action="" method="post" enctype="multipart/form-data">

<input type="file" name="up_f"  >
<input type="submit" value="upload" name="oke">
</form>

<?php
    if(isset($_REQUEST['oke'])){
        include 'Controller/ctr_xuly_f.php';
        $p = new xuly_f();
        $file = $_FILES["up_f"];
        echo'<p>Kết quả<p>';
        $path = $p->upload($file);
        if ($path) {
            echo "<p>Tải lên thành công: $path</p>";
            // Hiển thị form xóa file với input hidden
            echo '
            <form method="post">
                <input type="hidden" name="file_path" value="' . $path . '">
                <input type="submit" name="delete" value="Xóa File">
            </form>';
        }
    }        
    if(isset($_REQUEST['delete'])){
        include 'Controller/ctr_xuly_f.php';
        $p = new xuly_f();
        $path = $_POST['file_path'];
        echo'<p>Kết quả<p>';
        $p->deleteF($path);

    }


    
       
?>


