<?php
    class cFile{
        public function upload($file){
            if($this->chk_size($file)){
                if($this->chk_type($file)){
                    $nname = $this->renameF($file);
                    move_uploaded_file($file['tmp_name'], 'img/'.$nname);
                }else{
                    echo 'loai file';
                }

            }else{
                echo 'kich thuoc';
            }

        }

        public function chk_size($file){
            if($file['size'] < 1024*1024)
                return true;
            else    
                return false;
        }

        public function chk_type($file){
            $types = array('image/jpeg');

            if(in_array($file['type'], $types))
                return true;
            else    
                return false;
        }

        public function renameF($file){
            $dir = pathinfo($file['name'], PATHINFO_DIRNAME);
            $fname =  pathinfo($file['name'], PATHINFO_FILENAME);
            $ex = pathinfo($file['name'], PATHINFO_EXTENSION);
            return $fname.'_'.rand(100,999).$dir.$ex;
        }
    }
?>