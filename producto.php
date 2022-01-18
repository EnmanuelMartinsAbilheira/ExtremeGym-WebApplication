<?php
    $navEffect = true;
    $inicio =false;
    require 'includes/funciones.php';
    include 'includes/templates/header.php' 
?>


    <main class="contenedor seccion contenido-centrado">
        <h1>All Black Everitinhg</h1>

        <picture>
            <source srcset="build/img/ABE.webp" type="image/webp">
            <source srcset="build/img/ABE.jpeg" type="image/jpeg">
            <img loading="lazy" src="build/img/ABE.jpeg" alt="imagen pre treino">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$25,99</p>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, eum maxime laboriosam fugiat expedita nulla, ullam culpa autem voluptatibus itaque provident enim? Ullam aut dolores atque ut? Architecto, repellat nesciunt!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, eum maxime laboriosam fugiat expedita nulla, ullam culpa autem voluptatibus itaque provident enim? Ullam aut dolores atque ut? Architecto, repellat nesciunt!</p>
        </div>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion navEffect">
                <a class="navEffect-a" href="nosotros.php"><span>Nosotros</span></a>
                <a class="navEffect-a" href="productos.php"><span>Productos</span></a>
                <a class="navEffect-a" href="imagenes.php"><span>Imagenes</span></a>
                <a class="navEffect-a" href="exercicios.php"><span>Exercicios</span></a>
                <a class="navEffect-a" href="contacto.php"><span>Contacto</span></a>
            </nav>
        </div>

        <p class="copyright">Todos los Derechos Reservados 2021@copyright</p>
    </footer>
    
    <script src="build/js/bundle.min.js"></script>

</body>
</html>