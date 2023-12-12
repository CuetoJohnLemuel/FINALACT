<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Applicant extends Controller {
	public function applicanthome() {
		$this->call->view('Applicant/applicanthome');
	}

	public function contact() {
		$this->call->view('Applicant/contact');
	}

	public function about() {
		$this->call->view('Applicant/about');
	}

	public function job_list() {
		$this->call->view('Applicant/job_list');
	}

	public function job_detail() {
		$this->call->view('Applicant/job_detail');
	}

	public function category() {
		$this->call->view('Applicant/category');
	}

	public function testimonial() {
		$this->call->view('Applicant/testimonial');
	}

	public function e404() {
		$this->call->view('Applicant/e404');
	}
}
?>
