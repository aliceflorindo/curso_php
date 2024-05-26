<?php

//podemos dividir array grande em diversos num de elementos iguais, vamos utilizar a função array_chunk, passamos o array como argumento e tb o num de elementos q cada array deve ter

$arr = range(1, 20);

print_r(array_chunk($arr, 4));
echo "<br>";

$arrays = array_chunk($arr, 10);

print_r($arrays);