<?php

/*crie um array multidimensional com 3 arrays que tem 4 elementos cada
imprima todos os elementos de cada um dos arrays, imprima tb quando esta mudando de array*/

$arr = [
    [1, 2, 3, 4],
    [6, 7, 8, 9],
    [10, 11, 12, 13]
];

//loop no array externo
for($i = 0; $i < count($arr); $i++){

// imprimindo array
echo "imprimindo array externo:" . ($i + 1). "<br>";

for($j = 0; $j < count($arr[$i]); $j++){
    echo $arr[$i][$j]. "<br>";
}
}
