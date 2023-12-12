<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/


// Admin

// $router->get('/', 'Applicant::index');
$router->get('/adminhome', 'Admin::adminhome');
// $router->get('/employerregistration', 'Admin::employerregistration');
$router->get('/jobvacancy', 'Admin::joblist');
$router->get('/manageuser', 'Admin::manageuser');
$router->get('/employerlist', 'Admin::employerregister');
$router->get('employers/(:num)', 'Admin::employerdetails');
$router->get('approveemployer/(:num)', 'Admin::approveemployer');
$router->get('declineemployer/(:num)', 'Admin::declineemployer');
$router->get('vacancies/(:num)', 'Admin::vacancies');
$router->get('approvevacancy/(:num)', 'Admin::approvevacancy');
$router->get('declinevacancy/(:num)', 'Admin::declinevacancy');
// $router->get('vacancydetails/(:num)', 'Admin::vacancydetails');
// $router->get('product/(:num)', 'Catalog::productLookupByID');

// Employer
$router->get('/employerhome', 'Employer::employerhome');
$router->get('/postvacancy', 'Employer::postvacancy');
$router->get('/jobpost', 'Employer::joblist');
$router->get('/jobapplicants', 'Employer::jobapplicants');
$router->post('/postjob', 'Employer::postjobs');

$router->match('/login', 'Employer::login', 'GET|POST');
$router->post('/loginAuth', 'Employer::loginAuth');
$router->get('logout', 'Employer::logout');

$router->get('/register', 'Employer::registers');
//$router->match('registerAuth', 'Employer::registerAuth', 'GET|POST');

//Applicant
$router->get('/contact', 'Applicant::contact');
$router->get('/about', 'Applicant::about');
$router->get('/job_list', 'Applicant::job_list');
$router->get('/job_detail', 'Applicant::job_detail');
$router->get('/category', 'Applicant::category');
$router->get('/testimonial', 'Applicant::testimonial');
$router->get('/e404', 'Applicant::e404');
$router->get('/applicanthome', 'Applicant::applicanthome');