<?php

include "config/conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha = password_hash($senha, 
PASSWORD_DEFAULT);

$sql = " SELECT * FROM usuarios WHERE email = '$email'";

$resultado = $conexao->query($sql);

if($resultado->rowCount() > 0){
    echo "Email já existe, use outro!";
}
else{
    $sql = "INSERT INTO usuarios(nome, email,senha)
            VALUES ('$nome','$email', '$senha')";

            if($conexao->query($sql)){
                echo "Usuário cadastrado com sucesso";
                echo "<br>";
                echo "<a href= 'login.html'> Ir para o login</a>";
             }
            else{
                echo "Erro! Você é um estrume";
            }

}