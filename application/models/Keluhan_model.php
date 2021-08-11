<?php

class Keluhan_model extends CI_Model{
    public function tampil_data(){
        $data = $this->db->query('select * from kontak');
        return $data->result_array();
		
		
    }
    public function tambah_data($tabelnama,$data)
	{
		$ins = $this->db->insert($tabelnama,$data);
		return $ins;
        }
    public function updatedata($tabelnama,$data,$where)
    {
        $ins = $this->db->update($tabelnama,$data,$where);
        return $ins;
    }
}