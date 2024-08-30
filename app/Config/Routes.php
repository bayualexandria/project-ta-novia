<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index', ['filter' => 'session']);
$routes->get('/home', 'Home::index', ['filter' => ['session','token-auth']]);

// $routes->get('/login', 'AuthenticationController::index');
// $routes->post('/login', 'AuthenticationController::login');

service('auth')->routes($routes);
