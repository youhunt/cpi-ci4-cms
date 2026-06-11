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

$routes->post('inquiry', 'Inquiry::store');
$routes->post('en/inquiry', 'Inquiry::store/en');
$routes->post('id/inquiry', 'Inquiry::store/id');

// Shield protected CMS routes.
$routes->group('admin', ['filter' => 'session'], static function ($routes) {
    $routes->get('/', 'Admin\Dashboard::index');

    $routes->get('products', 'Admin\Products::index');
    $routes->get('products/new', 'Admin\Products::new');
    $routes->post('products', 'Admin\Products::create');
    $routes->get('products/(:num)/edit', 'Admin\Products::edit/$1');
    $routes->post('products/(:num)', 'Admin\Products::update/$1');
    $routes->post('products/(:num)/delete', 'Admin\Products::delete/$1');

    $routes->get('projects', 'Admin\Projects::index');
    $routes->get('projects/new', 'Admin\Projects::new');
    $routes->post('projects', 'Admin\Projects::create');
    $routes->get('projects/(:num)/edit', 'Admin\Projects::edit/$1');
    $routes->post('projects/(:num)', 'Admin\Projects::update/$1');
    $routes->post('projects/(:num)/delete', 'Admin\Projects::delete/$1');

    $routes->get('network', 'Admin\Network::index');
    $routes->get('network/new', 'Admin\Network::new');
    $routes->post('network', 'Admin\Network::create');
    $routes->get('network/(:num)/edit', 'Admin\Network::edit/$1');
    $routes->post('network/(:num)', 'Admin\Network::update/$1');
    $routes->post('network/(:num)/delete', 'Admin\Network::delete/$1');

    $routes->get('news', 'Admin\News::index');
    $routes->get('news/new', 'Admin\News::new');
    $routes->post('news', 'Admin\News::create');
    $routes->get('news/(:num)/edit', 'Admin\News::edit/$1');
    $routes->post('news/(:num)', 'Admin\News::update/$1');
    $routes->post('news/(:num)/delete', 'Admin\News::delete/$1');

    $routes->get('inquiries', 'Admin\Inquiries::index');
    $routes->get('inquiries/(:num)', 'Admin\Inquiries::show/$1');
    $routes->post('inquiries/(:num)', 'Admin\Inquiries::update/$1');
    $routes->post('inquiries/(:num)/delete', 'Admin\Inquiries::delete/$1');

    $routes->get('settings', 'Admin\Settings::index');
});
