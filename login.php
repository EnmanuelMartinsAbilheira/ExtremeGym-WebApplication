<?php

    require 'includes/config/database.php';
    $db = conectarDb();

    $errores = [];

    //autenticar el usuario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));

        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email){
            $errores[] = "o Email Nao é Valido Nao podes Facer Login";
        }
        if(!$password){
            $errores[] = "o Password Nao é Valido Nao podes Facer Login";
        }

        if(empty($errores)){
            //revisar si el usuario existe 
            $query = "SELECT * FROM usuarios WHERE email = '${email}' ";
            $resultado = mysqli_query($db, $query);

            if($resultado->num_rows){
                //revisa si el passworsd es corroecto
                $usuario = mysqli_fetch_assoc($resultado);

                //verificar si el passwords es correcto o no 
                $auth = password_verify($password, $usuario['password']);

                if($auth){
                    //el usuarioo esta autenticado
                    session_start();

                    //llenar el arreglo de la session
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;
                    header('Location: /admin');

                }else{
                    $errores[] = "O Password nao esta certo";
                }

            }else{
                $errores[] = "O Usuario do Email e Password nao existe";
            }

        }

    }

    //header
    $navEffect = true;
    $inicio =false;
    require 'includes/funciones.php';
    include 'includes/templates/header.php' ;
?>


    <main class="contenedor seccion contenido-centrado">
        <h1>--Iniciar Seccion--</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario">
            <fieldset>
                <legend>Email e Password</legend>

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="O teu Email" id="email" required>

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="A tua Password" id="password" require>

            </fieldset>
            <input type="submit" value="Iniciar Login" class="boton boton-verde">
        </form>

    </main>


<?php
    incluirTemplate('footer');
?>