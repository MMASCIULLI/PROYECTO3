<?php

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

use Src\Service\Entertainment\EntertainmentsSearcherService;

final readonly class EntertainmentsGetController extends ViewController {
    private EntertainmentsSearcherService $service;

    public function __construct() {
        // Asumiendo que el servicio EntertainmentsFinderService ya existe o lo vas a crear
        $this->service = new EntertainmentsSearcherService();
        parent::__construct("Entertainment/list"); // Esta es la vista que mostrará la lista
    }

    public function start(): void
    {
;        // Este método en el servicio debe devolver un array con todos los entretenimientos
        $entertainments = $this->service->search();

        $data = [
            "entertainments" => $entertainments
        ];
        parent::call($data);
    }
}













final readonly class DomainsGetController extends ViewController {
    private DomainsSearcherService $service;

    public function __construct() {
        $this->service = new DomainsSearcherService();
        parent::__construct('Domain/list');
    }

    public function start(): void
    {
        $domains = $this->service->search();

        $data = [
            "domains" => $domains
        ];

        parent::call($data);
    }
}