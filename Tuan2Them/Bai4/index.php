<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>DIỆN TÍCH HÌNH CHỮ NHẬT</h1>
        <table>
            <tr>
                <td>Cạnh 1:</td>
                <td><input type="number" name="long" value="<?php echo isset($_POST['long']) ? $_POST['long'] : ''; ?>">(cm)</td>
            </tr>
            <tr>
                <td>Cạnh 2:</td>
                <td><input type="number" name="large"  value="<?php if(isset($_POST['large'])) echo $_POST['large']?>">(cm)</td>
            </tr>
            <tr>
                <td>Cạnh Huyền:</td>
                <?php
                if(isset($_POST['long']) && isset($_POST['large'])){
                    $long = $_POST['long'];
                    $large = $_POST['large'];
                    if ($long > 0 && $large > 0){
                        $c = sqrt($long**2 + $large**2);
                        echo '<td>',$c,'</td>';
                    }

                }

                ?>
            </tr>
                

        </table>
        <input type="submit" value="Tính" name="ok" >

    </form>
</body>
</html>