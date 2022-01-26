<?php

    //validar la URL sea un ID valido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('location: /admin');
    }


    //base de datos
    require '../../includes/config/database.php';
    $db = conectarDb();

    //obtener los datos de la propiedad
    $consulta = "SELECT * FROM maquinas WHERE id = ${id}";
    $resultado = mysqli_query($db, $consulta);
    $maquina = mysqli_fetch_assoc($resultado);

    // consultar para obtener las categorias productos
    $consulta = "SELECT * FROM ejercicios";
    $resultado = mysqli_query($db, $consulta);


    // Arreglo con mensaje de errorres
    $errores = [];

    $titulo = $maquina['titulo'] ?? '';
    $ejercicioId = $maquina['ejercicioId'] ?? '';
    $imagenMaquina = $maquina['imagen'] ?? '';

    // ejecurtar el codigo despues de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $titulo = mysqli_real_escape_string( $db, $_POST['titulo'] );
        $ejercicioId = mysqli_real_escape_string( $db, $_POST['categoria'] );

        // asignar files hacia una variable
        $imagen = $_FILES['imagen'];
        
        if(!$titulo){
            $errores[] = "Nome da Maquiina é Obligatorio";
        }
        if(!$ejercicioId){
            $errores[] = "Todas as Maquinas tem a sua Categoria";
        }


        //validar por tamaño (3mb de tamaño imagen)
        $medida = 1000 * 3000;

        if($imagen['size'] > $medida){
            $errores[] = 'La imagen es muy pesada';
        } 

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
                unlink($carpetaImagenes . $maquina['imagen']);

                //generar nombre unico
                $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

                //subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

            }else{
                $nombreImagen = $maquina['imagen'];
            }



            //insertare en la base de datos
            $query = " UPDATE maquinas SET titulo = '${titulo}', imagen = '${nombreImagen}', ejercicioId = ${ejercicioId} WHERE id = ${id} ";

            $resultado = mysqli_query($db, $query);

            if($resultado){
                // redireccionar al usuario despues de crear producto
                header('Location: /admin?resultado=4');
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
                <legend>Informacao da Maquina</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Producto" value="<?php echo $titulo; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png, image/webp" name="imagen">

                <img src="/imagenes/<?php echo $imagenMaquina; ?>" class="imagen-small" >


            </fieldset>

            <fieldset>
                <legend>Categoria Exercicio</legend>

                <select name="categoria">
                    <option value="">--Escolher--</option>
                    <?php while($row = mysqli_fetch_assoc($resultado) ) : ?>

                        <option <?php echo $ejercicioId === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>"> <?php echo $row['categoria']; ?></option>

                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Actualizar Maquina" class="boton boton-verde">

        </form>
    </main>


<?php
    incluirTemplate('footer');
?>