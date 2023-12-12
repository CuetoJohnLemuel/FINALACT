<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->call->model('employer_model');
		$this->call->model('postjob_model');
		$this->call->model('applicant_model');
		// $this->call->library('session');
	}

	public function adminhome() {
		$this->call->view('Admin/adminhome');
	}

	public function employerregistration() {
		$this->call->view('Admin/employerregistration');
	}

	public function jobvacancy() {
		$this->call->view('Admin/jobvacancy');
	}

	public function manageuser() {
		$this->call->view('Admin/manageuser');
	}

	public function employerregister() {
		$data['empdata'] = $this->employer_model->employerregister();
		$this->call->view('Admin/employerregistration', $data);
	}

	public function joblist() {
		$data['jobs'] = $this->postjob_model->jobdetails();
		$this->call->view('Admin/jobvacancy', $data);
	}

	// public function employerdetails($emp_id)
    // {
    //     $data['emp'] = $this->employer_model->showdetails($emp_id);
	// 	$this->call->view('Admin/employerdetails', $data);
    // }

	public function employerdetails($emp_id) {
		$data = $this->employer_model->showdetails($emp_id);
		$this->call->view('Admin/employerdetails', $data);
	}

	public function approveemployer($emp_id) {
		$data = $this->employer_model->approvestatus($emp_id);
		redirect('employerlist');
	}
	public function declineemployer($emp_id) {
		$data = $this->employer_model->declinestatus($emp_id);
		redirect('employerlist');
	}
	public function vacancies($vacancy_id) {
		$data = $this->postjob_model->vacancydetails($vacancy_id);
		$this->call->view('Admin/vacancydetails', $data);
	}
	
	public function approvevacancy($vacancy_id) {
		$data = $this->postjob_model->approvevacancy($vacancy_id);
		redirect('jobvacancy');
	}

	public function declinevacancy($vacancy_id) {
		$data = $this->postjob_model->declinevacancy($vacancy_id);
		redirect('jobvacancy');
	}
	// public function edit_data($id) {
	// 	$data = $this->crud_model->specific_data($id);
	// 	$this->call->view('Users/edit', $data);
	// }

	// public function vacancydetails($vacancy_id) {
	// 	$data = $this->postjob_model->vacancydetails($vacancy_id);
	// 	$this->call->view('Admin/vacancydetails', $data);
	// }

	public function applicantlist() {
		$data['empdata'] = $this->employer_model->employerregister();
		$this->call->view('Admin/employerregistration', $data);
	}
	
}
?>