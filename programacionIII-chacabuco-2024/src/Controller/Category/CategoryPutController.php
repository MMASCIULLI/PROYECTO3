<?php

use Src\Service\Category\CategoryUpdaterService;

final readonly class CategoryPutController {
    private CategoryUpdaterService $service;

    public function __construct() {
        $this->service = new CategoryUpdaterService();
    }

    public function start(int $id): void 
    {
        $name = $_POST["name"];

        $this->service->update($name, $id);

        header("Location: /categories");
        exit;
    }
}
