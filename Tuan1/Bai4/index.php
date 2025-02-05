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
    for ($i=0; $i<=30; $i++){
        echo ($i%2!=0)? "<b>$i\t</b>" :"<i>$i\t</i>";
    }
    echo "<hr>";


    for ($i=0; $i<=30; $i++){
        echo "<span class='lop0",$i%2,"'>$i </span>";
    }
    ?>
</body>
</html>

