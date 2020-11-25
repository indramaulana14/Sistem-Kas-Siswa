<?php 

class Kas_kelas extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('kas_kelas/m_kas_kelas');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect('bendahara/Login_bendahara/');
		}
	}

	function index(){
		$data['kas_kelas'] = $this->m_kas_kelas->tampil_data()->result();
		$this->load->view('kas_kelas/v_kas_kelas',$data);
	}


	function tambah_kas_kelas(){
		$this->load->view('kas_kelas/v_input_kas_kelas');
	}


	function aksi_kas_kelas(){
		$id_rekap = $this->input->post('id_rekap');
		$total = $this->input->post('total');
		$tanggal = $this->input->post('tanggal');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_rekap' => $id_rekap,
			'total' => $total,
			'tanggal' => $tanggal,
			'keterangan' => $keterangan
			);

		$sql = $this->db->query("SELECT id_rekap FROM kas_kelas where id_rekap='$id_rekap'");
		$cek = $sql->num_rows();
		if ($cek > 0) {
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
			<strong>Gagal, </strong> ID Rekap sudah ada silahkan buat ID Rekap yang baru.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('kas_kelas/kas_kelas/index');
				}else{
		//insert db
		$this->m_kas_kelas->input_data($data,'kas_kelas');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data kas berhasil ditambahkan.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('kas_kelas/kas_kelas/index');
		}
	}

	function hapus($id_rekap){
		$where = array('id_rekap' => $id_rekap);
		$this->m_kas_kelas->hapus_data($where,'kas_kelas');
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data kas siswa berhasil dihapus.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('kas_kelas/kas_kelas/index');
	}

	function edit($id_rekap){
		$where = array('id_rekap' => $id_rekap);
		$data['kas_kelas'] = $this->m_kas_kelas->edit_data($where,'kas_kelas')->result();
		$this->load->view('kas_kelas/v_edit_kas_kelas',$data);
	}

	function update(){
		$id_rekap = $this->input->post('id_rekap');
		$total = $this->input->post('total');
		$tanggal = $this->input->post('tanggal');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_rekap' => $id_rekap,
			'total' => $total,
			'tanggal' => $tanggal,
			'keterangan' => $keterangan
			);
		$where = array('id_rekap' => $id_rekap);
	
		$this->m_kas_kelas->update_data($where,$data,'kas_kelas');
		$this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data kas berhasil diperbarui.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('kas_kelas/kas_kelas/index');
	}

}
