<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //FOR USER
$routes->get('/', 'ApplicantController::userhome');
$routes->get('/about', 'ApplicantController::about');
$routes->get('/joblist', 'ApplicantController::joblist');
$routes->get('/jobdetails', 'ApplicantController::jobdetails');
$routes->get('/contact', 'ApplicantController::contact');

//FOR EMPLOYER
$routes->get('/employerhome', 'EmployerController::employerhome');
$routes->get('/postvacancy', 'EmployerController::postvacancy');
$routes->get('/jobpost', 'EmployerController::jobpost');
$routes->get('/jobapplicants', 'EmployerController::jobapplicants');
$routes->post('/addjob', 'EmployerController::addjob');
$routes->get('/emplogin', 'EmployerController::emplogin');
$routes->get('/empregister', 'EmployerController::empregister');
$routes->get('/cancel_jobpost/(:any)', 'EmployerController::jobpost_cancel/$1');
$routes->post('/registeremployer', 'EmployerController::registeremployer');


//FOR ADMIN
$routes->get('/adminhome', 'AdminController::adminhome');
$routes->get('/employerregistration', 'AdminController::registeremps');
$routes->get('/jobvacancy', 'AdminController::jobvacancy');
$routes->get('/manageuser', 'AdminController::manageuser');
$routes->get('/empdetails', 'AdminController::empdetails');