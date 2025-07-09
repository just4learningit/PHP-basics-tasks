<?php
  $string = "しんぶんし";

  $array = mb_str_split($string);
  // $rev_array = array_reverse($array);
  $rev_array = [];
  for ($i = count($array) - 1; $i >= 0; $i--){
    $rev_array[] = $array[$i];
  }

  $rev_string = implode("", $rev_array);

  if ($string === $rev_string){
    echo '$stringは回文です。';
  }else{
    echo '$stringは回文ではありません。';
  }
?>