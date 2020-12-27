<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Office extends CI_Controller {
	public function index()
	{
		$this->load->view('office/index');
	}
}