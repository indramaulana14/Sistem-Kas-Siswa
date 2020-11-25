<?php 

class Laporan_walikelas extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('kas_kelas/m_kas_kelas');
		$this->load->model('kas_siswa/m_kas_ganjil');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect('walikelas/login_walikelas/');
		}
	}

	function index(){
		$data['kas_kelas'] = $this->m_kas_kelas->tampil_data()->result();
		$data['kas_ganjil'] = $this->m_kas_ganjil->tampil_data()->result();
		$this->load->view('kas_kelas/v_laporan_wk',$data);
	}
}