<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cartelera de Entretenimientos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #111;
      color: white;
    }
    .card {
      transition: transform 0.2s ease;
      border: none;
      background-color: #222;
      height: 100%;
    }
    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
    }
    .card img {
      height: 350px;
      object-fit: cover;
    }
    .container-title {
      padding: 2rem 0;
      text-align: center;
    }
    .empty-state {
      min-height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">CineOn</a>

    <div class="navbar-nav">
      <a class="nav-link active" href="">Inicio</a>

      <!-- Menú desplegable de categorías -->
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="categoriasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categorías
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="categoriasDropdown">
          <li><a class="dropdown-item" href="/entertainments">Todas</a></li>
          <li><a class="dropdown-item" href="?categoria=Acción_id=4">Acción</a></li>
          <li><a class="dropdown-item" href="?categoria=Comedia_id=3">Comedia</a></li>
          <li><a class="dropdown-item" href="?categoria=Drama">Drama</a></li>
          <li><a class="dropdown-item" href="?categoria=Entretenimiento">Entretenimiento</a></li>
          <li><a class="dropdown-item" href="?categoria=Terror">Terror</a></li>
          <li><a class="dropdown-item" href="?categoria=Suspenso">Suspenso</a></li>
          <li><a class="dropdown-item" href="?categoria=Ciencia_ficcion">Ciencia Ficción</a></li>
          <li><a class="dropdown-item" href="?categoria=Romance">Romance</a></li>
          <li><a class="dropdown-item" href="?categoria=Animacion">Animación</a></li>
          <li><a class="dropdown-item" href="?categoria=Documental">Documental</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container-title">
  <h1>🎬 Cartelera de Películas y Series</h1>
  <p>Haz clic en una portada para ver más detalles</p>
</div>

<div class="container">
  <?php if (!empty($data["entertainments"])): ?>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
      <?php foreach ($data["entertainments"] as $entertainment): ?>
        <div class="col">
          <a href="/entertainments/<?= htmlspecialchars($entertainment->id()) ?>" class="text-decoration-none text-white">
            <div class="card h-100">
              <?php if (method_exists($entertainment, 'image_url') && $entertainment->image_url()): ?>
                <img src="<?= htmlspecialchars($entertainment->image_url()) ?>" class="card-img-top" alt="<?= htmlspecialchars($entertainment->name()) ?>">
              <?php else: ?>
                <img src="https://via.placeholder.com/300x450?text=Sin+imagen" class="card-img-top" alt="Portada no disponible">
              <?php endif; ?>
              <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($entertainment->name()) ?></h5>
                <?php if (method_exists($entertainment, 'type')): ?>
                  <p class="card-text text-muted"><?= htmlspecialchars($entertainment->type()) ?></p>
                <?php endif; ?>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <div class="empty-state">
      <div class="text-center">
        <h3>No se encontraron resultados</h3>
        <p class="text-muted">No hay películas o series disponibles en este momento</p>
      </div>
    </div>
  <?php endif; ?>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
  CineOn &copy; 2025
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>