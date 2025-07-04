<?php
  $age = 70; //年齢

  if ($age >= 70){
    echo "無料";
  }elseif ($age >= 13){
    echo "500円";
  }elseif ($age >= 6){
    echo "200円";
  }elseif ($age >= 0){
    echo "無料";
  }else{
    echo "error";
  }
?>