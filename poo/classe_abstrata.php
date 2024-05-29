<?php

// não podem ser instanciadas ABSTRACT EXP: abastract class ClasseAbstrata{}

abstract class Test{

    public static function testandoClass(){
        echo "Este metodo abstrato <br>";
    }

        abstract public function testeAbs();
    } 


    //não se pode instanciar
    //$t = new Teste;

    Test::testandoClass();

    class Nova extends Test{

        public function testeAbs(){
            echo "teste metodo abstrato";
        }
    }
   
    $n = new Nova;

    $n->testeAbs();
