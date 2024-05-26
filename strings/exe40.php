<?php

/*percorra a string: O rato roeu a roupa do rei de Roma, a partir de um loop
Imprima o numero de letras "a" desta string*/ 

$rato = "alice florindo do nascimento";

$contadorDeA = 0;

for($i = 0; $i < strlen($rato); $i++){

    if($rato[$i] === "a"){
        $contadorDeA++;
    }

}
 
echo "A quantidade de A é: $contadorDeA";