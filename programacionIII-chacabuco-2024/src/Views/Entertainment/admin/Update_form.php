<html>
    <body>
        <h1>Editar la pelicula o serie</h1>
        <form method="POST" action="/entertainments/<?php echo $data['entertainment']->id(); ?>">
            <input 
                value="<?php echo $data['entertainment']->type(); ?>" 
                placeholder="Tipo (película o serie)" 
                type="text" 
                name="type"
            >

            <input 
                value="<?php echo $data['entertainment']->releaseDate()->format('Y-m-d') ?>" 
                placeholder="Fecha de lanzamiento" 
                type="date" 
                name="releaseDate"
            >

            <label>
                <input 
                    type="checkbox" 
                    name="isFinal" 
                    <?php if ($data['entertainment']->isFinal()) echo 'checked'; ?>
                > ¿Está finalizado?
            </label>

            <input 
                value="<?php echo $data['entertainment']->name(); ?>" 
                placeholder="Nombre" 
                type="text" 
                name="name"
            >

            <input 
                value="<?php echo $data['entertainment']->description(); ?>" 
                placeholder="Descripción" 
                type="text" 
                name="description"
            >

            <input 
                value="<?php echo $data['entertainment']->categoryId(); ?>" 
                placeholder="ID de categoría" 
                type="number" 
                name="categoryId"
            >

            <input 
                value="<?php echo $data['entertainment']->plataformId(); ?>" 
                placeholder="ID de plataforma" 
                type="number" 
                name="plataformId"
            >
             <input 
                value="<?php echo $data['entertainment']->image_url(); ?>" 
                placeholder="Inserte un link" 
                type="text" 
                name="image_url"
            >


            

            <input type="submit" value="Actualizar">
        </form>
    </body>
</html>
