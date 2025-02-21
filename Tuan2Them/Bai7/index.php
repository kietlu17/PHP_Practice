<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Giải phương trình bậc nhất</h1>
        <table>
            <tr>
                <td>Phương trình:</td>
                <td>
                    <input type="number" name="long" value="<?php echo isset($_POST['long']) ? $_POST['long'] : ''; ?>">
                    <b>X</b>
                    +
                    <input type="number" name="large"  value="<?php if(isset($_POST['large'])) echo $_POST['large']?>">
                    = 0
                    
            </td>
            </tr>
            <!-- <tr>
                <td>Cạnh 2:</td>
                <td><input type="number" name="large"  value="<?php //if(isset($_POST['large'])) echo $_POST['large']?>">(cm)</td>
            </tr> -->
            <tr>
                <td>Nghiệm:</td>
                <?php
                if(isset($_POST['long']) && isset($_POST['large'])){
                    $long = $_POST['long'];
                    $large = $_POST['large'];
                    if ($long != 0 ){
                           
                        echo '<td> <input type="text" disabled value=" x=' . (-$large / $long) . '"></td>';

                    }
                    else {
                        echo '<td> phương trình vô nghiệm</td>';
                    }

                }

                ?>
            </tr>
                

        </table>
        <input type="submit" value="Tính" name="ok" >

    </form>
</body>
</html>