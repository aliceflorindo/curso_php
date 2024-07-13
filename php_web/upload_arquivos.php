<?php

    /*para enviar arquivos precisa mudar o enctype do form para: multipart/form-data
    input tipo file, dps do envio todos os dados da imagem estarão em $_FILES; */

    if(isset($_FILES)){
        print_r($_FILES);
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
    <form method="POST" enctype="multipart/form-data">
        <div>
            <input type="file" name="imagem"> 
        </div>
        <input type="submit" value="Enviar">
</form>
</body>
</html>