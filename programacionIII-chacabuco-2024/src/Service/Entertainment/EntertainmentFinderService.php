<?php 
 //lo primero que hago es el namespace

 namespace Src\Service\Entertainment;

use Src\Entity\Entertainment\Entertainment;
use Src\Model\Entertainment\EntertainmentModel;

final readonly class EntertainmentFinderService {
    private EntertainmentModel $model; //validar que el atributo sea de este tipo 

    public function __construct() {
        $this->model = new EntertainmentModel ();  //voy a poder utilizar todas las funciones de entertainmen 

    }


    public function find  (int $id): Entertainment  //voy a recibir un id del controlador, voy a busacr un entretenimiento y ese entretenimiento se lo devuelvo al controlador. 
    {

        $entertainment = $this->model->find($id);
        return $entertainment;
    
    }

        //funcion para que ande el update
    public function update(int $id, string $type, string $releaseDate, int $isFinal, string $name, string $description, int $categoryId, int $platformId): void
    {
        $this->model->update($id, $type, $releaseDate, $isFinal, $name, $description, $categoryId, $platformId);
    }
}
