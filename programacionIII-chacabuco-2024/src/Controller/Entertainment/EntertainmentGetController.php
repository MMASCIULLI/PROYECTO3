<?php
// Los controladores solo usan la capa SERVICE correspondiente

use Src\Service\Entertainment\EntertainmentFinderService;
use Src\Service\Entertainment\PlataformFinderFormService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class EntertainmentGetController extends ViewController {
    private EntertainmentFinderService $service;
    private PlataformFinderFormService $plataformService;

    public function __construct() {
        $this->service = new EntertainmentFinderService();
        $this->plataformService = new PlataformFinderFormService();
        parent::__construct("Entertainment/detail");
    }

    public function start(int $id): void {
        $entertainment = $this->service->find($id);
        // Usamos categoryId() porque en la entidad no existe plataformId()
        $plataform = $this->plataformService->find($entertainment->plataformId());
        
        $data = [
            "entertainment" => $entertainment,
            "plataform" => $plataform
        ];

        parent::call($data);
    }
}
