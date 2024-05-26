<?php

/*utilizando a notação de chave => valor, temos acesso rapido tb a arrays
associativos
EXP:foreach($itens as $key => $value){} */

$alice = [
  'nome' => 'alice',
  'idade' => 18
];

$gus = [
    'nome' => 'gustavo',
    'idade' => 28
];

foreach($alice as $car => $value){
    echo "$car => $value<br>";
}

foreach($gus as $car => $value){
    echo "$car => $value<br>";
  
}



