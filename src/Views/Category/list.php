<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Categorías</title>
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
      cursor: pointer;
      text-align: center;
      padding: 2rem 1rem;
      font-size: 1.5rem;
      font-weight: bold;
    }
    .card:hover {
      transform: scale(1.05);
      background-color: #444;
    }
    .container-title {
      padding: 2rem 0;
      text-align: center;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">CineOn</a>
    <div class="navbar-nav">
      <a class="nav-link active" href="/categories">Categorías</a>
      <a class="nav-link" href="/entertainments">Inicio</a>
    </div>
  </div>
</nav>

<div class="container-title">
  <h1>📚 Lista de Categorías</h1>
  <p>Haz clic en una categoría para ver detalles</p>
</div>

<div class="container">
  <div class="row g-4">
    <?php foreach ($data["categories"] as $category): ?>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="/categories/<?= htmlspecialchars($category->id()) ?>" class="text-decoration-none text-white">
          <div class="card">
            <?= htmlspecialchars($category->name()) ?>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
  CineOn &copy; 2025
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
