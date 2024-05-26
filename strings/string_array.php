<?php

//podemos converter uma string em array com a função explore, passamos primeiro o separador como argumento, depois a string que vai ser convertida

$str = "testando o explore";

$fraseArray = explode(" ",$str);

print_r($fraseArray);
echo "<br>";

$fraseArray2 = explode(",",$str);

print_r($fraseArray2);
echo "<br>";

$frase2 = "carro, barco, aviao";

$fraseArray2 = explode(",",$frase2);

print_r($fraseArray2);
echo "<br>";

