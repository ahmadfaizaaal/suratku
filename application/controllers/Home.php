<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     date_default_timezone_set('Asia/Bangkok');
    //     $this->load->library('form_validation');
    //     $this->load->model('M_Registration', 'registration');
    //     $this->load->model('M_Auth', 'auth');
    //     date_default_timezone_set('Asia/Bangkok');
    // }

    public function index()
    {
        //redirect('v2');
	redirect(BASE_URL . 'v2');
    }

    
}
