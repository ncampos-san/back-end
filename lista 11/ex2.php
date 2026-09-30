<?php

$valor = $_POST ["valor"];
$dinheiro = $_POST["dim"];

if($dinheiro < $valor){
    echo "Falta dinheiro";
}
else{
    echo "O troco é: ", $dinheiro - $valor;
}

?>