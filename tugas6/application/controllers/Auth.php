<?php
class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form/form_login_view');
        } else {
            $auth = $this->Auth_model->cek_login();

            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', 'Gagal');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                redirect('home/index');
            }
        }
    }
}
