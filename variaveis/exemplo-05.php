<?php
$nome = "Leonardo";

function teste(){
    global $nome; // global pega a variavel $nome do escopo global (transporta $nome para o escopo da função)
    echo $nome;
}
teste();
?>