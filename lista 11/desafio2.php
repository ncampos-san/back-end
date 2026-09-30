<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $combustivel = $_POST["combustivel"];
        $litros = $_POST["litros"];

        if ($combustivel == "gasolina") {
            $preco = 6.20;
            $nomeCombustivel = "Gasolina";
        } elseif ($combustivel == "etanol") {
            $preco = 4.20;
            $nomeCombustivel = "Etanol";
        } else {
            $preco = 6.00;
            $nomeCombustivel = "Diesel";
        }

        $total = $litros * $preco;

        echo "<h2>Resultado</h2>";
        echo "Combustível: $nomeCombustivel<br>";
        echo "Você abasteceu " . number_format($litros, 2, ',', '.') . " litros.<br>";
        echo "Total: R$ " . number_format($total, 2, ',', '.');
    }
    else{
        echo "volta pro html!!!";
    }

    ?>
