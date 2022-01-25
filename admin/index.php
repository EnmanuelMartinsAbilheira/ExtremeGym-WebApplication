<?php

    //importar la conexion
    require '../includes/config/database.php';
    $db = conectarDb();

    //escribir el query Producto
    $query = "SELECT * FROM productos";
    //escribir el query Maquinas
    $query2 = "SELECT * FROM maquinas";
    //escribir el query dias_horario
    $query3 = "SELECT * FROM dias_horario";
    //escribir el query category
    $query4 = "SELECT * FROM category";

    //consultar la BD productos
    $resultadoConsulta = mysqli_query($db, $query);
    //consultar la BD maquinas
    $resultadoConsulta2 = mysqli_query($db, $query2);
    //consultar la BD dias_horario
    $resultadoConsulta3 = mysqli_query($db, $query3);
    //consultar la BD category
    $resultadoConsulta4 = mysqli_query($db, $query4);

    //muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    //incluir templates header
    $navEffect = true;
    $inicio =false;
    require '../includes/funciones.php';
    include '../includes/templates/header.php' 
?>


    <main class="contenedor seccion">
        <h1>-- Gestor --</h1>

        <?php if($resultado == 1): ?>
            <p class="alerta exito">Producto Registrado com Sucesso</p>
        <?php endif; ?>

        <?php if($resultado == 2): ?>
            <p class="alerta exito">Maquina Registrada com Sucesso</p>
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
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="#" class="boton-amarillo-block">Actualizar</a>
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
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="#" class="boton-amarillo-block">Actualizar</a>
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
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="#" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>



        <!-- Gestor das Categorias Productos -->
        <h2>-- Gestor das Categorias --</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>categoria</th>
                    <th>Açao</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los resultados -->
                <?php while($category = mysqli_fetch_assoc($resultadoConsulta4)): ?>
                <tr>
                    <td><?php echo $category['id']; ?> </td>
                    <td><?php echo $category['categoria']; ?> </td>
                    <td>
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="#" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </main>


<?php

    // Cerrar la conexion
    mysqli_close($db);

    incluirTemplate('footer');
?>