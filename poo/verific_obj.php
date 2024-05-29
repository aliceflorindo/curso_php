<?php

//is_object()=>verifica se uma variavel é um obj
//get_class()=>verifica a classe de um obj
//method_exists()=>verifica se um metodo existe em um obj

class Humano{
    public function falar(){
        echo "ola";
    }
}

$matheus = new Humano;

$teste = 10;

if(is_object($matheus)){
    echo "obj existe";
}else{
    echo " não existe<br>";
}

if(is_object($teste)){
    echo "obj existe";
}else{
    echo " não existe<br>";
}

echo get_class($matheus) . "<br>";

if(method_exists($matheus, "falar")){
    echo "metodo existe";
}else{
    echo " não existe<br>";
}