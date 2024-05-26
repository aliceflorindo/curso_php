<?php

//para declarar um metodo vamos utilizar a sintaxe de function, porem dentro de uma classe
//o restante é exatamente igual a sintaxe de função
//podemos retornar ou imprimir dados, dependendo da nossa regra de negocios

class Pessoa{

    function falar(){
        echo "ola, sou um obj <br>";
    }

    function somar($x, $y){
        echo $x + $y;
    }
}

$mateus = new Pessoa;

$mateus->falar();

$alice = new Pessoa;

$mateus->somar(2, 2);

echo "<br>";

$alice->somar(5, 5);

