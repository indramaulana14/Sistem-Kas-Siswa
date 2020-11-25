<?php 

class Tampil_siswa extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('kas_siswa/m_kas_ganjil');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect('siswa/Login_siswa/');
		}
	}

	function index(){
		$data['kas_ganjil'] = $this->m_kas_ganjil->tampil_data()->result();
		$this->load->view('siswa/v_kas_siswa',$data);
	}
}