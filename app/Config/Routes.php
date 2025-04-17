<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/',             'HomeHortensias::index');
$routes->post('HomeHortensias/buscarId',           'HomeHortensias::buscarId');
$routes->post('HomeHortensias/actualizarAsistencia','HomeHortensias::actualizarAsistencia');

