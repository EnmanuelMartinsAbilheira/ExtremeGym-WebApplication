<?php

    //importar la conexion
    require 'includes/config/database.php';
    $db = conectarDB();

    //consultar
    $consulta1 = "SELECT * FROM maquinas WHERE ejercicioId = 1";    //Cardio
    $consulta2 = "SELECT * FROM maquinas WHERE ejercicioId = 2";    //Aulas
    $consulta3 = "SELECT * FROM maquinas WHERE ejercicioId = 3";    //Peito
    $consulta4 = "SELECT * FROM maquinas WHERE ejercicioId = 4";    //Dorsais
    $consulta5 = "SELECT * FROM maquinas WHERE ejercicioId = 5";    //Hombros
    $consulta6 = "SELECT * FROM maquinas WHERE ejercicioId = 6";    //Trapecio
    $consulta7 = "SELECT * FROM maquinas WHERE ejercicioId = 7";    //Biceps
    $consulta8 = "SELECT * FROM maquinas WHERE ejercicioId = 8";    //Triceps
    $consulta9 = "SELECT * FROM maquinas WHERE ejercicioId = 9";    //Abdominais
    $consulta10 = "SELECT * FROM maquinas WHERE ejercicioId = 10";  //Lumbar
    $consulta11 = "SELECT * FROM maquinas WHERE ejercicioId = 11";  //Gluteus
    $consulta12 = "SELECT * FROM maquinas WHERE ejercicioId = 12";  //Pernas
    $consulta13 = "SELECT * FROM maquinas WHERE ejercicioId = 13";  //Gemeos

    //obtener resultado
    $resultado1 = mysqli_query($db, $consulta1);    //Cardio
    $resultado2 = mysqli_query($db, $consulta2);    //Aulas
    $resultado3 = mysqli_query($db, $consulta3);    //Peito
    $resultado4 = mysqli_query($db, $consulta4);    //Dorsais
    $resultado5 = mysqli_query($db, $consulta5);    //Hombros
    $resultado6 = mysqli_query($db, $consulta6);    //Trapecio
    $resultado7 = mysqli_query($db, $consulta7);    //Biceps
    $resultado8 = mysqli_query($db, $consulta8);    //Triceps
    $resultado9 = mysqli_query($db, $consulta9);    //Abdominais
    $resultado10 = mysqli_query($db, $consulta10);  //Lumbar
    $resultado11 = mysqli_query($db, $consulta11);  //Gluteus
    $resultado12 = mysqli_query($db, $consulta12);  //Pernas
    $resultado13 = mysqli_query($db, $consulta13);  //Gemeos


    $navEffect = true;
    $inicio =false;
    require 'includes/funciones.php';
    include 'includes/templates/header.php' ;
?>

<!-- Body Ilustration and select area to work -->
<title>Extreme Gym</title>
    <link rel="stylesheet" href="/body/bootstrapMW.css">
    <link rel="stylesheet" href="/body/style.css">
    <link rel="stylesheet" href="/body/muscle-map.css">
    <link rel="stylesheet" href="/body/style-mobile.css">

    <script type="text/javascript" src="/body/muscle.js"></script>
    <div id="wiki-body" class="container">
        <div class="body">
            <div class="row content-menu">
                <div id="sex-choice-wrapper" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn" id="sexchoosermalelabel">
                            <input type="radio" name="sexchooser" id="sexchoosermale" value="male" checked=""><i class="far fa-circle fa-2x"></i><i class="far fa-check-circle fa-2x"></i><span> Homen</span>
                        </label>
                        <label class="btn active" id="sexchooserfemalelabel">
                            <input type="radio" name="sexchooser" id="sexchooserfemale" value="female"><i class="far fa-circle fa-2x"></i><i class="far fa-check-circle fa-2x"></i><span> Mulher</span>
                        </label>
                    </div>
                </div>

            </div>
            <div id="malefigures" style="display: none;">
                <div id="mobile-muscle-map">
                    <img id="mobilebg" src="/body/mobilebg.png">
                    <img id="traps-a" src="/body/08.-TrapsLeft.png">
                    <img id="traps-b" src="/body/08.-TrapsRight.png">
                    <img id="shoulders-a" src="/body/07.A-Deltoids.png">
                    <img id="shoulders-b" src="/body/07.B-Deltoids.png">
                    <img id="pecs" src="/body/06.-Pecs.png">
                    <img id="biceps-a" src="/body/05.A-Biceps.png">
                    <img id="biceps-b" src="/body/05.B-Biceps.png">
                    <img id="forearm-a" src="/body/14.A-Forearms.png">
                    <img id="forearm-b" src="/body/14.B-Forearms.png">
                    <img id="obliques" src="/body/04.-Obliques.png">
                    <img id="quads-a" src="/body/01.A-Quads.png">
                    <img id="quads-b" src="/body/01.B-Quads.png">
                    <img id="calves-a" src="/body/13.A-Calves.png">
                    <img id="calves-b" src="/body/13.B-Calves.png">
                    <img id="back-traps-a" src="/body/08.B-Traps.png">
                    <img id="back-traps-b" src="/body/08.C-Traps.png">
                    <img id="back-shoulders-a" src="/body/07.C-Deltoids.png">
                    <img id="back-shoulders-b" src="/body/07.D-Deltoids.png">
                    <img id="triceps-a" src="/body/09.A-Triceps.png">
                    <img id="triceps-b" src="/body/09.B-Triceps.png">
                    <img id="back-lats-a" src="/body/10.A-Lats.png">
                    <img id="back-lats-b" src="/body/10.B-Lats.png">
                    <img id="back-lower" src="/body/15.-Lower-Back.png">
                    <img id="back-forearms-a" src="/body/14.C-Forearms.png">
                    <img id="back-forearms-b" src="/body/14.D-Forearms.png">
                    <img id="back-glutes" src="/body/11.-Glutes.png">
                    <img id="back-hamstrings-a" src="/body/12.A-Hamstrings.png">
                    <img id="back-hamstrings-b" src="/body/12.B-Hamstrings.png">
                    <img id="back-calves-a" src="/body/13.C-Calves.png">
                    <img id="back-calves-b" src="/body/13.D-Calves.png">
                </div>

                <div id="muscle-map">
                    <img id="background" src="/body/00.-Blank-Figures.png">
                    <img id="traps-a" src="/body/08.-TrapsLeft.png">
                    <img id="traps-b" src="/body/08.-TrapsRight.png">
                    <img id="shoulders-a" src="/body/07.A-Deltoids.png">
                    <img id="shoulders-b" src="/body/07.B-Deltoids.png">
                    <img id="pecs" src="/body/06.-Pecs.png">
                    <img id="biceps-a" src="/body/05.A-Biceps.png">
                    <img id="biceps-b" src="/body/05.B-Biceps.png">
                    <img id="forearm-a" src="/body/14.A-Forearms.png">
                    <img id="forearm-b" src="/body/14.B-Forearms.png">
                    <img id="obliques" src="/body/04.-Obliques.png">
                    <img id="quads-a" src="/body/01.A-Quads.png">
                    <img id="quads-b" src="/body/01.B-Quads.png">
                    <img id="calves-a" src="/body/13.A-Calves.png">
                    <img id="calves-b" src="/body/13.B-Calves.png">
                    <img id="back-traps-a" src="/body/08.B-Traps.png">
                    <img id="back-traps-b" src="/body/08.C-Traps.png">
                    <img id="back-shoulders-a" src="/body/07.C-Deltoids.png">
                    <img id="back-shoulders-b" src="/body/07.D-Deltoids.png">
                    <img id="triceps-a" src="/body/09.A-Triceps.png">
                    <img id="triceps-b" src="/body/09.B-Triceps.png">
                    <img id="back-lats-a" src="/body/10.A-Lats.png">
                    <img id="back-lats-b" src="/body/10.B-Lats.png">
                    <img id="back-lower" src="/body/15.-Lower-Back.png">
                    <img id="back-forearms-a" src="/body/14.C-Forearms.png">
                    <img id="back-forearms-b" src="/body/14.D-Forearms.png">
                    <img id="back-glutes" src="/body/11.-Glutes.png">
                    <img id="back-hamstrings-a" src="/body/12.A-Hamstrings.png">
                    <img id="back-hamstrings-b" src="/body/12.B-Hamstrings.png">
                    <img id="back-calves-a" src="/body/13.C-Calves.png">
                    <img id="back-calves-b" src="/body/13.D-Calves.png">
                </div>
            </div>

            <div id="femalefigures" style="display: block;">
                <div id="mobile-muscle-map-female">
                    <img id="mobilebg-female" src="/body/female-mobilebg.png">
                    <img id="female-traps-a" src="/body/female-traps-A.png">
                    <img id="female-traps-b" src="/body/female-traps-B.png">
                    <img id="female-shoulders-a" src="/body/female-deltoids-A.png">
                    <img id="female-shoulders-b" src="/body/female-deltoids-B.png">
                    <img id="female-pecs" src="/body/female-pecs.png">
                    <img id="female-biceps-a" src="/body/female-biceps-A.png">
                    <img id="female-biceps-b" src="/body/female-biceps-B.png">
                    <img id="female-forearm-a" src="/body/female-forearms-A.png">
                    <img id="female-forearm-b" src="/body/female-forearms-B.png">
                    <img id="female-abdominals" src="/body/female-abdominals.png">
                    <img id="female-quads-a" src="/body/female-quads-A.png">
                    <img id="female-quads-b" src="/body/female-quads-B.png">
                    <img id="female-calves-a" src="/body/female-calves-A.png">
                    <img id="female-calves-b" src="/body/female-calves-B.png">
                    <img id="female-back-traps-a" src="/body/female-traps-C.png">
                    <img id="female-back-traps-b" src="/body/female-traps-D.png">
                    <img id="female-back-shoulders-a" src="/body/female-deltoids-C.png">
                    <img id="female-back-shoulders-b" src="/body/female-deltoids-D.png">
                    <img id="female-triceps-a" src="/body/female-triceps-A.png">
                    <img id="female-triceps-b" src="/body/female-triceps-B.png">
                    <img id="female-back-lats-a" src="/body/female-lats-A.png">
                    <img id="female-back-lats-b" src="/body/female-lats-B.png">
                    <img id="female-back-lower" src="/body/female-lowerback.png">
                    <img id="female-back-forearms-a" src="/body/female-forearms-C.png">
                    <img id="female-back-forearms-b" src="/body/female-forearms-D.png">
                    <img id="female-back-glutes" src="/body/female-glutes.png">
                    <img id="female-back-hamstrings-a" src="/body/female-hamstrings-A.png">
                    <img id="female-back-hamstrings-b" src="/body/female-hamstrings-B.png">
                    <img id="female-back-calves-a" src="/body/female-calves-C.png">
                    <img id="female-back-calves-b" src="/body/female-calves-D.png">
                </div>
    
                <div id="muscle-map-female">
                    <img id="background-female" src="/body/Female-Figures.png">
                    <img id="female-traps-a" src="/body/female-traps-A.png">
                    <img id="female-traps-b" src="/body/female-traps-B.png">
                    <img id="female-shoulders-a" src="/body/female-deltoids-A.png">
                    <img id="female-shoulders-b" src="/body/female-deltoids-B.png">
                    <img id="female-pecs" src="/body/female-pecs.png">
                    <img id="female-biceps-a" src="/body/female-biceps-A.png">
                    <img id="female-biceps-b" src="/body/female-biceps-B.png">
                    <img id="female-forearm-a" src="/body/female-forearms-A.png">
                    <img id="female-forearm-b" src="/body/female-forearms-B.png">
                    <img id="female-abdominals" src="/body/female-abdominals.png">
                    <img id="female-quads-a" src="/body/female-quads-A.png">
                    <img id="female-quads-b" src="/body/female-quads-B.png">
                    <img id="female-calves-a" src="/body/female-calves-A.png">
                    <img id="female-calves-b" src="/body/female-calves-B.png">
                    <img id="female-back-traps-a" src="/body/female-traps-C.png">
                    <img id="female-back-traps-b" src="/body/female-traps-D.png">
                    <img id="female-back-shoulders-a" src="/body/female-deltoids-C.png">
                    <img id="female-back-shoulders-b" src="/body/female-deltoids-D.png">
                    <img id="female-triceps-a" src="/body/female-triceps-A.png">
                    <img id="female-triceps-b" src="/body/female-triceps-B.png">
                    <img id="female-back-lats-a" src="/body/female-lats-A.png">
                    <img id="female-back-lats-b" src="/body/female-lats-B.png">
                    <img id="female-back-lower" src="/body/female-lowerback.png">
                    <img id="female-back-forearms-a" src="/body/female-forearms-C.png">
                    <img id="female-back-forearms-b" src="/body/female-forearms-D.png">
                    <img id="female-back-glutes" src="/body/female-glutes.png">
                    <img id="female-back-hamstrings-a" src="/body/female-hamstrings-A.png">
                    <img id="female-back-hamstrings-b" src="/body/female-hamstrings-B.png">
                    <img id="female-back-calves-a" src="/body/female-calves-C.png">
                    <img id="female-back-calves-b" src="/body/female-calves-D.png">
                </div>
            </div>
        </div>
    </div>
<!-- Body Ilustration and select area to work -->


    <main>

        <div class="contenedor seccion">


            <h2 class="titulo-producto">Cardio</h2>
            <div class="contenedor-exercicios">
                <?php while($Cardio = mysqli_fetch_assoc($resultado1)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Cardio['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            
                            <h3><?php echo $Cardio['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->


            <!-- separacao categoria -->
            <h2 class="titulo-producto">Aulas</h2>
            <div class="contenedor-exercicios">
                <?php while($Aulas = mysqli_fetch_assoc($resultado2)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Aulas['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            <h3><?php echo $Aulas['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->


            <!-- separacao categoria -->
            <h2 id="Peito" class="titulo-producto">Peito</h2>
            <div class="contenedor-exercicios">
                <?php while($Peito = mysqli_fetch_assoc($resultado3)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Peito['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            <h3><?php echo $Peito['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->


            <!-- separacao categoria -->
            <h2 id="Dorsais" class="titulo-producto">Dorsais</h2>
            <div class="contenedor-exercicios">
                <?php while($Dorsais = mysqli_fetch_assoc($resultado4)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Dorsais['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            <h3><?php echo $Dorsais['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->


            <!-- separacao categoria -->
            <h2 id="Hombros" class="titulo-producto">Hombros</h2>
            <div class="contenedor-exercicios">
                <?php while($Hombros = mysqli_fetch_assoc($resultado5)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Hombros['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            <h3><?php echo $Hombros['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->


            <!-- separacao categoria -->
            <h2 id="Trapecio" class="titulo-producto">Trapecio</h2>
            <div class="contenedor-exercicios">
                <?php while($Trapecio = mysqli_fetch_assoc($resultado6)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Trapecio['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            <h3><?php echo $Trapecio['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->


            <!-- separacao categoria -->
            <h2 id="Biceps" class="titulo-producto">Biceps</h2>
            <div class="contenedor-exercicios">
                <?php while($Biceps = mysqli_fetch_assoc($resultado7)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Biceps['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            <h3><?php echo $Biceps['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->


            <!-- separacao categoria -->
            <h2 id="Triceps" class="titulo-producto">Triceps</h2>
            <div class="contenedor-exercicios">
                <?php while($Triceps = mysqli_fetch_assoc($resultado8)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Triceps['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            <h3><?php echo $Triceps['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->


            <!-- separacao categoria -->
            <h2 id="Abdominales" class="titulo-producto">Abdominales</h2>
            <div class="contenedor-exercicios">
                <?php while($Abdominales = mysqli_fetch_assoc($resultado9)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Abdominales['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            <h3><?php echo $Abdominales['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->


            <!-- separacao categoria -->
            <h2 id="Lumbar" class="titulo-producto">Lumbar</h2>
            <div class="contenedor-exercicios">
                <?php while($Lumbar = mysqli_fetch_assoc($resultado10)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Lumbar['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            <h3><?php echo $Lumbar['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->


            <!-- separacao categoria -->
            <h2 id="Gluteus" class="titulo-producto">Gluteus</h2>
            <div class="contenedor-exercicios">
                <?php while($Gluteus = mysqli_fetch_assoc($resultado11)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Gluteus['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            <h3><?php echo $Gluteus['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->


            <!-- separacao categoria -->
            <h2 id="Pernas" class="titulo-producto">Pernas</h2>
            <div class="contenedor-exercicios">
                <?php while($Pernas = mysqli_fetch_assoc($resultado12)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Pernas['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            <h3><?php echo $Pernas['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->


            <!-- separacao categoria -->
            <h2 id="Gemeos" class="titulo-producto">Gemeos</h2>
            <div class="contenedor-exercicios">
                <?php while($Gemeos = mysqli_fetch_assoc($resultado13)): ?>
                    <!--producto 100%-->
                    <div class="anuncio tabla-precio">

                        <img class="imgEjercicios" loading="lazy" src="/imagenes/<?php echo $Gemeos['imagen']; ?>" alt="anuncio">

                        <div class="contenido-anuncio">
                            <h3><?php echo $Gemeos['titulo']; ?></h3>
                            <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                        </div> <!-- .contenido-anuncio -->
                    </div> <!-- .anuncio -->
                <?php endwhile; ?>
            </div> <!-- .contenedor exercicio -->

        </div><!-- .contenedor seccion -->

    </main>


<?php
    //cerrar la conexion
    mysqli_close($db);

    incluirTemplate('footer');
?>