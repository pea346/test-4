<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/moodBoardPage', 'Users::moodBoardPage');
$routes->get('/roadMapPage', 'Users::roadMapPage');
$routes->get('/signUpPage', 'Users::signUpPage');
$routes->get('/loginPage', 'Users::loginPage');

$routes->get('dashboard', 'Admin::dashboard');
$routes->get('service', 'Admin::service');
$routes->get('accounts', 'Admin::accounts');
$routes->get('request', 'Admin::request');
$routes->post('login', 'Auth::login');
$routes->post('logout', 'Auth::logout');
$routes->post('signup', 'Auth::signup');
$routes->post('/signUpPage', 'Auth::signup');
