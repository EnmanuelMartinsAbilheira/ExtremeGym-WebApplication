<?php
    //base de datos
    require '../../includes/config/database.php';
    conectarDb();

    // Arreglo con mensaje de errorres
    $errores = [];

    $tituloMaquina = '';
    $categoriaMaquina = '';

    // ejecurtar el codigo despues de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $tituloMaquina = $_POST['titulo'];
        $categoriaMaquina = $_POST['categoria'];

        if(!$tituloMaquina){
            $errores[] = "Nome da Maquiina é Obligatorio";
        }
        if(!$categoriaMaquina){
            $errores[] = "Todas as Maquinas tem a sua Categoria";
        }


        //revisar quel el array de errores este vacio
        if(empty($errores)){
            //insertare en la base de datos
            $query = " INSERT INTO Maquinas (tituloMaquina, categoriaMaquina ) VALUES ( '$tituloMaquina', '$categoriaMaquina' ) ";

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

        <form class="formulario" method="POST" action="/admin/maquinas/crear.php">
            <fieldset>
                <legend>Informacao da Maquina</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Producto" value="<?php echo $tituloMaquina; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png, image/webp">

            </fieldset>

            <fieldset>
                <legend>Categoria Exercicio</legend>

                <select name="categoria">
                    <option value="">--Escolher--</option>
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