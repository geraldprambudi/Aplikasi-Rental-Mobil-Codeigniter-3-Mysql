<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsumen extends CI_Controller
{

	    public function __construct()
	    {
	        parent::__construct();

	        $this->load->model('KonsumenModel');
	        $this->load->library('form_validation');
	    }

	public function index() {
		// session
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['konsumen'] = $this->KonsumenModel->getAll();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('data/konsumen', $data);
		$this->load->view('templates/footer');
	}


	// controller delete
	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->KonsumenModel->delete($id)) 
		{
			redirect('konsumen');
		}
	}


	public function add() {
		// session
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$konsumen = $this->KonsumenModel;
		$validation = $this->form_validation;
		$validation->set_rules($konsumen->rules());

		if ($validation->run()) {
			$konsumen->save();
			$this->session->set_flashdata('success', 'Berhasil di Simpan');
		}
  
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('data/new_konsumen', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id = null) {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		if (!isset($id)) redirect('konsumen');

		$konsumen = $this->KonsumenModel;
		$validation = $this->form_validation;
		$validation->set_rules($konsumen->EditRules());

		if ($validation->run()) {
			$konsumen->update();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Konsumen Berhasil Di Update</div>');		
		}

		$data['konsumen'] = $konsumen->getById($id);
		if (!$data['konsumen']) show_404();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('data/edit_konsumen', $data);
		$this->load->view('templates/footer');
	}
}
