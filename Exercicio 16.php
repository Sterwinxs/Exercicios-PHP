<?php
//Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser mostrado somando-se a ele mais 8;  caso o valor somado seja menor ou igual a 20, este deverá ser apresentado  subtraindo-se 5.
$valor1= 10;
$valor2= 10;
$resultado_de_soma= 20;

if ($valor1+$valor2 > 20){
echo $resultado_de_soma+8;
}elseif($valor1+$valor2 <= 20){
    echo $resultado_de_soma-5;
}



?>
