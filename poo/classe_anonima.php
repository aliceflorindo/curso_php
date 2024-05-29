<?php

//são criadas em uma variavel e nn possuem nome, elas funcionam como qualquer outra classe EXP: $anonima = new class(){};

    $pessoa = new class(){

        public $nome = "Matheus";

        public function dizerNome(){

            echo "ola meu nome é $this->nome <br>";
        }
    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();