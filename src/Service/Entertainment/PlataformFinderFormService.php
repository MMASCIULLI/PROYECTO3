<?php 

namespace Src\Service\Entertainment;

use Src\Model\Entertainment\PlataformModel;
use Src\Entity\Entertainment\Plataform; // ✅ También necesario

final readonly class PlataformFinderFormService {
    private PlataformModel $model;

    public function __construct() {
        $this->model = new PlataformModel();
    }

    public function find(int $id): ?Plataform {
        $plataform =$this->model->find($id);

        return $plataform;
    }
}
