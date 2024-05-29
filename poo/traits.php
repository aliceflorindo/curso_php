<?php

/*permite o reuso do cod sem hierarquia de classe, sem herança
podemos assim utilizar os metodos da classe que foi feita a trait, USE*/

trait Test{
        public function teste(){
            echo "testando";
        }
}

trait Testando{
    public function traiTeste(){
        echo "este metodo é da trait testando";
    }
}

class Central{
    use Test;
    use Testando;
}

$x = new Central;

$x->teste();

$x->traiTeste();