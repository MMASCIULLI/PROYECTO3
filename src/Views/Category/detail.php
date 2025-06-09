<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($data["category"]->name()) ?> | CineOn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">CineOn</a>
        <div class="navbar-nav">
            <a class="nav-link" href="/categories">Categorías</a>
            <a class="nav-link" href="/entertainments">Entretenimientos</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1><?= htmlspecialchars($data["category"]->name()) ?></h1>
    <p class="lead"><?= htmlspecialchars($data["category"]->description() ?? "Sin descripción disponible.") ?></p>

    <hr />

    <h2>Entretenimientos en esta categoría</h2>
    <?php if (!empty($data["entertainments"])): ?>
        <div class="row">
            <?php foreach ($data["entertainments"] as $entertainment): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="/entertainments/<?= htmlspecialchars($entertainment->id()) ?>" class="text-decoration-none text-dark">
                            <?php if (method_exists($entertainment, 'image') && $entertainment->image()): ?>
                                <img src="<?= htmlspecialchars($entertainment->image()) ?>" alt="<?= htmlspecialchars($entertainment->name()) ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                            <?php else: ?>
                                <img src="https://via.placeholder.com/300x200?text=Sin+imagen" class="card-img-top" alt="Sin imagen">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($entertainment->name()) ?></h5>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No hay entretenimientos disponibles para esta categoría.</p>
    <?php endif; ?>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    CineOn &copy; 2025
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
