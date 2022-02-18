<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('login');	
		$this->load->model('m_admin');
		$this->load->library('form_validation');
        if($this->session->userdata('status') != "login"){
			echo "<script>alert('Maaf, anda belum login / sesi anda sudah habis. Silahkan untuk login lagi!')</script>";
			redirect(base_url(""));
		}
	}

	public function instansi()
	{

		$data['instansi'] = $this->m_admin->get_tbl('instansi')->result();

		$this->load->view('template/header');
		$this->load->view('instansi', $data);
		$this->load->view('template/footer');
	}

    public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('tambah');
		$this->load->view('template/footer');
	}

    public function simpan()
	{
		$nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
		
		$object = array(
			'nama'  => $nama,
            'deskripsi' => $deskripsi
		);
		$this->m_admin->tambah('instansi', $object);

		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menambah Data'));
		redirect('admin','refresh');
	}

    public function ubah($id)
	{
        $id_instansi = decrypt_url($id);
        // var_dump($id_instansi);
        // exit(0);
        $data['instansi'] = $this->m_admin->get_tbl_where('instansi', 'id='.$id_instansi)->result();
		$this->load->view('template/header');
		$this->load->view('ubah', $data);
		$this->load->view('template/footer');
	}

    public function simpan_ubah($id){
		// var_dump($id);
		// exit(0);
		$id_instansi	= decrypt_url($id);
		$nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');

		$object = array(
			'nama' => $nama
		);
		$this->m_admin->ubah($id_instansi, 'instansi', $object);
		redirect('admin', 'refresh');
	}

	public function hapus($id){
		$id_instansi	= decrypt_url($id);
		// var_dump($id_regulasi);
		// exit(0);
		$this->m_admin->hapus($id_instansi, 'instansi');

		redirect('admin', 'refresh');
	}


}
