<?php

$mark = 80;

switch ($mark){
  case ($mark >=80):
    echo "Apni A+ Paisen";
   break;

  case ($mark >=70):
    echo "Apni A Paisen";
  break;

  case ($mark >=60):
    echo "Apni A- Paisen";
   break;

  default:
    echo "kisu nai";
     break;
}

