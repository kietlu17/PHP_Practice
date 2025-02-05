<?php 
    class Tinh{
        public function BCNN($a, $b){
            return ($a * $b) / $this->USCLN($a, $b);
        }

        public function USCLN($a, $b) {
            if ($b == 0) return $a;
            return $this->USCLN($b, $a % $b);
        }
    }
?>