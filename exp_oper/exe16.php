<?php

/*crie um array de 1 a 10, ultilize um loop FOR para criar este array, array_push(arr, elemento)para inserir um elemento em um array, imprima o array criadocom print_r,*/

$arr = [];

for($i = 1; $i < 10; $i++){

    array_push($arr, $i);
}

print_r($arr);