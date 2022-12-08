<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_data');
		
	}
    
	public function about()
    {
        $data=array(
    
        );
       
        $this->load->view('about', $data);
		
	}
	public function course()
    {
        $data=array(
        );
       
        $this->load->view('course', $data);
		
	}
	public function contact()
    {
        $data=array(
        );
       
        $this->load->view('contact', $data);
	}
	public function detail()
    {
        $data=array(
        );
       
        $this->load->view('detail', $data);	
	}	
	public function team()
    {
        $data=array(
        );
       
        $this->load->view('team', $data);	
	}
	public function testimonial()
    {
        $data=array(
        );
       
        $this->load->view('testimonial', $data);	
	}
	public function feature()
    {
        $data=array(
        );
       
        $this->load->view('feature', $data);	
	}
	public function user()
    {
        $data=array(
        );
       
        $this->load->view('user', $data);
	}
	function input()
    {
        $data['user'] = $this->m_data->ambil_data()->result();
        $this->load->view('input', $data);
      
	}
    public function tambah()
    {
        $this->load->view('index');
        $this->load->view('input');
    }
    public function tambah_aksi()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
            'Jenis_kelamin' => $this->input->post('Jenis_kelamin'),
		
            
        );
        $this->db->insert('user', $data);
        redirect('welcome/user');

	}
	function hapus($id)
    {
        $where=array('id' => $id);
        $this->m_data->hapus_data($where, 'user');
        redirect('welcome/user');
    }
    function edit($id)
    {
        $where=array('id' => $id);
        $data['user'] = $this->m_data->edit_data($where, 'user')->result();
        $this->load->view('v_edit', $data);
    }
    public function login()
    {
        $data=array(
        );
       
        $this->load->view('login', $data);	
	}



	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
   
	{
        $data=array(

        );
		$this->load->view('index', $data);
	}
}
