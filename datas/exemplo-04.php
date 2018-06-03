<?php

$periodo = new DateInterval("P15D");
$dt = new DateTime();
echo $dt->format("d/m/Y");
echo "<br>";
$dt->add($periodo);

echo $dt->format("d/m/Y");

?>