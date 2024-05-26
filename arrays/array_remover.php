<?php

//podemos remover elementos de um array com a função array_splice
//passamos como parametro o array, indice inicial e quantos elementos queremos remover
//EXP: array_splice($arr, 2, 1)=>A partir do indici 2 remove 1 intem

//RESGATAR ELEMENTOS DE ARRAY, REMOVER ELEMENTOS DE ARRAY
$arr = [1, 2, 3, 4, 5];

$removidos = array_splice($arr, 1, 2);

print_r($arr);
echo "<br>";

print_r($removidos);
