<?php

use Src\Service\Category\CategoryFinderService;
use Src\Service\Category\CategoryUpdaterService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class CategoryUpdateController extends ViewController {
    private CategoryFinderService $finderService;
    private CategoryUpdaterService $updaterService;

    public function __construct() {
        $this->finderService = new CategoryFinderService();
        $this->updaterService = new CategoryUpdaterService();
        parent::__construct('Category/admin/update_form');
    }

    public function start(?int $id = null): void 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // GET - mostrar formulario con datos actuales
            if (!$id) {
                echo "Falta el ID para actualizar";
                return;
            }

            $category = $this->finderService->find($id);
            if (!$category) {
                echo "No se encontró la categoría";
                return;
            }

            $data = ["category" => $category];
            parent::call($data);

        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // POST - procesar update
            $id = $_POST['id'] ?? null;
            if (!$id) {
                echo "Falta el ID para actualizar";
                return;
            }

            $name = $_POST['name'] ?? '';

            $this->updaterService->update($name, $id);

            // Redirigir a la lista después de actualizar
            header("Location: /categories");
            exit();
        }
    }
}
