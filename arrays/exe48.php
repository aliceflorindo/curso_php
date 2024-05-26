<?php

//remover pera e feijao

$arr = ['batata', 'maca', 'pera', 'feijao', 'arroz'];

$removidos = array_splice($arr, 2, 2);

print_r($arr);