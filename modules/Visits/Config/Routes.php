<?php
$routes->group('visits', ['namespace' => 'Modules\Visits\Controllers'], function($routes)
{
    $routes->get('/', 'Visits::index');
    // $routes->get('start/(:num)', 'Visits::start_visit/$1');
    // $routes->get('end/(:num)/(:num)', 'Visits::end_visit/$1/$2');
});
$routes->group('vitals', ['namespace' => 'Modules\Visits\Controllers'], function($routes)
{
    $routes->match(['get', 'post'], 'capture/(:num)', 'Vitals::capture_vital/$1');
});
