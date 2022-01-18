<?php
    $navEffect = true;
    $inicio =false;
    require '../../includes/funciones.php';
    include '../../includes/templates/header.php' 
?>


    <main class="contenedor seccion">
        <h1>--Criar--</h1>

        <a href="/admin/" class="boton boton-verde">Voltar</a>

        <form class="formulario" action="">

            <fieldset>
                <legend>Informacao do Producto</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo Producto">

                <label for="precio">Preço:</label>
                <input type="number" id="precio" placeholder="Preço Producto">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png, image/webp">

                <label for="descripcion">Descrição:</label>
                <input type="file" id="descripcion" >

            </fieldset>

            <fieldset>
                <legend>Categoria Producto</legend>

                <select>
                    <option value="1"></option>
                    <option value="2"></option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Producto" class="boton boton-verde">

        </form>
    </main>


<?php
    incluirTemplate('footer');
?>