<?php
$valorA= 1;
$valorB= 2;
$valorC= 3;
$valorD= 4;

$soma= $valorA+$valorC;
$multi= $valorB*$valorD;

if ($soma > $multi){
    echo 'A+C é maior que B*D';
}elseif ($soma < $multi){
    echo 'A+C é menor que B*D';
}else{
    echo 'A+C é igual a B*D';
} 



?>