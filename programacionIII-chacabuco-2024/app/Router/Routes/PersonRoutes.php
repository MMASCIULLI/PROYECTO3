<?php 

final readonly class PersonRoutes {
    public static function getRoutes(): array {
        return[
            [
                "name" => "person_get",
                "url" => "/persons",
                "controller" => "Person/PersonGetController.php",
                "method" => "GET",
                "parameters" => [
                    [
                        "name" => "id",
                        "type" => "int"
                    ]
                ]
            ],
            [
                "name" => "persons_get",
                "url" => "/persons",
                "controller" => "Person/PersonsGetController.php",
                "method" => "GET"
            ]
        ];
    } 
}