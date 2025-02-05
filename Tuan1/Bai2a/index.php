<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        do{
            $a = rand();
            $b = rand();

        }while($a<$b);
        echo "a = $a <br>";
        echo "b = $b <br>";
    ?>
</body>
</html>