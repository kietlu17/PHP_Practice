<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</h1>
        <table>
            <tr>
                <td>Chiều chu vi:</td>
                <td><input type="number" name="long" value="<?php echo isset($_POST['long']) ? $_POST['long'] : ''; ?>"></td>
            </tr>
            <!-- <tr>
                <td>Chiều rộng:</td>
                <td><input type="number" name="large"  value="<?php if(isset($_POST['large'])) echo $_POST['large']?>"></td>
            </tr> -->
            <tr>
                <td>Chu vi:</td>
                <?php
                if(isset($_POST['long']) /*&& isset($_POST['large'])*/){
                    $long = $_POST['long'];
                    // $large = $_POST['large'];
                    echo '<td>',2 * $long * 3.14,'</td>';
                }

                ?>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <?php
                if(isset($_POST['long']) /*&& isset($_POST['large'])*/){
                    $long = $_POST['long'];
                    // $large = $_POST['large'];
                    echo '<td>',$long * $long * 3.14,'</td>';
                }

                ?>
            </tr>
                

        </table>
        <input type="submit" value="Tính" name="ok" >

    </form>
</body>
</html>