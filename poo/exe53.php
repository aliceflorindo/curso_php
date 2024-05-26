<?php

//crie uma classe dog, crie o metodo latir e andar, execute o metodo em novas instancias da classe

class Dog{
    function latir($r){
        echo "cachorro latindo $r";
    }

    function andar($p){
        echo "cachorro andando $p km";
    }
}

$rauf = new Dog;

$rauf->latir("muito");

echo "<br>";

$preto = new Dog;

$preto->andar(2);