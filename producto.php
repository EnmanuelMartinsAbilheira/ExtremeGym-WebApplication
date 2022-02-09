<?php

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('Location: /');
    }

    //importar la conexion
    require __DIR__ . '/includes/config/database.php';
    $db = conectarDb();

    //consultar
    $consulta = "SELECT * FROM productos WHERE id = ${id}";

    //obtener resultado
    $resultado = mysqli_query($db, $consulta);

    if($resultado->num_rows === 0){
        header('Location: /');
    }

    $producto = mysqli_fetch_assoc($resultado);


    $navEffect = true;
    $inicio =false;
    require 'includes/funciones.php';
    include 'includes/templates/header.php' ;
?>


    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $producto['titulo']; ?></h1>

        <img loading="lazy" src="/imagenes/<?php echo $producto['imagen']; ?>" alt="imagen pre treino">

        <div class="resumen-propiedad">

            <p><?php echo $producto['descripcion']; ?></p>

            <a href="/contacto.php" class="boton-verde-block">voce esta interessado em comprar?  Entre em contato conosco</a>

        </div>
    </main>


<?php 
    mysqli_close($db);

    incluirTemplate('footer');
?>