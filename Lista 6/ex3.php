<?php

echo "Caixa Eletrônico Itáu <br>";
echo "1 - consulta saldo, 2 - Fazer Saque,
3 - Fazer depósito, 4 - Ver extrato, 5 - Sair <br>";

$opcao = 4;


switch($opcao){
    case 1:
        echo "Seu saldo é R$ 650,81";
        break;
    case 2: echo "Qual o valor?";
        break;
    case 3:
        echo "Qual o valor do deposito ?";
        break;
    case 4;
        echo "Valor<br>-R$100,00<br>-R$250,00<br>R$-500,00<br>";
        break;
    case 5;
        echo " Sair ";
        break;
    default:
        echo "Opção invalida";
        break;


}







?>