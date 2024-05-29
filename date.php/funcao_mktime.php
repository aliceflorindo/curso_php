<?php

/*a função mktime recebe em seus parameros: horas, minutos, segundo
mes dia e ano. Assim podemos cirar uma data a partir desta infor */

$dataNascimento = mktime(02, 12, 33, 02, 05, 2005);

echo $dataNascimento . "<br>";

$dataNascimento = date('d/m/Y', $dataNascimento);

echo $dataNascimento . "<br>";


$dataEspecifica = mktime(10, 20, 11, 04, 28, 2041);

$dataFuturaFormatada = date('m/d/Y', $dataEspecifica);

echo $dataFuturaFormatada;
