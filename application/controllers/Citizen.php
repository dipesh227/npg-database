<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Citizen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('registration');
		// echo '<script>alert("yahi");</script>';
	}
	public function registration()
	{
		// $this->load->view('citizen/registration');
	
		$data['ward_no'] = $this->registration->wardno();
		
		$this->load->view('citizen/registration', $data);
	}
	public function areaname()
	{
		if ($this->input->post('ward')) {
			 $this->registration->areaname($this->input->post('ward'));
		}
	}
}
