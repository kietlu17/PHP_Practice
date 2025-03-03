<?php
include 'Model/mUser.php';
class ctrUser{

    public function dangKi($email, $pwd){
        $p = new modelUser();
        // $email = md5($email);
        $user = $p->mLogin($email, $pwd);
        if($user == false)
            echo 'Loi ket noi';
        elseif($user->num_rows >0)
            echo 'dang nhap thanh cong';
        else 
            echo 'dang nhap that bai';

        // header('refresh: 0.5, url = index.php');
    }
    public function dangNhap($email, $pwd){
        if ($_SESSION['email'] == $email  && $_SESSION['pwd'] == $pwd ){
            echo "Đã đăng nhập thành công";
            $_SESSION['login'] = true;
        }

        else{
            echo "Đăng Nhập thất bại";
            $_SESSION['login'] = false;
        }

    }

    public function dangXuat(){
        session_destroy();
    }

    public function upFile($file){
        $name = $this -> reName($file);
         $path = 'Img/'.$name;
         move_uploaded_file($file['tmp_name'], $path);
        echo 'Up file thanh cong';
        echo '<div style="height: 300px; width: 300px; float: left;">
            <p>Ten file cu'.$file['name'].'</p>
            <p>Ten file moi'.$name.'</p>
            <img style="width: 200px"; src="Img/'.$name.'" alt="">
        </div>';


    }

    private function reName($file){
        
        $dir = pathinfo($file['name'], PATHINFO_DIRNAME);
        $name = pathinfo($file['name'], PATHINFO_FILENAME);
        $ex = pathinfo($file['name'], PATHINFO_EXTENSION);
        return $name .'_'. rand(100,99).$dir.$ex;
    }


}
?>