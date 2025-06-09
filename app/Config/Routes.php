<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MenuController::index');
$routes->get('/(:any)', 'MenuController::index');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('facturas', 'Facturas::index');
$routes->get('productos', 'Productos::index');
$routes->get('clientes', 'Clientes::index');
$routes->get('usuarios', 'Usuarios::index');
// ...y así para cada menú


