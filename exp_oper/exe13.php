<?php

/*Escreva uma função chamada calcularDesconto que recebe dois parâmetros: o valor de um produto e uma categoria.

A função deve retornar o valor do produto com o desconto aplicado, de acordo com a categoria.

Considere as seguintes categorias e seus respectivos descontos:

"eletrônicos": 10% de desconto.

"vestuário": 20% de desconto.

"alimentos": 5% de desconto.

Outras categorias: nenhum desconto.

Se a categoria for desconhecida ou não estiver listada acima, o desconto será zero.

O valor do produto e a categoria serão sempre fornecidos como argumentos da função.
*/

$valor = 50;
$eletronicos = 150;
$vestuarios = 60;
$categoria = "vestuario";
$alimentos = 30;

function calcularDesconto($valor, $categoria){
    if($valor - 20%){
        echo $categoria;
    }else {
        echo "Desconto Zero";
    }
    
}  

$resultadoAcesso = calcularDesconto($valor, $categoria);
echo $resultadoAcesso;