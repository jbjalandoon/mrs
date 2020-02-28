<?php
$routes->group('departments', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Departments::index');
    $routes->get('(:num)', 'Departments::index/$1');
    $routes->get('show/(:num)', 'Departments::show_department/$1');
    $routes->match(['get', 'post'], 'add', 'Departments::add_department');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Departments::edit_department/$1');
    $routes->delete('delete/(:num)', 'Departments::delete_department/$1');
});

$routes->group('areas', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Areas::index');
    $routes->get('(:num)', 'Areas::index/$1');
    $routes->get('show/(:num)', 'Areas::show_area/$1');
    $routes->match(['get', 'post'], 'add', 'Areas::add_area');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Areas::edit_area/$1');
    $routes->delete('delete/(:num)', 'Areas::delete_area/$1');
});

$routes->group('academic-programs', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Programs::index');
    $routes->get('(:num)', 'Programs::index/$1');
    $routes->get('show/(:num)', 'Programs::show_program/$1');
    $routes->match(['get', 'post'], 'add', 'Programs::add_program');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Programs::edit_program/$1');
    $routes->delete('delete/(:num)', 'Programs::delete_program/$1');
});
