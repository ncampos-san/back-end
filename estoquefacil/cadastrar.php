<?php 

include "config/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$qtd = $_POST["quantidade"];

$nomeImagem = null;
if(isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == UPLOAD_ERR_OK){

    $extensoesPermitidas = ["jpg", "jpeg","png" , "webp"];
    $extensao = strtolower(pathinfo($_FILES["imagem"]["name"],
    PATHINFO_EXTENSION));

    if( !in_array($extensao, $extensoesPermitidas)){
        die("Formato não permitido. Use jpg,jpeg,pnj,webp");

    }
    
    if($_FILES["imagem"]["size"] > 2 * 1024 * 1024){
        die("imagem muito grande ! ! !");
    }

    $nomeImagem = uniqid("produto_") . "." . $extensao;
    move_uploaded_file($_FILES["imagem"]["tmp_name"],"uploads/" . $nomeImagem);
}

$sql = "INSERT INTO produtos(nome, quantidade, preco, categoria, imagem)
                    VALUES ('$nome' , '$qtd' , '$preco' , '$categoria', '$nomeImagem')";

if($conexao->query($sql)){
    echo "Produto cadastrado com sucesso!";
}  
else{
    echo "Erro ao cadastrar produto, chama o TI";
}
