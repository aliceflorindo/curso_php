<?php
//variavel de referencia
$x = 10;

$y =& $x;

echo $x;
echo "</br>";
echo $y;
echo "</br>";

$nome1 = "alice";

$nome2 =& $nome1;

echo $nome1;
echo "</br>";
echo $nome2;
echo "</br>";

?>