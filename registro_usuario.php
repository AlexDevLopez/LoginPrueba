
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Login SQL</title>
    <link rel="stylesheet" href="Css/estilos.css">
</head>

<body>
    <h1>Registro de usuarios</h1>
    <div class="container">
        <form action="" method="POST" class="formulario_registro">
            <h2 class="titulo"> Registrar </h2>
            <?php
            include("Modelo/conexion_bd.php");
            include("Controlador/controlador_registrar_usuario.php");
            ?>
            <div class="padre">
                <div class="nombre">
                    <label for="nombre"> Nombre completo </label>
                    <input type="text" name="nombre" placeholder="Nombre completo" id="nombre" required>
                </div>
                <div class="correo">
                    <label for="correo"> Correo electrónico </label>
                    <input type="text" name="correo" placeholder="Correo electrónico" id="correo" required>
                </div>
                <div class="password">
                    <label for="password"> Contraseña </label>
                    <input type="password" name="clave" placeholder="Contraseña" id="password" required>
                </div>
                <div class="cuenta">
                    <input type="submit" value="Registrarse" name="enviar" class="boton_envio">
                    <p> ¿Ya tienes una cuenta? <a href="login.php"> Inicia sesión </a> </p>
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