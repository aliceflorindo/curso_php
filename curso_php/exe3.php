<?php
//numeros inteiros
echo "4 <br>";

//teste para ve se o numero é int
$a = 10;

if(is_int($a)){
    echo "o numero correspondente é int";
}else{
    echo "o numero correspondente não é int";
}

echo"<br>";

//teste para ve se o numero é float
$b = 12.5;

if(is_float($b)){
    echo "o numero correspondente é float";
}else{
    echo "o numero correspondente não é float";
}

echo"<br>";

//teste para ve se o numero é string
$c = "alice";

if(is_string($c)){
    echo "a palavra correspondente é uma string";
}else{
    echo "a palavra correspondente não é uma string";
}

echo"<br>";

//teste para ve se o numero é booleano
$d = "true";

if(is_bool($d)){
    echo "o valor correspondente é booleano";
}else{
    echo "o valor correspondente não é booleano";
}
?>