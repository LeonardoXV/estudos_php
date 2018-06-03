<?php

$a = 24;
$b= 12; 
if($a > $b){
    echo $a . " é maior do que ". $b;
}
elseif($a == $b){
    echo $a . " é igual do que ". $b;
}
else{
    echo $a . " é menor do que ". $b;
}

echo "<br>";

echo ($a < 18)?"Menor de idade":"Maior de idade";//operador ternarion

$opcao = ($a == 24)?"Viado":"Hetero";
echo "<br>";
echo $opcao;
?>