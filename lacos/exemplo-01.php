<?php

$idade = 0;

for ($i = $idade; $i <= 18; $i++){
    if($i > 5){
        echo "Já pode tirar a carteira de motorista";
        continue; //para de executar o MAria pois pula direto para o começo do for
    }
    echo "Maria";
}

?>