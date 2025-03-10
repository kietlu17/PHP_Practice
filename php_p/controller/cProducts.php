<?php
    include 'model/mProducts.php';
    class cProducts{
        public function show_all(){
            $p = new mProducts();
            $result = $p->select_all();
            if($result->num_rows >0){
                while($num = $result->fetch_assoc()){
                    echo $num['ten'], $num['gia'] ;
                    echo '<br>';
                }
            }
            else 
                echo 'không có sản phẩm';
        }

        public function show_id($id){
            $p = new mProducts();
            $result = $p->select_id($id);
            if($result->num_rows >0){
                while($num = $result->fetch_assoc()){
                    echo $num['ten'], $num['gia'] ;
                }
            }
            else 
                echo 'không có sản phẩm';
        }
    }
?>