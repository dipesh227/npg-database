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
        $data['patraawali_detials'] = $this->latterbox->patraawali_detials();
        $data['locker_no'] = $this->latterbox->locker_no();
        $data['section'] = $this->latterbox->section();
        $data['subsection'] = $this->latterbox->subsection();
        $this->load->view('dashboard/latter/lockrone', $data);
    }
}
