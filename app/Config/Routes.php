<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
// $routes->get('/login', 'Home::login');
// $routes->get('/login', 'Home::login', ['as' => 'login']);
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/location', 'Home::location');
$routes->get('/orders', 'Home::orders');
$routes->get('/profile', 'Home::profile');
$routes->get('/forgot-password', 'Home::resetPassword');
// $routes->post('/register', 'Home::register');
// $routes->post('/loginform', 'Home::loginform');
$routes->post('/supports', 'Home::supports');

$routes->match(["get","post"], "/login", 'Home::login');
$routes->match(["get","post"], "/register", 'Home::register');


$routes->get('/about-us', 'Home::about');
$routes->get('/privacy-policy', 'Home::privacy');
$routes->get('/terms-condition', 'Home::terms');
// $routes->get('/support', 'Home::support');

$routes->get('/logout', 'Home::destroy_session');
$routes->get('/logout', 'Home::destroy_session');

$routes->post('/process_otp_verification', 'Home::process_otp_verification');
$routes->post('/updateuser', 'Home::update');
$routes->post('/schedule-pickup', 'ScheduleController::schedule_pickup');
// $routes->get('/verify-otp', 'Home::verify_otp');
$routes->get('/verify-otp', function() {
    if(session()->get('set_otp')){
        return view('verify_otp_form');
    }else{
        return redirect()->to(base_url('/register'));
    }
});
$routes->get('/support', function() {

        return view('support');
    
});
$routes->get('/schedule-pickup', function() {
        return view('schedule_pickup');
});

$routes->get('/fetch_my_order', 'ScheduleController::fetch_my_order');
// $routes->get('/fetch_my_order', function() {
//        echo "Hello";
// });


// $routes->get('/dashboard', 'Home::dashboard', ['filter' => 'auth']);
// $routes->get('/location', 'Home::location', ['filter' => 'auth']);
// $routes->get('/orders', 'Home::orders', ['filter' => 'auth']);
// $routes->get('/profile', 'Home::profile', ['filter' => 'auth']);
// $routes->get('/logout', 'Home::destroy_session', ['filter' => 'auth']);
// $routes->post('/updateuser', 'Home::update', ['filter' => 'auth']);
