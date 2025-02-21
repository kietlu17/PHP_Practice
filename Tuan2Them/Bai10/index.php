<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Tính tiền karaoke</h1>
        <table>
            <tr>
                <td>Giờ bắt đầu:</td>
                <td><input type="text" name="long" value="<?php echo isset($_POST['long']) ? $_POST['long'] : ''; ?>">(h)</td>
            </tr>
            <tr>
                <td>Giờ kết thúc:</td>
                <td><input type="text" name="large"  value="<?php if(isset($_POST['large'])) echo $_POST['large']?>">(h)</td>
            </tr>
            <tr>
                <td>Tiền thanh toán:</td>
                <?php
                $gd = 20000;
                $gs = 45000;
                if(isset($_POST['long']) && isset($_POST['large'])){
                    $long = (int) $_POST['long'];
                    $large = (int) $_POST['large'];
                    if ($large < $long){
                        echo '<td> <input type="text" disabled value="Giờ bắt đầu < Giờ kết thúc"></td>';
                    }else{
                        if($long >=10 && $long <17){
                            if($large <17)
                                echo '<td> <input type="text" disabled value="'. ($large-$long) *$gd.'"></td>'; 
                        else
                            echo '<td> <input type="text" disabled value="'. (17-$long) *$gd + ($large-17)*$gs.'"></td>'; 
                    }else
                        echo '<td> <input type="text" disabled value="'. ($large-$long) *$gs.'"></td>'; 

                }}

                ?>
            </tr>
                

        </table>
        <input type="submit" value="Tính tiền" name="ok" >

    </form>
</body>
</html>