<?php
$a = 10;
$b = 5;
$c = 12;
$d = 12;

/*os operadores logicoa em conjunto dos de comparação..
tambem retornam uma booleano(true or false).
no caso de AND temos true apenas quando as 2 comparaçoes..
são verdadeiras, simbolo &&; EX:5>2 && 10<100 //true.*/

if($c==$c && $b!=$c){
    echo "Entro no if 01";
}
echo "</br>";
if($a==$b && $b==$a){
    echo "Entrou no if 02";
}
echo "</br>";
if(($b <= $a && $c >= $d) && $a > $b){
    echo "Entrou no if 03";
}