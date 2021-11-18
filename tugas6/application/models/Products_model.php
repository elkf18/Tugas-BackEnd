<?php 
class Products_model extends CI_model
{
    public $table = 'products';

    public function __construct()
    {
        
        
    }
    public function countActive()
    {
        $this->db->select("this->_table.id");
        $this->db->from($this->table);
        $this->db->where("status","0");
        $query=$this->db->get();

        return $query->nim_rows();
    }
}
 ?>