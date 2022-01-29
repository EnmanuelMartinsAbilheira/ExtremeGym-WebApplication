<?php

// importar la conexion
require 'includes/config/database.php';
$db = conectarDb();

//crear uin email y pássword 
$email = "eel2000martins@hotmail.com";
$password = "1911eelm2000";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//query para crear el usuario
$query = " INSERT INTO usuarios (email, password) VALUES ( '${email}', '${passwordHash}'); ";

mysqli_query($db, $query);

//agregarlo a la base de datos

