<?php

//crie variaveis com caracteristicas de algum objeto ou animel, dps crie um array com compqct com estas mesmas variaveis, faça um loop no array e imprima os valores

$raca = "pitbull";
$nome = "bob";
$cor = "marron";
$idade = "4";

//compact
$dog = compact("raca", "nome", "cor", "idade");

print_r($dog);
echo "<br>";

//loop -> foreach
foreach($dog as $caracteristicas => $values){
    echo "$caracteristicas: $values<br>";
}
