<?php
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();	
		$this->load->helper('login');	
		$this->load->model('m_login');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function login(){
		$this->load->view('login');
	}
	
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("tbl_user", $where)->num_rows();
		if($cek > 0){

			$ambil_data 	= $this->m_login->ambil("tbl_user", $where)->row();
			$data_session  			= (array) $ambil_data; //convert jadi array
			if (isset($data_session['__ci_last_regenerate'])) {
				unset($data_session['__ci_last_regenerate']);
			}

			$data_session['status'] = "login";
			$this->session->set_userdata($data_session);

					redirect(base_url("admin"), 'refresh');

		}else{

			$_SESSION["message"] = 'Username/Password yang Anda Masukkan Salah';
			redirect(base_url(""),'refresh');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}

