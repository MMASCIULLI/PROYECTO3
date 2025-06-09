<?php

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

use Src\Service\Category\CategoriesSearcherService;

final readonly class CategoriesGetController extends ViewController {
    private CategoriesSearcherService $service;

    public function __construct() {
        $this->service = new CategoriesSearcherService();
        parent::__construct("Category/list"); // Vista para la lista de categorías
    }

    public function start(): void
    {
        // Este método en el servicio debe devolver un array con todas las categorías
        $categories = $this->service->search();

        $data = [
            "categories" => $categories
        ];

        parent::call($data);
    }
}
