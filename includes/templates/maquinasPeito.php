<?php 
    //importar la conexion
    require __DIR__ . '/../config/database.php';
    $db = conectarDb();

    //consultar
    $consulta = "SELECT * FROM maquinas WHERE ejercicioId = 3";

    //obtener resultado
    $resultado = mysqli_query($db, $consulta);

?>


<div class="contenedor-exercicios">

    <?php while($maquina = mysqli_fetch_assoc($resultado)): ?>
        <!--producto 100%-->
        <div class="anuncio">

            <img loading="lazy" src="/imagenes/<?php echo $maquina['imagen']; ?>" alt="anuncio">

            <div class="contenido-anuncio">
                <h3><?php echo $maquina['titulo']; ?></h3>
                <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

            </div> <!-- .contenido-anuncio -->
        </div> <!-- .anuncio -->
    <?php endwhile; ?>

</div> <!-- .contenedor exercicio -->
