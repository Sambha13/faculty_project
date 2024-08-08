<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Login::index', ['filter' => 'noauth']);
$routes->post('/auth', 'Auth::auth1');
$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/forgot_password', 'Home::forgot_password', ['filter' => 'noauth']);
$routes->get('/Sinhgadportal', 'Home::Sinhgadportal');
$routes->get('/Profile', 'Home::Profile');
$routes->get('/Performance_Appraisal', 'Home::Performance_Appraisal');
$routes->get('/personal_info', 'Home::personal_info');
$routes->get('/My_Appraisal', 'Home::My_Appraisal');
$routes->get('/Contact', 'Home::Contact');
