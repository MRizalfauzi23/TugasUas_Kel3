<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    function __construct()
	{
        parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_data');
        $this->load->library('form_validation');
		
	}
    public function login()
    {
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');

        if ($this->form_validation->run() == false){
        $data['title'] = 'login';
        	
        $this->load->view('Auth/v_login',$data);
       		
    }
}
    public function register()
    {
        $this->form_validation->set_rules('name','Name', 'required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]'); 
        $this->form_validation->set_rules('password1','password', 'required|trim|min_length[5]|matches[password2]',[
            'matches' => 'password dont match!',
            'min_length' => 'password too short'
        ]);
        $this->form_validation->set_rules('password2','password', 'required|trim|matches[password1]');

        if ( $this->form_validation->run() == false) {
            $data['title'] = 'Admin Registration';
             $this->load->view('Auth/v_register',$data);
             
            }
            else {
                $data=[
                    'name' => htmlspecialchars($this->input->post('name',true)),
                    'email' => htmlspecialchars($this->input->post('email',true)),
                    'password' => password_hash($this->input->post('password1',true), PASSWORD_DEFAULT),  
                    'is_activate' => 2,
                    'role_id' => 1,   
                    'data_created' => time(),
                    
                    
                ];
                $this->db->insert('user',$data);
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat! Akun anda telah aktif</div>');
            redirect('Auth');
        }
		
	}
   	
    public function forgot()
    {
        $data=array(
        );
       
        $this->load->view('Auth/v_forgot-password', $data);	
    }
    public function index()
    {
       
            $data=array(
            );
            $this->form_validation->set_rules('email','Email','trim|required|valid_email');
            $this->form_validation->set_rules('password','Password','trim|required');
    
            if ($this->form_validation->run() == false){
          	
            $this->load->view('Auth/v_login', $data);
           

           
        }else{
            $this->_login();
        } 
        
    }
     private function _login(){

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user){
            if($user['is_active'] == 1) {}
                if(password_verify($password,$user['password'])){
                    $data = [
                        'email' => $user['email'],
                        'password' => $user['password']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1){
                        redirect('backend/index');
                    }else{
                        redirect('Frontend');
                    }
                   
                
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password anda salah!</div>');
                    redirect('Auth');
                }

        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email Belum Terdaftar. Mohon Untuk Mendaftar</div>');
            redirect('Auth');
        }
        
    }
    public function logout(){
        $this->view->load('Auth/logout');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('');
        
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Anda Telah Logout. Silahkan Login Kembali!r</div>');
        redirect('logout');
    }
   



    
    
    
    
		

}