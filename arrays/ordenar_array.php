<?php

//ordenação de arrays para ordenar em ordem crescente podemos utilizar a função sort em um array
//para ordenar de forma inversa utilizamos rsort

$arr = [3, 7, 8, 4];
//crescente
sort($arr);
 
print_r($arr);
echo "<br>";

$arr2 = [3, 7, 8, 4];
//inverso
rsort($arr2);
 
print_r($arr2);