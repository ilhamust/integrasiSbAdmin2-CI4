<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//routers admin dashbord
$routes->get('dashboard', 'Admin\DashboardController::index');
