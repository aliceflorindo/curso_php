<?php

/*datas que foram criadas com o obj de DATETIME podem ser comparadas utilizando
os operadores de comparação, >,< ou ==. EXP:$dataA>$dataB */

$dataA = new DateTime();
$dataB = new DateTime();

$dataC = new DateTime();

$dataB->setDate(2022, 10, 10);
$dataC->setDate(2022, 10, 10);

$dataB->setTime(01, 10, 10);
$dataC->setTime(01, 10, 10);

if($dataB>$dataA){
    echo "A data B é maior <br>";
}

if($dataA>$dataB){
    echo "A data A é maior <br>";
}

if($dataB==$dataC){
    echo "As datas A e B são =";
}