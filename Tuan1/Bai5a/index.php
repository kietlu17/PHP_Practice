<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <?php
        $date = getdate();
        $current = $date['year'];
        for ($i = 1900; $i <= $current; $i++){
            echo'
            <option value="">'.$i.'</option>';
        }
        ?>
    </select>
</body>
</html>