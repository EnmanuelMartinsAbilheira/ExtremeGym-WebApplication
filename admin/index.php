<?php
    $navEffect = true;
    $inicio =false;
    require '../includes/funciones.php';
    include '../includes/templates/header.php' 
?>


    <main class="contenedor seccion">
        <h1>--Gestor--</h1>

        <a href="/admin/productos/crear.php" class="boton boton-verde">Novo Producto</a>

        <a href="/admin/maquinas/crear.php" class="boton boton-verde">Novo Maquina</a>

        <a href="/admin/diasHorario/crear.php" class="boton boton-verde">Mudar Horario</a>
        
    </main>


<?php
    incluirTemplate('footer');
?>