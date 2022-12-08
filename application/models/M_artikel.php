<?php
class M_artikel extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('artikel');
       
    }
    public function ambil_data()
    {
        return $this->db->get('artikel2');
       
    }

}