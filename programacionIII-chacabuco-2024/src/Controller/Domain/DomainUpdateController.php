<?php 

use Src\Service\Domain\DomainFinderService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class DomainUpdateController extends ViewController {
    private DomainFinderService $service;

    public function __construct() {
        $this->service = new DomainFinderService();
        parent::__construct('Domain/admin/update_form');
    }

    public function start(int $id): void 
    {
        $domain = $this->service->find($id);
        
        $data = [
            "domain" => $domain,
        ];

        parent::call($data);
    }
}

//unico cambio nombre de la clase y la ruta. 
