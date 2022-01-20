<?php 
//Efetue um algoritmo PHP que receba a altura e o sexo de uma pessoa, calcule e imprima o seu peso ideal, utilizando as seguintes fórmulas: • para homens: (72.7 * H) - 58 • para mulheres: (62.1 * H) – 44.

$altura= 1.70;
$sexo= 'f';

if ($sexo == 'h'){
    echo (72.7 * $altura)-58;
}
elseif ($sexo == 'f'){
    echo (62.1* $altura)-44.7;
}


 ?>
