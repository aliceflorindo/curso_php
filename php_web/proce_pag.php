<?php
    $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
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
<?php
    if($method == 'GET');
?>
<form action="" method="POST">
<div>
    <input type="text" name="nome" placeholder="digite seu nome">
</div>

<div>
    <input type="submit" value="Enviar">
</div>
</form>
<?php
  else:
    ?>

<h1>o seu nome é <?= $nome?></h1>

<?php
endif;
?>

</body>
</html>

