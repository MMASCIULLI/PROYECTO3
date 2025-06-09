<?php

final readonly class CategoryRoutes {
  public static function getRoutes(): array {
    return [
      // Listar todas las categorías
      [
        "name" => "category_list",
        "url" => "/categories",
        "controller" => "Category/CategoriesGetController.php",
        "method" => "GET",
        "parameters" => [],
        "className" => "Src\\Controller\\Category\\CategoriesGetController"
      ],

      // Mostrar formulario para crear categoría
      [
        "name" => "category_create_form",
        "url" => "/categories/create",
        "controller" => "Category/CategoryCreateController.php",
        "method" => "GET",
        "parameters" => [],
        "className" => "Src\\Controller\\Category\\CategoryCreateController"
      ],

      // Guardar nueva categoría (POST)
      [
        "name" => "category_create",
        "url" => "/categories/create",
        "controller" => "Category/CategoryCreateController.php",
        "method" => "POST",
        "parameters" => [],
        "className" => "Src\\Controller\\Category\\CategoryCreateController"
      ],

      // Mostrar formulario para editar categoría (con id)
      [
        "name" => "category_update_form",
        "url" => "/categories/update",
        "controller" => "Category/CategoryUpdateController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ],
        "className" => "Src\\Controller\\Category\\CategoryUpdateController"
      ],

      // Guardar actualización categoría (POST con id)
      [
        "name" => "category_update",
        "url" => "/categories/update",
        "controller" => "Category/CategoryUpdateController.php",
        "method" => "POST",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ],
        "className" => "Src\\Controller\\Category\\CategoryUpdateController"
      ],
    ];
  }
}
