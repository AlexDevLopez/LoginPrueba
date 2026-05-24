<?php
    if (!empty($_POST['enviar_login'])) {
        if (empty($_POST['correo']) or empty($_POST['clave'])) {
            echo "<script>alert('Uno de los campos esta vacio');</script>";
        } else {
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            try {
                $sql = $conexion -> query("SELECT * FROM usuarios WHERE email ='$correo' AND password ='$clave'");

                if ($sql && $sql->num_rows > 0) {
                    echo "<script>alert('Usuario autenticado');</script>";
                    header("Location: inicio.php");
                } else {
                    echo "<script>alert('Usuario no autenticado');</script>";
                }
            } catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    echo "<script>alert('El correo electrónico no está registrado');</script>";
                } else {
                    echo "<script>alert('Error en el sistema: " . addslashes($e->getMessage()) . "');</script>";
                }
            }
            

            
        }
    }
?>