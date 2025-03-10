<form action="" method="post">
        <table>
            <tr>
                <td>Tên Tài Khoản</td>
                <td><input type="text" name="acc"></td>
            </tr>
            <tr>
                <td>Mật Khẩu</td>
                <td><input type="text" name="pwd"></td>
            </tr>
            <tr>
                <td>Nhập Lại Mật Khẩu</td>
                <td><input type="text" name="pwd2"></td>
            </tr>
            <tr>
                <td colspan="2">
                <input type="submit" value="đăng kí" name="oke">
            </td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_REQUEST['oke'])){
            if($_POST['pwd'] == $_POST['pwd2']){
                include 'controller/cUser.php';
                $p = new cUser();
                $p->regis($_POST['acc'], $_POST['pwd']);
            }
            else
                echo 'mật khẩu ko trùng';
        }
    ?>
