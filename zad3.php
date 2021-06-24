<?php
for($i=1; $i<21; $i++)
    {$arr[$i] = rand(20,65);}
    print_r ($arr);
 for($i=1; $i<21; $i++)
    {
      if (($arr[$i]) % 2 == 0) {
          $arr[$i]=$arr[$i]*2;}
          else {
              $arr[$i]=$arr[$i]/2;
          }}        
           print_r ($arr);
?>