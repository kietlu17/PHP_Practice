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
                <td colspan="2">
                <input type="submit" value="đăng nhập" name="oke">
            </td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_REQUEST['oke'])){
            include 'controller/cUser.php';
            $p = new cUser();
            $p->login($_POST['acc'], $_POST['pwd']);
            if(isset($_SESSION['role']) && $_SESSION['role']== 1){
                echo'admin';
            }
            else    
                echo 'thanh viên';

                header('refresh: 1; url=index.php');
        }
    ?>
