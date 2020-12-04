<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
	{
		$this->load->view('dashboard/index');
	}
    public function logout()
	{
		$this->session->unset_userdata('isslogin','username','type');
		$this->load->view('dashboard/index');
	}
}
