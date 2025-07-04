<?php 

declare(strict_types=1);

namespace Src\Service\Category;

use Src\Model\Category\CategoryModel;
use Src\Entity\Category\Category;

final readonly class CategoryUpdaterService {

    private CategoryModel $model;
    private CategoryFinderService $finder;

    public function __construct() {
        $this->model = new CategoryModel();
        $this->finder = new CategoryFinderService();
    }

    public function update(
        int $id,
        string $name
    ): void {
        // Primero buscamos la categoría existente
        $category = $this->finder->find($id);
        // Llamamos al método para actualizar el nombre (en la entidad)
        $category->modify($name);
        // Finalmente actualizamos en la base de datos
        $this->model->update($category);
    }
}
