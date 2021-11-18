<?php 
    class Barang_model extends CI_model
    {
        public function getAllBarang()
        {
            return $this->db->get('tb_barang');
        }
        public function find($id_barang){
            $result =  $this->db->where('id_barang', $id_barang)
                                ->limit(1)
                                ->get('tb_barang');
            if ($result->num_rows() > 0){
                return $result->row();
            }else{
                return array();
            }
        }
    }
?>