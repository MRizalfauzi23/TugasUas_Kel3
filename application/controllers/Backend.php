<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('Auth/v_login');
        }
        $this->load->model("M_backend"); 
        $this->load->model("M_artikel"); 
        $this->load->model("M_artikel1"); 
        $this->load->model("M_artikel2"); 
        $this->load->model("M_artikel3"); 
        $this->load->model("M_artikel4"); 
        $this->load->model("M_data"); 
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["user"] = $this->M_backend->getAll();
        $this->load->view('templates/v_header', $data);
        $this->load->view('templates/v_menu');
        $this->load->view('backend/v_index', $data);
        $this->load->view('templates/v_footer');
    }
    public function add()
    {
        $Backend = $this->M_backend; 
        $validation = $this->form_validation; 
        $validation->set_rules($Backend->rules()); 
        if ($validation->run()) {
            $Backend->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Admin berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("Backend");
        }
        $data["title"] = "Tambah Data Admin";
        $this->load->view('templates/v_header', $data);
        $this->load->view('templates/v_menu');
        $this->load->view('Backend/v_add', $data);
        $this->load->view('templates/v_footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('Backend');

        $Backend = $this->M_backend;
        $validation = $this->form_validation;
        $validation->set_rules($Backend->rules());

        if ($validation->run()) {
            $Backend->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Admin berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("Backend");
        }
        $data["title"] = "Edit Data Admin";
        $data["user"] = $Backend->getById($id);
        if (!$data["user"]) show_404();
        $this->load->view('templates/v_header', $data);
        $this->load->view('Backend/v_edit', $data);
        $this->load->view('templates/v_footer');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->M_backend->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Admin berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }
    public function artikel()
    {
        $data["artikel"] = $this->M_artikel1->getAll();
        $this->load->view('templates/v_header', $data);
        $this->load->view('templates/v_menu');
        $this->load->view('artikel/v_artikel', $data);
        $this->load->view('templates/v_footer');
    }

function komentar(){
  $data['komentar'] = $this->M_data->ambil_komen()->result();
  $this->load->view('admin/v_header');
  $this->load->view('admin/komentar', $data);
  $this->load->view('admin/v_footer');
}

function hapus($id)
{
    $where=array('id' => $id);
    $this->M_data->hapus_data($where, 'komentar');
    redirect('Backend/komentar');
}

public function ubah($id = null)
{
    if (!isset($id)) redirect('Backend');

    $Backend = $this->M_artikel1;
    $validation = $this->form_validation;
    $validation->set_rules($Backend->rules());

    if ($validation->run()) {
        $Backend->update();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Artikel berhasil disimpan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect("Backend/artikel");
    }
    $data["title"] = "Edit Data Artikel";
    $data["artikel"] = $Backend->getById($id);
    if (!$data["artikel"]) show_404();
    $this->load->view('templates/v_header', $data);
    $this->load->view('artikel/v_edit', $data);
    $this->load->view('templates/v_footer');
}

public function delete_artikel()
{
    $id = $this->input->get('id');
    if (!isset($id)) show_404();
    $this->M_artikel->delete($id);
    $msg['success'] = true;
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Artikel berhasil dihapus.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
    $this->output->set_output(json_encode($msg));
}
public function tambah()
{
    $artikel = $this->M_artikel; 
    $validation = $this->form_validation;
    $validation->set_rules($artikel->rules());
    if ($validation->run()) {
        $artikel->save();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Artikel berhasil disimpan. 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect("Backend/artikel");
    }
    $data["title"] = "Tambah Data Artikel";
    $this->load->view('templates/v_header', $data);
    $this->load->view('templates/v_menu');
    $this->load->view('artikel/v_add', $data);
    $this->load->view('admin/v_footer');
}
public function edit_artikel2($id = null)
{
    if (!isset($id)) redirect('Backend');

    $Backend = $this->M_artikel2;
    $validation = $this->form_validation;
    $validation->set_rules($Backend->rules());

    if ($validation->run()) {
        $Backend->update();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Artikel berhasil disimpan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect("Backend/artikel");
    }
    $data["title"] = "Edit Data Artikel";
    $data["artikel"] = $Backend->getById($id);
    if (!$data["artikel"]) show_404();
    $this->load->view('templates/v_header', $data);
    $this->load->view('artikel/v_edit_artikel2', $data);
    $this->load->view('templates/v_footer');
}
public function edit_artikel3($id = null)
{
    if (!isset($id)) redirect('Backend');

    $Backend = $this->M_artikel3;
    $validation = $this->form_validation;
    $validation->set_rules($Backend->rules());

    if ($validation->run()) {
        $Backend->update();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Artikel berhasil disimpan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect("Backend/artikel");
    }
    $data["title"] = "Edit Data Artikel";
    $data["artikel"] = $Backend->getById($id);
    if (!$data["artikel"]) show_404();
    $this->load->view('templates/v_header', $data);
    $this->load->view('artikel/v_edit_artikel3', $data);
    $this->load->view('templates/v_footer');
}
public function edit_artikel4($id = null)
{
    if (!isset($id)) redirect('Backend');

    $Backend = $this->M_artikel4;
    $validation = $this->form_validation;
    $validation->set_rules($Backend->rules());

    if ($validation->run()) {
        $Backend->update();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Artikel berhasil disimpan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect("Backend/artikel");
    }
    $data["title"] = "Edit Data Artikel";
    $data["artikel"] = $Backend->getById($id);
    if (!$data["artikel"]) show_404();
    $this->load->view('templates/v_header', $data);
    $this->load->view('artikel/v_edit_artikel4', $data);
    $this->load->view('templates/v_footer');
}

public function delete_artikel2()
{
    $id = $this->input->get('id');
    if (!isset($id)) show_404();
    $this->M_artikel2->delete($id);
    $msg['success'] = true;
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Artikel berhasil dihapus.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
    $this->output->set_output(json_encode($msg));
}
public function tambah_artikel2()
{
    $artikel = $this->M_artikel2;
    $validation = $this->form_validation;
    $validation->set_rules($artikel->rules()); 
    if ($validation->run()) {
        $artikel->save();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Artikel berhasil disimpan. 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect("backend/artikel");
    }
    $data["title"] = "Tambah Data Artikel";
    $this->load->view('templates/v_header', $data);
    $this->load->view('templates/v_menu');
    $this->load->view('artikel/v_add', $data);
    $this->load->view('admin/v_footer');
}
}