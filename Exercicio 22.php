<?php
//A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias.

$nome_livro= 'Dias Perfeitos.';
$user= 'Aluno';

if ($user == 'Professor'){
    echo 'Professor, em 10 dias você poderá fazer a devolução de ';
    echo '<br>';
    echo $nome_livro;
}elseif ($user == 'Aluno'){
    echo 'Aluno, você poderá fazer a devolução em 3 dias de ';
    echo $nome_livro;
}


?>