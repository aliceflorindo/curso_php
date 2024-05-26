<?php

/*podemos alterar as strings para maiuscula ou minuscula com funçoes PHP
strtolower-todas as letras minusculas
strtoupper-todas as letras maiusculas*/

$str = "esta string esta min. <br>";

echo strtoupper($str);

$str2 = "ESTA STRING ESTA MAI";

echo strtolower($str2);