<?php

//a função in_array verifica se um item passado por parametro esta no array, o retorno é true se encontrar o item e false se nao encontrar
//vamos passar 2 argumentos para a fução
//EXP: in_array("item", $arr);

$arr = ['batata', 'maca'];

if(in_array("batata", $arr)){
    echo "ha o item batata no array";
}else{
    echo "não ha batata no array";
}

//com variaveis
$b = "banana";
echo "<br>";

if(in_array($b, $arr)){
    echo "ha o item banana no array";
}else{
    echo "não ha banana no array";
}