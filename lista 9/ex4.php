<?php

$numeros = [12,2,3,4,5,6,7,8,9,10];
$maior = $numeros[0];

foreach ($numeros as $num) {
    if ($num > $maior){
        $maior = $num;
    }
}

echo "Maior número: $maior";