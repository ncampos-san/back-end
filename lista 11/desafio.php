<?php
$nome = $_POST['nome'];
$servico = $_POST['servico'];

echo "Cliente: " . $nome . "<br>";

if ($servico == 1) {
    echo "Valor do serviço: R$ 30,00";
} elseif ($servico == 2) {
    echo "Valor do serviço: R$ 20,00";
} elseif ($servico == 3){
    echo "Valor do serviço: R$ 45,00";
} else {
    echo "Serviço não encontrado.";
}
?>