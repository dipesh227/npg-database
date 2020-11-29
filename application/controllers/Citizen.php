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
		if ($this->session->userdata('isslogin')) {
			$this->load->view('citizen/index');
		} else {
			$data['ward_no'] = $this->registration->wardno();
			$this->load->view('citizen/registration', $data);
		}
	}
	public function areaname()
	{
		if ($this->input->post('ward')) {
			$this->registration->areaname($this->input->post('ward'));
		}
	}
	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('cemail', 'Email', 'required|valid_email', array('required' => 'Email Id is required'));
		$this->form_validation->set_rules('cpassword', 'Password', 'required|alpha_numeric', array('required' => 'Password is required'));
		if ($this->form_validation->run()) {
			$data = array(
				'email' => $email = $this->input->post('cemail'),
				'password' => $this->input->post('cpassword'),
			);
			if ($this->registration->citizenlogin($data)) {
				$session_data = array(
					'isslogin' => true,
					'username' => $email
				);
				$this->session->set_userdata($session_data);
				$array = array(
					'success' => true,
				);
			}else{
				$session_data = array(
					'isslogin' => false,
					'username' => 'email'
				);
				$this->session->set_userdata($session_data);
				$array = array(
					'success' => false,
				);

			}
		} else {
			$array = array(
				'email_error' => form_error('cemail'),
				'password_error' => form_error('cpassword'),
			);
		}
		echo json_encode($array);
	}
	public function citizenregister()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname', 'First Name', 'required|min_length[3]|alpha', array('required' => 'First Name is required'));
		$this->form_validation->set_rules('lname', 'Last Name', 'required|min_length[3]|alpha', array('required' => 'Last Name is required'));
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[citizenregister.email]|valid_email', array('is_unique' => 'Email Id alredy ragisterd', 'required' => 'Email Id is required'));
		$this->form_validation->set_rules('phone', 'Phone Number', 'required|is_unique[citizenregister.phone]|exact_length[10]|numeric', array('is_unique' => 'Phone number alredy ragisterd', 'required' => 'Phone Number is required'));
		$this->form_validation->set_rules('ward', 'Ward Number', 'required', array('required' => 'Ward Number is required'));
		$this->form_validation->set_rules('area', 'Area Name', 'required', array('required' => 'First select Your ward Number'));
		$this->form_validation->set_rules('citizenpic', 'Image', 'valid_base64,required', array('required' => 'Image is required'));
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]|alpha_numeric', array('required' => 'Password is required'));
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]', array('required' => 'Confirm Password is required'));
		if ($this->form_validation->run()) {
			$ip = $_SERVER['REMOTE_ADDR'];
			if (isset($_FILES['citizenpic']['tmp_name']) != null) {
				$citizenpic = addslashes((file_get_contents($_FILES['citizenpic']['tmp_name'])));
				$data = array(
					'fname' => $this->input->post('fname'),
					'lname' => $this->input->post('lname'),
					'email' => $email = $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'ward' => $this->input->post('ward'),
					'area' => $this->input->post('area'),
					'citizenpic' => $citizenpic,
					'password' => $this->input->post('password'),
					'ip' => $ip,
				);
				if ($this->registration->citizenregiste($data)) {
					$session_data = array(
						'isslogin' => true,
						'username' => $email
					);
					$this->session->set_userdata($session_data);
					$array = array(
						'success' => true,
					);
				}
			}
		} else {
			$array = array(
				'fname_error' => form_error('fname'),
				'lname_error' => form_error('lname'),
				'email_error' => form_error('email'),
				'phone_error' => form_error('phone'),
				'ward_error' => form_error('ward'),
				'area_error' => form_error('area'),
				'citizenpic_error' => form_error('citizenpic'),
				'password_error' => form_error('password'),
				'cpassword_error' => form_error('cpassword'),
				'error' => 'true',
			);
		}
		echo json_encode($array);
	}
	public function home()
	{
		if ($this->session->userdata('isslogin')) {
			$this->load->view('citizen/index');
		} else {
			redirect(base_url());
		}
	}

	public function logout()
	{
		if ($this->session->userdata('isslogin')) {
			// $this->load->view('citizen/index');
			$session_data = array(
				'isslogin' => false,
				'username' => ''
			);
			$this->session->set_userdata($session_data);
			redirect(base_url());
		} else {
			redirect(base_url());
		}
	}
}
