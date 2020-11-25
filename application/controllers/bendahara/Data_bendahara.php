<?php 


class Data_bendahara extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('bendahara/m_data_bendahara');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect('admin/Login_admin/');
		}
	}

	function index(){
		$data['bendahara'] = $this->m_data_bendahara->tampil_data()->result();
		$this->load->view('bendahara/v_data_bendahara',$data);
	}

	function tambah(){
		$this->load->view('bendahara/v_input_bendahara');
	}

	function tambah_aksi(){
		$id_bendahara = $this->input->post('id_bendahara');
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'id_bendahara' => $id_bendahara,
			'nis' => $nis,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
			);

		$sql = $this->db->query("SELECT id_bendahara FROM bendahara where id_bendahara='$id_bendahara'");
		$cek = $sql->num_rows();
		if ($cek > 0) {
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
			<strong>Gagal, </strong> ID Bendahara sudah ada silahkan buat ID Bendahara baru.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('bendahara/data_bendahara/index');
				}else{
		$this->m_data_bendahara->input_data($data,'bendahara');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
			<strong>Selamat!</strong> Data Bendahara berhasil ditambahkan.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('bendahara/data_bendahara/index');
		}
	}

	function hapus($id_bendahara){
		$where = array('id_bendahara' => $id_bendahara);
		$this->m_data_bendahara->hapus_data($where,'bendahara');
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
			<strong>Selamat! </strong> Data Bendahara berhasil dihapus.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('bendahara/data_bendahara/index');
	}

	function edit($id_bendahara){
		$where = array('id_bendahara' => $id_bendahara);
		$data['bendahara'] = $this->m_data_bendahara->edit_data($where,'bendahara')->result();
		$this->load->view('bendahara/v_edit_bendahara',$data);
	}

	function update(){
		$id_bendahara = $this->input->post('id_bendahara');
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$data = array(
			'id_bendahara' => $id_bendahara,
			'nis' => $nis,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
		);
	
		$where = array('id_bendahara' => $id_bendahara
		);
	
		$this->m_data_bendahara->update_data($where,$data,'bendahara');
		$this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
			<strong>Selamat</strong> Data Bendahara berhasil diedit.
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
		redirect('bendahara/data_bendahara/index');
	}

}