<?php namespace Config;

header('Access-Control-Allow-Origin: *');

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

if (!isset($_SESSION)) {

    session_start();
}

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->options('(:any)', 'BaseController::options');

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->add('home', 'Home::index');

//paths for the menu
$routes->add('about', 'Home::about');
$routes->add('tips', 'Home::tips');
$routes->add('recipeSearch', 'Home::recipeSearch');
$routes->add('blog', 'Blog::index');
$routes->add('gallery', 'Home::gallery');
$routes->add('contact', 'Home::contact');

//paths for the blog
$routes->group('blog', function($routes) {
	$routes->add('post/(:num)', 'Blog::blogPost/$1');
});
$routes->add('post', 'Blog::post');


//paths for the logs
$routes->add('adminSpace', 'Admin::adminSpace');
$routes->add('membersList', 'Admin::membersList');
$routes->add('registForm', 'Logs::registForm');
$routes->add('register', 'Logs::register');
$routes->add('connectForm', 'Logs::connectForm');
$routes->add('connection', 'Logs::connection');

//paths for admin gestion
$routes->add('newPost', 'Blog::newPost');
$routes->add('mailto', 'Admin::mailto');






/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
