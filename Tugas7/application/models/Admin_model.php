<?php

class Admin_model extends CI_model
{
    public function getAllAdmin()
    {
        return $this->db->get('tb_admin')->result_array();
    }

    public function tambahDataAdmin()
    {
        $id_admin = $this->input->post('id_admin', true);
        $nama_admin = $this->input->post('nama_admin', true);
        $alamat_admin = $this->input->post('alamat_admin', true);
        $email_admin = $this->input->post('email_admin', true);
        $pass_admin = $this->input->post('pass_admin', true);
        $tl_admin = $this->input->post('tl_admin', true);
        $agama_admin = $this->input->post('agama_admin', true);
        $hobi_admin = $this->input->post('hobi_admin', true);
        $jk_admin = $this->input->post('jk_admin', true);
        $foto_admin = $this->input->post('foto_admin', true);


        $data = array(
            'id_admin'          => $id_admin,
            'nama_admin'        => $nama_admin,
            'alamat_admin'      => $alamat_admin,
            'email_admin'       => $email_admin,
            'pass_admin'        => password_hash($pass_admin,PASSWORD_BCRYPT),
            'tl_admin'          => $tl_admin,
            'foto_admin'        => $foto_admin,
            'agama_admin'       => $agama_admin,
            'hobi_admin'        => $hobi_admin,
            'jk_admin'          => $jk_admin,

        );
        if (!empty($_FILES['foto_admin']['name'])) {
            $foto_admin = $this->_do_upload();
            $data['foto_admin'] = $foto_admin;
        }
        

        $this->db->insert('tb_admin', $data);
    }

    public function hapusDataAdmin($id_admin)
    {
        $this->db->delete('tb_admin', ['id_admin' => $id_admin]);
    }

    public function getAdminById($id_admin)
    {
        return $this->db->get_where('tb_admin', ['id_admin' => $id_admin])->row_array();
    }

    public function ubahDataAdmin()
    {
        $data = [
            "id_admin"          => $this->input->post('id_admin', true),
            "nama_admin"        => $this->input->post('nama_admin', true),
            "alamat_admin"      => $this->input->post('alamat_admin', true),
            "email_admin"       => $this->input->post('email_admin', true),
            "pass_admin"        => $this->input->post('pass_admin', true),
            "tl_admin"          => $this->input->post('tl_admin', true),
            "foto_admin"        => $this->input->post('foto_admin', true),
            "agama_admin"       => $this->input->post('agama_admin', true),
            "hobi_admin"        => $this->input->post('hobi_admin', true),
            "jk_admin"          => $this->input->post('jk_admin', true),
        ];
        if ($this->input->post('foto_admin') != null) {
            $data['foto_admin'] = $this->input->post('foto_admin');

        }


        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('tb_admin', $data);
    }
    private function _do_upload()
    {
        $foto_admin = time() . '-' . $_FILES["foto_admin"]['name'];

        $config['upload_path']          = 'assets/upload/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_widht']            = 1000;
        $config['max_height']           = 1000;
        $config['file_name']            = $foto_admin;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_admin')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('');
        }
        return $this->upload->data('file_name');
    }

}

