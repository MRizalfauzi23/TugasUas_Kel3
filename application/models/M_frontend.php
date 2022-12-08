<?php
defined('BASEPATH') or exit('No direct script access allowed');
class m_frontend extends CI_Model
{
    public function save()
    {
        $data=array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'komentar' => $this->input->post('komentar'),
        );
        return $this->db->insert('komentar',$data);
    }
    public function ambil_data()
    {
        return $this->db->get('user');
    }
}