<?php

//em PHP temos alguns metodos que nos ajudam a entendere as classes
//class_existes()=> verifica se uma classe existe
//get_class_methods()=>verifica os metodos de uma classe
//get_class_vars()=>mapeamento daspropriedades de uma classe

class Humano{
     public $idade;
     public $nome;

     public function falar(){}

     public function andar(){}

}

if(class_exists("Humano")){
    echo "a classe existe<br>";
}

if(class_exists("Cachorro")){
    echo "a classe existe";
}else{
    echo "a classe não existe<br>";
}

print_r(get_class_vars("Humano"));

print_r(get_class_methods("Humano"));