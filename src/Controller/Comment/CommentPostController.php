<?php

// Importamos el servicio que va a crear el comentario en la base de datos
use Src\Service\Comment\CommentCreateService;

final readonly class CommentPostController {
    private CommentCreateService $service;

    public function __construct() {
        $this->service = new CommentCreateService();
    }

    public function start(): void 
    {
        $mensaje= trim($_POST["mensaje"]);
        $id_entertainment=(int) $_POST["id_entertainment"];
        $calificacion=(float) $_POST["calificacion"];
        // Capturamos los datos que vienen del formulario
        $id_user = (int) $_POST["id_user"]; // El ID del usuario que comenta
        $fecha_comment = date ("Y-m-d"); //año, mes dia 

        // se llama al sservicio para crear el comentario
        $this->service->create(
            $mensaje,
            $id_entertainment,
            $calificacion,
            $id_user,
            $fecha_comment
         );

        // se redirige a la vista. 
        header("Location: /entertainments");
        exit;
    }
}
