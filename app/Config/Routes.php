<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('contact', 'Home::contact');
$routes->get('experience', 'Home::experience');
$routes->post('home/sendEmail', 'Home::sendEmail');