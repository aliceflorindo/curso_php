<?php

/*ultilizado a função strien com uma string como parametro, vamos receber o
tamanho da string, ou seja a quantidade de caracteres da mesma
EXP:strlen($string)*/


$str1 ="esta string é mtt grande";
$str2 = "esta não";

echo strlen($str1) . "<br>";
echo strlen($str2) . "<br>";

$len1 = strlen($str1);
$len2 = strlen($str2);

if($len1 > $len2){
    echo "A string 1 é maior";
}else{
    echo "A string 2 é maior";
}
