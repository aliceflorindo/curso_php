<?php

/*
Verificação de Acesso
Escreva uma função chamada verificarAcesso que recebe dois parâmetros: um número inteiro representando a idade de uma pessoa e um booleano indicando se a pessoa possui autorização de acesso.
A função deve retornar uma string indicando se a pessoa pode ou não ter acesso a um determinado local.
Considere as seguintes condições:
Se a idade for maior ou igual a 18 anos e a autorização for verdadeira, retorne a string "Acesso autorizado".
Se a idade for menor que 18 anos, retorne a string "Acesso negado. Idade mínima requerida: 18 anos".
Se a idade for maior ou igual a 18 anos, mas a autorização for falsa, retorne a string "Acesso negado. Autorização necessária".
*/


function verificarAcesso($idade, $acesso) {
    if ($idade >= 18 && $acesso) {
        return "Acesso permitido";
    } elseif ($idade < 18) {
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } else {
        return "Acesso negado. Autorização necessária";
    }
}

$idade = 17;
$acesso = false;

$resultadoAcesso = verificarAcesso($idade, $acesso);
echo $resultadoAcesso;