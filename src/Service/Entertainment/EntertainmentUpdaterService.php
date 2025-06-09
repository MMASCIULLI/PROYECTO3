<?php 

namespace Src\Service\Entertainment;

use Src\Model\Entertainment\EntertainmentModel;
use Src\Entity\Entertainment\Entertainment;
use DateTime;

final readonly class EntertainmentUpdaterService {

    private EntertainmentModel $model;

    private EntertainmentFinderService $finder;

    public function __construct() 
    {
        $this->model = new EntertainmentModel();
        $this->finder = new EntertainmentFinderService();
    }

    public function update( int $id, string $type, DateTime $releaseDate, int $isFinal, string $name, string $description, int $categoryId, int $plataformId, string $image_url):void 
    { 
        $entertainment = $this->finder->find($id);
        $entertainment->modify($type, $releaseDate, $isFinal, $name, $description, $categoryId, $plataformId, $image_url);
        $entertainment = $this->model->update($entertainment);
       
    }
                
}
            


       