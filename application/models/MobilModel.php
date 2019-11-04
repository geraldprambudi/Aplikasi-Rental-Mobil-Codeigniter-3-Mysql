<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class MobilModel extends CI_Model
{
    private $_table = "mobil";

    public $id;
    public $plat;
    public $merk;
    public $warna;
    public $tahun;
    public $status;

    public function rules()
    {
        return [
            [
                'field' => 'plat',
                'label' => 'Plat',
                'rules' => 'required'
            ],
            [
                'field' => 'merk',
                'label' => 'Merk',
                'rules' => 'required'
            ],
            [
                'field' => 'warna',
                'label' => 'Warna',
                'rules' => 'required'
            ],
            [
                'field' => 'tahun',
                'label' => 'Tahun',
                'rules' => 'required'
            ],
            [
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'required'
            ]
        ];
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mobil');
    }

    public function getById($id)
    {

        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->plat = $post['plat'];
        $this->merk = $post['merk'];
        $this->warna = $post['warna'];
        $this->tahun = $post['tahun'];
        $this->status = $post['status'];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
}
