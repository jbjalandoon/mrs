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
$routes->group('reactions', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Reaction::index');
    $routes->match(['get', 'post'], 'add', 'Reaction::add');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Reaction::edit/$1');
    $routes->get('delete/(:num)', 'Reaction::delete/$1');
});
$routes->group('allergy-types', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'AllergyTypes::index');
    $routes->match(['get', 'post'], 'AllergyTypes', 'Allergy::add');
    $routes->match(['get', 'post'], 'AllergyTypes/(:num)', 'Allergy::edit/$1');
    $routes->get('delete/(:num)', 'AllergyTypes::delete/$1');
});
