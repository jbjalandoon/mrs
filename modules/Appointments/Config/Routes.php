<?php
$routes->group('appointments', ['namespace' => 'Modules\Appointments\Controllers'], function($routes)
{
    $routes->get('/', 'Appointments::index');
    $routes->match(['get', 'post'], 'add', 'Appointments::add_appointments');
    $routes->get('(:num)', 'Appointments::index/$1');
    $routes->get('list/(:num)', 'Appointments::list_appointments/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Appointments::edit_appointments/$1');
    $routes->delete('delete/(:num)', 'Appointments::delete_appointments/$1');
});
