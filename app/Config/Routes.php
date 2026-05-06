<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('student', 'Student::index');
$routes->post('student/store', 'Student::store');
$routes->get('student/delete/(:num)', 'Student::delete/$1');
$routes->get('api/students', 'Api\StudentApi::index');