<?php 

final readonly class EntertainmentRoutes {
  public static function getRoutes(): array {
    return [
      [
        "name" => "entertainment_get",
        "url" => "/entertainments",
        "controller" => "Entertainment/EntertainmentGetController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
      ],

      [
        "name" => "entertainment_list",
        "url" => "/entertainments",
        "controller" => "Entertainment/EntertainmentsGetController.php",
        "method" => "GET",
        "parameters" => [], // <- SIN ID
        "className" => "Src\\Controller\\Entertainment\\EntertainmentsGetController"
      ],

      [
        "name" => "entertainment_get_create",
        "url" => "/admin/entertainments/create",
        "controller" => "Entertainment/EntertainmentCreateController.php",
        "method" => "GET",
        "parameters" => []
      ],

      [
        "name" => "entertainment_create",
        "url" => "/entertainments",
        "controller" => "Entertainment/EntertainmentPostController.php",
        "method" => "POST",
        "parameters" => []
      ],
///////////////////////////////////

      [
        "name" => "entertainment_get_update",
        "url" => "admin/entertainments/update",
        "controller" => "Entertainment/EntertainmentUpdateController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ],
        "className" => "Src\\Controller\\Entertainment\\EntertainmentUpdateController"
      ],

/////////////////////////////////

      [
        "name" => "entertainment_update",
        "url" => "/entertainments",
        "controller" => "Entertainment/EntertainmentPutController.php",
        "method" => "POST",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ],
        "className" => "Src\\Controller\\Entertainment\\EntertainmentPutController"
      ],
    
    ];
  }
}