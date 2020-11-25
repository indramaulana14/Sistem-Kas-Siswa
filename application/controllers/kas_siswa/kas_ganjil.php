<?php 

class Kas_ganjil extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('kas_siswa/m_kas_ganjil');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect('bendahara/Login_bendahara/');
		}
	}

	function index(){
		$data['kas_ganjil'] = $this->m_kas_ganjil->tampil_data()->result();
		$this->load->view('kas_siswa/v_kas_ganjil',$data);
	}


	function tambah_kas_siswa(){
		$this->load->view('kas_siswa/v_input_kas_ganjil');
	}


	function aksi_kas_siswa(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$jul = $this->input->post('jul');
		$agu = $this->input->post('agu');
		$sep = $this->input->post('sep');
		$okt = $this->input->post('okt');
		$nov = $this->input->post('nov');
		$des = $this->input->post('des');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'jul' => $jul,
			'agu' => $agu,
			'sep' => $sep,
			'okt' => $okt,
			'nov' => $nov,
			'des' => $des,
			);

		$sql = $this->db->query("SELECT nis FROM kas_ganjil where nis='$nis'");
		$cek = $sql->num_rows();
		if ($cek > 0) {
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
			<strong>Gagal, </strong> NIS sudah ada silahkan masukan NIS yang belum terdaftar.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('kas_siswa/kas_ganjil/index');
				}else{
		$this->m_kas_ganjil->input_data($data,'kas_ganjil');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data siswa berhasil ditambahkan.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('kas_siswa/kas_ganjil/index');
		}
	}

	function hapus($nis){
		$where = array('nis' => $nis);
		$this->m_kas_ganjil->hapus_data($where,'kas_ganjil');
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data kas siswa berhasil dihapus.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('kas_siswa/kas_ganjil/index');
	}

	function edit($nis){
		$where = array('nis' => $nis);
		$data['kas_ganjil'] = $this->m_kas_ganjil->edit_data($where,'kas_ganjil')->result();
		$this->load->view('kas_siswa/v_edit_kas_ganjil',$data);
	}

	function update(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$jul = $this->input->post('jul');
		$agu = $this->input->post('agu');
		$sep = $this->input->post('sep');
		$okt = $this->input->post('okt');
		$nov = $this->input->post('nov');
		$des = $this->input->post('des');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'jul' => $jul,
			'agu' => $agu,
			'sep' => $sep,
			'okt' => $okt,
			'nov' => $nov,
			'des' => $des,
			);
		$where = array('nis' => $nis);
	
		$this->m_kas_ganjil->update_data($where,$data,'kas_ganjil');
		$this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data kas siswa berhasil diperbarui.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('kas_siswa/kas_ganjil/index');
	}

}