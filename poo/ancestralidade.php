<?php

//utilizamos o operador instanceof, podemos inserir essa operação em um if pois retorna um booleano

class Humano{


}

class Animal{

}


//com herança
class Professor extends Humano{


}

$marcos = new Humano;

$turca = new Animal;

if($marcos instanceof Humano){
    echo "Marcos é um humano";
}else{
    echo "O marcos não é uma humana";
}

if($turca instanceof Humano){
    echo "A turca não é um humano";
}else{
    echo "A turca  é uma humana";
}

$pedro = new Professor;


if($pedro instanceof Professor){
    echo "Marcos é um Professor <br>";
}else{
    echo "Pedro não é um Professor <br>";
}

if($turca instanceof Humano){
    echo "Pedro é um humano <br>";
}else{
    echo "Pedro não é um humana";
}