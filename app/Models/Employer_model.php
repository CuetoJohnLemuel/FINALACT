<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employer_model extends Model {

    public function __construct() {
		parent:: __construct();
        $this->call->database();
        // $this->call->library('session');
	}

	public function employerregister() {
        return $this->db->table('empregister')->get_all();
    }

    // public function showdetails($emp_id) {
    //     $result = $this->db->table('empregister')
    //                     ->where('emp_id', $emp_id)
    //                     ->get();
    // }

    public function showdetails($emp_id) {
        return $this->db->table('empregister')
                    ->where('emp_id', $emp_id)
                    ->get();
    }

    public function approvestatus($emp_id) {
        // $data = ($status == 'Approved');
        $data = [
            'status' => 'Approved'
        ];
        return $this->db->table('empregister')
                    ->where('emp_id', $emp_id)
                    ->update($data);
    }

    public function declinestatus($emp_id) {
        // $data = ($status == 'Approved');
        $data = [
            'status' => 'Decline'
        ];
        return $this->db->table('empregister')
                    ->where('emp_id', $emp_id)
                    ->update($data);
    }
    public function insertthis(
        $emp_id,
        $employer_id,
        $empprofile,
        $company_name,
        $company_address,
        $full_name,
        $contact_number,
        $email,
        $password,
        $status,
        $position
        ) 
        {
            $data = array(
                'emp_id' =>  $emp_id,
                'employer_id' =>   $employer_id,
                'empprofile' =>  $empprofile,
                'company_name' =>  $company_name,
                'company_address' =>  $company_address,
                'full_name' =>  $full_name,
                'contact_number' =>  $contact_number,
                'email' =>  $email,
                'password' =>  $password,
                'occupatiostatusn_title' =>  $status,
                'position' =>  $position
                
    
            );
    
            return $this->db->table('empregister')
                ->insert($data);
    
            if($result)
                return true;
        }

    /////////
    public function register($data)
    {
        $bind = array(
            'username' => $data['username'],
            'email' => $data['email'], 
            'password' => $data['password'],
            'VerificationCode' => $data['verification_code'],
            'VerificationExpiry' => $data['verification_expiry'],

        );

        $this->db->table('empregister')->insert($bind);
    }

    // public function sendVerificationEmail($data, $verificationCode)
    // {
    //     $verificationLink = site_url('/verify/' . $verificationCode);
    
    //     $this->email->sender('admin@gmail.com');
    //     $this->email->recipient($data); 
    //     $this->email->subject('Email Verification');
    
    //     $emailContent = 'Thank you for signing up! Please click the link provided to confirm your email address.<br>';
    //     $emailContent .= '<a href="' . $verificationLink . '">Click this to verify your Email</a>';
    
    //     $this->email->email_content($emailContent, 'html');
    
    //     if ($this->email->send()) {
    //         echo 'Your account has been confirmed. Feel free to log in now.';
    //     } else {
    //         echo 'Email sending failed. Please try again.';
    //     }
    // }
    
    // public function getUserByVerificationCode($verificationCode)
    // {
    //     return $this->db->table('empregister')
    //         ->where('VerificationCode', $verificationCode)
    //         ->get();
    // }

    // public function verifyUser($emp_id)
    // {
    //     $this->db->table('empregister')
    //         ->where('emp_id', $emp_id)
    //         ->update(['IsVerified' => true]);
    // }

    // public function authenticateUser($email, $password)
    // {
    //     $user = $this->db->table('empregister')
    //         ->where('email', $email)
    //         ->get();

    //     if ($user && password_verify($password, $user['password'])) {
    //         return $user;
    //     } else {
    //         return null;
    //     }
    // }
    // public function getUserDataById($emp_id)
    // {

    //     return $this->db->table('empregister')->where('emp_id', $emp_id)->get();

    // }
 
}


// public function vacancy_approved($vacancy_id)
//     {
      
//         $this->jobvacancies->set('status', 'Approved')->where('vacancy_id', $vacancy_id)->update();

//         return redirect()->route('jobvacancy');
//     }
// $data = [
// 	'title' => 'new title',
// 	'status' => 2
// ];
// $this->db->table('table')->where('id', 10)->update($data);

// $data = [
// 	'username' => 'ronmarasigan',
// 	'password' => 'pass',
// 	'activation' => 1,
// 	'status' => 1
// ];

// $this->db->table('users')->where('id', 10)->update($data);

// ->where('id', $id)->update($data);;