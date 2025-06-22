<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


 
// Halaman utama (homepage)
$routes->get('/', 'index::index');

// Login
$routes->get('login', 'Login::index');
$routes->post('login/submit', 'Login::submit');
//keluar
$routes->get('/logout', 'Login::logout');
// Admin homepage (bisa redirect ke dashboard)
$routes->get('admin', 'Admin::index');

//berita
$routes->get('/berita', 'Berita::index');
$routes->get('/berita', 'Blog::index');

//galeri
$routes->get('/gallery', 'Gallery::index');





$routes->group('admin', ['filter' => 'auth'], function ($routes) {
// Admin dashboard
    $routes->get('dashboard', 'Admin::dashboard');

// Tambah Admin
    $routes->get('tambahadmin', 'Admin\TambahAdmin::index');
    $routes->post('tambahadmin/simpan', 'Admin\TambahAdmin::simpan');
    $routes->get('tambahadmin/edit/(:num)', 'Admin\TambahAdmin::edit/$1');
    $routes->post('tambahadmin/update/(:num)', 'Admin\TambahAdmin::update/$1');
    $routes->get('tambahadmin/hapus/(:num)', 'Admin\TambahAdmin::hapus/$1');

//daftar artikel
    $routes->get('daftarartikel', 'Admin\DaftarArtikel::index');
    $routes->post('daftarartikel/uploadSampul', 'Admin\DaftarArtikel::uploadSampul');
    $routes->get('daftarartikel/delete/(:num)', 'Admin\DaftarArtikel::delete/$1');
    $routes->get('daftarartikel/edit/(:num)', 'Admin\DaftarArtikel::edit/$1');
    $routes->post('daftarartikel/update/(:num)', 'Admin\DaftarArtikel::update/$1');
   


//tulis article
    $routes->get('artikel', 'Admin\Artikel::index');
    $routes->post('artikel/simpan', 'Admin\Artikel::simpan');
    $routes->post('artikel/uploadSampul', 'Admin\DaftarArtikel::uploadSampul');
//get data toko
    $routes->get('toko', 'TokoController::index');         // Tampilkan daftar toko
    $routes->get('toko/tambah', 'TokoController::tambah'); // Form tambah toko
    $routes->post('toko/simpan', 'TokoController::simpan'); // Simpan toko baru
    $routes->get('toko/edit/(:num)', 'TokoController::edit/$1'); // Form edit
    $routes->post('toko/update/(:num)', 'TokoController::update/$1'); // Simpan edit
    $routes->get('toko/hapus/(:num)', 'TokoController::hapus/$1'); // Hapus toko

//galeri admin
    $routes->get('galeri', 'Admin\Galeri::index');
    $routes->post('galeri/simpan', 'Admin\Galeri::simpan');
    $routes->post('galeri/update/(:num)', 'Admin\Galeri::update/$1');
    $routes->get('galeri/hapus/(:num)', 'Admin\Galeri::hapus/$1');


//slider admin
$routes->get('slider', 'Admin\SliderController::index');
$routes->post('slider/simpan', 'Admin\SliderController::simpan');
$routes->post('slider/delete/(:num)', 'Admin\SliderController::delete/$1');
$routes->get('slider/edit/(:num)', 'Admin\SliderController::edit/$1');
$routes->post('slider/update/(:num)', 'Admin\SliderController::update/$1');




    // dan semua route admin lain
});
