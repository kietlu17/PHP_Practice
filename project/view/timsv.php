<form action="" method="get">
    <input type="text" name="tsv">
    <input type="submit" value="tìm" name="oke">
</form>

<?php
    include 'controller/cSV.php' ;
    if (isset($_REQUEST['oke'])){
        $tsv = $_GET['tsv'];
        $p = new cSV();
        $p->search($tsv);
    }
?>