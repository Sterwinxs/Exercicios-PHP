<?php 
//Efetue um algoritmo PHP que receba quatro notas de um aluno, calcule e imprima a média aritmética das notas e a mensagem de aprovado para média superior ou igual a 7.0 ou a mensagem de reprovado para média inferior a 7.0
$nota1= 8;
$nota2= 7;
$nota3= 9;
$nota4= 6;

$media= ($nota1+$nota2+$nota3+$nota4)/4;
    
if ($media > 7){
    echo 'Aprovado';
}elseif ($media < 7){
    echo "Reprovado";
}


 ?>
