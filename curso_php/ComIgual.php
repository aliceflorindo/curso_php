<?php

if(3 == 3){
    echo "Comparação vdd 1</br>";
}

if(3 == 4){
    echo "Comparação vdd 2</br>";
}


$nome = "alice";
$nomeDoSistema = "maria";

if($nome == $nomeDoSistema){
    //== é igual
    echo "O nome é =";
}else{
    //!== é diferente
    echo "O nome é !==";
}
