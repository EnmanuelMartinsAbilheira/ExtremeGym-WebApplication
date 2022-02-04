<?php
$DB_NAME = '';
$DB_USER = '';
$DB_PASSWORD = '';
$DB_HOST = '';


function conectarDb() : mysqli{
    $db = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

    if(!$db){
        echo "Nao Se Conseguio conectar a Base de Dados";
        exit;
    }
    return $db;
}
