<?php
//Criar um algoritmo que entre com uma palavra e imprima conforme o exemplo  Palavra: sonho 
// SONHO 
// SONHO SONHO

	$palavra = 'Sonho';
	$tam = strlen($palavra);

	for ($i=1; $i <= $tam; $i++) { 

        for($y = 1; $y <= $i; $y++){
		
			echo "$palavra ";
			
		}
		echo "<br>";
    }
    
?>