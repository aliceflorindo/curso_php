<?php

/*crie uma classe humano com algumas propriedades e o metodo falar
crie uma outra classe professor que herda de humano, crie tb as propriedades e metodos particulares desta classe
exiba os valores das propriedades da classe pai e tb utilize os metodos */

class Humano{

    public $maos = 2;
    public $pernas = 2;

    public function falar(){
        echo "Ola eu sou um humano <br>";
    }

}
class Professor extends Humano{

    public $disciplina = "Matematica";

    public function estaLecionando(){
        echo "O professor esta lecionando a aula de $this->disciplina <br>";

    }
}


$marcos = new Humano;

echo "$marcos->maos <br>";
$marcos->falar();

$joao = new Professor;

echo "$joao->pernas <br>";
echo "$joao->disciplina <br>";

$joao->estaLecionando();

$joao->falar();