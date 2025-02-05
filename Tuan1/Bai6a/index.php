<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 600px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($i =1; $i <= 10 ; $i++){   
            echo '<tr>';
            
            for ($y =1; $y <= 10 ; $y++){
                echo '<td>',$i * $y,'</td>' ;  
            }
            echo '</tr>';
        }                                              

    ?>
        

    </table>
</body>
</html>