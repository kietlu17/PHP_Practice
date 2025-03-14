<!-- <form action="" method="post">
    <label for="">Nhập mã sinh viên bạn muốn xóa</label>
    <input type="text" name="masv">
    <input type="submit" value="tìm" name='oke'>
</form> -->

<?php
    include 'timMasv.php';
    // include 'controller/cSV.php';
    if(isset($_REQUEST['oke'])){
        // echo '<form action="" method="get">
        //         <label for="">bạn muốn xóa chứ</label>
        //         <input type="submit" value="xóa" name="yes">
        //     </form>';
        // if(isset($_REQUEST['yes']))
        //     echo 'coa';


        if ($_REQUEST['oke'] == 'tìm'){
                $tsv =$_GET['tsv'];
                echo '<form action="" method="get">
                    <label for="">bạn muốn xóa chứ</label>
                    <input type="hidden" name="tsv" value="'.$tsv.'">
                    <input type="submit" value="xóa" name="oke">
                </form>';
            
        }

        if ($_REQUEST['oke'] == 'xóa'){
            $tsv =$_GET['tsv'];
            $p = new cSV();
            $p->delete($tsv);

        }



        
    }

?>