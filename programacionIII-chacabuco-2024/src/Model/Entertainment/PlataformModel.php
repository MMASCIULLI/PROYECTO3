<?php 

namespace Src\Model\Entertainment;

use DateTime;
use Src\Model\DatabaseModel; 
use Src\Entity\Entertainment\Entertainment;
use Src\Entity\Entertainment\Plataform; // 

final readonly class PlataformModel extends DatabaseModel {
    public function find(int $id): ?Plataform
    {
        $query = <<<SELECT_QUERY
            SELECT
                id,
                name
            FROM
                plataform
            WHERE 
                id = :id
        SELECT_QUERY;

        $parameters = ["id" => $id];

        $result = $this->primitiveQuery($query, $parameters);

        return $this->toPlataform($result[0] ?? null);
    }

    private function toPlataform(?array $primitive): ?Plataform
    {
        if ($primitive === null) {
            return null;
        }

        return new Plataform( 
            $primitive["id"] ?? 0,
            $primitive["name"] ?? ''
        );
    }
}
