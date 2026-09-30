<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $motorista = $_POST["motorista"];
        $veiculo = $_POST["veiculo"];
        $horas = $_POST["horas"];

        // Define o valor por hora
        $valorHora = 0;

        if ($veiculo == "moto") {
        $valorHora = 5;
}   
        elseif ($veiculo == "carro") {
        $valorHora = 8;
}       
        elseif ($veiculo == "caminhonete") {
        $valorHora = 12;
}

$total = $valorHora * $horas;

        // Calcula o total
        $total = $valorHora * $horas;

        echo "<h2>Resultado</h2>";
        echo "Motorista: " . htmlspecialchars($motorista) . "<br>";
        echo "Tempo: " . $horas . " horas<br>";
        echo "Total: R$ " . number_format($total, 2, ',', '.') . "<br>";
    }
    ?>