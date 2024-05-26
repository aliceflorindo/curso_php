<?php

//verificar qual a diferença enrtre dois ou mais arrays com PHP
//a função qur vamos utilizar para isso é a array_diff
//esta função aceita um num indeterminado de arrays

$arr = [1, 2, 3];
$arr2 = [2, 4, 6];

//diferença do array 1 ao array 2
$diff = array_diff($arr, $arr2);

print_r($diff);