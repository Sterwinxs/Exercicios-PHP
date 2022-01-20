<?php 
//Efetue um algoritmo PHP que calcule e imprima o salário reajustado de um funcionário de acordo com a seguinte regra: • salários até 300, reajuste de 50% • salários maiores que 300, reajuste de 30%

$salario= 310;

if ($salario <= 300){
    echo $salario+(150);
}elseif ($salario > 300){
    echo $salario+98;
}
