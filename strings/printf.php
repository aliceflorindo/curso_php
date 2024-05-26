<?php

/*imprime valores de forma dinamica ultilizando o simbolo % 
EXP: print("Numero %d", 1), semelhante a linguagem */

$nome = "mateus";

//%s -> STRING

printf("o nome é  %s <br>", $nome);


//%d -> INT

$n = 10;

printf("voce ganhou um %d <br>", $n);

//%f -> float

$f = "1.7";

printf("A sua altura é de %.2f <br>", $f);

//".2f -> 2 casas apos a virgula"