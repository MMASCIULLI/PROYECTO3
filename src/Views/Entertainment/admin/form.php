<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Incorporar nueva película o serie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">




<!--bootstrap--> 
<div class="container my-5">
    <h1 class="mb-4 text-center">Incorporar nueva película o serie</h1>

    <form method="POST" action="/entertainments" class="bg-white p-4 rounded shadow-sm">
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Película o serie" required>
        </div>

        <div class="mb-3">
            <label for="releaseDate" class="form-label">Fecha de lanzamiento</label>
            <input type="date" class="form-control" id="releaseDate" name="releaseDate" required>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="isFinal" name="isFinal">
            <label class="form-check-label" for="isFinal">¿Tiene final cerrado?</label>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la película o serie" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripción breve" required></textarea>
        </div>

        <div class="mb-3">
            <label for="categoryId" class="form-label">ID de categoría</label>
            <input type="number" class="form-control" id="categoryId" name="categoryId" placeholder="Ejemplo: 1" required>
        </div>

        <div class="mb-3">
            <label for="platformId" class="form-label">ID de plataforma</label>
            <input type="number" class="form-control" id="platformId" name="platformId" placeholder="Ejemplo: 2" required>
        </div>

         <div class="mb-3">
            <label for="image_url" class="form-label">Imagen</label>
            <input type="text" class="form-control" id="image_url" name="image_url" placeholder="inserte un link" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Guardar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
