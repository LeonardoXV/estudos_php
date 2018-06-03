<?php

$a = 10;

function trocaValor(&$a){ //passagem por referencia
    $a = 50;
    return $a;
}

echo trocaValor($a);
echo "<br>";
echo $a;

?>