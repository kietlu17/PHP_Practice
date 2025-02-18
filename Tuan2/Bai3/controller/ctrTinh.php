<?php
    class Tinh{
        public function Cong($a, $b){
            return $a + $b;
        }

        public function Tru($a, $b){
            return $a - $b;
        }

        public function Nhan($a, $b){
            return $a * $b;
        }

        public function Chia($a, $b){
            if ($b == 0){
                return false;
            }
            return $a / $b;
        }        
        
    }
?>