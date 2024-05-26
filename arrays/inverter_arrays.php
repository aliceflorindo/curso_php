<?php

//com a função array_reverse podemos obter o array ao inverso
//passamos apenas o array como argumento
//o retorno sera um array invertido do original

$arr = [1, 2, 3, 4,];

$inver = array_reverse($arr);

//original
print_r($arr);
echo "<br>";

//invertido
print_r($inver);