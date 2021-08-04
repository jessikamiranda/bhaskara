<?php

     function calc_delta($a, $b, $c) {
         $delta = ($b * $b) - (4 * $a * $c);

         if($delta < 0) exit('O valor não pode ser calculado pois o delta é negativo.'); 
         return $delta;
     }

     function calc_x1($a, $b, $delta) {
         $x1 = (-$b + sqrt($delta)) / (2 * $a);
         return $x1;
     }

     function calc_x2($a, $b, $delta) {
         $x2 = (-$b - sqrt($delta)) / (2 * $a);
         return $x2;
    }
 ?>