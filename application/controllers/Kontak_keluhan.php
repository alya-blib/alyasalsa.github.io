<?php
class Kontak_keluhan extends CI_controller {
    function _construct(){
    parent::__construct();
    }

public function index()
{
    $data = $this->Keluhan_model->tampil_data();
	$this->load->view('view_kontak',array('data' => $data));
  //  $this->load->view('template/header');
    $this->load->view('template/footer');

	
}

public function contact()
{
    $data = $this->Keluhan_model->tampil_data();
	$this->load->view('view_kontak_1',array('data' => $data));
  //  $this->load->view('template/header');
    $this->load->view('template/footer');
	
}


public function tambah_aksi()
{
    $this->load->view('view_kontak');

   
}

public function insert_data()
{
	$id_pelanggan =$this->input->post('id_pelanggan');
    $nm_leungkap =$this->input->post('nm_lengkap');
    $email =$this->input->post('email');
    $pesan =$this->input->post('pesan');

    $data = array(
		'id_pelanggan' =>$id_pelanggan,
        'nm_leungkap' =>$nm_leungkap,
        'email' =>$email,
        'pesan' =>$pesan,
    );
$ins = $this->Keluhan_model->tambah_data('kontak', $data);
if($ins >=1) {
    redirect ('kontak_keluhan/contact');
}else{
    echo"Data gagal disimpan";
}
}
public function update(){
    $id_pelanggan      =$_POST['id_pelanggan'];
    $nm_leungkap   =$_POST['nm_leungkap'];
    $email   =$_POST['email'];
    $pesan      =$_POST['pesan'];

    $update_data =array(
        'id_pelanggan'       =>$id_pelanggan,
        'nm_leungkap'       =>$nm_leungkap,
        'email'    =>$email,
        'pesan'       =>$pesan
    );

    $where = array('id_pelanggan' =>$id_pelanggan);
    $ins = $this->keluhan_model->updatedata('kontak',$update_data,$where);
    if($ins >= 1){
    redirect('view_kontak/index');
}
}

// public function excel(){
//     $data['data'] = $this->tampil_data('alya')->result();
//     $data = $this->Keluhan_model->tampil_data();
//     $this->load->view('view_kontak',array('data' => $data));
//   //  $this->load->view('template/header');
//     $this->load->view('template/footer');

//     require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
//     require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php/Writer/Excel2007.php');
//     $object = new PHPExcel();

//     $object->getProperties()->setCreator("keluhan Management");
//     $object->getProperties()->setLastModifiedBy("keluhan Management");
//     $object->getProperties()->setTitle("Daftar keluhan");
//     $object->setActiveSheetIndex(0);

//     $object->getActiveSheet()->setCellValue('A1', 'Id');
//     $object->getActiveSheet()->setCellValue('B1', 'Nama');
//     $object->getActiveSheet()->setCellValue('C1', 'Email');
//     $object->getActiveSheet()->setCellValue('D1', 'Pesan');
//     quotemeta(str)// $object->getActiveSheet()->setCellValue('E1', 'Address');
//     // $object->getActiveSheet()->setCellValue('F1', 'No.HP');

//     $baris = 2;
//     $no = 1;
//     foreach ($data ['kotak_keluhan'] as $d) {
//         $object->getActiveSheet()->setCellValue('A' .$baris, $id_pelanggan);
//         $object->getActiveSheet()->setCellValue('B' .$baris, $d->nm_leungkap);
//         $object->getActiveSheet()->setCellValue('C' .$baris, $d->email);

//         $object->getActiveSheet()->setCellValue('D' .$baris, $d->pesan);
//         // $object->getActiveSheet()->setCellValue('E' .$baris, $l->visitor_address);
//         // $object->getActiveSheet()->setCellValue('F' .$baris, $l->visitor_hp);

//         $baris++;
//     }

//     $filename="Data_Keluhan".'.xlsx';
//     $object->getActiveSheet()->setTitle("Data keluhan");
//     header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//     header('Content-Disposition: attachment;filename"' .$filename. '"');
//     header('Cache-Control: max-age=0');

//     $witer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
//     $writer->save('php://output');

//     exit;


// }

}

