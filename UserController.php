<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ApplicantRegistrationModel;
class UserController extends ResourceController
{
    public function userhome()
    {

       return view('User/userhome');
    }

    public function about()
    {
        
        
        return view('User/about');
    }

    public function joblist()
    {
        return view('User/joblist');
    }

    public function jobdetails()
    {
        return view('User/jobdetails');
    }

    public function contact()
    {
        return view('User/contact');
    }
}
