<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="Css/estilos.css">
</head>

<body class="body_inicio">
    <h1 class="h1_inicio"> AHHHH SOS RE TROLL XDD
        <?php
        if (isset($_SESSION['usuario'])) {
            echo $_SESSION['usuario'];
        }
        ?>
        JAJAJAJAJA

    </h1>
    <div class="containercerrar">
        <form action="Controlador/controlador_cerrar_sesion.php" method="get">
            <input type="submit" value="Cerrar sesión" name="enviar_cerrar_sesion" class="boton_envio">
        </form>
    </div>
</body>

</html>