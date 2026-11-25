

<?php

include "config/conexao.php";

$id = $_GET["id"];

$sql = "SELECT * FROM produtos WHERE id = $id";

$resultado = $conexao->query($sql);

$produto = $resultado->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto | Estoque Fácil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1>Estoque Fácil</h1>

        <p class="subtitulo">Editar produto</p>

        <div class="formulario">

            <h2>Alterar Produto</h2>

            <form action="atualizar.php" method="POST">

                <input type="hidden" name="id"
                       value="<?php echo $produto["id"]; ?>">

                <label for="nome">Nome do produto:</label>

                <input type="text" id="nome" name="nome"
                       value="<?php echo htmlspecialchars($produto["nome"]); ?>"
                       required>

                <label for="categoria">Categoria:</label>

                <select id="categoria" name="categoria" required>

                    <option value="">Selecione uma categoria</option>

                    <option value="Periféricos"
                        <?php if ($produto["categoria"] == "Periféricos") echo "selected"; ?>>
                        Periféricos
                    </option>

                    <option value="Componentes"
                        <?php if ($produto["categoria"] == "Componentes") echo "selected"; ?>>
                        Componentes
                    </option>

                    <option value="Monitores"
                        <?php if ($produto["categoria"] == "Monitores") echo "selected"; ?>>
                        Monitores
                    </option>

                    <option value="Acessórios"
                        <?php if ($produto["categoria"] == "Acessórios") echo "selected"; ?>>
                        Acessórios
                    </option>

                </select>

                <label for="preco">Preço de venda (R$):</label>

                <input type="number" id="preco" name="preco"
                       min="0.01" step="0.01"
                       value="<?php echo $produto["preco"]; ?>"
                       required>

                <label for="quantidade">Quantidade em estoque:</label>

                <input type="number" id="quantidade" name="quantidade"
                       min="0"
                       value="<?php echo $produto["quantidade"]; ?>"
                       required>

                <button type="submit">Salvar alterações</button>

            </form>

        </div>
        <br>
        <a href="listar.php">Voltar para a lista</a>
       

    </div>

</body>
</html>