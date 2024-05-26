<?php

/*public, protected e private*/


Class Car{
    public $rodas = 4;
    private $vidro = "Sem pelicula";
    protected $portas = 4;

    public function getvidro(){
        return $this->vidro;
    }

    public function getportas(){
        return $this->portas;
    }

}

Class Mecanico{
    public function alterarRodas($obj){
        $obj->rodas = 10;

    }

    public function colocarPelicula($carro, $pelicula){
        $carro->vidro = $pelicula;
    }

}

$carro = new Car;

echo $carro->rodas;

$matheus = new Mecanico;

$matheus->alterarRodas($carro);

echo $carro->rodas;
//nao pode alterar pq é privado

//$matheus->colocarPelicula($carro, "G10");

echo $carro->getvidro();

echo $carro->getportas();

