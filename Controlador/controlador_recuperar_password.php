<?php
    if (!empty($_POST['enviar_recuperar'])) {
        if (empty($_POST['correo']) or empty($_POST['nueva_clave']) or empty($_POST['confirmar_clave'])) {
            echo "<script>alert('Uno de los campos esta vacio');</script>";
        } else {
            $correo = $_POST['correo'];
            $nueva_clave = $_POST['nueva_clave'];
            $confirmar_clave = $_POST['confirmar_clave'];

            
            if ($nueva_clave !== $confirmar_clave) {
                echo "<script>alert('Las contraseñas no coinciden');</script>";
            } else {
                try {
                    
                    $verificar = $conexion->query("SELECT * FROM usuarios WHERE email = '$correo'");

                    if ($verificar && $verificar->num_rows > 0) {
                        
                        $sql = $conexion->query("UPDATE usuarios SET password = '$nueva_clave' WHERE email = '$correo'");

                        if ($sql) {
                            echo "<script>alert('Contraseña actualizada exitosamente'); window.location.href='login.php';</script>";
                        } else {
                            echo "<script>alert('Error al actualizar la contraseña');</script>";
                        }
                    } else {
                        echo "<script>alert('El correo electrónico no está registrado');</script>";
                    }
                } catch (mysqli_sql_exception $e) {
                    echo "<script>alert('Error en la base de datos: " . addslashes($e->getMessage()) . "');</script>";
                }
            }
        }
    }
?>
