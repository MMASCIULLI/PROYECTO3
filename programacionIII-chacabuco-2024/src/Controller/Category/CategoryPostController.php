<?php

use Src\Service\Category\CategoryCreateService;

final readonly class CategoryPostController {
    private CategoryCreateService $service;

    public function __construct() {
        $this->service = new CategoryCreateService();
    }

    public function start(): void 
    {
        $name = $_POST["name"];

        $this->service->create($name);

        header("Location: /categories");
        exit;
    }
}
