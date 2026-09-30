<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome   = $_POST["nome"];
    $peso   = $_POST["peso"];
    $altura = $_POST["altura"];

    // IMC = peso ÷ (altura × altura)
    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
        $orientacao = "Seu IMC indica que o peso está abaixo do esperado. Uma alimentação equilibrada e o acompanhamento nutricional podem ajudar a ganhar massa de forma saudável.";
    } elseif ($imc <= 24.9) {
        $classificacao = "Peso normal";
        $orientacao = "Parabéns! Seu peso está na faixa considerada saudável. Mantenha hábitos equilibrados de alimentação e movimento.";
    } elseif ($imc <= 29.9) {
        $classificacao = "Sobrepeso";
        $orientacao = "O acompanhamento do peso pode ajudar a identificar hábitos que precisam de atenção. Procure um profissional para uma avaliação individualizada.";
    } else {
        $classificacao = "Obesidade";
        $orientacao = "O IMC aponta obesidade. O acompanhamento com nutricionista é importante para um plano seguro e personalizado. Você não precisa fazer isso sozinho.";
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado | NutriVida</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(180deg, #e8f5e9 0%, #f1f8e9 100%);
            color: #1b3a1b;
        }
        header {
            background: #2e7d32;
            color: #fff;
            padding: 24px 16px;
            text-align: center;
        }
        .logo { font-size: 42px; }
        main { max-width: 640px; margin: 28px auto; padding: 0 16px 40px; }
        .resultado {
            background: #fff;
            border-radius: 16px;
            padding: 28px;
            box-shadow: 0 8px 24px rgba(46, 125, 50, 0.12);
            border-left: 8px solid #2e7d32;
        }
        h2 { color: #2e7d32; margin-bottom: 16px; }
        .linha { margin: 8px 0; font-size: 1.05rem; }
        .imc {
            font-size: 1.4rem;
            font-weight: 700;
            color: #1b5e20;
            margin: 14px 0;
        }
        .dica {
            background: #f1f8e9;
            padding: 14px;
            border-radius: 10px;
            margin-top: 16px;
        }
        .cta {
            text-align: center;
            background: #1b5e20;
            color: #fff;
            padding: 24px 16px;
            border-radius: 16px;
            margin-top: 20px;
        }
        .cta a {
            display: inline-block;
            margin-top: 12px;
            background: #fff;
            color: #1b5e20;
            text-decoration: none;
            font-weight: 700;
            padding: 10px 22px;
            border-radius: 999px;
        }
        .voltar {
            display: block;
            text-align: center;
            margin-top: 16px;
            color: #2e7d32;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">🥗</div>
        <h1>NutriVida</h1>
        <p>Resultado do cálculo de IMC</p>
    </header>
    <main>
        <div class="resultado">
            <h2>Resultado</h2>
            <p class="linha">Paciente: <?php echo htmlspecialchars($nome); ?></p>
            <p class="linha">Peso: <?php echo number_format($peso, 1, ',', '.'); ?> kg</p>
            <p class="linha">Altura: <?php echo number_format($altura, 2, ',', '.'); ?> m</p>
            <p class="imc">IMC: <?php echo number_format($imc, 2, ',', '.'); ?></p>
            <p class="linha">Classificação: <strong><?php echo $classificacao; ?></strong></p>
            <div class="dica"> <?php echo $orientacao; ?></div>
        </div>

        <div class="cta">
            <h3>Quer cuidar melhor da sua saúde?</h3>
            <p>Agende uma consulta com nossa nutricionista!</p>
            <a href="#">Agendar consulta</a>
        </div>
        <a class="voltar" href="index.html">← Calcular novamente</a>
    </main>
</body>
</html>
<?php
}
?>