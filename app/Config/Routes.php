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

$routes->get('/barang-masuk', 'BarangMasukController::index');
$routes->get('/barangmasuk/tambah', 'BarangMasukController::tambah');
$routes->post('/barangmasuk/simpan', 'BarangMasukController::simpan');
$routes->get('/barangmasuk/hapus/(:num)', 'BarangMasukController::hapus/$1');

$routes->get('/barangkeluar', 'BarangKeluarController::index');
$routes->get('/barangkeluar/tambah', 'BarangKeluarController::tambah');
$routes->post('/barangkeluar/simpan', 'BarangKeluarController::simpan');
$routes->get('/barangkeluar/hapus/(:num)', 'BarangKeluarController::hapus/$1');


$routes->get('/daftarbarang', 'DaftarBarangController::index');
$routes->get('/daftarbarang/tambah', 'DaftarBarangController::tambah');
$routes->post('/daftarbarang/simpan', 'DaftarBarangController::simpan');
$routes->get('/daftarbarang/hapus/(:num)', 'DaftarBarangController::hapus/$1');
