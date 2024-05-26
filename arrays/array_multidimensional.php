<?php

//quando inserimos arrays dentro de arrays formamos um array multidimensional, tb conhecido como matriz

$arr = [
    [1, 2, 3],
    [4, 5, 6]
];

print_r($arr);

echo "<br>";

echo $arr[0][1]. "<br>";//acessando o primeiro array, e segundo elemento
echo $arr[1][2]. "<br>"; //acessando o segundo array, e ultimo elemento
echo $arr[1][0]. "<br>"; //acessando o segundo array, e primeiro elemento