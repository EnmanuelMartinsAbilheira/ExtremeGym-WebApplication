<?php
    $navEffect = true;
    $inicio =false;
    require 'includes/funciones.php';
    include 'includes/templates/header.php' ;
?>

    <main class="contenedor seccion contenido-centrado">
        <!-- <h1>Se tens alguma duvida Contactanos</h1>
        <picture>
            <source srcset="build/img/imagescontacto.webp" type="image/webp">
            <source srcset="build/img/imagescontacto.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/imagescontacto.jpg" alt="imagen contacto">
        </picture> -->

        <h2>Escolha a forma en la que deseja contactarnos</h2>

        <form class="formulario">
                <ul class="ulContacto">
                    <li class="liContacto"><a href="https://www.facebook.com/Extremefit"><i class="fab aContacto fa-facebook"></i></a></li>
                    <li class="liContacto"><a href="https://www.instagram.com/extreme.gym.fit01/?hl=es"><i class="fab aContacto fa-instagram"></i></a></li>
<!--                     <li class="liContacto"><a href="mailto:extremegymfit.bcl@gmail.com"></a><i class="far aContacto fa-envelope"></i></a></li>
 -->                <li class="liContacto"><a href="https://wa.me/351964066330?text=Extreme %20 Gym,%20¿cómo %20posso%20ajudar-lo?%20Muito Obrigado por Entrar en comunicacao"><i class="aContacto fab fa-whatsapp"></i></a></li>
                    <li class="liContacto"><a href="https://www.google.com/maps/place/Extreme+Gym+Fit/@41.5366671,-8.6207853,17z/data=!3m2!4b1!5s0xd2452357eded54f:0xfe7a27a009851042!4m5!3m4!1s0xd2452357ee82b0b:0xce6fb463a7bdc446!8m2!3d41.5366671!4d-8.6185913"><i class="fas aContacto fa-map-marker-alt"></i></a></li>
                </ul>
        </form>

    </main>


<?php
    incluirTemplate('footer');
?>