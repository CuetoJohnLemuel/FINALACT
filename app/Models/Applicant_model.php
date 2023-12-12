<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Applicant_model extends Model {
    public function __construct() {
		parent:: __construct();
        $this->call->database();
        // $this->call->library('session');
	}
    
    public function applicantlist() {
        return $this->db->table('applicant')->get_all();
    }
}
?>
