
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="Css/estilos.css">
</head>

<body>
    <h1>Recuperar contraseña</h1>
    <div class="container">
        <form action="" method="POST" class="formulario_registro">
            <h2 class="titulo"> Nueva contraseña </h2>
            <?php
            include("Modelo/conexion_bd.php");
            include("Controlador/controlador_recuperar_password.php");
            ?>
            <div class="padre">
                <div class="correo">
                    <label for="correo"> Correo electrónico </label>
                    <input type="text" name="correo" placeholder="Correo electrónico" id="correo" required>
                </div>
                <div class="password">
                    <label for="nueva_password"> Nueva contraseña </label>
                    <input type="password" name="nueva_clave" placeholder="Nueva contraseña" id="nueva_password" required>
                </div>
                <div class="password">
                    <label for="confirmar_password"> Confirmar contraseña </label>
                    <input type="password" name="confirmar_clave" placeholder="Confirmar contraseña" id="confirmar_password" required>
                </div>
                <div class="cuenta">
                    <input type="submit" value="Cambiar contraseña" name="enviar_recuperar" class="boton_envio">
                    <p> ¿Ya recordaste tu contraseña? <a href="login.php"> Inicia sesión </a> </p>
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
