<?php

/*com a função strpos podemos encontrar algum texto na string
se recebemos algum valor é que o texto foi encontrado, e este valor é o indice inicial, se for false, o texto nao esta na strig*/

$str = "estamos tesntando o metodo strpos teste";

$testeEncontrar = strpos($str, "strpos");

echo $testeEncontrar;

if($testeEncontrar === false){
    echo "palavra nao encontrada";
}

//strrpos encontra a ultima ocorrencia

$testeUltimo = strrpos($str, "teste");

echo $testeUltimo;

//strstr retorna o resto da string

$testeResto = strstr($str, "metodo");

echo $testeResto;


