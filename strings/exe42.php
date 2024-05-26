<?php

//na frase "cade o meu queijo? ele estava aqui em cima", resgate a palavra queijo

$frase = "cade o meu queijo? ele estava aqui em cima";

$queijo = substr($frase, 11, 6);

echo $frase. "<br>";
echo $queijo;