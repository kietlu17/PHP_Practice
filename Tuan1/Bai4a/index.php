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
        }
        .a{
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="a"><b>STT</b></td>
            <td class="a"><b>Tên Sách</b></td>
            <td class="a"><b>Nội Dung Sách</b></td>
        </tr>
        <?php
        include 'hienthi.php';
        ?>
    </table>
</body>
</html>