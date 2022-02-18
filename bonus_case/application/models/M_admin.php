<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_admin extends CI_Model
{


    function __construct()
    {
        parent::__construct();
    }


    public function get_tbl($halaman)
    {
        return $this->db->get('tbl_'.$halaman);
        $this->db->order_by('tbl_'.$halaman, "asc");
    }

    function get_tbl_where($halaman, $where)
    {
        return $this->db->get_where('tbl_'.$halaman, $where);
    }

    function get_view_where($halaman, $where)
    {
        return $this->db->get_where('view_'.$halaman, $where);
    }
    
    function get_tbl_limit($halaman, $where, $nilai)
    {
        return $this->db->get_where('tbl_'.$halaman, $where);
        $this->db->limit($nilai);
    }

    function get_order_by($select, $table, $where, $kolom, $orderby, $nilai)
    {
        $this->db->select($select);
        $this->db->from('tbl_'.$table);
        $this->db->where($where);
        $this->db->order_by($kolom, $orderby);
        $this->db->limit($nilai);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_id($id, $halaman)
    {
        $this->db->where('id_'.$halaman, $id);
        return $this->db->get('tbl_'.$halaman);
    }

    public function tambah($halaman, $object)
    {
        $this->db->insert('tbl_'.$halaman, $object);
    }

    public function ubah($id, $halaman, $object)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_'.$halaman, $object);
    }

    public function get_tbl_id($table, $where)
    {
        $this->db->where($where);
        return $this->db->get('tbl_'.$table);
    }

    public function update_data($table, $where, $data)
    {
        $this->db->where($where);
        $this->db->update('tbl_'.$table, $data);
    }
    
    public function hapus($id, $halaman)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_'.$halaman);
    }

    public function hapus_data($table, $where)
    {
        $this->db->where($where);
        $this->db->delete('tbl_'.$table);
    }

    public function get_duatable($select, $table1, $table2, $join, $where, $order)
    {
        $this->db->select($select);
        $this->db->from($table1);
        $this->db->join($table2, $join);
        $this->db->where($where);
        $this->db->order_by($order, "asc");
        $query = $this->db->get();
        return $query->result();
    }


    //tambahan

    public function cek_pegawai($firstselect, $table1, $table2, $where){                   
        $this->db->select($firstselect);
        $this->db->from('tbl_'.$table1);
        $this->db->where($where);
        $this->db->get(); 
        $query1 = $this->db->last_query();

        $this->db->select($firstselect);
        $this->db->from('tbl_'.$table2);
        $this->db->where($where);
        $this->db->get(); 
        $query2 =  $this->db->last_query();

        $query = $this->db->query($query1." UNION ".$query2);

        return $query->result();
    }



    

    //tambahan

    public function get_tigatable($select, $table1, $table2, $table3, $join1, $join2, $where, $order){
        $this->db->select($select);    
        $this->db->from($table1);
        $this->db->join($table2, $join1);
        $this->db->join($table3, $join2);
        $this->db->where($where);
        $this->db->order_by($order, "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_empattable($select, $table1, $table2, $table3, $table4, $join1, $join2, $join3, $where, $order){
        $this->db->select($select);    
        $this->db->from($table1);
        $this->db->join($table2, $join1);
        $this->db->join($table3, $join2);
        $this->db->join($table4, $join3);
        $this->db->where($where);
        $this->db->order_by($order, "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_empattablelike($select, $table1, $table2, $table3, $table4, $join1, $join2, $join3, $where, $like, $order){
        $this->db->select($select);    
        $this->db->from($table1);
        $this->db->join($table2, $join1);
        $this->db->join($table3, $join2);
        $this->db->join($table4, $join3);
        $this->db->like($where, $like, 'after');
        $this->db->order_by($order, "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_limatable($select, $table1, $table2, $table3, $table4, $table5,  $join1, $join2, $join3, $join4, $where){
        $this->db->select($select);    
        $this->db->from($table1);
        $this->db->join($table2, $join1);
        $this->db->join($table3, $join2);
        $this->db->join($table4, $join3);
        $this->db->join($table5, $join4);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

}
