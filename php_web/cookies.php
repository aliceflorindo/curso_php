<?php

    /*os cookes sao strings que contem inform, a função para adicionar um cookie é 
    setcookie, a função dev ser chamada antes do corpo da
    pag, pois envia dados como header(cabeçalho), $_COOKIE */

    setcookie("nome", "Alice", time() + 3600);

    if(isset($_COOKIE['nome'])){

        $nome = $_COOKIE['nome'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
    <h1>ola mundo</h1>
    <?php if($nome != ""): ?>
        <p>Seja bem-vindo <?= $nome ?></p>
        <?php endif; ?>
</body>
</html>