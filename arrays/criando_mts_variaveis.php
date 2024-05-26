<?php

//para isso vamos utilizar a função list

$pessoa = ["alice", 18, "programadora"];

print_r($pessoa);
echo "<br>";
list($nome, $idade, $profissao) = $pessoa;

echo "$nome<br>";
echo "$idade<br>";
echo "$profissao<br>";