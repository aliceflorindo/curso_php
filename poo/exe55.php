<?php

class Carro{

   public $cor;
   public $tetoSolar;
   public $velocidadeMaxima;

   function setvelocidadeMaxima($vel){
        $this->velocidadeMaxima = $vel;


   }
    function getVelocidadeMaxima(){
        echo "A velocidade maxima deste carro é $this->velocidadeMaxima km/h <br>";
    }

}

$bmw = new Carro;

$bmw->cor = "Branca";
$bmw->tetoSolar = true;

$bmw->setvelocidadeMaxima(200);

$bmw->getVelocidadeMaxima();

$ferrari = new Carro;

$ferrari->setvelocidadeMaxima(300);
$ferrari->getVelocidadeMaxima();