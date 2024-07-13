<?php
/*os inputs de checkbox podem conter mais de um valor
para receber todos os eles no backend precisamos adicionar
uma sintaxe de array no name
assim receberemos todos os inputs marcados 
EXP:name="caracteristicas[]"
*/
if(isset($_POST['ingredientes'])){
    $ingredientes = $_POST['ingredientes'];

    print_r($ingredientes);
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
    <form method="POST">
        <div>
    <input type="checkbox" name="ingredientes[]" value="tomate"> tomate
        </div>

        <div>
    <input type="checkbox" name="ingredientes[]" value="abobora"> abobora
        </div>

        <div>
    <input type="checkbox" name="ingredientes[]" value="feijao"> feijao
        </div>

        <div>
    <input type="submit" value="Enviar">
</div>
</body>
</html>