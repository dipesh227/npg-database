<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pfms extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pfmsd');
        // echo '<script>alert("yahi");</script>';
    }

    public function awash()
    {
        // echo '<script>alert("yahi");</script>';
        $data['awash'] = $this->pfmsd->pfmsdawash();
        $this->load->view('citizen/registration', $data);
    }
}
