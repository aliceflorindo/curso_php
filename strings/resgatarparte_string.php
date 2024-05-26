<?php

/*com a função substr podemos resgatar apenas uma parte
EXP: substr(str, inicio, fim);
str-> é a string que vamos procurar algo
inicio-> é o indici inicial da palavra ou texto
fim-> é o indice final da palavra ou texto*/

$texto = "Esta é a minha string";

$minha = substr($texto, 10, 5); //STRING PAI, INDICI INICIAL, COMPRIMENTO DA PALAVRA

echo $texto. "<br>";
echo $minha;