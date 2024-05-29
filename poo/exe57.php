<?php

class Dog{

    public $cor;
    public $raca;
    public $idade;

    function __construct($cor, $raca, $idade){

        $this->cor = $cor;
        $this->raca = $raca;
        $this->idade = $idade;

    }
}

$budog = new Dog("preto", "budog", "1");

echo "O cachorro é da cor $budog->cor da raça $budog->raca e tem apenas $budog->idade <br>";