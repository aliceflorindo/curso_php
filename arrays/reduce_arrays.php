<?php

//função array_reduce tem cmoo objetivo reduzir um array a apenas um valor; podemos passar uma segunda função como parametro, para algum processo ser executado
//EXP: array_reducee($arr, $funcao);

$arr = [1, 2, 3, 4, 5];
// a é 1 e b é 2..
function soma($a, $b){
    return $a + $b;
}

$resultado = array_reduce($arr, "soma");

echo "$resultado <br>";