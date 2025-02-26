<form action="" method="post" enctype="multipart/form-data">

<input type="file" name="up_f[]" multiple >
<input type="submit" value="upload" name="oke">
</form>

<?php
    if(isset($_REQUEST['oke'])){
        include 'Controller/ctr_xuly_f.php';
        $p = new xuly_f();
        $file = $_FILES["up_f"];
        echo'<p>Kết quả<p>';
        for ($i= 0; $i < count($file['name']) ; $i++){
            $fileData = [
                'name' => $file['name'][$i],
                'type' => $file['type'][$i],
                'tmp_name' => $file['tmp_name'][$i],
                'error' => $file['error'][$i],
                'size' => $file['size'][$i]
            ];
    

            $p->upload($fileData);


        }
        
    }
       
?>