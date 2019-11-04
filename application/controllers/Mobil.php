<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MobilModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Data Mobil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // get data mobil
        $data['mbl'] = $this->db->get('mobil')->result_array();

        $this->form_validation->set_rules('plat', 'Plat', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('warna', 'warna', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/mobil', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'plat'      =>  $this->input->post('plat'),
                'merk'      =>  $this->input->post('merk'),
                'warna'     =>  $this->input->post('warna'),
                'tahun'     =>  $this->input->post('tahun'),
                'status'    =>  $this->input->post('status')
            ];

            $this->db->insert('mobil', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		   	New Mobil added!</div>');
            redirect('mobil');
        }
    }


    public function edit($id = null)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if (!isset($id)) redirect('mobil');

        $mobil = $this->MobilModel;
        $validation = $this->form_validation;
        $validation->set_rules($mobil->rules());
        if ($validation->run()) {
            $mobil->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Mobil added!</div>');
        }

        $data["mobil"] = $mobil->getById($id);
        if (!$data["mobil"]) show_404();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/view_edit_mobil', $data);
        $this->load->view('templates/footer');
    }


    public function hapus($id)
    {
        $this->MobilModel->delete($id);
        redirect('mobil');
    }
}
