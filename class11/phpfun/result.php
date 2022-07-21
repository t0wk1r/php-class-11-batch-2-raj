<?php

$mark = isset($_POST["num"]) ? $_POST["num"] : NULL;

if($mark < 0 || $mark >100){
    echo "Invalid Number";
}elseif($mark >=80){
    echo "Apni A+ Paisen";
}elseif($mark >=70){
    echo "Apni A Paisen";
}elseif($mark >=60){
    echo "Apni A- Paisen";
}elseif($mark >=50){
    echo "Apni B Paisen";
}elseif($mark >=40){
    echo "Apni C Paisen";
}elseif($mark >=33){
    echo "Apni D Paisen";
}else{
    echo "Aro Porte Hobe";
}

?>
<br>
<a href="index.php">HOME</a>