<?php

//as interfaces criam um modelo de definição de uma classe, entao toda classe que implementar uma interface devera implementar tb suas prpriedades e metodos obrigatoriamente. IMPLEMENTS

    interface Caracteristicas{

        const nome = "Matheus";

        public function falar();
    }

    class Humano implements Caracteristicas{
        public $idade = 29;

        public function falar(){
            echo "Ola mundo <br>";
        }

        public function dizerNome(){
            echo "meu nome é" . self::nome . "<br>";
        }
    }

    $matheus = new Humano;

    $matheus->falar();

    $matheus->dizerNome();