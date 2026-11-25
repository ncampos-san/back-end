<?php

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Estoque Fácil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1>Estoque Fácil</h1>

        <h2>Bem-vindo, <?php echo $_SESSION["usuario"]; ?>!</h2>

        <p>Você está conectado ao sistema.</p>

        <a href="cadastrar.html">Cadastrar produto</a>

        <br><br>

        <a href="listar.php">Listar produtos</a>

        <br><br>

        <a href="logout.php">🏃‍♀️‍➡️Sair</a>

    </div>

</body>
</html>