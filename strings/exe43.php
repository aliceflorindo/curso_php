<?php

//converter a string "carro-navio-helicoptero-barco-jangada" para array

$frase = "carro, navio, helicoptero, barco, jangada";

$converte = explode(",", $frase);

print_r($converte);