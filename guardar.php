<?php
include "/etc/tareas_config/config.php";

if(isset($_POST['titulo'])){
    $titulo = $conexion->real_escape_string($_POST['titulo']);
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $descripcion = $conexion->real_escape_string($_POST['descripcion']);
    $fecha_vencimiento = $_POST['fecha_vencimiento'] ?: null;

    $sql = "INSERT INTO tareas (titulo, nombre, descripcion, fecha_vencimiento) 
            VALUES ('$titulo', '$nombre', '$descripcion', " . ($fecha_vencimiento ? "'$fecha_vencimiento'" : "NULL") . ")";

    if(!$conexion->query($sql)){
        die("Error SQL: " . $conexion->error);
    }
}

header("Location: index.php");
exit;
?>



