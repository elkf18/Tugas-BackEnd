<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Admin';
        $data['admin'] = $this->Admin_model->getAllAdmin();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Admin';

        $this->form_validation->set_rules('id_admin', 'ID', 'required|numeric');
        $this->form_validation->set_rules('nama_admin', 'Nama', 'required');
        $this->form_validation->set_rules('alamat_admin', 'Alamat', 'required');
        $this->form_validation->set_rules('email_admin', 'Email', 'required');
        $this->form_validation->set_rules('pass_admin', 'Password', 'required');
        $this->form_validation->set_rules('tl_admin', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('agama_admin', 'Agama', 'required');
        $this->form_validation->set_rules('hobi_admin', 'Hobi', 'required');
        $this->form_validation->set_rules('jk_admin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('foto_admin', 'Foto', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->tambahDataAdmin();
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect('admin');


        }
    }

    public function hapus($id_admin)
    {
        $this->Admin_model->hapusDataAdmin($id_admin);
        $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin');
    }

    public function detail($id_admin)
    {
        $data['judul'] = 'Detail Data Admin';
        $data['admin'] = $this->Admin_model->getAdminById($id_admin);
        $this->load->view('templates/header', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_admin)
    {
        $data['judul'] = 'Form Ubah Data Admin';
        $data['admin'] = $this->Admin_model->getAdminById($id_admin);

        $this->form_validation->set_rules('nama_admin', 'Nama', 'required');
        $this->form_validation->set_rules('alamat_admin', 'Alamat', 'required');
        $this->form_validation->set_rules('email_admin', 'Email', 'required');
        $this->form_validation->set_rules('pass_admin', 'Password', 'required');
        $this->form_validation->set_rules('tl_admin', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('foto_admin', 'Foto', 'required');
        $this->form_validation->set_rules('agama_admin', 'Agama', 'required');
        $this->form_validation->set_rules('hobi_admin', 'Hobi', 'required');
        $this->form_validation->set_rules('jk_admin', 'Jenis Kelamin', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->ubahDataAdmin();
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin');
        }
    }
}
