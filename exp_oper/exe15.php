<?php

/*crie um array de 1 a 10 e crie um loop para este array, imprima apenas os pares*/

$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for($i = 0; $i < count($arr); $i++){
    if($arr[$i] % 2 == 0){
        echo "Numero: $arr[$i]<br>";
    }
}