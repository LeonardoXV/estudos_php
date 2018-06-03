<?php
$nome = "Leonardo";
$sobreNome = "Vieira";

echo $nome ." ". $sobreNome; // . concatena variaveis
unset($nome);// retira a variavel $nome da memoria, ela não existe mais


if(isset($nome)){
    echo $nome;
}
exit; //exit para a execução do programa

?>