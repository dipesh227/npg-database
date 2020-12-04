<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginuser');
	}
	public function index()
	{
		$this->load->view('login_system/login');
	}

	public function check_login_data()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_name', 'User_Name', 'required', array('required' => 'User Name is required'));
		$this->form_validation->set_rules('cpassword', 'Password', 'required|alpha_numeric', array('required' => 'Password is required'));
		if ($this->form_validation->run()) {
			$data = array(
				'user_name' => $user_name = $this->input->post('user_name'),
				'password' => $this->input->post('cpassword'),
			);
			if ($this->loginuser->login($data)) {
				
				$array = array(
					'success' => true,
				);
			} else {
				
				$array = array(
					'success' => false,
				);
			}
		} else {
			$array = array(
				'user_name_error' => form_error('user_name'),
				'password_error' => form_error('cpassword'),
			);
		}
		echo json_encode($array);
	}
}
