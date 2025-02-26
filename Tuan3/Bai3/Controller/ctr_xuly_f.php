<?php
    class xuly_f{
        public function upload($file){
            if($this->checkSize($file['size'])){
                if($this->checkType($file['type'])){
                    // echo var_dump($file);
                    // echo 'upload file thanh cong';
                    // $f_name = $file['name'];
                    // move_uploaded_file($file['tmp_name'], 'Img/'.$f_name);
                    // echo '<br>';
                    $f = $this-> reNameFile($file);
                    move_uploaded_file($file['tmp_name'], 'Img/'.$f);
                    // echo $f;
                    
                    echo '<div style="height: 400px ;width: 400px;float: left; border: 1px solid black; margin: 20px">
                            <p>Tên file ban đầu:'.$file['name'].' </p>
                            <p>Tên file sau thay đổi:'.$f.' </p>
                            <p>Kích thước: '.$file['size'].'</p>
                            <p>Loại file: '.$file['size'].'</p>
                            <p>Tên file tạm: '.$file['size'].'</p>
                                <img src="Img/'.$f.'" alt=""style="height: 150px ;width: 150px;">
                        </div>';
                }else{
                    echo 'file không đúng định dạng';
                }

            }else{
                echo 'upload file nhỏ hơn 2MB';
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
    }
    ?>