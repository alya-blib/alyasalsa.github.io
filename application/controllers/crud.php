<?php
public function__construct(){
    parent::__construct();
    //load model admin 
    $this->load->model('admin');

    //pengecekan session, jika userdata (user_name) tidak sama dengan admin maka langsung redirect ke login
    if ($this->session->userdata('user_name') != "admin"){
        redirect('data_barang');
    }
}