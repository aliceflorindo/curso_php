<?php

/*podemos criar novos indices com dados em um array
basta por o nome do array com o novo indici em colchetes e atribuir um valor 
EXP: $arr[1]="teste"; e em arrays associativos basta utilizar o nome da nova chave a atribuição de valor
*/

$arr = [];

print_r($arr);



$arr[0] = 10;

print_r($arr);



$arr[2] = 12;

print_r($arr);



$arr[2] += 12;

print_r($arr);

echo"<br>";


$arrAssoc["aviao"] = "boeing";

print_r($arrAssoc);

echo"<br>";


$arr = [1,2,3];

$arr[] = 4;

print_r($arr);