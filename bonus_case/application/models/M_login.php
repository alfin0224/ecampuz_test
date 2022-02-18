<?php 

class M_login extends CI_Model{	

    public function get_tbl($halaman)
    {
        return $this->db->get('tbl_'.$halaman);
        $this->db->order_by('tbl_'.$halaman, "asc");
    }
    
	function cek_login($table,$where)
	{		
		return $this->db->get_where($table,$where);
	}
	function ambil($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	function insert_data($table, $data)
	{
		$this->db->insert($table, $data);
	}
	
}