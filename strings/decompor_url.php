<?php

//decompor uma URL, parse_url

$url = "https://www.google.com";

$arrayUrl = parse_url($url);

print_r($arrayUrl);

echo $arrayUrl["host"];

$url2 = "http://www.horadecodar.com.br/?busca=php";

$arrayUrl2 =  parse_url($url2);
print_r($arrayUrl2);

