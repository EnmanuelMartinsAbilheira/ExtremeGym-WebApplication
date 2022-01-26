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
    $consulta = "SELECT * FROM dias_horario WHERE id = ${id}";
    $resultado = mysqli_query($db, $consulta);
    $diasHorario = mysqli_fetch_assoc($resultado);


    // consultar para obtener las categorias productos
    $consulta = "SELECT * FROM dias_horario";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensaje de errorres
    $errores = [];

    $dia_semana = $diasHorario['dia_semana'] ?? '';
    $descripcion_dia = $diasHorario['descripcion_dia'] ?? '';

    // ejecurtar el codigo despues de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $dia_semana = mysqli_real_escape_string( $db, $_POST['dia_semana'] );
        $descripcion_dia = mysqli_real_escape_string( $db, $_POST['descripcion_dia'] );

        if(!$dia_semana){
            $errores[] = "Dia da Semana Obligatorio";
        }
        if(!$descripcion_dia){
            $errores[] = "Informacao do Dia Obligatorio";
        }


        //revisar quel el array de errores este vacio
        if(empty($errores)){
            //insertare en la base de datos
        $query = " UPDATE dias_horario SET dia_semana = '${dia_semana}', descripcion_dia = '${descripcion_dia}' WHERE id = ${id} ";

            $resultado = mysqli_query($db, $query);

            if($resultado){
                // redireccionar al usuario despues de crear producto
                header('Location: /admin');
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

        <form class="formulario" method="POST" >

            <fieldset>
                <legend>Informacao da Horario</legend>

                <label for="titulo">Dia:</label>
                <input type="text" id="titulo" name="dia_semana" placeholder="Dia Semana" value="<?php echo $dia_semana; ?>">


                <label for="descripcion">Descrição:</label>
                <textarea type="text" name="descripcion_dia" id="descripcion" ><?php echo $descripcion_dia; ?></textarea>
            </fieldset>

            <input type="submit" value="Actualizar Dia" class="boton boton-verde">

        </form>
    </main>


<?php
    incluirTemplate('footer');
?>