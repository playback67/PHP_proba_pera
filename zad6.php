<?php
$array=[
  ['name'=>'Петров В.А.','kurs'=>'1 курс.', 'data_rozhd'=>'01.02.1987.','Chemistry'=>5,'Biology'=>4,'Physics'=>3, 'Average' => 0],
  ['name'=>'Петрова П.И.','kurs'=>'2 курс.', 'data_rozhd'=>'12.05.1988.','Chemistry'=>5,'Biology'=>5,'Physics'=>5, 'Average' => 0],
  ['name'=>'Иванов А.П.','kurs'=>'1 курс.', 'data_rozhd'=>'01.10.1987.','Chemistry'=>5,'Biology'=>3,'Physics'=>3, 'Average' => 0],
  ['name'=>'Шишкина А.П.','kurs'=>'2 курс.', 'data_rozhd'=>'01.02.1987.','Chemistry'=>5,'Biology'=>5,'Physics'=>5, 'Average' => 0],
  ];
  for($i=0; $i<4; $i++){
  $ocenki=$array[$i]['Chemistry']+$array[$i]['Biology']+$array[$i]['Physics'];
  $avg=$ocenki/3;
   #array_push($array[$i],$avg);
  $array[$i]['Average']=$avg;

  }

  print_r($array);
?>