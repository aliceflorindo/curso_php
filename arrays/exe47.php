<?php

//crie um array com as infor, chame este array de carro

$carro = ["jaguar", 3.0, "azul", 18, "teto solar"];

print_r($carro);

echo"<br>";

list($carro, $motor, $cor, $idade, $vantagem) = $carro;

echo "$carro<br>";
echo "$motor<br>";
echo "$cor<br>";
echo "$idade<br>";
echo "$vantagem<br>";