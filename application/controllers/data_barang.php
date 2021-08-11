<?php
class Data_barang extends CI_controller {
    function _construct(){
    parent::__construct();
    }

public function index()
{
    $data = $this->barang_model->tampil_data();
    $this->load->view('template/header_admin',array('data' => $data));
    $this->load->view('template/footer');
}
public function tambah_aksi()
{
    $this->load->view('form_tambah');

   
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
    redirect ('data_barang/index');
}else{
    echo"Data gagal disimpan";
}
}

public function edit_data ()
{
    $brg = $this->barang_model->editdata('produk', 'id_barang', $this->uri->segment(3));
    foreach ($brg AS $row){
    $data['id_barang'] =$row->id_barang;
    $data['nm_barang'] =$row->nm_barang;
    $data['harga_barang'] =$row->harga_barang;
    $data['deskripsi'] =$row->deskripsi;

    $this->load->view('form_edit', $data);
    $this->load->view('template/header_edit');
    $this->load->view('form_home');
    $this->load->view('template/footer');
}
}

public function update(){
    $id_barang      =$_POST['id_barang'];
    $nm_barang      =$_POST['nm_barang'];
    $harga_barang   =$_POST['harga_barang'];
    $deskripsi      =$_POST['deskripsi'];

    $update_data =array(
        'id_barang'       =>$id_barang,
        'nm_barang'       =>$nm_barang,
        'harga_barang'    =>$harga_barang,
        'deskripsi'       =>$deskripsi
    );

    $where = array('id_barang' =>$id_barang);
    $ins = $this->barang_model->updatedata('produk',$update_data,$where);
    if($ins >= 1){
    redirect('data_barang/index');
}
}

public function delete($id_barang)
{
    $where = array('id_barang' => $id_barang);
    $ins = $this->barang_model->deletedata( 'produk',$where);
    if($ins >= 1){
        echo"Data berhasil dihapus";
    }else{
        echo"data gagal dihapus";
    }
   
}

}