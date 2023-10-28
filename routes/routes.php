<?php

/** @var Bramus\Router\Router $router */

// Define routes here
$router->get('/api/v1/facility/{id}', App\Controllers\api\v1\FacilityController::class . '@SingleItemById');
$router->get('/api/v1/facilities/{page}/{limit}', App\Controllers\api\v1\FacilityController::class . '@pageList');

$router->get('/api/v1/tag/{id}', App\Controllers\api\v1\TagController::class . '@SingleItemById');
$router->get('/api/v1/tags/{page}/{limit}', App\Controllers\api\v1\TagController::class . '@pageList');

$router->get('/api/v1/location/{id}', App\Controllers\api\v1\LocationController::class . '@SingleItemById');
$router->get('/api/v1/locations/{page}/{limit}', App\Controllers\api\v1\LocationController::class . '@pageList');

$router->delete('/api/v1/facility/{id}', App\Controllers\api\v1\FacilityController::class . '@delete');
