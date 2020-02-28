  <?php
$routes->group('document-types', ['namespace' => 'Modules\Documents\Controllers'], function($routes)
{
    $routes->get('/', 'DocumentTypes::index');
    $routes->get('(:num)', 'DocumentTypes::index/$1');
    $routes->get('show/(:num)', 'DocumentTypes::show_document_type/$1');
    $routes->match(['get', 'post'], 'add', 'DocumentTypes::add_document_type');
    $routes->match(['get', 'post'], 'edit/(:num)', 'DocumentTypes::edit_document_type/$1');
    $routes->delete('delete/(:num)', 'DocumentTypes::delete_document_type/$1');
});

$routes->group('academic-documents', ['namespace' => 'Modules\Documents\Controllers'], function($routes)
{
    $routes->get('show-all', 'AcademicDocuments::showAllDocuments');
    $routes->get('/', 'AcademicDocuments::index');
    $routes->get('(:num)', 'AcademicDocuments::index/$1');
    $routes->get('show/(:num)', 'AcademicDocuments::show_academic_document/$1');
    $routes->match(['get', 'post'], 'upload-academic-document', 'AcademicDocuments::upload_academic_document');
    // $routes->match(['get', 'post'], 'upload-academic-program-file', 'AcademicDocuments::upload_academic_program_file');
    // $routes->match(['get', 'post'], 'upload-area-file', 'AcademicDocuments::upload_area_file');
    // $routes->match(['get', 'post'], 'upload-department-file', 'AcademicDocuments::upload_department_file');
    $routes->match(['get', 'post'], 'edit/(:num)', 'AcademicDocuments::edit_academic_document/$1');
    $routes->delete('delete/(:num)', 'AcademicDocuments::delete_academic_document/$1');
});
