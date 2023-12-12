<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employer extends Controller {
	//protected $load;
    //protected $email;

	public function __construct()
	{
		//$this->load = new Loader();
       // $this->email = new Email();
		parent:: __construct();
		$this->call->model('postjob_model');
		$this->call->model('Employer_model');
		// $this->call->library('session');
	
	}

	public function employerhome() {
		$this->call->view('Employer/employerhome');
	}

	public function postvacancy() {
		$this->call->view('Employer/postvacancy');
	}

	// public function jobpost() {
	// 	$this->call->view('Employer/jobpost');
	// }

	public function jobapplicants() {
		$this->call->view('Employer/jobapplicants');
	}

	public function postjobs() {
		// $employer_name = $this->io->post('employer_name');
        $company_name = $this->io->post('company_name');
        $occupation_title = $this->io->post('occupation_title');
        $required_no = $this->io->post('required_no');
        $location = $this->io->post('location');
		$qualification = $this->io->post('qualification');
        $job_description = $this->io->post('job_description');
        $prefered = $this->io->post('prefered');
        $category = $this->io->post('category');
		$salary = $this->io->post('salary');
        $per = $this->io->post('per');
	
		$result = $this->postjob_model->insertthis($company_name, $occupation_title, $required_no, $location, $qualification, $job_description, $prefered, $category, $salary, $per);

		if($result)
			redirect('postvacancy');
	}

	public function joblist() {
		$data['jobs'] = $this->postjob_model->jobdetails();
		$this->call->view('Employer/jobpost', $data);
	}


	/////////


	public function registers() {
        $this->call->view('register');
        	//$employer_name = $this->io->post('employer_name');
            $emp_id = $this->io->post('emp_id');
            $employer_id = $this->io->post('employer_id');
            $empprofile = $this->io->post('empprofile');
            $company_name = $this->io->post('company_name');
            $company_address = $this->io->post('company_address');
            $full_name = $this->io->post('full_name');
            $address = $this->io->post('address');
            $contact_number = $this->io->post('contact_number');
            $email = $this->io->post('email');
            $password = $this->io->post('password');
            $status = $this->io->post('status');
            $position = $this->io->post('position');
        
            $result = $this->Employer_model->insertthis($emp_id, $employer_id, $empprofile, $company_name, $company_address,
             $full_name, $address, $contact_number, $email, $password, $status, $position );
    
            if($result)
                redirect('jobvacancy');
        }
        
    }

  // public function registerAuth() {
    //    $verificationCode = $this->generateVerificationCode();

    //    if (isset($_POST['username'])) {
    //       $this->form_validation
    //            ->name('username')
    //            ->required()
    //            ->min_length(4)
    //            ->max_length(20);
    //     }

        //$this->form_validation
          //  ->name('password')
            //->required()
    //         //->min_length(8)
    //         ->custom_pattern('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$', 'Make sure the password passes all the requirements')
    //         ->name('confirm-password')
    //         ->matches('password', 'Passwords do not match')
    //         ->required()
    //         ->min_length(8)
    //         ->name('email')
    //         ->required()
    //         ->valid_email()
    //         ->name('terms')
    //         ->required();


    //     if ($this->form_validation->run() == false) {

    //         $_SESSION['errors'] = $this->form_validation->get_errors();
    //         $this->session->mark_as_flash('errors');
    //         redirect('register');
    //     } else {
    //         $data = [
    //             'username' => $this->io->post('username'),
    //             'email' => $this->io->post('email'),
    //             'password' => password_hash($this->io->post('password'), PASSWORD_BCRYPT),
    //             'verification_code' => $verificationCode,
    //             'verification_expiry' => date('Y-m-d H:i:s', strtotime('+1 day')), 
    //         ];
    //         $this->Employer_model->register($data);
    //         $this->Employer_model->sendVerificationemail($data['email'], $verificationCode);
    //         $this->session->set_flashdata('success', 'Registration finalized. Please confirm your email by reviewing your inbox.');
    //         redirect('register');
    //     }
    // }

    // private function generateVerificationCode() {
    //     $length = 10;
    //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //     $code = '';

    //     for ($i = 0; $i < $length; $i++) {
    //         $code .= $characters[rand(0, strlen($characters) - 1)];
    //     }

    //     return $code;
    // }

    // public function verify($verificationCode)
    // {
    //     $user = $this->ProjectModel_model->getUserByVerificationCode($verificationCode);
    
    //     if ($user) {
    //         if (strtotime($user['VerificationExpiry']) > time()) {
    //             $this->ProjectModel_model->verifyUser($user['userid']);
    
    //             $_SESSION['success'] = 'Your account has been confirmed. Feel free to log in now.';
    //             $this->session->mark_as_flash('success');
    
    //             // Display success message in command prompt
    //             echo 'Your Account is Verified. You can now login.';
    //         } else {
    //             $this->session->set_flashdata('errors', 'Validation failed');
    //         }
    //     } else {
    //         $this->session->set_flashdata('errors', 'Invalid code');
    //     }
    
    //     // Redirect to the appropriate page
    //     redirect('register');
    // }
    

    // public function login() {
    //     $this->call->library('session'); // Load the session library
    //     $this->call->view('login');
    // }

    // public function loginAuth() {
    //     $email = $this->io->post('email');
    //     $password = $this->io->post('password');
    
    //     $user = $this->ProjectModel_model->authenticateUser($email, $password);
    
    //     if ($user) {
    //         if ($user['IsVerified']) {
    //             $this->LAVA->set_logged_in($user['userid']);
                
    //             // Set success flash message
    //             $this->session->set_flashdata('success', 'You are successfully logged in!');
                
    //             redirect('');
    //         } else {
    //             $this->session->set_flashdata('errors', ['Verify your email first']);
    //             redirect('login');
    //         }
    //     } else {
    //         $this->session->set_flashdata('errors', ['Invalid email or password']);
    //         redirect('login');
    //     }
    // }
    

    // public function set_logged_in($user_id) {

    //     $user_data = $this->ProjectModel_model->getUserDataById($user_id);

  
    //     if (!empty($user_data)) {

    //         $this->LAVA->session->set_userdata([
    //             'user_id' => $user_data['userid'],
    //             'username' => $user_data['username'],
    //             'email' => $user_data['email'],
    //             'browser' => $_SERVER['HTTP_USER_AGENT'],
    //             'logged_in' => true
    //         ]);
    //     }
    // }

   // public function is_logged_in() {
     //   $isLogged = $this->LAVA->session->has_userdata('logged_in') && $this->LAVA->session->userdata('logged_in');
      //  return $isLogged;
   // }

   // public function logout() {

      //  $this->LAVA->session->sess_destroy();

       // redirect('login');
    //}
//

?>