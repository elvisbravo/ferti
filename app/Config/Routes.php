<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');

$routes->get('/login', 'Login::index');
$routes->post('/acceder', 'Login::acceder');
$routes->get('/logout', 'Login::signout');


$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/categorias', 'Categorias::index');
$routes->post('/categoria/guardar', 'Categorias::save');
$routes->get('/categoria/all', 'Categorias::getAll');

$routes->get('/productos', 'Productos::index');

$routes->get('/empresas', 'Empresas::index');
$routes->get('/empresas/lista', 'Empresas::lista');

$routes->get('/sedes', 'Sedes::index');
$routes->post('/sedes/crear_cookie_empresa', 'Sedes::create_cookie_empresa');
$routes->get('/sedes/loadSedes', 'Sedes::renderSedes');
$routes->get('/sedes/create-cookie/(:num)', 'Sedes::create_cookie/$1');