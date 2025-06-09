<?php

// Incluimos la clase base para controladores que manejan vistas
include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

// Importamos el servicio que buscará los comentarios en la base
use Src\Service\Comment\CommentFinderService;

final readonly class CommentGetController extends ViewController {

    private CommentFinderService $service;

    public function __construct() {
        // Instanciamos el servicio para usar sus métodos
        $this->service = new CommentFinderService();
        // Definimos la vista que vamos a mostrar (ojo que la vista debe existir)
        parent::__construct("Comment/list");
    }

    // Este método recibe el ID de la película/serie y busca sus comentarios
    public function start(int $entertainmentId): void {
        // Obtenemos la lista de comentarios para esa película
        $comments = $this->service->findByEntertainmentId($entertainmentId);

        // Llamamos a la vista pasando los comentarios para que los muestre
        parent::call([
            "comments" => $comments
        ]);
    }
}
