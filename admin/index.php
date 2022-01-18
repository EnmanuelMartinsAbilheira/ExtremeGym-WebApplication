<?php
    $navEffect = true;
    $inicio =false;
    require '../includes/funciones.php';
    include '../includes/templates/header.php' 
?>


    <main class="contenedor seccion">
        <h1>--Administrador de Productos--</h1>

        <a href="/admin/productos/crear.php" class="boton boton-verde">Novo Producto</a>

        <a href="/admin/maquinas/crear.php" class="boton boton-verde">Novo Maquina</a>
    </main>


<?php
    incluirTemplate('footer');
?>