<?php
$nome = (int)$_GET["b"]; //$_GET Pega o valor d "a" do parametro da url caso exista
$ip = $_SERVER["REMOTE_ADDR"];//$_SERVER retorna informações do servidor no caso o ip

//var_dump($nome);

echo $ip;
?>