<?php
    class cUpfile{
        public function in_tt($file){
            print_r($file);
        }

        public function upfile($file){
            if($this->ck_size($file)){
                if($this->ck_type($file)){
                    $new_name = $this->re_name($file); 
                    move_uploaded_file($file['tmp_name'], 'img/'.$new_name );
                    echo '<img src="img/'.$new_name .'" >';
                }

                else
                    echo 'sai loai file';
            }
            else
                echo 'file nho hon 5 mb';
        }
        public function ck_size($file){
            //up duoi 5 mb
            if($file['size'] < 5* 1024 * 1024)
                return true;
            else    
                return false;
        }

        public function ck_type($file){
            $types = array('image/png', 'image/jpg');
            if(in_array($file['type'], $types))
                return true;
            else
                return false;
        }

        public function re_name($file){
            $dir = pathinfo($file['name'], PATHINFO_DIRNAME);
            $file_name = pathinfo($file['name'], PATHINFO_FILENAME);
            $ex = pathinfo($file['name'], PATHINFO_EXTENSION);
            return  $file_name . '_'. rand(100, 999). $dir .$ex;
        }
    }
?>