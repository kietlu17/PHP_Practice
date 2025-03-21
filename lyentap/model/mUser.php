<?php
include 'mConnect.php';
class mUser{
    public function insert_user($user, $pwd){
        $p = new mConnect();
        $conn = $p->connectDB();
        $pwd = md5($pwd);
        $sql = "INSERT INTO user (id, username, password, id_role) VALUES (NULL, '$user', '$pwd', NULL);";
        $result = $conn->query($sql);
        $p->disconnectDB($conn);
        return $result;
    }

    public function select_user($user, $pwd){
        $p = new mConnect();
        $conn = $p->connectDB();
        $pwd = md5($pwd);
        $sql = "select * from user where username = '$user' and password= '$pwd'";
        $result = $conn->query($sql);
        $p->disconnectDB($conn);
        return $result;
    }
}
?>