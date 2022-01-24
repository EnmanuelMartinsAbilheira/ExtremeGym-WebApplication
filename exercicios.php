<?php
    $navEffect = true;
    $inicio =false;
    require 'includes/funciones.php';
    include 'includes/templates/header.php' 
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

                <!--producto 100%-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/zumub.webp" type="image/webp">
                        <source srcset="build/img/zumub.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/zumub.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>100% WHEY</h3>
                        <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->

                <!--producto 100%-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/zumub.webp" type="image/webp">
                        <source srcset="build/img/zumub.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/zumub.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>100% WHEY</h3>
                        <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->

                <!--producto 100%-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/zumub.webp" type="image/webp">
                        <source srcset="build/img/zumub.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/zumub.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>100% WHEY</h3>
                        <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->

                <!--producto 100%-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/zumub.webp" type="image/webp">
                        <source srcset="build/img/zumub.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/zumub.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>100% WHEY</h3>
                        <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->

                <!--producto 100%-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/zumub.webp" type="image/webp">
                        <source srcset="build/img/zumub.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/zumub.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>100% WHEY</h3>
                        <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->


            </div> <!-- .conteniedor-exercicios -->


            <!-- separacao categoria -->

            <h2 class="titulo-producto">Peito</h2>
            <div class="contenedor-exercicios">
                
                <!--producto c4-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/c4.webp" type="image/webp">
                        <source srcset="build/img/c4.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/c4.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>C4 Cafeine</h3>
                        <!--<p>Mais energia para todo el entrenamiento</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio --> 


                <!--producto 100%-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/zumub.webp" type="image/webp">
                        <source srcset="build/img/zumub.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/zumub.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>100% WHEY</h3>
                        <!--<p>Sabor banana para un mejor post entrenamiento</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->



            </div> <!-- .conteniedor-exercicios -->


            <!-- separacao categoria -->

            <h2 class="titulo-producto">Dorsais</h2>
            <div class="contenedor-exercicios">
                
                <!--producto ABE-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/ABE.webp" type="image/webp">
                        <source srcset="build/img/ABE.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/ABE.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>All Black Everiting</h3>
                        <!--<p>ABE é um pre treino que ayuda a ter toda a energia vitamina e suplementos alimentarios que podas ter</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->


            </div> <!-- .conteniedor-exercicios -->


            <!-- separacao categoria -->

            <h2 class="titulo-producto">Biceps</h2>
            <div class="contenedor-exercicios">
                
                <!--producto ABE-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/ABE.webp" type="image/webp">
                        <source srcset="build/img/ABE.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/ABE.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>All Black Everiting</h3>
                        <!--<p>ABE é um pre treino que ayuda a ter toda a energia vitamina e suplementos alimentarios que podas ter</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->


            </div> <!-- .conteniedor-exercicios -->


            <!-- separacao categoria -->

            <h2 class="titulo-producto">Triceps</h2>
            <div class="contenedor-exercicios">
                
                <!--producto ABE-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/ABE.webp" type="image/webp">
                        <source srcset="build/img/ABE.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/ABE.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>All Black Everiting</h3>
                        <!--<p>ABE é um pre treino que ayuda a ter toda a energia vitamina e suplementos alimentarios que podas ter</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->


            </div> <!-- .conteniedor-exercicios -->


            <!-- separacao categoria -->

            <h2 class="titulo-producto">Abdominal</h2>
            <div class="contenedor-exercicios">
                
                <!--producto ABE-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/ABE.webp" type="image/webp">
                        <source srcset="build/img/ABE.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/ABE.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>All Black Everiting</h3>
                        <!--<p>ABE é um pre treino que ayuda a ter toda a energia vitamina e suplementos alimentarios que podas ter</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->


            </div> <!-- .conteniedor-exercicios -->


            <!-- separacao categoria -->

            <h2 class="titulo-producto">Lumbar</h2>
            <div class="contenedor-exercicios">
                
                <!--producto ABE-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/ABE.webp" type="image/webp">
                        <source srcset="build/img/ABE.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/ABE.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>All Black Everiting</h3>
                        <!--<p>ABE é um pre treino que ayuda a ter toda a energia vitamina e suplementos alimentarios que podas ter</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->


            </div> <!-- .conteniedor-exercicios -->

            <!-- separacao categoria -->

            <h2 class="titulo-producto">Pernas</h2>
            <div class="contenedor-exercicios">
                
                <!--producto ABE-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/ABE.webp" type="image/webp">
                        <source srcset="build/img/ABE.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/ABE.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>All Black Everiting</h3>
                        <!--<p>ABE é um pre treino que ayuda a ter toda a energia vitamina e suplementos alimentarios que podas ter</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->


            </div> <!-- .conteniedor-exercicios -->


            <!-- separacao categoria -->

            <h2 class="titulo-producto">Gemeos</h2>
            <div class="contenedor-exercicios">
                
                <!--producto ABE-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/ABE.webp" type="image/webp">
                        <source srcset="build/img/ABE.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/ABE.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>All Black Everiting</h3>
                        <!--<p>ABE é um pre treino que ayuda a ter toda a energia vitamina e suplementos alimentarios que podas ter</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->


            </div> <!-- .conteniedor-exercicios -->


            <!-- separacao categoria -->

            <h2 class="titulo-producto">Aulas</h2>
            <div class="contenedor-exercicios">
                
                <!--producto ABE-->
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/ABE.webp" type="image/webp">
                        <source srcset="build/img/ABE.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/ABE.jpg" alt="anuncio">
                    </picture>
                

                    <div class="contenido-anuncio">
                        <h3>All Black Everiting</h3>
                        <!--<p>ABE é um pre treino que ayuda a ter toda a energia vitamina e suplementos alimentarios que podas ter</p>-->

                    </div> <!-- .contenido-anuncio -->
                </div> <!-- .anuncio -->


            </div> <!-- .conteniedor-exercicios -->


        </div>

    </main>


<?php
    incluirTemplate('footer');
?>