<?php

$a = NULL;
$b = NULL;
$c = 50;

echo $a ?? $b ?? $c; // retorna o primeiro valor que não for NULL, no caso $c

?>