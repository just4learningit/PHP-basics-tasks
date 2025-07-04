<?php
  $string = "しんぶんし";

  $array = mb_str_split($string);
  $rev_array = array_reverse($array);
  $rev_string = implode("", $rev_array);

  if ($string === $rev_string){
    echo '$stringは回文です。';
  }else{
    echo '$stringは回文ではありません。';
  }
?>