<?php
  function get_max() {
    if (func_get_args() == 0) {
        return false;
    } else {
        $get_max = 0;
        foreach (func_get_args() as $a) {
            if ($get_max < $a) {
                $get_max = $a;
            }
        }
        return $get_max;
    }
  }

echo get_max(10, 20)."</br>"; // Output: 20
echo get_max(10, 20, 30)."</br>"; // Output: 30
echo get_max(10, 20, 30, 40)."</br>"; // Output: 40