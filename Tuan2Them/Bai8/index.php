<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Kết quả học tập</h1>
        <table>
            <tr>
                <td>Điểm học kì 1:</td>
                <td>
                    <input type="text" name="long" value="<?php echo isset($_POST['long']) ? $_POST['long'] : ''; ?>">

                    
            </td>
            </tr>
            <tr>
                <td>Điểm học kì 2:</td>
                <td><input type="text" name="large"  value="<?php if(isset($_POST['large'])) echo $_POST['large']?>"></td>
            </tr>
            <tr>
                <td>Điểm trung bình:</td>
                <?php
                if(isset($_POST['long']) && isset($_POST['large'])){
                    $long = (float) $_POST['long'];
                    $large = (float) $_POST['large'];
                    if ($long >= 0 && $large >=0 ){
                        $agv = ($large + $long*2)/3;
                        echo '<td> <input type="text" disabled value=" ' . round($agv,1) . '"></td>';

                    }
                    else {
                        echo '<td> phương trình vô nghiệm</td>';
                    }

                }

                ?>
            </tr>            
            <tr>
                <td>Kết quả:</td>
                <?php
                if($agv >= 5){
                           
                        echo '<td> <input type="text" disabled value="Được lên lớp"></td>';

                    }
                    else {
                        echo '<td> <input type="text" disabled value="Ở lại lớp"></td>';
                    }

                

                ?>
            </tr>
                
            <tr>
                <td>Xếp loại học lực:</td>
                <?php
                if($agv >= 8){
                    echo '<td> <input type="text" disabled value="Giỏi"></td>';
                }
                else if($agv >=6.5)
                    echo '<td> <input type="text" disabled value="Khá"></td>';
                else if($agv >=5)
                    echo '<td> <input type="text" disabled value="Trung bình"></td>';
                else 
                    echo '<td> <input type="text" disabled value="Yếu"></td>';

                ?>
            </tr>

        </table>
        <input type="submit" value="Tính" name="ok" >

    </form>
</body>
</html>