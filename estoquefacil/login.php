<?php 

include "config/conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios
    WHERE email = '$email'";

$resultado = $conexao->query($sql);

if($resultado->rowCount() > 0){
    $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
 
    if(password_verify($senha, $usuario["senha"])){
        session_start();
        $_SESSION["usuario"] = $usuario["nome"];
        header("Location: listar.php");
        exit;
    }
    else{
        echo "Senha incorreta";
    }
}
    else{
    echo "Usuário não encontrado";
    }
    