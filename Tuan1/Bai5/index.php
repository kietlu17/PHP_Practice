<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table >
        <tr>
            <td>i</td>
            <td>Kết quả</td>
        </tr>
        <?php
        for($i =0; $i<=10; $i++){
            echo "<tr>
            <td>$i</td>
            <td>",number_format(pow($i,$i+1),0,"",","),"</td>
        </tr>";
        }

        ?>
    </table>
</body>
</html>