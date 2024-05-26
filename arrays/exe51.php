<?php

//array associativo com chaves com valores de nomes, e com uma pontuação
//ordene os dados do maior para o menos
//exiba uma lista, simulando um rankig, em HTML

$ranking = [
        'mateus' => 200,
        'joao' => 25,
        'maria' => 1
];

arsort($ranking);
?>

<h1>RANKING</h1>
<ol>
    <?php foreach($ranking as $pessoa => $pontuacao): ?>
        <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos</li>
    <?php endforeach; ?>    
</ol>


