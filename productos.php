<?php
    $navEffect = true;
    $inicio =false;
    require 'includes/funciones.php';
    include 'includes/templates/header.php' ;
?>


    <main>
        <div class="contenedor seccion">

            <h2 class="titulo-producto">Pre Treinos</h2>
            

            <?php 
                include 'includes/templates/productos.php';
            ?>

            <!-- separacao categoria -->

            <h2 class="titulo-producto">Energisante</h2>
            <div class="contenedor-anuncios">
                
                <!--producto c4-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/c4.webp" type="image/webp">
                        <source srcset="build/img/c4.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/c4.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>C4 Cafeine</h3>
                        <p>Mais energia para todo el entrenamiento</p>
                        <p class="precio">$15,98</p>

                        <a href="producto.php" class="boton-verde-block">Ver Producto</a>

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->

                <!--producto ABE-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/ABE.webp" type="image/webp">
                        <source srcset="build/img/ABE.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/ABE.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>All Black Everiting</h3>
                        <p>ABE é um pre treino que ayuda a ter toda a energia vitamina e suplementos alimentarios que podas ter</p>
                        <p class="precio">$15,98</p>

                        <a href="producto.php" class="boton-verde-block">Ver Producto</a>

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->

                <!--producto epicpump-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/epiciPump.webp" type="image/webp">
                        <source srcset="build/img/epiciPump.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/epiciPump.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>Epic Pump</h3>
                        <p>Mais energia para todo el entrenamiento uma ayuda para ter a energia toda no treino</p>
                        <p class="precio">$21,25</p>

                        <a href="producto.php" class="boton-verde-block">Ver Producto</a>

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->

            </div> <!-- .conteniedor-anuncios -->


            <!-- separacao categoria -->

            <h2 class="titulo-producto">Perdida de Peso</h2>
            <div class="contenedor-anuncios">

                <!--producto epicpump-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/epiciPump.webp" type="image/webp">
                        <source srcset="build/img/epiciPump.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/epiciPump.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>Epic Pump</h3>
                        <p>Mais energia para todo el entrenamiento uma ayuda para ter a energia toda no treino</p>
                        <p class="precio">$21,25</p>

                        <a href="producto.php" class="boton-verde-block">Ver Producto</a>

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->

            </div> <!-- .conteniedor-anuncios -->


            <!-- separacao categoria -->

            <h2 class="titulo-producto">Productos Nossos</h2>
            <div class="contenedor-anuncios">

                <!--producto ABE-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/ABE.webp" type="image/webp">
                        <source srcset="build/img/ABE.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/ABE.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>All Black Everiting</h3>
                        <p>ABE é um pre treino que ayuda a ter toda a energia vitamina e suplementos alimentarios que podas ter</p>
                        <p class="precio">$15,98</p>

                        <a href="producto.php" class="boton-verde-block">Ver Producto</a>

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->

            </div> <!-- .conteniedor-anuncios -->


            <!-- separacao categoria -->

            <h2 class="titulo-producto">Gigante</h2>
            <div class="contenedor-anuncios">

                <!--producto epicpump-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/epiciPump.webp" type="image/webp">
                        <source srcset="build/img/epiciPump.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/epiciPump.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>Epic Pump</h3>
                        <p>Mais energia para todo el entrenamiento uma ayuda para ter a energia toda no treino</p>
                        <p class="precio">$21,25</p>

                        <a href="producto.php" class="boton-verde-block">Ver Producto</a>

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->

            </div> <!-- .conteniedor-anuncios -->

        </div>
    </main>


<?php
    incluirTemplate('footer');
?>