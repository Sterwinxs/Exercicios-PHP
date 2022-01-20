<?php
//Efetue um algoritmo PHP que receba os valores A, B, C e D. Efetue a soma entre A e C, a multiplicação entre B e D e verifique se o resultado da soma é maior, menor ou igual ao da multiplicação. Imprima: "A+C é maior que B+D", "A+C é menor que B+D", "A+C é igual a B+D".

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
