<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Student::index');
$routes->post('student/store', 'Student::store');
$routes->get('student/delete/(:num)', 'Student::delete/$1');