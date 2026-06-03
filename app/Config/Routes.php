<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Home::index');
$routes->get('perfil', 'Home::perfil');
$routes->get('receita', 'Home::receita');
$routes->get('sair', 'Home::sair');

$routes->get('teste', 'Home::teste');
