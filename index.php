<?php
include "/etc/tareas_config/config.php";
include __DIR__ . '/includes/header.php';
?>

<h1 class="mb-4">Lista de Tareas</h1>
<a href="agregar.php" class="btn btn-success mb-3">Agregar Tarea</a>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Tarea</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $resultado = $conexion->query("SELECT * FROM tareas ORDER BY id DESC");
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$fila['id']}</td>";
            echo "<td>" . htmlspecialchars($fila['titulo']);
            if(!empty($fila['nombre'])){
                echo " (" . htmlspecialchars($fila['nombre']) . ")";
            }
            echo "</td>";

            // Estado con badge
            if($fila['estado'] == 'pendiente'){
                echo "<td><span class='badge bg-warning'>Pendiente</span></td>";
            } else {
                echo "<td><span class='badge bg-success'>Completada</span></td>";
            }

            // Acciones: solo mostrar "Completar" si está pendiente
            echo "<td>";
            if($fila['estado'] == 'pendiente'){
                echo "<a href='completar.php?id={$fila['id']}' class='btn btn-primary btn-sm me-1'>Completar</a>";
            }
            echo "<a href='eliminar.php?id={$fila['id']}' class='btn btn-danger btn-sm'>Eliminar</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php include __DIR__ . '/includes/footer.php'; ?>
