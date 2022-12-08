<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_artikel2 extends CI_Model
{
    private $table = 'artikel';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'link2',  //samakan dengan atribute name pada tags input
                'label' => 'link2',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
    
            [
                'field' => 'artikel2',
                'label' => 'artikel2',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'gambar2',
                'label' => 'gambar2',
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
            "link2" => $this->input->post('link2'),
            "artikel2" => $this->input->post('artikel2'),
            "gambar2" => $this->input->post('gambar2'),
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "link2" => $this->input->post('link2'),
            "artikel2" => $this->input->post('artikel2'),
            "gambar2" => $this->input->post('gambar2'),
        );
        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}