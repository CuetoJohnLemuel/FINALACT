<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ApplicantRegistrationModel;

class ApplicantRegistrationController extends ResourceController
{
    public function store()
    {
        $applicantRegistrationData = $this->request->getJSON();

        // Add the new columns to the applicant registration data
        $applicantRegistrationData['emp_id'] = $this->request->getVar('emp_id');
        $applicantRegistrationData['apply_id'] = $this->request->getVar('apply_id');
        $applicantRegistrationData['applicant_id'] = $this->request->getVar('applicant_id');
        $applicantRegistrationData['user_id'] = $this->request->getVar('user_id');
        $applicantRegistrationData['first_name'] = $this->request->getVar('first_name');
        $applicantRegistrationData['last_name'] = $this->request->getVar('last_name');
        $applicantRegistrationData['middle_initial'] = $this->request->getVar('middle_initial');
        $applicantRegistrationData['email'] = $this->request->getVar('email');
        $applicantRegistrationData['phonenumber'] = $this->request->getVar('phonenumber');
        $applicantRegistrationData['resume'] = $this->request->getVar('resume');
        $applicantRegistrationData['hireme'] = $this->request->getVar('hireme');
        $applicantRegistrationData['occupation_title'] = $this->request->getVar('occupation_title');
        $applicantRegistrationData['status'] = $this->request->getVar('status');
        $applicantRegistrationData['datesubmitted'] = $this->request->getVar('datesubmitted');
        $applicantRegistrationData['dateupdated'] = $this->request->getVar('dateupdated');

        $applicantRegistration = new ApplicantRegistrationModel();
        $applicantRegistration->fill($applicantRegistrationData);

        $result = $applicantRegistration->save();

        if (!$result) {
            return $this->respondServerError();
        }

        return $this->respondCreated(['applicant_registration' => $applicantRegistration]);
    }

    public function update($id)
    {
        $applicantRegistrationData = $this->request->getJSON();

        // Add the new columns to the applicant registration data
        $applicantRegistrationData['emp_id'] = $this->request->getVar('emp_id');
        $applicantRegistrationData['apply_id'] = $this->request->getVar('apply_id');
        $applicantRegistrationData['applicant_id'] = $this->request->getVar('applicant_id');
        $applicantRegistrationData['user_id'] = $this->request->getVar('user_id');
        $applicantRegistrationData['first_name'] = $this->request->getVar('first_name');
        $applicantRegistrationData['last_name'] = $this->request->getVar('last_name');
        $applicantRegistrationData['middle_initial'] = $this->request->getVar('middle_initial');
        $applicantRegistrationData['email'] = $this->request->getVar('email');
        $applicantRegistrationData['phonenumber'] = $this->request->getVar('phonenumber');
        $applicantRegistrationData['resume'] = $this->request->getVar('resume');
        $applicantRegistrationData['hireme'] = $this->request->getVar('hireme');
        $applicantRegistrationData['occupation_title'] = $this->request->getVar('occupation_title');
        $applicantRegistrationData['status'] = $this->request->getVar('status');
        $applicantRegistrationData['datesubmitted'] = $this->request->getVar('datesubmitted');
        $applicantRegistrationData['dateupdated'] = $this->request->getVar('dateupdated');

        $applicantRegistration = $this->model->where('id', $id)->first();

        if (!$applicantRegistration) {
            return $this->respondNotFound();
        }

        $applicantRegistration->fill($applicantRegistrationData);

        $result = $applicantRegistration->save();

        if (!$result) {
            return $this->respondServerError();
        }

        return $this->respondUpdated(['applicant_registration' => $applicantRegistration]);
    }
}