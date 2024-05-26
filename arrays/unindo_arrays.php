<?php

//unir arrays conhecida como merge, a função que vamos utilizar é a array_marge
//que como argumento aceita um numero indeterminado de arrays

$arr1 =[1,2,3];
$arr2 = [4,5,6];
$arr3 = [7,8,9];

$unir = array_merge($arr1, $arr2, $arr3);

print_r($unir);