<?php
  function fibbonacci($x) {
    if($x <= 1) {
        return $x;
    } else {
        return fibbonacci($x - 2) + fibbonacci ($x - 1);
    }
  }
  
  for ($i = 0; $i <= 9; $i++) {
    echo "Bilangan Fibonacci ke-".$i." adalah : ".fibbonacci($i)."</br>";
  }
