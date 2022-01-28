<?php
    //Conectar a la base de datos
    require 'includes/config/database.php';
    $db = conectarDB();
    
    //consultar
    $consulta = "SELECT * FROM dias_horario";

    //obtener resultado
    $resultado = mysqli_query($db, $consulta);

    $navEffect = false;
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>As 4 Principais Coisas de um Treino</h1>

        <div class="iconos-nosotros">
            
            <div class="icono"> <!-- icono Alimentacion -->
                <img src="/build/img/149655-ffeb3b.svg" alt="Icono Alimentacion" loading="lazy">
                <h3>Alimentacion</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias qui at ullam ducimus nobis esse deleniti, facere possimus quas aut optio sapiente iste asperiores debitis eum? At odit eligendi eveniet.</p>
            </div>

            <div class="icono"><!-- icono treino -->
                <img src="/build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Treino</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias qui at ullam ducimus nobis esse deleniti, facere possimus quas aut optio sapiente iste asperiores debitis eum? At odit eligendi eveniet.</p>
            </div>

            <div class="icono"><!-- icono dedicacion -->
                <img src="/build/img/47188-ffeb3b.svg" alt="Icono Fuerza" loading="lazy">
                <h3>Dedicacion</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias qui at ullam ducimus nobis esse deleniti, facere possimus quas aut optio sapiente iste asperiores debitis eum? At odit eligendi eveniet.</p>
            </div>

            <div class="icono"><!-- icono descanso -->
                <img src="/build/img/547490-ffeb3b.svg" alt="Icono Descanso" loading="lazy">
                <h3>Descanso</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias qui at ullam ducimus nobis esse deleniti, facere possimus quas aut optio sapiente iste asperiores debitis eum? At odit eligendi eveniet.</p>
            </div>

        </div>
    </main>

    <section class="seccion contenedor">
        <h2 class="titulo-producto">Os Productos Mais Vendidos Sao</h2>

        <div class="contenedor-anuncios">

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/zumub.webp" type="image/webp">
                    <source srcset="build/img/zumub.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/zumub.jpg" alt="anuncio">
                </picture>
            

                <div class="contenido-anuncio">
                    <h3>100% WHEY</h3>
                    <p>Sabor banana para un mejor post entrenamiento</p>
                    <p class="precio">$19,98</p>

                    <a href="producto.php?id=14" class="boton-verde-block">Ver Producto</a>

                </div> <!-- .contenido-anuncio -->
            </div> <!-- .anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/creatine.webp" type="image/webp">
                    <source srcset="build/img/creatine.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/creatine.jpg" alt="anuncio">
                </picture>
            

                <div class="contenido-anuncio">
                    <h3>Creatine</h3>
                    <p>Para un mayor treino de musculatura noGym</p>
                    <p class="precio">$32,55</p> 

                    <!-- <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="/build/img/310873.svg" alt="icono Fuerza">
                            <p>Incremento de Fuerza</p>
                        </li>
                        <li>
                            <img loading="lazy"src="/build/img/47188-ffeb3b.svg"  alt="icono PostTreino">
                            <p>Post-Entrenamiento</p>
                        </li>
                        <li>
                            <img loading="lazy" src="/build/img/547490-ffeb3b.svg" alt="icono Cafeina">
                            <p>Incremento Energetico</p>
                        </li>
                    </ul> -->

                    <a href="productos.php" class="boton-verde-block">Ver Producto</a>

                </div> <!-- .contenido-anuncio -->
            </div> <!-- .anuncio -->

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

                

                    <a href="productos.php" class="boton-verde-block">Ver Producto</a>

                </div> <!-- .contenido-anuncio -->
            </div> <!-- .anuncio -->

        </div> <!-- .conteniedor-anuncios -->

        <div class="alinear-derecha">
            <a href="productos.php" class="boton-verde">Ver Todos Os Productos</a>
        </div>
    </section>


    <!-- SQL dias de la semana -->
    <h2 class="titulo-producto">Nosso Horario</h2>
    <div class="iconos-7dias">
        <?php while($DiasHorario = mysqli_fetch_assoc($resultado)): ?>   
            <div class="icono_dias">
                <h3><?php echo $DiasHorario['dia_semana']; ?></h3>
                
                <p><?php echo $DiasHorario['descripcion_dia']; ?></p>

                <a href="nosotros.php" class="boton-verde-block">Disponibilidade</a>
            </div>
        <?php endwhile; ?>
    </div><!-- .iconos-7dias -->

    <section class="imagen-contacto">
        <h2>Tem Alguma duvida? podemos ajudar-te?</h2>
        <p>Puedes entrar en com unicacion con nosotros para ayudarte en lo que necesitas en tus ejercicios como dietas</p>
        <a href="contacto.php" class="boton-verde">Contactenos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nossos Equipamentos</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/remo.webp" type="image/webp">
                        <source srcset="build/img/remo.jpg" type="image/jpeg"> 
                        <img loading="lazy" src="build/img/remo.jpg" alt="Texto Ejercicio">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="exercicios.php">
                        <h4>NordickTrack Remo Cardio</h4>
                        <p>Ejercicio: <span>Cardio</span> </p>

                        <p>
                            unas de las mejores maquina para hacer un cardio que estimule varias zonas musculares al mismo tiempo y aumentar la resistencia.
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/bike.webp" type="image/webp">
                        <source srcset="build/img/bike.jpg" type="image/jpeg"> 
                        <img loading="lazy" src="build/img/bike.webp" alt="Texto Ejercicio">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="exercicios.php">
                        <h4>Bicicleta Cardio</h4>
                        <p>Ejercicio: <span>Cardio</span> </p>

                        <p>
                            un Maquina que te permite elegir que modo de cardio quieres realizar con mas de 20 opciones de ejercicio para Aumento Resistencia, Perdida Peso, Quema de Calorias, ECT.
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    Todos os Clientes do Extreme Gym sao parte de uma familia que nos une um sentimento de superacao internar, uma motivacao de chegar a ser a melhor forma de cada um de nos e chegar a ser aquela pessoa que nos queremos ser
                </blockquote>
                <p>- Josue -</p>
            </div>
        </section>
    </div>

<?php
    incluirTemplate('footer');
?>