<?php
//include "inc/exemplo-01.php";
//require "inc/exemplo-01.php"; o require obriga que o arquivo exemplo-01.php esteja funcionando corretamente
require_once "inc/exemplo-01.php";//require_once obriga a chamar o arquivo somente uma vez
$resultado = somar(20,20);

echo $resultado;
?>