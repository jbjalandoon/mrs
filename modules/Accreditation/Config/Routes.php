<?php
$routes->group('accreditation-templates', ['namespace' => 'Modules\Accreditation\Controllers'], function($routes)
{
    $routes->get('/', 'AccreditationTemplates::index');
    $routes->get('(:num)', 'AccreditationTemplates::index/$1');
    $routes->get('show/(:num)', 'AccreditationTemplates::show_accreditation_template/$1');
    $routes->match(['get', 'post'], 'add', 'AccreditationTemplates::add_accreditation_template');
    $routes->match(['get', 'post'], 'edit/(:num)', 'AccreditationTemplates::edit_accreditation_template/$1');
    $routes->delete('delete/(:num)', 'AccreditationTemplates::delete_accreditation_template/$1');

    $routes->match(['get', 'post'], 'add-parameter-item', 'AccreditationTemplates::add_parameter_item');
});

$routes->group('msi', ['namespace' => 'Modules\Accreditation\Controllers'], function($routes)
{
  $routes->get('get-items/(:num)/(:num)', 'ParameterItems::getItems/$1/$2');
  $routes->match(['get', 'post'], 'tagdocuments', 'ParameterItems::tagdocuments');
  $routes->match(['get', 'post'], '/', 'msi::index');
  $routes->match(['get', 'post'], '(:num)', 'msi::index/$1');
  $routes->match(['get', 'post'], 'tag', 'msi::tag_documents');
  $routes->match(['get', 'post'], 'displayItems/(:num)/(:num)', 'msi::displayItems/$1/$2');
});
$routes->group('parameter-items', ['namespace' => 'Modules\Accreditation\Controllers'], function($routes)
{
  $routes->get('get-items/(:num)/(:num)', 'ParameterItems::getItems/$1/$2');
  $routes->match(['get', 'post'], 'tagdocuments', 'ParameterItems::tagdocuments');
});
