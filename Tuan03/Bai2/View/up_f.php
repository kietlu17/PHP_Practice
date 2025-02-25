
    <form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="up_f" >
    <input type="submit" value="upload" name="oke">
    </form>

    <?php
        if(isset($_REQUEST['oke'])){
            include 'Controller/ctr_xuly_f.php';
            $p = new xuly_f();
            $file = $_FILES["up_f"];
            $p->upload($file);
        }
           
    ?>
