<?php 

namespace Src\Model\Entertainment;

use DateTime;
use Src\Model\DatabaseModel; //para conectar a la base de datos. 
use Src\Entity\Entertainment\Entertainment; 

final readonly class EntertainmentModel extends DatabaseModel {
    //metodo de buscar uno solo find
    public function find(int $id): ?Entertainment //devuelve objeto de la entidad o nulo, nulo con el signo de pregunta lo ponemos. 
    {
        //realiza una consulta
        $query = <<<SELECT_QUERY
                    SELECT
                        E.id,
                        E.type,
                        E.releaseDate,
                        E.isFinal,
                        E.name,
                        E.description,
                        E.categoryId,
                        E.plataformId
                    FROM
                        entertainment E
                    WHERE 
                        E.id = :id
                    SELECT_QUERY; 


        $parameters = [
            "id" => $id
        ];

        $result = $this->primitiveQuery ($query, $parameters); //estoy en la infraestuctura, ahora tengo que hacer una funcion que agarre los prametros y los cree

        return $this->toEntertainment ($result[0] ?? null); //va a devolver un array con resultado, para tomar el valor del objeto que me interesa, tengo que tomar el valor del primer elemento. 
    }


    /** @return Entertainment[] */
    public function search(): array
    {
        $query = <<<SELECT_QUERY
                    SELECT
                        E.id,
                        E.type,
                        E.releaseDate,
                        E.isFinal,
                        E.name,
                        E.description,
                        E.categoryId,
                        E.plataformId,
                        E.image_url
                    FROM
                        entertainment E
                SELECT_QUERY;
        
        $primitiveResults = $this->primitiveQuery($query);

        $objectResults = [];

        foreach ($primitiveResults as $primitiveResult) {
            $objectResults[] = $this->toEntertainment($primitiveResult);
        }

        return $objectResults;
    }
    
    private function toEntertainment(?array $primitive): ?Entertainment  //recibe un array o nulo 
    {
        if ($primitive == null) {
            return null;
        }

        return new Entertainment ( 
            $primitive["id"] ?? 0,
            $primitive["type"] ?? '',
           new DateTime ($primitive["releaseDate"] ?? 'now'),
            $primitive["isFinal"] ?? false, //cuando es booleado va false 
            $primitive["name"] ?? '',
            $primitive["description"] ?? '',
            $primitive["categoryId"] ?? 0,
            $primitive["plataformId"] ?? 0,
            $primitive["image_url"] ?? '',
        );
    }

////////////////aca abajo es la funcion para insertar nuevas peli o series 

        public function insert(
            Entertainment $entretenimiento
            ): void {
            
                $query = <<<INSERT_QUERY
                INSERT INTO entertainment (
                    type, releaseDate, isFinal, name, description, categoryId, plataformId, image_url
                ) VALUES (
                    :type, :releaseDate, :isFinal, :name, :description, :categoryId, :plataformId, :image_url
                )
                INSERT_QUERY;

                $parameters = [
                    'type' => $entretenimiento->type(),
                    'releaseDate' => $entretenimiento->releaseDate()->format('Y-m-d '),
                    'isFinal' => $entretenimiento->isFinal()? 1 : 0,
                    'name' => $entretenimiento->name(),
                    'description' => $entretenimiento->description(),
                    'categoryId' => $entretenimiento->categoryId(),
                    'plataformId' => $entretenimiento->plataformId(),
                    'image_url' => $entretenimiento->image_url()

                ];


            $this->primitiveQuery($query, $parameters);


            ////////ahora voy a hacer la funcion para modificar las series o peli 

                
        }

           public function update(
            Entertainment $entretenimiento
            ): void {
            
                $query = <<<UPDATE_QUERY
                    UPDATE 
                        entertainment 
                    SET
                        type= :type,
                        releaseDate= :releaseDate,
                        isFinal= :isFinal,
                        name= :name,
                        description= :description,
                        categoryId= :categoryId,
                        plataformId= :plataformId,
                        image_url= :image_url
                    WHERE 
                        id=:id
                UPDATE_QUERY;

                $parameters = [
                    'type' => $entretenimiento->type(),
                    'releaseDate' => $entretenimiento->releaseDate()->format('Y-m-d '),
                    'isFinal' => $entretenimiento->isFinal()? 1 : 0,
                    'name' => $entretenimiento->name(),
                    'description' => $entretenimiento->description(),
                    'categoryId' => $entretenimiento->categoryId(),
                    'plataformId' => $entretenimiento->plataformId(),
                    'image_url' => $entretenimiento->image_url(),
                    'id'=> $entretenimiento->id()
                ];


            $this->primitiveQuery($query, $parameters);



}
}