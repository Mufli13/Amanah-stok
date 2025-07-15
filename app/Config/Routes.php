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


$routes->get('/barangkeluar', 'BarangKeluarController::index');
$routes->get('/barangkeluar/tambah', 'BarangKeluarController::tambah');
$routes->post('/barangkeluar/simpan', 'BarangKeluarController::simpan');

$routes->get('/barangkeluar/edit/(:num)', 'BarangKeluarController::edit/$1');
$routes->post('/barangkeluar/update/(:num)', 'BarangKeluarController::update/$1');

$routes->get('/barangkeluar/hapus/(:num)', 'BarangKeluarController::hapus/$1');
