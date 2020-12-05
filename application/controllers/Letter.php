<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Letter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('latterbox');
    }
    public function index()
    {
        $this->load->view('dashboard/latter/index');
    }
    public function lockrone()
    {
        $data['lockr_no'] = $this->latterbox->lockerone1();
        $this->load->view('dashboard/latter/lockrone',$data);
    }
}
