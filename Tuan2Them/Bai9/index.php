<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Kết quả thi đại học</h1>
        <table>
            <tr>
                <td>Toán:</td>
                <td>
                    <input type="text" name="long" value="<?php echo isset($_POST['long']) ? $_POST['long'] : ''; ?>">

                    
            </td>
            </tr>
            <tr>
                <td>Lý:</td>
                <td><input type="text" name="large"  value="<?php if(isset($_POST['large'])) echo $_POST['large']?>"></td>
            </tr>
            <tr>
                <td>Hóa:</td>
                <td><input type="text" name="large2"  value="<?php if(isset($_POST['large2'])) echo $_POST['large2']?>"></td>
            </tr>
            <tr>
                <td>Điểm chuẩn:</td>
                <td><input type="text" name="large3"  value="<?php if(isset($_POST['large3'])) echo $_POST['large3']?>"></td>
            </tr>
            <tr>
                <td>Tổng điểm:</td>
                <?php
                if(isset($_POST['long']) && isset($_POST['large']) && isset($_POST['large2']) && isset($_POST['large3'])){
                    $long = (float) $_POST['long'];
                    $large = (float) $_POST['large'];
                    $large2 = (float) $_POST['large2'];
                    $large3 = (float) $_POST['large3'];
                    $sum = $long + $large + $large2;
                    echo '<td> <input type="text" disabled value="' . $sum . '"></td>';

                }
                else {
                    echo '<td> <input type="text" disabled value=" Nhập đủ "></td>';
                }
                ?>
            </tr>            
            <tr>
                <td>Kết quả thi:</td>
                <?php
                if(isset($sum) && isset($large3)){
                    if($sum >= $large3){                      
                        echo '<td> <input type="text" disabled value="Đậu"></td>';

                    }
                    else {
                            echo '<td> <input type="text" disabled value="Trược"></td>';
                        }
                }              
                else {
                    echo '<td> <input type="text" disabled value=""></td>';
                }


                

                ?>
            </tr>
                

        </table>
        <input type="submit" value="Xem kết quả" name="ok" >

    </form>
</body>
</html>