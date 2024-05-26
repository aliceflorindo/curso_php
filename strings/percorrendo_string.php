<?php

/*podemos percorrer cada um dos caracteres de uma string, para isso vamos utilizar uma estrutura de repetição
e o metodo strlen  para saber o numero de caracteres,
com isso podemos iterar pela string completa
EXP: for($x = 0; $x < strlen($str); $i++){
    //codigo
}*/

$str = "Esta é uma string muito grande ela tem varias caracteres";

for($i = 0; $i < strlen($str); $i++){

    echo"$str[$i] <br>";

}