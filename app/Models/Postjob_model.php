<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Postjob_model extends Model {
	public function __construct() {
		parent:: __construct();
        $this->call->database();
        // $this->call->library('session');
	}

    public function insertthis(
    $company_name,
    $occupation_title,
    $required_no,
    $location,
    $qualification,
    $job_description,
    $prefered,
    $category,
    $salary,
    $per) 
    {
        $data = array(
            
            'company_name' => $company_name,
            'occupation_title' => $occupation_title,
            'required_no' => $required_no,
            'location' => $location,
            'qualification' => $qualification,
            'job_description' => $job_description,
            'prefered' => $prefered,
            'category' => $category,
            'salary' => $salary,
            'per' => $per,

        );

        return $this->db->table('postjob')
            ->insert($data);

        if($result)
            return true;
    }
    public function jobdetails() {
        return $this->db->table('postjob')->get_all();
    }

    public function vacancydetails($vacancy_id) {
        return $this->db->table('postjob')
                    ->where('vacancy_id', $vacancy_id)
                    ->get();
    }

    public function approvevacancy($vacancy_id) {
        // $data = ($status == 'Approved');
        $data = [
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
                    ->where('vacancy_id', $vacancy_id)
                    ->update($data);
    }

    public function declinevacancy($vacancy_id) {
        // $data = ($status == 'Approved');
        $data = [
            'status' => 'Decline'
        ];
        return $this->db->table('postjob')
                    ->where('vacancy_id', $vacancy_id)
                    ->update($data);
    }
}
?>
