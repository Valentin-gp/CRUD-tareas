<?php
$host = "TU_HOST";
$usuario = "TU_USUARIO";
$contrasena = "TU_PASSWORD";
$bd = "TU_BASE_DE_DATOS";

$conexion = new mysqli($host, $usuario, $contrasena, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
