<?php 
    //importar la conexion
    require __DIR__ . '/../config/database.php';
    $db = conectarDb();

    //consultar
    $consulta1 = "SELECT * FROM productos WHERE categoriaId = 1";

    //obtener resultado
    $resultado1 = mysqli_query($db, $consulta1);

?>

<div class="contenedor-anuncios">
    <?php while($producto = mysqli_fetch_assoc($resultado)): ?>
        <div class="anuncio">

            <img loading="lazy" src="/imagenes/<?php echo $producto['imagen']; ?>" alt="anuncio">
            
            <div class="contenido-anuncio">
                <h3><?php echo $producto['titulo']; ?></h3>
                <p><?php echo $producto['descripcion']; ?></p>
                <p class="precio">€<?php echo $producto['precio']; ?></p>

                <a href="producto.php?id=<?php echo $producto['id']; ?>" class="boton-verde-block">Ver Producto</a>

            </div> <!-- .contenido-anuncio -->
        </div> <!-- .anuncio -->
    <?php endwhile; ?>
</div>


<?php 
    //cerrar la conexion
    mysqli_close($db);
?>