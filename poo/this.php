<?php

//o $this se refere a instancia atual do obj
//podendo assim alterar um valor de uma propriedade do obj com:
//$this->propriedade ="x";
//traduçaõ literal = este;
//podemos invocar um metodo do obj com this tb

class Animal {

    public $nome;

    function escolherNome($nome){
        $this->nome = $nome;
    }

function latir(){
    echo "Au Au";
}

function latirForte(){
    return strtoupper($this->latir());
}

}

$frida = new Animal;

echo "O nome do animal é: $frida->nome <br>";

$frida->escolherNome("Frida");

echo "O nome do animal é: $frida->nome <br>";

echo $frida->latir();

echo"<br>";

    echo $frida->latirForte();