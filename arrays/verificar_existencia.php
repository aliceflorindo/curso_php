<?php

//com a função array_key_exists podemos verificar se ha um valor em uma respectiva key de um array
//podemos fzr essa checagem em um if. EXP: array_key_exists("nome", $arr)
//outra função que podemos utilizar para este fim é a isset

$arr = [
    'nome' => 'alice',
    'idade' => 18
];

if(array_key_exists("nome", $arr)){
    echo "A chave existe <br>";
}else{
    echo "A chave nn existe";
}