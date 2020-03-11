<?php

$routes->group('conditions', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Conditions::index');
    $routes->match(['get', 'post'], 'add', 'Conditions::add');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Conditions::edit/$1');
    $routes->get('delete/(:num)', 'Conditions::delete/$1');
});
$routes->group('allergies', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Allergy::index');
    $routes->match(['get', 'post'], 'add', 'Allergy::add');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Allergy::edit/$1');
    $routes->get('delete/(:num)', 'Allergy::delete/$1');
});
