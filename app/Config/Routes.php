<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Routing untuk halaman login
$routes->get('/auth', 'Auth::index');
$routes->post('/auth/login', 'Auth::login');
$routes->get('/auth/logout', 'Auth::logout');

// Routing untuk halaman dashboard (sementara contoh saja)
$routes->get('/stock', 'Stock::index'); // ini nanti controller-nya Stock
