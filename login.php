<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Css/estilos.css">
</head>
<body>
    <h1>Inicio de sesión</h1>
    <div class="container">
        <form action="" method="POST" class="formulario_login">
            <h2 class="titulo"> Iniciar sesión </h2>
            <?php
            include("Modelo/conexion_bd.php");
            include("Controlador/controlador_iniciar_sesion.php");
            ?>
            <div class="padre">
                <div class="correo">
                    <label for="correo"> Correo electrónico </label>
                    <input type="text" name="correo" placeholder="Correo electrónico" id="correo" required>
                </div>
                <div class="password">
                    <label for="password"> Contraseña </label>
                    <input type="password" name="clave" placeholder="Contraseña" id="password" required>
                </div>
                <div class="cuenta">
                    <input type="submit" value="Iniciar sesión" name="enviar_login" class="boton_envio">
                    <p> ¿No tienes una cuenta? <a href="registro_usuario.php"> Regístrate </a> </p>
                    <p> ¿Olvidaste tu contraseña? <a href="recuperar_password.php"> Recupérala </a> </p>
                </div>
            </div>
        </form>
    </div>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>