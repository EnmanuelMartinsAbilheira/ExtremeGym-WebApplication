<?php

    //importar la conexion
    require 'includes/config/database.php';
    $db = conectarDB();

    //consultar
    $consulta1 = "SELECT * FROM productos WHERE categoriaId = 1";   //Pre Treino
    $consulta2 = "SELECT * FROM productos WHERE categoriaId = 2";   //Energisante
    $consulta3 = "SELECT * FROM productos WHERE categoriaId = 3";   //Perdida Peso
    $consulta4 = "SELECT * FROM productos WHERE categoriaId = 4";   //Gigante
    $consulta5 = "SELECT * FROM productos WHERE categoriaId = 5";   //Productos Extreme Gym
    $consulta6 = "SELECT * FROM productos WHERE categoriaId = 6";   //Multivitaminicos
    $consulta7 = "SELECT * FROM productos WHERE categoriaId = 7";   //Aveia
    $consulta8 = "SELECT * FROM productos WHERE categoriaId = 8";   //Proteinas
    $consulta9 = "SELECT * FROM productos WHERE categoriaId = 9";   //Gainers Massa Muscular 
    $consulta10 = "SELECT * FROM productos WHERE categoriaId = 10";  //Antioxidantes

    //obtener resultado
    $resultado1 = mysqli_query($db, $consulta1);    //Pre Treino
    $resultado2 = mysqli_query($db, $consulta2);    //Energisante
    $resultado3 = mysqli_query($db, $consulta3);    //Perdida Peso
    $resultado4 = mysqli_query($db, $consulta4);    //Gigante
    $resultado5 = mysqli_query($db, $consulta5);    //Productos Extreme Gym
    $resultado6 = mysqli_query($db, $consulta6);    //Multivitaminicos
    $resultado7 = mysqli_query($db, $consulta7);    //Aveia
    $resultado8 = mysqli_query($db, $consulta8);    //Proteinas
    $resultado9 = mysqli_query($db, $consulta9);    //Gainers Massa Muscular 
    $resultado10 = mysqli_query($db, $consulta10);   //Antioxidantes


    $navEffect = true;
    $inicio =false;
    require 'includes/funciones.php';
    include 'includes/templates/header.php' ;
?>


    <main>
        <div class="contenedor seccion">

            <h2 class="titulo-producto">-Pre Treinos-</h2>
            <div class="contenedor-anuncios">
                <?php while($PreTreinos = mysqli_fetch_assoc($resultado1)): ?>
                    <div class="anuncio">

                        <img class="imgProductos" loading="lazy" src="/imagenes/<?php echo $PreTreinos['imagen']; ?>" alt="anuncio">
                        
                        <div class="contenido-anuncio">
                            <h3><?php echo $PreTreinos['titulo']; ?></h3>
                            <p><?php echo $PreTreinos['descripcion']; ?></p>
                            <p class="precio">€<?php echo $PreTreinos['precio']; ?></p>

                            <a href="/producto.php?id=<?php echo $PreTreinos['id']; ?>" class="boton-verde-block">Ver Producto</a>

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenido-anuncio -->


            <!-- separacao categoria -->
            <h2 class="titulo-producto">-Energisantes-</h2>
            <div class="contenedor-anuncios">
                <?php while($Energisantes = mysqli_fetch_assoc($resultado2)): ?>
                    <div class="anuncio">

                        <img class="imgProductos" loading="lazy" src="/imagenes/<?php echo $Energisantes['imagen']; ?>" alt="anuncio">
                        
                        <div class="contenido-anuncio">
                            <h3><?php echo $Energisantes['titulo']; ?></h3>
                            <p><?php echo $Energisantes['descripcion']; ?></p>
                            <p class="precio">€<?php echo $Energisantes['precio']; ?></p>

                            <a href="/producto.php?id=<?php echo $Energisantes['id']; ?>" class="boton-verde-block">Ver Producto</a>

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenido-anuncio -->


            <!-- separacao categoria -->
            <h2 class="titulo-producto">-Perdida de Peso-</h2>
            <div class="contenedor-anuncios">
                <?php while($PerdidaPeso = mysqli_fetch_assoc($resultado3)): ?>
                    <div class="anuncio">

                        <img class="imgProductos" loading="lazy" src="/imagenes/<?php echo $PerdidaPeso['imagen']; ?>" alt="anuncio">
                        
                        <div class="contenido-anuncio">
                            <h3><?php echo $PerdidaPeso['titulo']; ?></h3>
                            <p><?php echo $PerdidaPeso['descripcion']; ?></p>
                            <p class="precio">€<?php echo $PerdidaPeso['precio']; ?></p>

                            <a href="/producto.php?id=<?php echo $PerdidaPeso['id']; ?>" class="boton-verde-block">Ver Producto</a>

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenido-anuncio -->


            <!-- separacao categoria -->
            <h2 class="titulo-producto">-Gigante-</h2>
            <div class="contenedor-anuncios">
                <?php while($Gigante = mysqli_fetch_assoc($resultado4)): ?>
                    <div class="anuncio">

                        <img class="imgProductos" loading="lazy" src="/imagenes/<?php echo $Gigante['imagen']; ?>" alt="anuncio">
                        
                        <div class="contenido-anuncio">
                            <h3><?php echo $Gigante['titulo']; ?></h3>
                            <p><?php echo $Gigante['descripcion']; ?></p>
                            <p class="precio">€<?php echo $Gigante['precio']; ?></p>

                            <a href="/producto.php?id=<?php echo $Gigante['id']; ?>" class="boton-verde-block">Ver Producto</a>

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenido-anuncio -->


            <!-- separacao categoria -->
            <h2 class="titulo-producto">-Productos Extreme Gym-</h2>
            <div class="contenedor-anuncios">
                <?php while($ProductosExtremeGym = mysqli_fetch_assoc($resultado5)): ?>
                    <div class="anuncio">

                        <img class="imgProductos" loading="lazy" src="/imagenes/<?php echo $ProductosExtremeGym['imagen']; ?>" alt="anuncio">
                        
                        <div class="contenido-anuncio">
                            <h3><?php echo $ProductosExtremeGym['titulo']; ?></h3>
                            <p><?php echo $ProductosExtremeGym['descripcion']; ?></p>
                            <p class="precio">€<?php echo $ProductosExtremeGym['precio']; ?></p>

                            <a href="/producto.php?id=<?php echo $ProductosExtremeGym['id']; ?>" class="boton-verde-block">Ver Producto</a>

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenido-anuncio -->


            <!-- separacao categoria -->
            <h2 class="titulo-producto">-Multivitaminicos-</h2>
            <div class="contenedor-anuncios">
                <?php while($Multivitaminicos = mysqli_fetch_assoc($resultado6)): ?>
                    <div class="anuncio">

                        <img class="imgProductos" loading="lazy" src="/imagenes/<?php echo $Multivitaminicos['imagen']; ?>" alt="anuncio">
                        
                        <div class="contenido-anuncio">
                            <h3><?php echo $Multivitaminicos['titulo']; ?></h3>
                            <p><?php echo $Multivitaminicos['descripcion']; ?></p>
                            <p class="precio">€<?php echo $Multivitaminicos['precio']; ?></p>

                            <a href="/producto.php?id=<?php echo $Multivitaminicos['id']; ?>" class="boton-verde-block">Ver Producto</a>

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenido-anuncio -->


            <!-- separacao categoria -->
            <h2 class="titulo-producto">-Aveias-</h2>
            <div class="contenedor-anuncios">
                <?php while($Aveias = mysqli_fetch_assoc($resultado7)): ?>
                    <div class="anuncio">

                        <img class="imgProductos" loading="lazy" src="/imagenes/<?php echo $Aveias['imagen']; ?>" alt="anuncio">
                        
                        <div class="contenido-anuncio">
                            <h3><?php echo $Aveias['titulo']; ?></h3>
                            <p><?php echo $Aveias['descripcion']; ?></p>
                            <p class="precio">€<?php echo $Aveias['precio']; ?></p>

                            <a href="/producto.php?id=<?php echo $Aveias['id']; ?>" class="boton-verde-block">Ver Producto</a>

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenido-anuncio -->


            <!-- separacao categoria -->
            <h2 class="titulo-producto">-Proteinas-</h2>
            <div class="contenedor-anuncios">
                <?php while($Proteinas = mysqli_fetch_assoc($resultado8)): ?>
                    <div class="anuncio">

                        <img class="imgProductos" loading="lazy" src="/imagenes/<?php echo $Proteinas['imagen']; ?>" alt="anuncio">
                        
                        <div class="contenido-anuncio">
                            <h3><?php echo $Proteinas['titulo']; ?></h3>
                            <p><?php echo $Proteinas['descripcion']; ?></p>
                            <p class="precio">€<?php echo $Proteinas['precio']; ?></p>

                            <a href="/producto.php?id=<?php echo $Proteinas['id']; ?>" class="boton-verde-block">Ver Producto</a>

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenido-anuncio -->


            <!-- separacao categoria -->
            <h2 class="titulo-producto">-Gainers Massa Muscular-</h2>
            <div class="contenedor-anuncios">
                <?php while($GainersMassaMuscular = mysqli_fetch_assoc($resultado9)): ?>
                    <div class="anuncio">

                        <img class="imgProductos" loading="lazy" src="/imagenes/<?php echo $GainersMassaMuscular['imagen']; ?>" alt="anuncio">
                        
                        <div class="contenido-anuncio">
                            <h3><?php echo $GainersMassaMuscular['titulo']; ?></h3>
                            <p><?php echo $GainersMassaMuscular['descripcion']; ?></p>
                            <p class="precio">€<?php echo $GainersMassaMuscular['precio']; ?></p>

                            <a href="/producto.php?id=<?php echo $GainersMassaMuscular['id']; ?>" class="boton-verde-block">Ver Producto</a>

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenido-anuncio -->


            <!-- separacao categoria -->
            <h2 class="titulo-producto">-Antioxidantes-</h2>
            <div class="contenedor-anuncios">
                <?php while($Antioxidantes = mysqli_fetch_assoc($resultado10)): ?>
                    <div class="anuncio">

                        <img class="imgProductos" loading="lazy" src="/imagenes/<?php echo $Antioxidantes['imagen']; ?>" alt="anuncio">
                        
                        <div class="contenido-anuncio">
                            <h3><?php echo $Antioxidantes['titulo']; ?></h3>
                            <p><?php echo $Antioxidantes['descripcion']; ?></p>
                            <p class="precio">€<?php echo $Antioxidantes['precio']; ?></p>

                            <a href="/producto.php?id=<?php echo $Antioxidantes['id']; ?>" class="boton-verde-block">Ver Producto</a>

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenido-anuncio -->


        </div> <!-- .contenido seccion -->

    </main>


<?php
    //cerrar la conexion
    mysqli_close($db);

    incluirTemplate('footer');
?>