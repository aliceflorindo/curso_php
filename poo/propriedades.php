<?php

//Para declarar propriedades vamos basicamente criar uma variavel dentro de uma class
//Porem precisamos definir a sua privacidade, como por exp public
//Uma propriedade  publica pode ser acessada fora do escopo do obj
//EXP: $idade = 29

class Car{
    public $carro = "Ferrari";
    public $rodas = 4;
    public $aro = 20;
    public $cor = "Vermelha";

    function ligar($e){
        echo "$e ligado";
    }
    
}

$ferrari = new Car;

echo $ferrari->carro . "<br>";
echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";

$ferrari->ligar("carro");

echo "<br>";

$ferrari->cor = "azul <br>";
echo $ferrari->cor;


