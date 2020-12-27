<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admindb');
	}
	public function index()
	{
		$this->load->view('back_end/index');
	}
	public function login()
	{
		$this->load->view('back_end/login');
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
			if ($this->Admindb->login($data)) {

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
	public function logout()
	{
		$this->session->unset_userdata('isslogin', 'username', 'type');
		redirect('admin/login');
	}
	public function complains()
	{
		$this->load->view('back_end/complains');
	}
	public function slider()
	{
		$data['sliderpic'] = $this->Admindb->sliderimgget();
		$this->load->view('back_end/slider', $data);
	}
	public function category()
	{
		$this->load->view('back_end/category');
	}
	public function newpost()
	{
		$this->load->view('back_end/newpost');
	}
	public function editpost()
	{
		$this->load->view('back_end/editpost');
	}
	public function gallery()
	{
		$this->load->view('back_end/gallery');
	}
	public function adduser()
	{
		$this->load->view('back_end/adduser');
	}
	public function slideriminsert()
	{
		$sliderpic = addslashes((file_get_contents($_FILES['sliderpic']['tmp_name'])));
		$data = array('sliderpic' => $sliderpic,);
		$data['sliderpic'] = $this->Admindb->sliderimginsert($data);
		return ($this->load->view('back_end/slider', $data));
	}
}
