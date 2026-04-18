<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('contact', 'Home::contact');
$routes->get('experience', 'Home::experience');
$routes->post('home/sendEmail', 'Home::sendEmail');
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('experience', 'admin_side\admin_experience\controller_experience::index');
    $routes->post('experience/save', 'admin_side\admin_experience\controller_experience::save'); //save experience
});
$routes->get('login', 'Auth::index');
$routes->post('auth/login_process', 'Auth::login_process');
$routes->get('logout', 'Auth::logout');
$routes->get('auth/save_register', 'Auth::save_register'); //http://localhost/PERSONAL_WEB/public/auth/save_register untuk cek user sudah masuk ke cloud
