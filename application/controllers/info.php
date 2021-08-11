<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
	function _construct(){
    
	parent::__construct();
	}
	public function index(){
		$this->load->view('view_info'); 
	//	echo "tt=".$data['nm_barang'];
		//die;
    }
}