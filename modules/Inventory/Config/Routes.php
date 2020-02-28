<?php
$routes->group('supplies', ['namespace' => 'Modules\Inventory\Controllers'], function($routes)
{
    $routes->get('/', 'Inventory::index');
    $routes->match(['get', 'post'], 'add', 'Inventory::add_supplies');
    $routes->get('(:num)', 'Inventory::index/$1');
    $routes->get('show/(:num)', 'Inventory::show_supplies/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Inventory::edit_supplies/$1');
    $routes->delete('delete/(:num)', 'Inventory::delete_supplies/$1');
});

$routes->group('supply_types', ['namespace' => 'Modules\Inventory\Controllers'], function($routes)
{
    $routes->get('/', 'Inventory::index');
    $routes->match(['get', 'post'], 'add', 'Inventory::add_supply_types');
    $routes->get('(:num)', 'Inventory::index/$1');
    $routes->get('show/(:num)', 'Inventory::show_supply_types/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Inventory::edit_supply_types/$1');
    $routes->delete('delete/(:num)', 'Inventory::delete_supply_types/$1');
});
