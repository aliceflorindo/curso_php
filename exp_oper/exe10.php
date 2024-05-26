<?php

$a = 10;
$b = "alice";

if(is_int($a)){
    echo"é um numero";
}

$b = $a * 2;
echo $b;
echo "<br>";

if($b>100){
    echo"é maior que 100";
}else{
    echo"não é maior que 100";
}

?>