<?php 

include_once "Route.php";
include_once "Router.php";

function startRouter(): Router 
{
    $routes = [];

    include_once "Routes/DomainRoutes.php";
    include_once "Routes/PersonRoutes.php";


    include_once "Routes/EntertainmentRoutes.php";
    $routes=array_merge ($routes, EntertainmentRoutes:: getRoutes());
    
    $routes = array_merge($routes, DomainRoutes::getRoutes(), PersonRoutes::getRoutes());

    include_once "Routes/AdminRoutes.php";
    $routes=array_merge ($routes, AdminRoutes:: getRoutes());

    include_once "Routes/CategoryRoutes.php";

    $routes = array_merge($routes, CategoryRoutes::getRoutes());



    $routesClass = [];
    foreach ($routes as $route) {
        $routesClass[] = Route::fromArray($route);
    }

    return new Router($routesClass);
}