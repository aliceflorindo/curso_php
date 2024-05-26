<?php

/*ultilização do break*/

$x = 4;
$limit = 30;

while($x < $limit){
    echo $x . "<br>";

    if($x == 24){
        echo "Parando o loop <br>";
        break;
    }
    $x = $x + 2;
}