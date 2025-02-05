<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include 'clsTinhToan.php';
    $p = new TinhToan();
    $a = rand(0,100);
    $b = rand(0,100);
    echo "a = $a <br>";
    echo "b = $b <br>";
    echo "a + b = ", $p->Tong($a,$b);
    echo "a - b = ", $p->Tru($a,$b);
    echo "a * b = ", $p->Nhan($a,$b);
    echo "a / b = ", (!$p->Chia($a,$b))?"ko thuc hien dc":$p->Chia($a,$b);
    echo "a % b = ", (!$p->ChiaDu($a,$b))?"ko thuc hien dc":$p->ChiaDu($a,$b);
    ?>
</body>
</html>