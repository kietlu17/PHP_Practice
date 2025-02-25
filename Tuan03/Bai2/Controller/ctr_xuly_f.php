<?php
    class xuly_f{
        public function upload($file){
            if($this->checkSize($file['size'])){
                echo var_dump($file);
                echo 'upload file thanh cong';
            }else{
                echo 'upload file khong thanh cong';
            }
            
        }

        private function checkSize($size){
            if($size > 2* 1024 * 1024)
                return false;
            else
                return true;
        }
    }
    ?>