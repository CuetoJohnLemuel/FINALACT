<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{

    private $registeremp;

    public function __construct()
    {
        $this->registeremp = new \App\Models\EmployerRegistrationModel();
    }

    public function adminhome()
    {
        return view('Admin/adminhome');
    }

    // public function employerregister()
    // {
    //     return view('Admin/employerregistration');
    // }

    public function jobvacancy()
    {
        return view('Admin/jobvacancy');
    }

    public function empdetails()
    {
        return view('Admin/employerdetails');
    }

    public function manageuser()
    {
        return view('Admin/manageuser');
    }

    public function registeremps()
    {
        $data = [
            'myregemp' => $this->registeremp->findAll(),
        ];
        return view('Admin/employerregistration', $data);
    }
}
