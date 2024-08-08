<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.

$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/home', 'Home::index');

$routes->group('data', function ($routes) {
    $routes->add('penduduk', 'Data\Datapend::index');
    $routes->add('tambahdata', 'Data\Datapend::tambah');
    $routes->add('tambahdb', 'Data\Datapend::tambahdb');
    $routes->add('edit/(:num)', 'Data\Datapend::edit/$1');
    $routes->put('update/(:num)', 'Data\Datapend::update/$1');
    $routes->add('delete/(:num)', 'Data\Datapend::delete/$1');
    $routes->add('all-penduduk', 'Data\Datapend::semua');
});

$routes->group('admin', function ($routes) {
    $routes->add('login', 'Admin\Admin::login');
    $routes->add('logout', 'Admin\Admin::logout');
    $routes->add('pengguna', 'Admin\Pengguna::index');
    $routes->add('tambah pengguna', 'Admin\Pengguna::tambah');
    $routes->add('edit/(:num)', 'Admin\Pengguna::edit/$1');
    $routes->put('update/(:num)', 'Admin\Pengguna::update/$1');
    $routes->add('delete/(:num)', 'Admin\Pengguna::delete/$1');
});

$routes->group('admin', ['Filter' => 'auth'], function ($routes) {
    $routes->add('sukses', 'Admin\Admin::sukses');
    $routes->add('dashboard', 'Admin\Dashboard::index');
});

$routes->group('humas', function ($routes) {
    $routes->add('berita', 'Humas\Berita::index');
    $routes->add('tambah berita', 'Humas\Berita::tambah');
    $routes->add('laporan', 'Humas\Laporan::admin');
    $routes->add('laporan warga', 'Humas\Laporan::warga');
    $routes->add('tambah laporan', 'Humas\Laporan::tambah');
    $routes->add('tambah laporan warga', 'Humas\Laporan::tambahwarga');
});

$routes->group('surat', function ($routes) {
    $routes->add('pengantar', 'Surat\Pengantar::index');
    $routes->get('downpen/(:any)', 'Surat\Pengantar::downloadPDF/$1');
    $routes->add('domisili', 'Surat\Domisili::index');
    $routes->get('downdom/(:any)', 'Surat\Domisili::downloadPDF/$1');
    $routes->add('tidak mampu', 'Surat\TidakMampu::index');
    $routes->get('downgam/(:any)', 'Surat\TidakMampu::downloadPDF/$1');
});

$routes->group('warga', function ($routes) {
    $routes->add('dashboard', 'Warga\Dashboard::index');
});

$routes->group('pengguna', function ($routes) {
    $routes->add('tambahdb', 'Admin\Pengguna::tambahdb');
});

$routes->group('user', function ($routes) {
    $routes->add('alamat', 'User\Alamat::index');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
