

 <!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar pelicula o serie</title>
</head>
<body>
       <form method="POST" action="/entertainment">
        <label for="tipo">tipo: </label><br>
        <select id="tipo" name="tipo" required>
            <option value="">Selecciona tipo</option>
            <option value="pelicula">Película</option>
            <option value="serie">Serie</option>
        </select><br><br>

        <label for="fecha">Fecha de lanzamiento:</label><br>
        <input type="date" id="fecha" name="fecha" required><br><br>

         <label>
            <input type="checkbox" name="tiene_final" value="1">
            Tiene final
        </label><br><br>

         <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="40" required></textarea><br><br>

         <label for="genero">Género:</label><br>
        <select id="genero" name="genero" required>
            <option value="">-- Selecciona género --</option>
            <option value="entretenimiento">Entretenimiento</option>
            <option value="drama">Drama</option>
            <option value="comedia">Comedia</option>
            <option value="accion">Acción</option>
            <option value="terror">Terror</option>
            <option value="suspenso">Suspenso</option>
            <option value="ciencia_ficcion">Ciencia Ficción</option>
            <option value="romance">Romance</option>
            <option value="animacion">Animación</option>
            <option value="documental">Documental</option>
        </select><br><br>

        <label for="link">Link plataforma:</label><br>
        <input type="url" id="link" name="link" placeholder="https://..." required><br><br>

        <input type="submit" value="Guardar">
        </form>
    
</body>
</html>
 

</head>
<body>

 
