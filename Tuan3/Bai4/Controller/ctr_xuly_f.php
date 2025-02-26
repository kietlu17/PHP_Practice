<?php
    class xuly_f{
        public function upload($file){
            if($this->checkSize($file['size'])){
                if($this->checkType($file['type'])){
                    $path = 'Img/'.$this->reNameFile($file);
                    move_uploaded_file($file['tmp_name'], $path);
                    echo 'upload file thanh cong';
                    return $path;

                }else{
                    echo 'file không đúng định dạng';
                    return false;
                }

            }else{
                echo 'upload file nhỏ hơn 2MB';
                return false;
            }
            
        }

        private function checkSize($size){
            if($size > 2* 1024 * 1024)
                return false;
            else
                return true;
        }

        private function checkType($type){
            $arrType = array("image/png","image/jpeg","image/gif");
            if(in_array($type, $arrType))
                return true;
            else
                return false;

        }

        private function reNameFile($file){

            $dir = pathinfo($file['name'], PATHINFO_DIRNAME);
            $fileName = pathinfo($file['name'], PATHINFO_FILENAME);
            $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
            return $fileName.'_'.rand(100,990).$dir.$extension;
        }

        public function deleteF($path){
            return unlink($path);
        }
    }
    ?>