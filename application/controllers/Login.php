
l<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct () {
		parent::__construct();
		//load model admin
		$this->load->model('admin');
	}

	function index() {
		if($this->admin->logged_id())
		{
			//jika memang session suda terdaftar, maka redirect ke halaman crud(sesuaikan dengana halaman yang anda inginkan )
			redirect("data_barang");
		}else{

			//jika session belum terdaftar
			
			//set form validation 
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');

			//set message form validation
			$this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px"
			<div class="header"><b><i class="fa fa-exclamation-circle"></i> (field) </b> harus diisi</div></div>');

			//cek validasi 
			if ($this->form_validation->run() == TRUE) {

				//get data dari FORM
				$username = $this->input->post("username", TRUE);
				$password = MD5($this->input->post("password", TRUE));

				//checking data via model
				$checking = $this->admin->check_login('user', array('username' => $username), array('password' => $password));
				
				//jika ditemukan, maka create session 
				if ($checking !=FALSE) {
					foreach ($checking as $apps) {

						$session_data = array(
							'user_id' => $apps->id_user,
							'username' => $apps->username,
							'password' => $apps->password,
						);
						//set session userdata
						$this->session->set_userdata($session_data);

						redirect('data_barang');
					}
				}else{

					$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
					<div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau salah!</div></div>';
					$this->load->view('view_login', $data);
				}
			}else{
				$this->load->view('view_login');
			}
	}
}

public function logout() {
	$this->session->sess_destroy();
	redirect('login');
}
}
