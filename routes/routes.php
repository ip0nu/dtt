<?php

/** @var Bramus\Router\Router $router */

// Define routes here
$router->get('/api/v1/facility/{id}', App\Controllers\api\v1\FacilityController::class . '@SingleItemById');
$router->get('/api/v1/facilities/{page}', App\Controllers\api\v1\FacilityController::class . '@pageList');

$router->get('/api/v1/tag/{id}', App\Controllers\api\v1\TagController::class . '@SingleItemById');
$router->get('/api/v1/tags/{page}', App\Controllers\api\v1\TagController::class . '@pageList');
//$router->get('/', App\Controllers\IndexController::class . '@test');
