<?php

$routes->group('patients', ['namespace' => 'Modules\Patients\Controllers'], function($routes)
{
    $routes->get('/', 'Patients::index');
    $routes->match(['get', 'post'], 'add', 'Patients::add_patient');
    $routes->get('(:num)', 'Patients::index/$1');
    $routes->get('show/(:num)', 'Patients::show_patient/$1');//ito yung sa show
    $routes->match(['get', 'post'], 'edit/(:num)', 'Patients::edit_patient/$1');
    $routes->delete('delete/(:num)', 'Patients::delete_patient/$1');
});
