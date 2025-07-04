<?php
  $a = 2;
  $b = 1;
  $c = 7;
  $d = 7;
  $e = 8;

  $numbers = [$a, $b, $c, $d, $e];

  $max = $numbers[0];
  foreach ($numbers as $number){
    if ($max < $number){
      $max = $number;
    }
  }
  echo $max;
?>