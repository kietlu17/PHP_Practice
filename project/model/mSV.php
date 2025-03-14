<?php
    include 'mConnect.php';
    class mSV{
        public function search_sv($name){
            $sql = "call p_sv('$name')";
            $p =  new mConnect();
            $conn = $p->connectDB();
            if ($conn)
                return $conn->query($sql);
            else 
                return false;

            $p->disconnectDB($conn);
        }

        public function insert_sv($name, $masv, $mk, $birth, $diem,$khoa ){
            $sql = "call p_insert_sv('$name', $masv, '$mk', '$birth', $diem, $khoa)";
            $p = new mConnect();
            $conn = $p->connectDB();
            if ($conn)
                return $conn->query($sql);
            else 
                return false;

            $p->disconnectDB($conn);
            
        }

        public function showall_sv(){
            $sql = "call p_showall_sv";
            $p = new mConnect();
            $conn = $p->connectDB();
            if ($conn)
                return $conn->query($sql);
            else 
                return false;

            $p->disconnectDB($conn);
        }

        public function delete_sv($masv){
            $sql = "call p_delete_sv($masv)";
            $p = new mConnect();
            $conn = $p->connectDB();
            if ($conn)
                return $conn->query($sql);
            else 
                return false;

            $p->disconnectDB($conn);
        }

        public function search_masv($masv){
            $sql = "call p_search_masv($masv)";
            $p =  new mConnect();
            $conn = $p->connectDB();
            if ($conn)
                return $conn->query($sql);
            else 
                return false;

            $p->disconnectDB($conn);
        }
    }
?>