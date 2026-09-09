<?php 

$faturas = [ 200, 300, 250, 500, 600, 312];
$soma = 0;
echo "Resumo das faturas do seu cartão <br>";
foreach($faturas as $num){
    echo "$num <br>";
    $soma = $soma + $num;
}

echo "Seu resumo anual das faturas é R$ $soma";

?>

