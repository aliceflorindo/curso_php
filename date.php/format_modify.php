<?php

/*format e modify são da classe DateTime e nos ajudam a manipular os dados nestes obj
forma=>Formata a data;
modify=>Altera a data;*/


//data atual
$data = new DateTime();

echo $data->format('d/m/y') . "<br>";

echo $data->format('D - M - Y') . "<br>";

echo $data->format('l . F . Y') . "<br>";

//data +5 dias
$data->modify('+5 days');

echo $data->format('d/m/y') . "<br>";

$data->modify('- 3 months');

echo $data->format('d/m/y') . "<br>";