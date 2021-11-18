<?php

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('cart');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->Barang_model->getAllBarang()->result();
        
        $this->load->view('templates/header', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id_barang)
    {
        $barang = $this->Barang_model->find($id_barang);

        $data = array(
            'id'        => $barang->id_barang,
            'qty'       => 1,
            'price'     => $barang->harga_barang,
            'name'       => $barang->nama_barang,
            
        );

        $this->cart->insert($data);

        redirect('barang');
    }
    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('barang/keranjang' );
        $this->load->view('templates/footer');
    }
    public function cekout(){
        $this->cart->destroy();
        $this->load->view('templates/header');
        $this->load->view('barang/cekout');
        $this->load->view('templates/footer');
    }
}
?>