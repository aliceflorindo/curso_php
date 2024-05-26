<?php

//crie um array associativo com nomes e idades, imprima dados em uma tabela HTML, utilize as tags do elemento table

$alice = [
    'nome' => 'alice',
    'idade' => 18
];

?>

<table>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($alice as $nome => $idade):?>
<tr>
    <td>
        <?= $nome; ?>
    </td>
    <td>
        <?= $idade ?>
    </td>
</tr>
    <?php endforeach; ?>
</table>