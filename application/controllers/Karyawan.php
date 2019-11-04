<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function index()
    {
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        echo "hello sss";
    }
}
