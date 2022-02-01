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
                <h3>Alimentaçao</h3>
                <p>Uma boa alimentação saudável todos os dias evitando frituras e refrigerantes é a melhor coisa que você pode fazer pelo seu corpo e saúde</p>   
            </div>

            <div class="icono"><!-- icono treino -->
                <img src="/build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Treino</h3>
                <p>um bom treino focado nos resultados que você quer ter é sempre a melhor opção que você pode ter, nós te diremos o que é melhor para você</p>    
            </div>

            <div class="icono"><!-- icono dedicacion -->
                <img src="/build/img/47188-ffeb3b.svg" alt="Icono Fuerza" loading="lazy">
                <h3>Dedicaçao</h3>
                <p>Uma dedicação constante ao melhorar física mente e mental para se tornar a melhor versão possível de você. Para o SUCESSO você tem que se dedicar 100% ao seu treino, dieta e foco mental</p>    
            </div>

            <div class="icono"><!-- icono descanso -->
                <img src="/build/img/547490-ffeb3b.svg" alt="Icono Descanso" loading="lazy">
                <h3>Descanso</h3>
                <p>O corpo cresce em repouso, não durante o treino cresce 48 horas após o treino sem nutrição adequada e descanso o seu treino foi uma perda de tempo</p>
            </div>

        </div>
    </main>

    <section class="seccion contenedor">
        <h2 class="titulo-producto">Os Produtos Mais Vendidos São</h2>

        <div class="contenedor-anuncios">

            <div class="anuncio tabla-precio">
                <picture>
                    <source srcset="build/img/zumub.webp" type="image/webp">
                    <source srcset="build/img/zumub.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/zumub.jpg" alt="anuncio">
                </picture>
            

                <div class="contenido-anuncio">
                    <h3>100% WHEY</h3>
                    <p>proteína completa, altamente biodisponível, crescimento e recuperação muscular com sabor a banana</p>
                    <p class="precio">€28,00</p>

                    <a href="producto.php?id=14" class="boton-verde-block">Ver Producto</a>

                </div> <!-- .contenido-anuncio -->
            </div> <!-- .anuncio -->

            <div class="anuncio tabla-precio2">
                <picture>
                    <source srcset="build/img/PT2.webp" type="image/webp">
                    <source srcset="build/img/PT2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/PT2.jpg" alt="anuncio">
                </picture>
            

                <div class="contenido-anuncio">
                    <h3>Personal Trainer</h3>
                    <p>se você realmente quiser tirar o máximo proveito de seus treinos, um treinador é um ótimo investimento. A melhoria em seus níveis de saúde e condicionamento físico pode ter um pagamento a longo prazo em qualidade de vida e até mesmo diminuir os custos com saúde.</p>
                    <p class="precio">€200,00</p> 

                    <a href="productos.php" class="boton-verde-block">Ver Producto</a>

                </div> <!-- .contenido-anuncio -->
            </div> <!-- .anuncio -->

            <div class="anuncio tabla-precio">
                <picture>
                    <source srcset="build/img/c4.webp" type="image/webp">
                    <source srcset="build/img/c4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/c4.jpg" alt="anuncio">
                </picture>
            

                <div class="contenido-anuncio">
                    <h3>C4 Cafeine</h3>
                    <p>Mais energia para todo el entrenamiento</p>
                    <p class="precio">€15,98</p>

                

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
            <div class="icono_dias tabla-precio2">
                <h3><?php echo $DiasHorario['dia_semana']; ?></h3>
                
                <p><?php echo $DiasHorario['descripcion_dia']; ?></p>

                <a href="nosotros.php" class="boton-verde-block">Disponibilidade</a>
            </div>
        <?php endwhile; ?>
    </div><!-- .iconos-7dias -->
    <!-- SQL dias de la semana -->

    <section class="imagen-contacto">
        <h2>Tem Alguma duvida? podemos ajudar-te?</h2>
        <p>Você pode entrar em comunicação conosco para ajudá-lo com o que você precisa em seus exercícios, como dietas</p>
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
                            Quando usamos a máquina de remo, estamos trabalhando praticamente todos os músculos do nosso corpo (desde os músculos de nossos antebraços para fazer uma boa pegada até os músculos de nossas pernas), por isso é o exercício cardiovascular mais completo que podemos fazer. realizar no ginásio com mais de 25 modalidades de treino.
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
                            Quando usamos a Bicicleta, estamos trabalhando principalmente os músculos das pernas, é muito bom para queimar calorias, aumentar a resistencia nos treinos, emagresimento e muito mais. por isso é o exercício cardiovascular muito bom para comezar o dia no ginásio com mais de 30 modalidades a escolher.
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    Todos os Clientes da Extreme Gym fazem parte de uma família que nos une com um sentimento de superação de estágio, uma motivação para nos esforçarmos por ser o melhor caminho para cada um de nós e nos esforçarmos para ser a pessoa que queremos ser.
                </blockquote>
                <p>- Josue -</p>
            </div>
        </section>
    </div>

<?php
    incluirTemplate('footer');
?>