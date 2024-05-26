<?php

/*podemos remover os espaçoes em branco de uma string com funçoes de PHP
trim-limpa espaçoes antes e dps da string
ltrim-limpa espaços da parte inicial da string
rtrim-limpa espaçoes da parte final da string
desta forma conseguimos remover os  espaçoes inseridos
*/

$str1 = "   Alice              .";

echo "Esta é a string 1: $str1. <br>";

$str1limpa = trim($str1);

echo "Esta é a string 1: $str1limpa. <br>";

$str1Limpa2 = rtrim($str1);

echo "esta é a string 1: $str1Limpa2. <br>";