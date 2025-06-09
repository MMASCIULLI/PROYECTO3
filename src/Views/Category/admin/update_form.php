<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Aquí procesás la actualización (supongamos que ya la hiciste)

    // Después redirigís a la lista de categorías:
    header('Location: /categories');
    exit;
}
?>
<html>
    <body>
        <h1>Editar categoría</h1>
        <form method="POST" action="">
            <input 
                value="<?php echo htmlspecialchars($data['category']->name()); ?>" 
                placeholder="Nombre de la categoría" 
                type="text" 
                name="name"
                required
            >
            <input type="submit" value="Actualizar">
        </form>
    </body>
</html>
