<?php

namespace Src\Model\Category;

use Src\Model\DatabaseModel;
use Src\Entity\Category\Category;

final readonly class CategoryModel extends DatabaseModel {

    public function find(int $id): ?Category {
        $query = <<<SELECT_QUERY
            SELECT
                C.id,
                C.name
            FROM
                categories C
            WHERE
                C.id = :id
            SELECT_QUERY;

        $parameters = [
            "id" => $id
        ];

        $result = $this->primitiveQuery($query, $parameters);

        return $this->toCategory($result[0] ?? null);
    }

    /** @return Category[] */
    public function search(): array {
        $query = <<<SELECT_QUERY
            SELECT
                C.id,
                C.name
            FROM
                categories C
            SELECT_QUERY;

        $primitiveResults = $this->primitiveQuery($query);

        $objectResults = [];

        foreach ($primitiveResults as $primitiveResult) {
            $objectResults[] = $this->toCategory($primitiveResult);
        }

        return $objectResults;
    }

    private function toCategory(?array $primitive): ?Category {
        if ($primitive === null) {
            return null;
        }

        return new Category(
            $primitive["id"] ?? 0,
            $primitive["name"] ?? ''
        );
    }

    public function insert(Category $category): void {
        $query = <<<INSERT_QUERY
            INSERT INTO categories (name)
            VALUES (:name)
            INSERT_QUERY;

        $parameters = [
            "name" => $category->name()
        ];

        $this->primitiveQuery($query, $parameters);
    }

    public function update(string $name, int $id): void {
        $query = <<<UPDATE_QUERY
            UPDATE categories
            SET name = :name
            WHERE id = :id
            UPDATE_QUERY;

        $parameters = [
            "name" => $name,
            "id" => $id
        ];

        $this->primitiveQuery($query, $parameters);
    }
}
