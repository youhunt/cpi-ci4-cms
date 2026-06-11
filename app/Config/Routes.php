<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('en', 'Home::index/en');
$routes->get('id', 'Home::index/id');
$routes->get('language/switch/(:alpha)', 'Language::switch/$1');

service('auth')->routes($routes);

// Public pages can be extended later with localized routes:
// $routes->get('(:alpha)/products', 'Products::index/$1');
// $routes->get('(:alpha)/products/(:segment)', 'Products::show/$1/$2');
// $routes->get('(:alpha)/projects', 'Projects::index/$1');
// $routes->get('(:alpha)/projects/(:segment)', 'Projects::show/$1/$2');
// $routes->post('(:alpha)/inquiry', 'Inquiry::store/$1');

// Shield protected CMS routes.
// After installing CodeIgniter Shield, the `session` filter protects admin pages.
$routes->group('admin', ['filter' => 'session'], static function ($routes) {
    $routes->get('/', 'Admin\Dashboard::index');
    $routes->get('products', 'Admin\Products::index');
    $routes->get('projects', 'Admin\Projects::index');
    $routes->get('network', 'Admin\Network::index');
    $routes->get('inquiries', 'Admin\Inquiries::index');
    $routes->get('settings', 'Admin\Settings::index');
});
