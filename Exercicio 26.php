<?php
//Criar um algoritmo que imprima a tabuada de um número.

$a= 1;

while ($a <= 10) {
    for ($i=0; $i <= 10; $i++){
        echo " $a * $i =". $a* $i;
        echo "<br>";
    }
    echo "<br>";
    $a++;
}
?>



