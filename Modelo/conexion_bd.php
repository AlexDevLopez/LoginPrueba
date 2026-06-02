<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "ecommerce";

$conexion = new mysqli($host, $user, $password, $database);
$conexion->set_charset("utf8mb4");

if ($conexion->connect_error) {
    echo "Conexión fallida" . $conexion->connect_error;
    exit;
}
