<?php

$routes->group('patients', ['namespace' => 'Modules\Patients\Controllers'], function($routes)
{
    $routes->get('/', 'Patients::index');
    $routes->match(['get', 'post'], 'add', 'Patients::add_patient');
    $routes->get('(:num)', 'Patients::index/$1');
    $routes->get('show/(:num)', 'Patients::show_patient/$1');//ito yung sa show
    $routes->match(['get', 'post'], 'edit/(:num)', 'Patients::edit_patient/$1');
    $routes->get('delete/(:num)', 'Patients::delete_patient/$1');
});

$routes->group('patient-conditions', ['namespace' => 'Modules\Patients\Controllers'], function($routes)
{
    $routes->get('(:num)', 'Conditions::index/$1');
    $routes->match(['get', 'post'], 'add/(:num)', 'Conditions::add/$1');
    $routes->match(['get', 'post'], 'edit/(:num)/(:num)', 'Conditions::edit/$1/$2');
    $routes->get('delete/(:num)/(:num)', 'Conditions::delete/$1/$2');

});
