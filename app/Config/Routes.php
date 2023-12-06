<?php

namespace Config;

// Create a new instance of our RouteCollection class.
use App\Controllers\TrainingCourses;

$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'PageController::index');
$routes->get("/about", "PageController::about");
$routes->get("/services", "PageController::services");
$routes->get("/contact-us", "PageController::contact");
$routes->get("/users", "UserController");
$routes->get("/training", "PageController::trainings");
$routes->get("training/(:any)", "PageController::training/$1");



// Admin Routes
$routes->get("/login", "AdminController::login");
$routes->post("/login", "AdminController::login");
$routes->get("/logout", "AdminController::logout");

$routes->group('admin',['filter'=>'isAdmin'], static function($routes){
    $routes->get('dashboard',"AdminController::dashboard");
    $routes->get("training_coureses", "AdminController::training_coureses");
    $routes->post("training_coureses", "AdminController::training_coureses");
    $routes->get("course_view/(:any)", "AdminActionController::course_view/$1");
    $routes->get("edit_course/(:any)", "AdminActionController::edit_course/$1");
    $routes->post("update_course/(:any)", "AdminActionController::update_course/$1");
    $routes->get("delete_course/(:any)", "AdminActionController::delete_course/$1");
   

    $routes->get("add_coureses", "AdminController::add_coureses");
    $routes->post("add_coureses", "AdminController::add_coureses");

    $routes->get("topic", "AdminController::topic");
    $routes->post("topic", "AdminController::topic");
    $routes->get("topic_view/(:any)", "AdminActionController::topic_view/$1");
    $routes->get("edit_topic/(:any)", "AdminActionController::edit_topic/$1");
    $routes->post("update_topic/(:any)", "AdminActionController::update_topic/$1");
    $routes->get("delete_topic/(:any)", "AdminActionController::delete_topic/$1");

    $routes->get("add_topic", "AdminController::add_topic");
    $routes->post("add_topic", "AdminController::add_topic");

    $routes->get("sub_topic", "AdminController::sub_topic");
    $routes->post("sub_topic", "AdminController::sub_topic");
    $routes->get("subtopic_view/(:any)", "AdminActionController::subtopic_view/$1");
    $routes->get("edit_subtopic/(:any)", "AdminActionController::edit_subtopic/$1");
    $routes->post("update_subtopic/(:any)", "AdminActionController::update_subtopic/$1");
    $routes->get("delete_subtopic/(:any)", "AdminActionController::delete_subtopic/$1");

    $routes->get("add_subtopic", "AdminController::add_subtopic");
    $routes->post("add_subtopic", "AdminController::add_subtopic");

});




$routes->get('/api/get-all-courses',"ApiController::get_all_courses");
$routes->get('/api/get-topics-of-course/(:num)',"ApiController::get_topic_by_course_id/$1");
$routes->get('/api/get-subtopic-of-topic/(:num)',"ApiController::get_subtopic_by_topic_id/$1");


$routes->resource('trainingCourses');
/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
