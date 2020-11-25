<?php 


class Data_siswa extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('siswa/m_data_siswa');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect('admin/Login_admin/');
		}
	}

	function index(){
		$data['siswa'] = $this->m_data_siswa->tampil_data()->result();
		$this->load->view('siswa/v_data_siswa',$data);
	}

	function tambah(){
		$this->load->view('siswa/v_input_siswa');
	}

	function tambah_aksi(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
			);

		$sql = $this->db->query("SELECT nis FROM siswa where nis='$nis'");
		$cek = $sql->num_rows();
		if ($cek > 0) {
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
			<strong>Gagal, </strong> NIS sudah ada silahkan masukan NIS yang belum terdaftar.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('siswa/data_siswa/index');
				}else{
		$this->m_data_siswa->input_data($data,'siswa');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data siswa berhasil ditambahkan.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('siswa/data_siswa/index');
		}

		
		
	}

	function hapus($nis){
		$where = array('nis' => $nis);
		$this->m_data_siswa->hapus_data($where,'siswa');

		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data siswa berhasil dihapus.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('siswa/data_siswa/index');
	}

	function edit($nis){
		$where = array('nis' => $nis);
		$data['siswa'] = $this->m_data_siswa->edit_data($where,'siswa')->result();
		$this->load->view('siswa/v_edit_siswa',$data);
	}

	public function update(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
		);
	
		$where = array(
			'nis' => $nis
		);
	
		$this->m_data_siswa->update_data($where,$data,'siswa');
		$this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data siswa berhasil diedit.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('siswa/data_siswa/index');
	}

}