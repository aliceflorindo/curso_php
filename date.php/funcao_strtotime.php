<?php

/*recebe uma string como parametro que é um texto sinalizando tempo
a função tenta interpretar e transformar em data
EMP: echo date('d/m/y', strtotime('+2 years'));*/

$cincodias = strtotime("5 days");

echo $cincodias . "<br>";

$dezdias = strtotime("10 days");

echo $dezdias . "<br>";

$dataAtualMais10 = date('d/m/y', $dezdias);

echo $dataAtualMais10 . "<br>";

$doismeses = strtotime("2 months");

echo $doismeses . "<br>";

$dataAtualMaisDoisMeses = date('d/m/y', $doismeses);

echo $dataAtualMaisDoisMeses . "<br>";

echo $dozeanos = strtotime("12 years");

echo date('d/m/Y', $dozeanos) . "<br>";