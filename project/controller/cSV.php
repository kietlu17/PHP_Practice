<?php
    include 'model/mSV.php';
    class cSV{
        public function search($name){
            $p = new mSV();
            $result = $p->search_sv($name);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. "ten: " . $row["TEN"];
                    echo '<br>';
                  }
            }else {
                echo 'ko co';
            }
        }

        public function insert($name, $masv, $mk, $birth, $diem,$khoa){
            $p = new mSV();
            $result = $p->insert_sv($name, $masv, $mk, $birth, $diem,$khoa);
            if($result){
                echo 'thêm thành công';
            }else
                echo 'thất bại';
        }

        public function showall(){
            $p = new mSV();
            $result = $p->showall_sv();
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. "ten: " . $row["TEN"];
                    echo '<br>';
                  }
            }else {
                echo 'ko co';
            }
        }

        public function delete($masv){
            $p = new mSV();
            $result = $p->delete_sv($masv);
            if($result){
                echo 'Xóa thành công';
            }else
                echo 'thất bại';
        }

        public function search_masv($masv){
            $p = new mSV();
            $result = $p->search_masv($masv);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. "ten: " . $row["TEN"];
                    echo '<br>';
                  }
            }else {
                echo 'ko co';
            }
        }
    }
?>