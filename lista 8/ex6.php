<?php

$qtd = 0;

for($num = 1; $num <= 50; $num++){
        if($num % 3 == 0){
            echo "Múltiplo de 3: $num <br>";

            $qtd = $qtd + 1;
        }
}