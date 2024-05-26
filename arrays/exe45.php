<?php

//crie um array com a função range de 10 a 45, imprima todos os num com uma soma de 6, se passar de 30 a soma =, imprima tb que o numero é muito alto

$arr = range(10, 45);

print_r($arr);

for($i = 0; $i < count($arr); $i++){
        $soma = $arr[$i] + 6;

        if($soma > 30){
            echo "Numero muito alto";
        }
}

echo "$soma. <br>";


