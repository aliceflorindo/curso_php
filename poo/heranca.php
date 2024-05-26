<?php

/*A herança é o recurso da OPP que da a possibilidade de uma classe herdar
metodos e propriedades de outra, A palavra reservada é extends EXP: class Programado extends Pessoa {}*/

class Humano{

    public $idade = 29;

    public function falar(){

        echo "ola mundo";
    }

    private function gritar(){
        echo "PHP é muito bom";

    }
     
public function acessarGritar(){
    $this->gritar();
}

protected function falarBaixo(){
        echo "lalala";
}

public function acessarbaixo(){
    $this->falarbaixo();
}
}


    class Programador extends Humano{
        public function acessarbaixoProgramador(){
            $this->falarbaixo();
        }
    }
    $ze = new Humano;

    $ze->falar();

    $matheus = new Programador;

    echo $matheus->idade . "<br>";

    $matheus->falar();
    $matheus->acessarGritar();
    $matheus->acessarbaixo();
