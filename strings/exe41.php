<?php

/*transforme a string "este item esta em promoção" 
em "este item esta em PROMOÇAO"*/

$frase = "este item esta em";
$promo = "promoção";

echo ucfirst($frase). strtoupper($promo);