<?php

/*é uma estrutura de repetição, porem ela é orientada a um array, devemos utilizar um para a estrtura repitida em todos os elementos do mesmo.
 */

$nomes = ["Alice", "Vida"];

$a = "Amor";

foreach($nomes as $nome){
    echo "O nome do indice atual é $nome <br>";
    if($nome == "Alice"){
        echo "Opa $a <br>";
    }
}