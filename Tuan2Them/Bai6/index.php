<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Giai thừa N</h1>
        <table>
            <tr>
                <td>Nhập n:</td>
                <td><input type="number" name="long" value="<?php echo isset($_POST['long']) ? $_POST['long'] : ''; ?>"></td>
            </tr>
            <!-- <tr>
                <td>Cạnh 2:</td>
                <td><input type="number" name="large"  value="<?php if(isset($_POST['large'])) echo $_POST['large']?>">(cm)</td>
            </tr> -->
            <tr>
                <td>Giai thừa n:</td>
                <?php
                if(isset($_POST['long']) ){
                    $long = $_POST['long'];
                    $sum = 1;
                    if ($long >= 0 ){
                        for ($i = 1; $i <= $long ; $i++){
                            $sum = $sum* $i; 
                        }
                           
                        echo '<td>',$sum,'</td>';
                    }
                    else {
                        echo '<td> N > 0</td>';
                    }

                }

                ?>
            </tr>
                

        </table>
        <input type="submit" value="Tính" name="ok" >

    </form>
</body>
</html>