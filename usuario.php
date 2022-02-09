<?php

// importar la conexion
require 'includes/config/database.php';
$db = conectarDb();

//crear uin email y pássword 
$email = "extremegymfit.bcl@gmail.com";
$password = "extremegymfit2017";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//query para crear el usuario
$query = " INSERT INTO usuarios (email, password) VALUES ( '${email}', '${passwordHash}'); ";

mysqli_query($db, $query);

//agregarlo a la base de datos