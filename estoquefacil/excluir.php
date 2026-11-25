<?php

include "config/conexao.php";

$id = $_GET["id"] ?? null;

if (!$id || !filter_var($id, FILTER_VALIDATE_INT)) {
    die("ID do produto inválido.");
}

$sql = "DELETE FROM produtos WHERE id = :id";
$stmt = $conexao->prepare($sql);

if ($stmt->execute(['id' => $id])) {
    echo "Produto excluído com sucesso!";
} else {
    echo "Erro ao excluir o produto.";
}

echo "<br><a href='listar.php'>Voltar</a>";

?>