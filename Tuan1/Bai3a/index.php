<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'clsTinh.php';
    $p = new Tinh();
    $a = rand(1,100);
    $b = rand(1,100);

    echo "x = $a <br>";
    echo "y = $b <br>";
    echo "BCNN($a, $b) = ", $p->BCNN($a,$b);
    echo "<br>";
    echo "UCLN($a, $b) = ", $p->USCLN($a,$b);
    ?>
</body>
</html>