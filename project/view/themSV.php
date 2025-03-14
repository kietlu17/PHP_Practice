<form action="" method="post">
    <table>
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" name="ten"></td>
        </tr>
        <tr>
            <td>Mã số sinh viên</td>
            <td><input type="text" name="masv"></td>
        </tr>
        <tr>
            <td>Mật Khẩu</td>
            <td><input type="text" name="mk" ></td>
        </tr>
        <tr>
            <td>Ngày Sinh</td>
            <td><input type="date" name="birth"></td>
        </tr>
        <tr>
            <td>Điểm</td>
            <td><input type="text" name="diem"></td>
        </tr>
        <tr>
            <td>Khoa</td>
            <td>
                <select name="khoa" id="">
                    <option value="1">CNTT</option>
                    <option value="2">QUẢN TRỊ</option>
                </select>
            </td>
        </tr>
        
        
    </table>
    <input type="submit" value="Thêm" name="oke">
</form>

<?php
    include 'controller/cSV.php';
    if(isset($_REQUEST['oke'])){
        $p = new cSV();
        $p->insert($_POST['ten'], $_POST['masv'], $_POST['mk'], $_POST['birth'], $_POST['diem'], $_POST['khoa']);
    }   
?>