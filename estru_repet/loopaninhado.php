<?php 

$i = 0;

    while($i < 10){
        echo "loop externo $i <br>";

        $i++;

        while($i < 10){
            echo "loop externo $i <br>";
    
            $i++;
        }
    }