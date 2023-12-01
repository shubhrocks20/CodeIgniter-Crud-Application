<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('Home/store', 'Home::store');
$routes->get('Home/show', 'Home::show');
$routes->get('Home/delete/(:num)', 'Home::delete/$1');
$routes->get('Home/edit/(:num)', 'Home::edit/$1');
$routes->post('Home/update', 'Home::update');
