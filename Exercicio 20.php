<?php

$AB= 10;
$BC= 10;
$AC= 10;

if ($AB != $BC && $AB != $AC){
    echo 'Triângulo Escaleneo!';
}elseif (($AB != $BC) && ($AB = $AC) && ($BC == $AC)){
    echo 'Triângulo Isósceles!';
}elseif ($AB == $BC && $BC == $AC){
    echo 'Triângulo Equilátero!';
}


?>