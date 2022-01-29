<?php 

require 'app.php';

function incluirTemplate( $nombre, $inicio = false){
    include TEMPLATES_URL . "/${nombre}.php";
}


function estaAutenticado() : bool{
    /* con esto es para dar la permision si tiene login entra si no al index */
    session_start();

    $auth = $_SESSION['login'];

    if($auth){
        return true;
    } else{
        return false;
    }
    /* con esto es para dar la permision si tiene login entra si no al index */
}