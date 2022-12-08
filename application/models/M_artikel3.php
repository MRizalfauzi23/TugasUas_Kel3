<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_artikel3 extends CI_Model
{
    private $table = 'artikel';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'link3',  //samakan dengan atribute name pada tags input
                'label' => 'link3',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
    
            [
                'field' => 'artikel3',
                'label' => 'artikel3',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'gambar3',
                'label' => 'gambar3',
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
            "link3" => $this->input->post('link3'),
            "artikel3" => $this->input->post('artikel3'),
            "gambar3" => $this->input->post('gambar3'),
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "link3" => $this->input->post('link3'),
            "artikel3" => $this->input->post('artikel3'),
            "gambar3" => $this->input->post('gambar3'),
        );
        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}