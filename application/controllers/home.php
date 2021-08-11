<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function _construct(){
    
	parent::__construct();
	}
	public function index(){
	   $data = $this->barang_model->tampil_data();
		//$data['produk'] = $this->barang_model->tampil_data();
		$this->load->view('form_home',array('data' => $data)); 
	//	echo "tt=".$data['nm_barang'];
		//die;
	}
		public function insert_barang()
		{
			$id_barang =$this->input->post('id_barang');
			$nm_barang =$this->input->post('nm_barang');
			$harga_barang =$this->input->post('harga_barang');
			$deskripsi =$this->input->post('deskripsi');
		 
		$data = array(
			'id_barang' =>$id_barang,
			'nm_barang' =>$nm_barang,
			'harga_barang' =>$harga_barang,
			'deskripsi' =>$deskripsi,
		);
		$ins = $this->barang_model->tambah_barang('produk', $data);
		if($ins >=1) {
			redirect ('form_home/index');
		}else{
			echo"Data gagal disimpan";
		}
		}
	
}

