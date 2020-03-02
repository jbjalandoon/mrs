<?php
$routes->group('permissions', ['namespace' => 'Modules\Visits\Controllers'], function($routes)
{
    $routes->get('/', 'Permissions::index');
    $routes->match(['get', 'post'], 'edit', 'Permissions::edit_permission');
});
