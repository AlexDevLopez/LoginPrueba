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
        session_start();
        if (isset($_SESSION['usuario'])) {
            echo $_SESSION['usuario'];
        }
        ?>
        JAJAJAJAJA
    </h1>
</body>

</html>