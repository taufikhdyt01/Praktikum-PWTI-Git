<?php
  function pangkat(int $bil,int $counter) : int {
    if($counter<1) {
        return 1;
        } else {
            return $bil * pangkat($bil,$counter-1);
        }
  }
  
  for ($i=0; $i < 10; $i++) {
    echo '2 pangkat ',$i,' adalah : ',pangkat(2,$i),"<br>";
  }