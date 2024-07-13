<?php

/*
SERVER_SOFTWARE=>identificação do servidor
SERVER_NAME=>hostname, DNS ou IP do servidor
SERVER_PROTOCOL=>protocolo do servidor
SERVER_PORT=>porta do servidor
QUERY_STRING=>argumento apos o ? na URL
*/

print_r($_SERVER);

echo $_SERVER['MYSQL_HOME'] . "<br>";

if($_SERVER['SERVER_NAME'] == 'localhost'){
    echo "Esta acessando o localhost";
}