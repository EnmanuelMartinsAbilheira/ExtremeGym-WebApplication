<?php

function conectarDb() : mysqli{
    $db = mysqli_connect('localhost', 'root', '1911eelm2000', 'extremeGym2_crud');

    if(!$db){
        echo "Nao Se Conseguio conectar a Base de Dados";
        exit;
    }
    return $db;
}