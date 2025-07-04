<?php
  $score = 2; //0から100の整数

  if ($score > 100){
    echo "error";
  }elseif ($score === 100){
    echo "AA";
  }elseif ($score >= 90){
    echo "A";
  }elseif ($score >= 80){
    echo "B";
  }elseif ($score >= 70){
    echo "C";
  }elseif ($score >= 60){
    echo "D";
  }elseif ($score < 60){
    echo "E";
  }else{
    echo "error";
  }
?>