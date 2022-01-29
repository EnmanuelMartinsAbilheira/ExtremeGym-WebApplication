<?php
    /* con esto es para dar la permision si tiene login entra si no al index */
    require '../includes/funciones.php';
    $auth = estaAutenticado();

    if(!$auth){
        header('Location: /');
    }

    /* con esto es para dar la permision si tiene login entra si no al index */

    //importar la conexion
    require '../includes/config/database.php';
    $db = conectarDb();

    //escribir el query Producto
    $query = "SELECT * FROM productos";
    //escribir el query Maquinas
    $query2 = "SELECT * FROM maquinas";
    //escribir el query dias_horario
    $query3 = "SELECT * FROM dias_horario";
    // //escribir el query category
    // $query4 = "SELECT * FROM category";

    //consultar la BD productos
    $resultadoConsulta = mysqli_query($db, $query);
    //consultar la BD maquinas
    $resultadoConsulta2 = mysqli_query($db, $query2);
    //consultar la BD dias_horario
    $resultadoConsulta3 = mysqli_query($db, $query3);
    // //consultar la BD category
    // $resultadoConsulta4 = mysqli_query($db, $query4);

    //muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;


    //Eliminar productos
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id1'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){

            //Elimina el archivoi
            $query = "SELECT imagen FROM productos WHERE id = ${id}";

            $resultado = mysqli_query($db, $query);
            $producto = mysqli_fetch_assoc($resultado);

            unlink('../imagenes/' . $producto['imagen']);
            //eliminar lo seleccionado
            $query = "DELETE FROM productos WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);

            if($resultado){
                header('Location: /admin?resultado=5');
            }
        }
    }

    //Eliminar maquinas
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id2'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){

            //Elimina el archivoi
            $query = "SELECT imagen FROM maquinas WHERE id = ${id}";

            $resultado = mysqli_query($db, $query);
            $maquina = mysqli_fetch_assoc($resultado);

            unlink('../imagenes/' . $maquina['imagen']);
            //eliminar lo seleccionado
            $query = "DELETE FROM maquinas WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);

            if($resultado){
                header('Location: /admin?resultado=6');
            }
        }
    }

    //Eliminar Dias_horario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id3'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){

            //eliminar lo seleccionado
            $query = "DELETE FROM dias_horario WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);

            if($resultado){
                header('Location: /admin?resultado=7');
            }
        }
    }
    
   

    //incluir templates header
    $navEffect = true;
    $inicio =false;
    include '../includes/templates/header.php';
?>


    <main class="contenedor seccion">
        <h1>-- Gestor --</h1>

        <?php if($resultado == 1): ?>
            <p class="alerta exito">Producto Registrado com Sucesso</p>
        <?php elseif($resultado == 2): ?>
            <p class="alerta exito">Maquina Registrada com Sucesso</p>
        <?php elseif($resultado == 3): ?>
            <p class="alerta exito">Producto Actualizado com Sucesso</p>
        <?php elseif($resultado == 4): ?>
            <p class="alerta exito">Maquina Actualizado com Sucesso</p>
        <?php elseif($resultado == 5): ?>
            <p class="alerta exito">Producto Eliminado com Sucesso</p>
        <?php elseif($resultado == 6): ?>
            <p class="alerta exito">Maquina Eliminado com Sucesso</p>
        <?php elseif($resultado == 7): ?>
            <p class="alerta exito">Dia e Horario Eliminado com Sucesso</p>
        
        <?php endif; ?>

        <a href="/admin/productos/crear.php" class="boton boton-verde">Novo Producto</a>

        <a href="/admin/maquinas/crear.php" class="boton boton-verde">Novo Maquina</a>

        <a href="/admin/diasHorario/crear.php" class="boton boton-verde">Novo Horario</a>
        
        <!-- Gestor de Productos -->
        <h2>-- Gestor de Productos --</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Valor</th>
                    <th>Açao</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los resultados -->
                <?php while($producto = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td><?php echo $producto['id']; ?> </td>
                    <td><?php echo $producto['titulo']; ?> </td>
                    <td> <img src="/imagenes/<?php echo $producto['imagen']; ?>" class="imagen-tabla"> </td>
                    <td>€ <?php echo $producto['precio']; ?> </td>
                    <td>
                        <form method="POST" class="w-100" action="">
                        
                            <input type="hidden" name="id1" value="<?php echo $producto['id']; ?>">

                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/admin/productos/actualizar.php?id=<?php echo $producto['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>


        <!-- Gestor de Maquinas e Exercicios -->
        <h2>-- Gestor de Maquinas e Exercicios --</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Açao</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los resultados -->
                <?php while($maquina = mysqli_fetch_assoc($resultadoConsulta2)): ?>
                <tr>
                    <td><?php echo $maquina['id']; ?> </td>
                    <td><?php echo $maquina['titulo']; ?> </td>
                    <td> <img src="/imagenes/<?php echo $maquina['imagen']; ?>" class="imagen-tabla"> </td>
                    <td>
                        <form method="POST" class="w-100" action="">
                        
                            <input type="hidden" name="id2" value="<?php echo $maquina['id']; ?>">

                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/admin/maquinas/actualizar.php?id=<?php echo $maquina['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>


        <!-- Gestor dos Dias e Horario -->
        <h2>-- Gestor dos Dias --</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Dia da Semana</th>
                    <th>Descripcao do Dia</th>
                    <th>Açao</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los resultados -->
                <?php while($dias_horario = mysqli_fetch_assoc($resultadoConsulta3)): ?>
                <tr>
                    <td><?php echo $dias_horario['id']; ?> </td>
                    <td><?php echo $dias_horario['dia_semana']; ?> </td>
                    <td><?php echo $dias_horario['descripcion_dia']; ?> </td>
                    <td>
                        <form method="POST" class="w-100" action="">
                        
                            <input type="hidden" name="id3" value="<?php echo $maquina['id']; ?>">

                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/admin/diasHorario/actualizar.php?id=<?php echo $dias_horario['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>


        <!-- Gestor das Categorias Productos -->


    </main>


<?php

    // Cerrar la conexion
    mysqli_close($db);

    incluirTemplate('footer');
?>