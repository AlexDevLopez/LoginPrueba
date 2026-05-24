<?php
    if (!empty($_POST['enviar'])) {
        if (empty($_POST['nombre']) or empty($_POST['correo']) or empty($_POST['clave'])) {
            echo "<script>alert('Uno de los campos esta vacio');</script>";
        } else {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            try {
                $sql = $conexion -> query("INSERT INTO usuarios(name,email,password) VALUES('$nombre','$correo','$clave')");

                if ($sql == 1) {
                    echo "<script>alert('Usuario registrado exitosamente');</script>";
                } else {
                    echo "<script>alert('Usuario no registrado');</script>";
                }
            } catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    echo "<script>alert('El correo electrónico ya está registrado');</script>";
                } else {
                    echo "<script>alert('Error en la base de datos: " . addslashes($e->getMessage()) . "');</script>";
                }
            }
            

            
        }
    }
?>