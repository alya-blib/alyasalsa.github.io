<?php

class Barang_model extends CI_Model{
    public function tampil_data(){
        $data = $this->db->query('select * from produk');
        return $data->result_array();
    }
    public function tambah_barang($tabelnama,$data)
	{
		$ins = $this->db->insert($tabelnama,$data);
		return $ins;
		}
		
	

    public function editdata($tabelnama,$dataedit,$data){
       $this->db->select('*');
       $this->db->where($dataedit,$data);
       $query = $this->db->get($tabelnama);
        return $query->result();
    }
    
    public function updatedata($tabelnama,$data,$where)
    {
        $ins = $this->db->update($tabelnama,$data,$where);
        return $ins;
    }

    public function deletedata($tabelnama,$data){
        $ins = $this->db->delete($tabelnama,$data);
        return $ins;
    }

    
}