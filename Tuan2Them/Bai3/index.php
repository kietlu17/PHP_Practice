<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>NHẬN DIỆN TAM GIÁC</h1>
        <table>
            <tr>
                <td>Cạnh 1:</td>
                <td><input type="number" name="long" value="<?php echo isset($_POST['long']) ? $_POST['long'] : ''; ?>"></td>
            </tr>
            <tr>
                <td>Cạnh 2:</td>
                <td><input type="number" name="large"  value="<?php if(isset($_POST['large'])) echo $_POST['large']?>"></td>
            </tr>
            <tr>
                <td>Cạnh 3:</td>
                <td><input type="number" name="large2"  value="<?php if(isset($_POST['large2'])) echo $_POST['large2']?>"></td>
            </tr>
            <tr>
                <td>Loại tam giác:</td>
                <?php
                if(isset($_POST['long']) && isset($_POST['large']) && isset($_POST['large2'])){
                    $a = $_POST['long'];
                    $b = $_POST['large'];
                    $c = $_POST['large2'];
                    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
                        if ($a == $b && $b == $c) {
                            echo "<td>Đây là tam giác đều.</td>";
                        } elseif ($a == $b || $b == $c || $a == $c) {
                            if ($a**2 + $b**2 == $c**2 || $a**2 + $c**2 == $b**2 || $b**2 + $c**2 == $a**2) {
                                echo "<td>Đây là tam giác vuông cân.</td>";
                            } else {
                                echo "<td>Đây là tam giác cân.</td>";
                            }
                        } elseif ($a**2 + $b**2 == $c**2 || $a**2 + $c**2 == $b**2 || $b**2 + $c**2 == $a**2) {
                            echo "<td>Đây là tam giác vuông.</td>";
                        } else {
                            echo "<td>Đây là tam giác thường.</td>";
                        }
                    } else {
                        echo "<td style='color: red;'>Ba cạnh không tạo thành tam giác!</td>";
                    }
                }

                ?>
            </tr>
                

        </table>
        <input type="submit" value="Tính" name="ok" >

    </form>
</body>
</html>