<?php

//crescente asort
//decrescente ksort

$arr = [
    'alice' => 18,
    'maria' => 47,
    'gus' => 29,
    'chico' => 69
];

asort($arr);

print_r($arr);
echo "<br>";

//decrescente ksort
$arr2 = [
    'alice' => 18,
    'maria' => 47,
    'gus' => 29,
    'chico' => 69
];

ksort($arr2);

print_r($arr2);


