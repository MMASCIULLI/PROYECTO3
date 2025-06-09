<?php 

use Src\Service\Entertainment\EntertainmentFinderService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class EntertainmentUpdateController extends ViewController {
    private EntertainmentFinderService $service;

    public function __construct() {
        $this->service = new EntertainmentFinderService();
        parent::__construct('Entertainment/admin/update_form');
    }

    public function start(?int $id = null): void 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // GET - mostrar formulario con datos actuales
            if (!$id) {
                echo "Falta el ID para actualizar";
                return;
            }
            $entertainment = $this->service->find($id);
            if (!$entertainment) {
                echo "No se encontró el registro";
                return;
            }
            $data = ["entertainment" => $entertainment];
            parent::call($data);

        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // POST - procesar update
            $id = $_POST['id'] ?? null;
            if (!$id) {
                echo "Falta el ID para actualizar";
                return;
            }

            $type = $_POST['type'] ?? '';
            $releaseDate = $_POST['releaseDate'] ?? '';
            $isFinal = isset($_POST['isFinal']) ? 1 : 0;
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $categoryId = $_POST['categoryId'] ?? null;
            $platformId = $_POST['platformId'] ?? null;

            $this->service->update($id, $type, $releaseDate, $isFinal, $name, $description, $categoryId, $platformId);

            // Redirigir a lista después de actualizar
            header("Location: /entertainments");
            exit();
        }
    }
}
