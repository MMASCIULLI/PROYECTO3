<?php

use Src\Service\Entertainment\EntertainmentCreateService;


final readonly class EntertainmentPostController {
    private EntertainmentCreateService $service;

    public function __construct() {
        $this->service = new EntertainmentCreateService();
    }

    public function start(): void 
    {
        $type = $_POST["type"];
        $releaseDate = new \DateTime ($_POST["releaseDate"]); 
        $isFinal = isset($_POST["isFinal"]) ? 1 : 0;
        $name = $_POST["name"];
        $description = $_POST["description"];

        $categoryId = (int) $_POST["categoryId"];
        $plataformId = (int) $_POST["platformId"];
        $image_url= (string) $_POST["image_url"];

        $this->service->create($type, 
        $releaseDate, 
        $isFinal, 
        $name, 
        $description, 
        $categoryId, 
        $plataformId,
        $image_url);

        header("Location: /entertainments");
        exit;
    }

    
}
