<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('/register', 'Auth::register');
// app/Config/Routes.php

// TAMBAHKAN ROUTE INI
$routes->post('/register/process', 'Auth::processRegister');
$routes->get('/login', 'Auth::login');
$routes->post('/login/process', 'Auth::processLogin');

// Rute untuk Dashboard dan Logout
$routes->get('/dashboard', 'Dashboard::index'); // <-- Rute untuk halaman dashboard
$routes->get('/logout', 'Auth::logout'); // <-- Rute untuk logout