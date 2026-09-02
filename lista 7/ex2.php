<?php

function analisarVenda($produto,$custo,$venda){
    $lucro = $venda - $custo;

    if($lucro<=0){
        $mensagem = "prejuizo!!!";
    }
    elseif($lucro <=20){
        $mensagem = "Lucro baixo, mas vale a pena";
    }
    else{
        $mensagem = "Lucro Alto! Investe!!!";
    }
    echo "Produto: , $produto <br>";
    echo "Lucro: , $lucro <br>";
    echo "Análise: , $mensagem <br>";
}
analisarVenda("Camiseta", 40,35)
?>