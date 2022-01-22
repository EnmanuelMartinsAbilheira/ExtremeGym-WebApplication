<?php
    //base de datos
    require '../../includes/config/database.php';
    $db = conectarDb();

    // consultar para obtener las categorias productos
    $consulta = "SELECT * FROM category";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensaje de errorres
    $errores = [];

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $categoriaId = '';
    $creado = date('Y/m/d');

    // ejecurtar el codigo despues de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $categoriaId = $_POST['categoria'];

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

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        //revisar quel el array de errores este vacio
        if(empty($errores)){
            //insertare en la base de datos
            $query = " INSERT INTO productos (titulo, precio, descripcion, creado, categoriaId ) VALUES ( '$titulo', '$precio', '$descripcion', '$creado', '$categoriaId' ) ";

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

        <form class="formulario" method="POST" action="/admin/productos/crear.php">

            <fieldset>
                <legend>Informacao do Producto</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Producto" value="<?php echo $titulo; ?>">

                <label for="precio">Preço:</label>
                <input type="number" id="precio" name="precio" placeholder="Preço Producto" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png, image/webp">

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

            <input type="submit" value="Crear Producto" class="boton boton-verde">

        </form>
    </main>


<?php
    incluirTemplate('footer');
?>