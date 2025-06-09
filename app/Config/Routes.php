<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MenuController::index');
$routes->get('(:any)', 'MenuController::index/$1');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('facturas', 'Facturas::index');
$routes->get('productos', 'Productos::index');
$routes->get('clientes', 'Clientes::index');


$routes->get('usuarios', 'Usuarios::index');
$routes->get('usuarios/listar', 'Usuarios::listar');
$routes->post('usuarios/guardar', 'Usuarios::guardar');
// ...y así para cada menú

 