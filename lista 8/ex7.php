<?php


$senhacorreta = "1234";
$senha = "1111";
$tentativas = 0;

while ($tentativas < 3) {
    echo "Tentativa"  ,
    $tentativas + 1 , ": senha incorreta <br>";
    $tentativas = $tentativas + 1;

}

echo "Acesso bloqueado!";