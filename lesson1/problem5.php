<?php
  $members = [
    '佐藤'=>
    [
      'age'=>36,
      'job'=>'営業'
    ],

    '田中'=>
    [
      'age'=>23,
      'job'=>'事務'
    ],

    '吉田'=>
    [
      'age'=>54,
      'job'=>'社長'
    ]
  ];

  echo $members['田中']['age'];
?>