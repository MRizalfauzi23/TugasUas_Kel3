<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_artikel4 extends CI_Model
{
    private $table = 'artikel';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'link4',  //samakan dengan atribute name pada tags input
                'label' => 'link4',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
    
            [
                'field' => 'artikel4',
                'label' => 'artikel4',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'gambar4',
                'label' => 'gambar4',
                'rules' => 'trim|required'
            ]
        ];
    }

    //menampilkan data mahasiswa berdasarkan id mahasiswa
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where IdMhsw='$id'
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

    //menyimpan data mahasiswa
    public function save()
    {
        $data = array(
            "link4" => $this->input->post('link4'),
            "artikel4" => $this->input->post('artikel4'),
            "gambar4" => $this->input->post('gambar4'),
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "link4" => $this->input->post('link4'),
            "artikel4" => $this->input->post('artikel4'),
            "gambar4" => $this->input->post('gambar4'),
        );
        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}