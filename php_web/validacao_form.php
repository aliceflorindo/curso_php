<?php
     
    /*RECEBIMENTOS DE DADOS, verificaçoes doq foi enviado foi realmente oq esperamos
     */

     $validacoes = [];

    if(count($_POST) > 0){
    

      if($_POST['nome'] === ""){
        $validacoes[] = "Por favor, preencha onome do usuario";
      }

      if($_POST['email'] === ""){
        $validacoes[] = "Por favor, preencha o email do usuario";
      }

      
      if($_POST['senha'] != $_POST['confim']){
        $validacoes[] = "Por favor, preencha a senha do usuario";
      }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
                <li><?= $validacao ?></li>
                <?php endforeach; ?>
        </ul>        
        <?php endif; ?>
<form method="POST" enctype="multipart/form-data">
        <div>
            <input type="text" name="nome" placeholder="DIGITE SEU NOME"> 
        </div>
        <div>
            <input type="text" name="email" placeholder="DIGITE SEU EMAIL"> 
        </div>
        <div>
            <input type="text" name="senha" placeholder="DIGITE SUA SENHA"> 
        </div>
        <div>
            <input type="text" name="confim" placeholder="CONFIRME SUA SENHA"> 
        </div>
        <input type="submit" value="Enviar">
</form>
</body>
</html>