<?php
$routes->group('supplies', ['namespace' => 'Modules\Inventory\Controllers'], function($routes)
{
    $routes->get('/', 'Supplies::index');
    $routes->get('(:num)', 'Supplies::index/$1');
    $routes->get('show/(:num)', 'Supplies::show_supplies/$1');
    $routes->match(['get', 'post'], 'add', 'Supplies::add_supplies');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Supplies::edit_supplies/$1');
    $routes->delete('delete/(:num)', 'Supplies::delete_supplies/$1');
});

$routes->group('supply-types', ['namespace' => 'Modules\Inventory\Controllers'], function($routes)
{
    $routes->get('/', 'SupplyTypes::index');
    $routes->get('(:num)', 'SupplyTypes::index/$1');
    $routes->get('show/(:num)', 'SupplyTypes::show_supply_types/$1');
    $routes->match(['get', 'post'], 'add', 'SupplyTypes::add_supply_types');
    $routes->match(['get', 'post'], 'edit/(:num)', 'SupplyTypes::edit_supply_types/$1');
    $routes->delete('delete/(:num)', 'SupplyTypes::delete_supply_types/$1');
});
