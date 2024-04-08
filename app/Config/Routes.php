<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
// $routes->get('/login', 'Home::login');
$routes->get('/login', 'Home::login', ['as' => 'login']);
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/location', 'Home::location');
$routes->get('/orders', 'Home::orders');
$routes->get('/profile', 'Home::profile');
$routes->get('/forgot-password', 'Home::resetPassword');
$routes->post('/register', 'Home::register');
$routes->post('/loginform', 'Home::loginform');
$routes->post('/supports', 'Home::supports');


$routes->get('/about-us', 'Home::about');
$routes->get('/privacy-policy', 'Home::privacy');
$routes->get('/terms-condition', 'Home::terms');
$routes->get('/support', 'Home::support');