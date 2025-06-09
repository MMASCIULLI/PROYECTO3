<?php 
// Lo primero es el namespace
namespace Src\Service\Category;

use Src\Entity\Category\Category;
use Src\Model\Category\CategoryModel;

final readonly class CategoryFinderService {
    private CategoryModel $model; // El modelo que vamos a usar

    public function __construct() {
        $this->model = new CategoryModel(); // Instancia del modelo de categorías
    }

    public function find(int $id): Category {
        return $this->model->find($id); // Buscamos la categoría y la devolvemos
    }

    public function update(int $id, string $name): void {
        $this->model->update($name, $id); // Actualizamos la categoría
    }
}
