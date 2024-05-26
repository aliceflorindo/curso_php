<?php

//STRIP_TAGS

$texto = "<p>testando paragrafo.</p><div>uma div</div><p>outro</p>";

echo $texto;

$salvarTexto = strip_tags($texto);

echo $salvarTexto;