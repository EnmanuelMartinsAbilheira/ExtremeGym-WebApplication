<?php

function conectarDb() : mysqli{
    $db = mysqli_connect('localhost', 'root', 'root', 'bi-extremegym');

    if(!$db){
        echo "Nao Se Conseguio conectar a Base de Dados";
        exit;
    }
    return $db;
}
