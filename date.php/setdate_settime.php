<?php

//setDate=>Recebe ano, mes e dia, alterando completamente a data
//setTime=>Recebe hora, min, seg, alterando o tempo da data

$data = new DateTime();

print_r($data);
echo "<br>";

$data->setDate(2005, 12, 22);

print_r($data);
echo "<br>";

echo $data->format('d/m/y') . "<br>";

