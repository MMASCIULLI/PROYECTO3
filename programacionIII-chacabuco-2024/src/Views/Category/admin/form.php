

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Acá capturás los datos del formulario (por ejemplo, solo el nombre)
    $name = trim($_POST['name'] ?? '');

    // Aquí iría la lógica para guardar la categoría, ejemplo:
    // $categoryService->create($name);

    // Después de guardar, redirigís a la lista de categorías
    header('Location: /categories');
    exit;
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Incorporar nueva categoría</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container my-5">
    <h1 class="mb-4 text-center">Incorporar nueva categoría</h1>

    <form method="POST" action="/categories/create" class="bg-white p-4 rounded shadow-sm">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre de la categoría</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ejemplo: Acción" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Guardar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
