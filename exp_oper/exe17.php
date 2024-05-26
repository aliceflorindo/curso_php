<?php

// Cria um array vazio chamado $arr.
$arr = [];

// Loop que itera de $i = 10 até $i < 20.
for ($i = 10; $i < 20; $i++) {
    // Adiciona o valor atual de $i ao final do array $arr.
    array_push($arr, $i);
}

// Imprime o conteúdo do array $arr.
print_r($arr);

// Loop que itera de $i = 0 até $i < tamanho do array $arr.
for ($i = 0; $i < count($arr); $i++) {
    // Verifica se o valor no índice $i do array $arr é ímpar.
    if ($arr[$i] % 2 != 0) {
        // Imprime a mensagem indicando que o número é ímpar.
        echo "Numero impar: $arr[$i]<br>";
    }
}
