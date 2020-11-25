<?php 

class Kas_genap extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('kas/m_data_kas');
		$this->load->helper('url');

	}

	function index(){
		$data['kas'] = $this->m_data_kas->tampil_data()->result();
		$this->load->view('kas/v_data_kas',$data);
	}

	function tambah_kas_siswa(){
		$this->load->view('kas/v_input_kas_siswa');
	}

	function tambah_input_output(){
		$this->load->view('kas/v_input_output');
	}

	function aksi_kas_siswa(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$jan = $this->input->post('jan');
		$feb = $this->input->post('feb');
		$mar = $this->input->post('mar');
		$apr = $this->input->post('apr');
		$mei = $this->input->post('mei');
		$jun = $this->input->post('jun');
		$jumlah = $this->input->post('jumlah');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'jan' => $jan,
			'feb' => $feb,
			'mar' => $mar,
			'apr' => $apr,
			'mei' => $mei,
			'jun' => $jun,
			'jumlah' => $jumlah,
			'keterangan' => $keterangan,
			);
		$this->m_data_kas->input_data($data,'kas');
		redirect('kas/data_kas/index');
	}


	function edit($nis){
		$where = array('nis' => $nis);
		$data['kas'] = $this->m_data_kas->edit_data($where,'kas')->result();
		$this->load->view('kas/v_edit_kas',$data);
	}

	function update(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$jan = $this->input->post('jan');
		$feb = $this->input->post('feb');
		$mar = $this->input->post('mar');
		$apr = $this->input->post('apr');
		$mei = $this->input->post('mei');
		$jun = $this->input->post('jun');
		$jumlah = $this->input->post('jumlah');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'jan' => $jan,
			'feb' => $feb,
			'mar' => $mar,
			'apr' => $apr,
			'mei' => $mei,
			'jun' => $jun,
			'jumlah' => $jumlah,
			'keterangan' => $keterangan
			);
	
		$this->m_data_kas->update_data($where,$data,'kas');
		redirect('kas/data_kas/index');
	}

}