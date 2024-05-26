<?php

//de uma string gerou um int
$operacao = "5" * 2;

echo $operacao . "</br>";

//gettype checa o tipo

echo gettype($operacao);
echo "</br>";
echo gettype([]);
echo "</br>";
echo gettype(12.2);
echo "</br>";
echo gettype("teste");
