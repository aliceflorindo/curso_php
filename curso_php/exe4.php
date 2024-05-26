<?php

//array 
$carro = [
    'marca' => 'BMW',
    'rodas' => '4',
    'teto_solar' => true,
    'velocidade_max' => '300',
    'blindado' => false
];

print_r($carro);

$marca = $carro['marca'];
$velocidade_maxima = $carro['velocidade_max'];

echo "<br>";

echo "O carro é da marca $marca e alcança a velocidade maxima de $velocidade_maxima KM/H";

echo "<br>";
echo "<br>";
 

//array associativo
$pessoa = [
    'nome' => 'alice',
    'idade' => 20,
    'profissao' => 'programadora'
];

$a = 18;

if($pessoa=['idade'] >= $a){
    echo "essa pessoa é maior de idade";
}else{
    echo "essa pessoa não é maior de idade";
}

?>