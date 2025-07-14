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
$routes->get('/NoteController', 'NoteController::index');

$routes->get('/notes', 'NoteController::index');
$routes->post('/notes/add', 'NoteController::add');

$routes->get('/barang', 'BarangController::index');

$routes->get('/barang-masuk', 'BarangMasukController::index');
$routes->get('/barang-keluar', 'BarangKeluarController::index');
