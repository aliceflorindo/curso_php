<?php

//com a função compact podemos criar um array a partit de variaveis, passamos p a função o nome das variaveis em string, e entt um novo array é criado podemos atribuir a uma varivel

$marca = "BMW";
$motor = "3.0";

$carro = compact("marca", "motor");

print_r($carro);