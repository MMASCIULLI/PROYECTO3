<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["entertainment"]->name(); ?> | CineOn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">CineOn</a>
        <div class="navbar-nav">
            <a class="nav-link" href="#">Inicio</a>
            <a class="nav-link" href="#">Categorías</a>
        </div>
    </div>
</nav>


<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1><?php echo $data["entertainment"]->name(); ?></h1>
            <p class="lead"><?php echo $data["entertainment"]->description(); ?></p>
            <p><strong>Plataforma:</strong> <?php echo $data['plataform']->name(); ?></p>
            <button class="btn btn-primary">Ver ahora en HBO</button>
        </div>
        <div class="col-md-6">
            <?php if (method_exists($data["entertainment"], 'image') && $data["entertainment"]->image()): ?>
                <img src="<?php echo $data["entertainment"]->image(); ?>" alt="Imagen" class="img-fluid rounded shadow">
            <?php endif; ?>
        </div>
    </div>
</div>


<div class="container my-5">
    <h2>Trailers</h2>
    <div class="row">
        <div class="col-md-6">
            
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/ID_DEL_VIDEO" title="Trailer" allowfullscreen></iframe>
            </div>
        </div>
       
    </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    CineOn &copy; 2025
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
