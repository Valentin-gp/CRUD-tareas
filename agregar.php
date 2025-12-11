<?php
include __DIR__ . "/config.php";
include __DIR__ . '/includes/header.php';
?>

<h1 class="mb-4">Agregar Nueva Tarea</h1>

<form action="guardar.php" method="POST" class="needs-validation" novalidate>
    <div class="mb-3">
        <label for="titulo" class="form-label">Título <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
        <div class="invalid-feedback">
            Por favor ingresa el título de la tarea.
        </div>
    </div>

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre de la Tarea (opcional)</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="fecha_vencimiento" class="form-label">Fecha de Vencimiento</label>
        <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento">
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
</form>

<script>
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
