<?php 

function urutanAngka($n) {
    $k = 0;
    for($i = $n; $i >= 1; $i--) {
      for($j = $n; $j >= $i; $j--) {
        $k++;
        echo $k > 15 ? $k-5 : $k;
        echo " ";
      }
      echo "<br>";
    }
  }
  
  urutanAngka(5);



?>