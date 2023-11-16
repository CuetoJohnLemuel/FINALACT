<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ApplicantModel;

class ApplicantController extends ResourceController
{
    public function store()
    {
        $applicantRegistrationData = $this->request->getJSON();
        $applicantRegistration = new ApplicantModel();

        $applicantRegistration->emp_id = $applicantRegistrationData['emp_id'];
        $applicantRegistration->apply_id = $applicantRegistrationData['apply_id'];
        $applicantRegistration->applicant_id = $applicantRegistrationData['applicant_id'];
        $applicantRegistration->user_id = $applicantRegistrationData['user_id'];
        $applicantRegistration->first_name = $applicantRegistrationData['first_name'];
        $applicantRegistration->last_name = $applicantRegistrationData['last_name'];
        $applicantRegistration->middle_initial = $applicantRegistrationData['middle_initial'];
        $applicantRegistration->email = $applicantRegistrationData['email'];
        $applicantRegistration->phonenumber = $applicantRegistrationData['phonenumber'];
        $applicantRegistration->resume = $applicantRegistrationData['resume'];
        $applicantRegistration->hireme = $applicantRegistrationData['hireme'];
        $applicantRegistration->occupation_title = $applicantRegistrationData['occupation_title'];
        $applicantRegistration->status = $applicantRegistrationData['status'];
        $applicantRegistration->datesubmitted = $applicantRegistrationData['datesubmitted'];
        $applicantRegistration->dateupdated = $applicantRegistrationData['dateupdated'];
    
        $result = $applicantRegistration->save();
    
        if (!$result) {
            return $this->respondServerError();
        }
    
        return $this->respondCreated(['applicant_registration' => $applicantRegistration]);
    }
      
    

    public function update($id)
    {
        $applicantRegistrationData = $this->request->getJSON();
    
        $applicantRegistration = $this->model->where('id', $id)->first();
    
        if (!$applicantRegistration) {
            return $this->respondNotFound();
        }
    
        // Add the new columns to the applicant registration data
        $applicantRegistration->emp_id = $this->request->getVar('emp_id');
        $applicantRegistration->apply_id = $this->request->getVar('apply_id');
        $applicantRegistration->applicant_id = $this->request->getVar('applicant_id');
        $applicantRegistration->user_id = $this->request->getVar('user_id');
        $applicantRegistration->first_name = $this->request->getVar('first_name');
        $applicantRegistration->last_name = $this->request->getVar('last_name');
        $applicantRegistration->middle_initial = $this->request->getVar('middle_initial');
        $applicantRegistration->email = $this->request->getVar('email');
        $applicantRegistration->phonenumber = $this->request->getVar('phonenumber');
        $applicantRegistration->resume = $this->request->getVar('resume');
        $applicantRegistration->hireme = $this->request->getVar('hireme');
        $applicantRegistration->occupation_title = $this->request->getVar('occupation_title');
        $applicantRegistration->status = $this->request->getVar('status');
        $applicantRegistration->datesubmitted = $this->request->getVar('datesubmitted');
        $applicantRegistration->dateupdated = $this->request->getVar('dateupdated');
    
        $result = $applicantRegistration->save();
    
        if (!$result) {
            return $this->respondServerError();
        }
    
        return $this->respondUpdated(['applicant_registration' => $applicantRegistration]);
    }
}