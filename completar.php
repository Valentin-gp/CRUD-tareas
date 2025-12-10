<?php
include "/etc/tareas_config/config.php";

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];

    $sql = "UPDATE tareas SET estado='completada' WHERE id=$id";

    if(!$conexion->query($sql)){
        die("Error SQL: " . $conexion->error);
    }
}

// Redirige al listado
header("Location: index.php");
exit;
?>

