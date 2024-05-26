<?php 

/*as constantes são parecidas com variaveis, salvam valores em memoria, 
porem o seu valor não pode ser alterado, EXP: public const CHAVE_API = "AS32e3rev3"*/


class Humano{
    public const OLHOS =2;
    public const BRACOS= 2;
    public const PERNAS = 2;

    //com metodos
    function mostrarConstante(){
        echo self::BRACOS;

    }
}

$matheus = new Humano;

echo $matheus::OLHOS . "<br>";

$matheus->mostrarConstante();

