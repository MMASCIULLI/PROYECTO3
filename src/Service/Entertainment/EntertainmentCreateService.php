<?php 

declare(strict_types = 1);

namespace Src\Service\Entertainment;

use Src\Model\Entertainment\EntertainmentModel;
use Src\Entity\Entertainment\Entertainment;
use Datatime;

final readonly class EntertainmentCreateService {

    private EntertainmentModel $model;

    public function __construct() 
    {
        $this->model = new EntertainmentModel();
    }

    public function create(
    string $type, 
    \DateTime $releaseDate,
    bool $isFinal,
    string $name, 
    string $description, 
    int $categoryId, 
    int $plataformId,
    string $image_url
): void {
    $entertainment = Entertainment::create(
        $type,
        $releaseDate,
        $isFinal,
        $name,
        $description,
        $categoryId,
        $plataformId,
        $image_url
    );


    $this->model->insert($entertainment);
}
}
