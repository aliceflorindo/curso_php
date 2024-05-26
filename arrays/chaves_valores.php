<?php

//com a função array_keys recebemos um array apenas com as chaves de um array, 
//com a função array_values recebemos um array com apenas os valores de um array

$carro=[
    'marca' => 'BMW',
    'motor' => '2.4',
    'teto' => true
];

$chaves = array_keys($carro);

print_r($chaves);
echo "<br>";

//array de indici
$valores = array_values($carro);

print_r($valores);
echo "<br>";

