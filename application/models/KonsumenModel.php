<?php defined('BASEPATH') or exit('No direct script access allowed');
class KonsumenModel extends CI_Model
{
	private $_table = "customer";

	public $id;
	public $ktp;
	public $nama;
	public $alamat;
	public $jenkel;
	public $hp;

	public function rules()
	{
		return [
			[
				'field' => 'ktp',
				'label' => 'ktp',
				'rules' => 'required|is_unique[customer.ktp]'
			],
			[
				'field' => 'nama',
				'label' => 'Nama',
				'rules' => 'required'
			],
			[
				'field' => 'alamat',
				'label' => 'Alamat',
				'rules' => 'required'
			],
			[
				'field' => 'jenkel',
				'label' => 'Jenkel',
				'rules' => 'required'
			],
			[
				'field' => 'hp',
				'label' => 'Hp',
				'rules' => 'required'
			]
		];	
	}

	public function EditRules()
	{
		return [
			[
				'field' => 'ktp',
				'label' => 'ktp',
				'rules' => 'required'
			],
			[
				'field' => 'nama',
				'label' => 'Nama',
				'rules' => 'required'
			],
			[
				'field' => 'alamat',
				'label' => 'Alamat',
				'rules' => 'required'
			],
			[
				'field' => 'jenkel',
				'label' => 'Jenkel',
				'rules' => 'required'
			],
			[
				'field' => 'hp',
				'label' => 'Hp',
				'rules' => 'required'
			]
		];	
	}

	// ambil data semua 
	public function getAll() {
		return $this->db->get($this->_table)->result();
	}


	public function getById($id)
	{
		return $this->db->get_where($this->_table,["id" => $id])->row();
	}

	// delete data
	public function delete($id) 
	{
		return $this->db->delete($this->_table, array('id' => $id));
	}

	// save data
	public function save() {
		$post = $this->input->post();
		// $this->id = $post['id'];
		$this->ktp = $post['ktp'];
		$this->nama = $post['nama'];
		$this->alamat = $post['alamat'];
		$this->jenkel = $post['jenkel'];
		$this->hp = $post['hp'];
		$this->db->insert($this->_table, $this);
	}

	public function update() {
		$post = $this->input->post();
		$this->id 		= $post['id'];
		$this->ktp 		= $post['ktp'];
		$this->nama 	= $post['nama'];
		$this->alamat 	= $post['alamat'];
		$this->jenkel 	= $post['jenkel'];
		$this->hp 		= $post['hp'];
		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}
}