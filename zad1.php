<?php
for($i=1; $i<16; $i++)
    {$arr[$i] = rand(20,65);}     
      print_r ($arr);
      echo "sum = ".array_sum($arr);
?>