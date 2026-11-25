<?php
include "config/conexao.php";

$id = $_POST ['id'];
$nome = $_POST ['nome'];
$categoria = $_POST ['categoria'];
$preco = $_POST ['preco'];
$quantidade = $_POST ['quantidade'];

$sql = "UPDATE produtos SET 
nome = '$nome', 
categoria = '$categoria',
preco = '$preco',
quantidade ='$quantidade'
WHERE id = $id";

if ($conexao->query($sql)) {
    echo "Produto Atualizado com sucesso!";
} else {
    echo "Erro ao atualizar.";
}

echo "<br><a href='listar.php'>Voltar</a>";

?>