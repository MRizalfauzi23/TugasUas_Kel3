<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller 
{
    function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_frontend');
		$this->load->model('M_data');
		$this->load->model('M_artikel');
		
	}

    function index(){
        $this->load->view('Frontend/v_header');
        $this->load->view('Frontend/v_footer');
    }
    function about(){
        $this->load->view('Frontend/v_about');
        $this->load->view('Frontend/v_footer');
    }
    function features(){
        $data['artikel'] = $this->M_artikel->tampil_data()->result();
        $this->load->view('Frontend/v_features',$data);
        $this->load->view('Frontend/v_footer');

    }
    public function komentar(){
        $data=array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'komentar' => $this->input->post('komentar'),
        );
        $this->db->insert('komentar', $data);
        $this->load->view('Frontend/v_komentar');
        $this->load->view('Frontend/v_footer');
             
    }
}