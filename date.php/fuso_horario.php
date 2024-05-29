<?php

/*O php vai utilizar o fuso horario da maquina porem podemos alterar manualmente
o fuso com a função date_default_timezoe_set */

date_default_timezone_set('America/Sao_Paulo');

$data = new DateTime();

print_r($data);
echo "<br>";

