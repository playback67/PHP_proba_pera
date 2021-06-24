<?php
$chet=0;
$nechet=0;
 for($i=1; $i<21; $i++)
    {$arr[$i] = rand(20,65);  
      if (($arr[$i]) % 2 == 0) {
          $chet=$chet+$arr[$i];}
          else {
              $nechet=$nechet+$arr[$i];
          }}
          $itog=$chet-$nechet;
           print_r ($arr);
      echo "chet= ".$chet."\n";   
      echo "nechet= ".$nechet."\n"; 
      echo "sum = ".$itog;
?>