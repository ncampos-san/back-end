<?php
//Esse código serve para somar todos os números de um array usando array_reduce().
$numeros = [10, 20, 30, 40];

$resultado = array_reduce($numeros, fn($total, $numero) => $total + $numero, 0);

echo $resultado;

?>


