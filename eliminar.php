<?php
include __DIR__ . "/config.php";

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $conexion->query("DELETE FROM tareas WHERE id = $id");
}

header("Location: index.php");
exit;
?>

