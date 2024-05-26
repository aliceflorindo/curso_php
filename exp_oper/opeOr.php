<?php

/*O operador OR resulta em vdd caso qualquer um dos lados
da operação seja vdd; e só resulta em falso caso os 2 lados sejam falso
Simbolo: ||; EX:5>15 ||"teste" == "teste" //true.
*/

$a = 10;
$b = 5;
$c = 10;

if($a == $c || $a == $b){
    echo "if vdd 01";
} 

if($a <= $b || $b >= $c){
    echo "if vdd 02";
}