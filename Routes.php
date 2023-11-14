<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //FOR USER
 $routes->get('/', 'Home::index');
$routes->get('/getData', 'ApplicantRegistrationModel::getData');
$routes->get('/about', 'ApplicantRegistrationModel::about');
$routes->get('/joblist', 'ApplicantRegistrationModel::joblist');
$routes->get('/jobdetails', 'ApplicantRegistrationModel::jobdetails');
$routes->get('/contact', 'ApplicantRegistrationModel::contact');

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