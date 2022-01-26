<?php

    //validar la URL sea un ID valido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /admin');
    }


    //base de datos
    require '../../includes/config/database.php';
    $db = conectarDb();

    //obtener los datos de la propiedad
    $consulta = "SELECT * FROM productos WHERE id = ${id}";
    $resultado = mysqli_query($db, $consulta);
    $producto = mysqli_fetch_assoc($resultado);



    // consultar para obtener las categorias productos
    $consulta = "SELECT * FROM category";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensaje de errorres
    $errores = [];

    $titulo = $producto['titulo'] ?? '';
    $precio = $producto['precio'] ?? '';
    $descripcion = $producto['descripcion'] ?? '';
    $categoriaId = $producto['categoriaId'] ?? '';
    $imagenpropiedad = $producto['imagen'] ?? '';

    // ejecurtar el codigo despues de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        /* 
            //sanitizar
            $titulo = filter_var($titulo, FILTER_SANITIZE_NUMBER_FLOAT);
            
            //validar
            $resultado = filter_var($titulo, FILTER_VALIDATE_INT);
        */

        $titulo = mysqli_real_escape_string( $db, $_POST['titulo'] );
        $precio = mysqli_real_escape_string( $db, $_POST['precio'] );
        $descripcion = mysqli_real_escape_string( $db, $_POST['descripcion'] );
        $categoriaId = mysqli_real_escape_string( $db, $_POST['categoria'] );
        $creado = date('Y/m/d');

        // asignar files hacia una variable
        $imagen = $_FILES['imagen'];
        

        if(!$titulo){
            $errores[] = "Titulo do Producto Obligatorio";
        }
        if(!$precio){
            $errores[] = "Valor do Producto Obligatorio";
        }
        if(!$descripcion){
            $errores[] = "Descripcao do Producto Obligatorio";
        }
        if(!$categoriaId){
            $errores[] = "Categoria do Producto Obligatorio";
        }


        //validar por tamaño (3mb de tamaño imagen)
        $medida = 1000 * 3000;

        if($imagen['size'] > $medida){
            $errores[] = 'La imagen es muy pesada';
        } 

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        //revisar quel el array de errores este vacio
        if(empty($errores)){

            //crear una carpeta
            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            $nombreImagen = '';

            /** Subida de Archivos **/
            if($imagen['name']) {
                //eliminar la imagen previa
                unlink($carpetaImagenes . $producto['imagen']);

                //generar nombre unico
                $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

                //subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

            }else{
                $nombreImagen = $producto['imagen'];
            }



            //insertare en la base de datos
            $query = " UPDATE productos SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}', descripcion = '${descripcion}', categoriaId = ${categoriaId} WHERE id = ${id} ";
            
            $resultado = mysqli_query($db, $query);

            if($resultado){
                // redireccionar al usuario despues de crear producto
                header('Location: /admin?resultado=3');
            }            
        }

    }

    $navEffect = true;
    $inicio =false;
    require '../../includes/funciones.php';
    include '../../includes/templates/header.php';
?>


    <main class="contenedor seccion">
        <h1>--Actualizar--</h1>

        <a href="/admin/" class="boton boton-verde">Voltar</a>

        <?php foreach($errores as $error): ?>

        <div class="alerta error">
            <?php echo $error; ?>
        </div>

        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">

            <fieldset>
                <legend>Informacao do Producto</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Producto" value="<?php echo $titulo; ?>">

                <label for="precio">Preço:</label>
                <input type="number" id="precio" name="precio" placeholder="Preço Producto" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png, image/webp" name="imagen">


                <img src="/imagenes/<?php echo $imagenpropiedad; ?>" class="imagen-small" >

                <label for="descripcion">Descrição:</label>
                <textarea type="text" id="descripcion" name="descripcion" ><?php echo $descripcion; ?></textarea>

            </fieldset>

            <fieldset>
                <legend>Categoria Producto</legend>

                <select name="categoria">
                    <option value="">--Escolher--</option>
                    <?php while($row = mysqli_fetch_assoc($resultado) ) : ?>

                        <option <?php echo $categoriaId === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>"> <?php echo $row['categoria']; ?></option>

                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Actualizar Producto" class="boton boton-verde">

        </form>
    </main>


<?php
    incluirTemplate('footer');
?>