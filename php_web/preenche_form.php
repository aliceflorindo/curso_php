<?php
    $usuario = [
           'nome' =>   'Alice',
           'idade' => 18,
           'profissao' => 'programadora'
    ];


    if($usuario){
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="">
<div>
        <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome?>">
</div>
<input type="text" name="nome" placeholder="Digite seu nome" value="<?= $idade?>">
<div>

</div>
<input type="text" name="nome" placeholder="Digite seu nome" value="<?= $profissao?>">
<div>
</html>
</body>