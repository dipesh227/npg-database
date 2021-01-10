<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('Admindb');
	}
	public function index()
	{
		$data = array(
			'slider' => $this->Admindb->get_entries(),
			'gallery' => $this->Admindb->get_entriesgalleryimg(),
		);

		// echo json_encode($data);
		$this->load->view('front_end/index', $data);
	}
}
