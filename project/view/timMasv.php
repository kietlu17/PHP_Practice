<form action="" method="get">
    tìm theo masv
    <input type="text" name="tsv">
    <input type="submit" value="tìm" name="oke">
</form>

<?php
    include 'controller/cSV.php' ;
    if (isset($_REQUEST['oke']) && $_REQUEST['oke'] == 'tìm'){
        $tsv = $_GET['tsv'];
        $p = new cSV();
        $p->search_masv($tsv);
    }
?>