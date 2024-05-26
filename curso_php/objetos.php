<?php

    class Pessoa{

       function falar(){
          echo "ola pessoal!";
       }
    }

    $alice = new Pessoa();

    $alice->nome = "alice";

    echo $alice->nome;

    echo "<br>";

    $alice->falar();
?>