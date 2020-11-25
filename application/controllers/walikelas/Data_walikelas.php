<?php 


class Data_walikelas extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('walikelas/m_data_walikelas');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect('admin/Login_admin/');
		}
	}

	function index(){
		$data['walikelas'] = $this->m_data_walikelas->tampil_data()->result();
		$this->load->view('walikelas/v_data_walikelas',$data);
	}

	function tambah(){
		$this->load->view('walikelas/v_input_walikelas');
	}

	function tambah_aksi(){
		$id_walikelas = $this->input->post('id_walikelas');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'id_walikelas' => $id_walikelas,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
			);
		$sql = $this->db->query("SELECT id_walikelas FROM walikelas where id_walikelas='$id_walikelas'");
		$cek = $sql->num_rows();
		if ($cek > 0) {
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
			<strong>Gagal, </strong> ID Walikelas sudah ada silahkan masukan ID Walikelas yang belum terdaftar.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('walikelas/data_walikelas/index');
				}else{
		$this->m_data_walikelas->input_data($data,'walikelas');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data wali kelas berhasil ditambahkan.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('walikelas/data_walikelas/index');
		}
		
		
	}

	function hapus($id_walikelas){
		$where = array('id_walikelas' => $id_walikelas);
		$this->m_data_walikelas->hapus_data($where,'walikelas');
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data wali kelas berhasil dihapus.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('walikelas/data_walikelas/index');
	}

	function edit($id_walikelas){
		$where = array('id_walikelas' => $id_walikelas);
		$data['walikelas'] = $this->m_data_walikelas->edit_data($where,'walikelas')->result();
		$this->load->view('walikelas/v_edit_walikelas',$data);
	}

	function update(){
		$id_walikelas = $this->input->post('id_walikelas');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$data = array(
			'id_walikelas' => $id_walikelas,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
		);
	
		$where = array(
			'id_walikelas' => $id_walikelas
		);
	
		$this->m_data_walikelas->update_data($where,$data,'walikelas');
		$this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data wali kelas berhasil diedit.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('walikelas/data_walikelas/index');
	}

}