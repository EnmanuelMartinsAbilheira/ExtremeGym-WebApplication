<?php
    //base de datos
    require '../../includes/config/database.php';
    conectarDb();

    // Arreglo con mensaje de errorres
    $errores = [];

    $dia_semana = '';
    $describcion_Dia = '';

    // ejecurtar el codigo despues de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $dia_semana = $_POST['dia_semana'];
        $describcion_Dia = $_POST['describcion_Dia'];

        if(!$dia_semana){
            $errores[] = "Dia da Semana Obligatorio";
        }
        if(!$describcion_Dia){
            $errores[] = "Informacao do Dia Obligatorio";
        }


        //revisar quel el array de errores este vacio
        if(empty($errores)){
            //insertare en la base de datos
            $query = " INSERT INTO DiasHorario (dia_semana, describcion_Dia ) VALUES ( '$dia_semana', '$describcion_Dia' ) ";

            $resultado = mysqli_query($db, $query);

            if($resultado){
                echo "insertando corractamente";
            }
        }
    }


    $navEffect = true;
    $inicio =false;
    require '../../includes/funciones.php';
    include '../../includes/templates/header.php' 
?>


    <main class="contenedor seccion">
        <h1>--Criar--</h1>

        <a href="/admin/" class="boton boton-verde">Voltar</a>

        <?php foreach($errores as $error): ?>

        <div class="alerta error">
            <?php echo $error; ?>
        </div>

        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/diasHorario/crear.php">

            <fieldset>
                <legend>Informacao da Horario</legend>

                <label for="titulo">Dia:</label>
                <input type="text" id="titulo" name="dia_semana" placeholder="Dia Semana" value="<?php echo $dia_semana; ?>">


                <label for="descripcion">Descrição:</label>
                <textarea type="text" name="describcion_Dia" id="descripcion" ><?php echo $describcion_Dia; ?></textarea>
            </fieldset>

            <input type="submit" value="Crear Producto" class="boton boton-verde">

        </form>
    </main>


<?php
    incluirTemplate('footer');
?>