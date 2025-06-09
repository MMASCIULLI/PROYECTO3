<?php

use Src\Service\Entertainment\EntertainmentUpdaterService;

final readonly class EntertainmentPutController {
    private EntertainmentUpdaterService $service;

    public function __construct() {
        $this->service = new EntertainmentUpdaterService();
    }

       public function start(int $id): void 
    {
        $type = $_POST["type"] ?? '';
        $releaseDate = new \DateTime($_POST["releaseDate"] ?? 'now');
        $isFinal = isset($_POST["isFinal"]) ? 1 : 0; 
        $name = $_POST["name"] ?? '';
        $description = $_POST["description"] ?? '';
        $categoryId = (int) ($_POST["categoryId"] ?? 0);
        $plataformId = (int) ($_POST["plataformId"] ?? 0);
        $image_url= $_POST["image_url"] ?? '';


        $this->service->update( $id,$type, $releaseDate, $isFinal, $name, $description, $categoryId, $plataformId, $image_url);

        header("Location: /entertainments");
        die;
    }
}
