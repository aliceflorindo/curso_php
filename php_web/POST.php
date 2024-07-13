<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <form action="processamento2.php" method="POST">
<div>
        <input type="text" name="marca" placeholder="Marca do carro">
</div>
<div>
        <input type="text" name="preco" placeholder="Preço do carro"> 
</div>
<div>
        <input type="checkbox" name="opcionais[]" value="teto solar"> Teto solar
</div>
<div>
        <input type="checkbox" name="opcionais[]" value="blindado"> Pelicula
</div>
        <input type="checkbox" name="opcionais[]" value="pelicula"> Blindado   
</div>
<div>
    <input type="submit" value="Enviar">
</div>
    </form>           

</body>
</html>

