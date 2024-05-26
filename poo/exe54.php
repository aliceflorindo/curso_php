<?php

//crie uma class Pessoa
//crie a propriedade nome e idade
//e tb um metodo andar

class Pessoa{
    public $nome = "Alice";
    public $idade = "18";

    function andar($n){
        echo "$n anda km por dia";
    }

    function corre($c){
        echo "corre $c km por dia";
    }
}

$alice = new Pessoa;
$gus = new Pessoa;

$alice->andar("alice");

echo "<br>";

$gus->corre(4);

echo "<br>";

echo "O nome dela é $alice->nome e tem $alice->idade anos  <br>";